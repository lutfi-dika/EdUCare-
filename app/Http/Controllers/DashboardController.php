<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Quiz;
use App\Models\Progress;
use App\Models\QuizResult;
use App\Models\Certificate;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $userId = session('user.id');
        $tab = $request->get('tab', 'modul');

        $stats = [
            'total_materi' => Material::where('status', 'published')->count(),
            'materi_selesai' => Progress::where('user_id', $userId)->where('completed', true)->count(),
            'quiz_selesai' => QuizResult::where('user_id', $userId)->count(),
            'rata_rata_nilai' => round(QuizResult::where('user_id', $userId)->avg('score') ?? 0),
            'total_sertifikat' => Certificate::where('user_id', $userId)->count(),
            'total_video' => Material::where('status', 'published')->whereNotNull('video_url')->count(),
        ];

        // Module system stats
        $moduleProgress = session('module_progress', []);
        $quizResults = session('quiz_results', []);
        $courses = ModuleController::getCourses();

        $moduleStats = [
            'total_courses' => count($courses),
            'total_lessons' => collect($courses)->sum('total_lessons'),
            'completed_lessons' => 0,
            'courses_completed' => 0,
            'quizzes_passed' => count(array_filter($quizResults, fn($r) => $r['passed'] ?? false)),
        ];

        foreach ($courses as $course) {
            $courseCompleted = 0;
            $courseTotal = 0;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        $courseTotal++;
                        if (isset($moduleProgress[$course['id']][$lesson['id']])) {
                            $courseCompleted++;
                            $moduleStats['completed_lessons']++;
                        }
                    }
                }
            }
            if ($courseTotal > 0 && $courseCompleted === $courseTotal) {
                $moduleStats['courses_completed']++;
            }
        }

        $recentMaterials = Material::with('category', 'progressRecords')
            ->where('status', 'published')
            ->get()
            ->map(function ($m) use ($userId) {
                $prog = $m->progressRecords->where('user_id', $userId)->first();
                return [
                    'id' => $m->id,
                    'title' => $m->title,
                    'category' => $m->category->name ?? '',
                    'category_slug' => $m->category->slug ?? '',
                    'progress' => $prog ? $prog->percentage : 0,
                    'difficulty' => ucfirst($m->difficulty),
                    'icon' => $m->icon,
                    'video_url' => $m->video_url,
                    'description' => $m->description,
                ];
            });

        $quizzes = Quiz::with('material')->where('status', 'published')->get();
        $certificates = Certificate::where('user_id', $userId)->get();
        $videos = Material::where('status', 'published')->whereNotNull('video_url')->with('category')->get();

        $moduleQuizzes = [];
        foreach ($courses as $course) {
            if (isset($course['quiz'])) {
                $courseQuizResult = $quizResults[$course['id']] ?? null;
                $moduleQuizzes[] = [
                    'course_id' => $course['id'],
                    'title' => $course['quiz']['title'],
                    'description' => $course['quiz']['description'],
                    'total_questions' => count($course['quiz']['questions']),
                    'duration' => $course['quiz']['duration'],
                    'passing_score' => $course['quiz']['passing_score'],
                    'color' => $course['color'],
                    'status' => $courseQuizResult ? ($courseQuizResult['passed'] ? 'passed' : 'failed') : 'not_attempted',
                    'score' => $courseQuizResult['score'] ?? null,
                    'completed_at' => $courseQuizResult['completed_at'] ?? null,
                ];
            }
        }

        return view('dashboard.index', [
            'user' => session('user'),
            'stats' => $stats,
            'moduleStats' => $moduleStats,
            'recentMaterials' => $recentMaterials,
            'quizzes' => $quizzes,
            'moduleQuizzes' => $moduleQuizzes,
            'certificates' => $certificates,
            'videos' => $videos,
            'tab' => $tab,
        ]);
    }
}
