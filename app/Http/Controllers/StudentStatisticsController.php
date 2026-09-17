<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\Progress;
use App\Models\Material;

class StudentStatisticsController extends Controller
{
    public function index()
    {
        $userId = session('user.id');

        $quizResults = QuizResult::with('quiz.material')
            ->where('user_id', $userId)
            ->latest('completed_at')
            ->get()
            ->map(function ($qr) {
                return [
                    'quiz_title' => $qr->quiz->title ?? '-',
                    'material' => $qr->quiz->material->title ?? '-',
                    'score' => $qr->score,
                    'passed' => $qr->passed,
                    'correct' => $qr->correct_answers,
                    'wrong' => $qr->wrong_answers,
                    'date' => $qr->completed_at ? $qr->completed_at->format('d M Y') : '-',
                ];
            });

        $totalQuizzes = $quizResults->count();
        $passedQuizzes = $quizResults->where('passed', true)->count();
        $avgScore = $totalQuizzes > 0 ? round($quizResults->avg('score')) : 0;

        $materialProgress = Material::where('status', 'published')->get()->map(function ($m) use ($userId) {
            $prog = Progress::where('user_id', $userId)->where('material_id', $m->id)->first();
            return [
                'title' => $m->title,
                'category' => $m->category->name ?? '',
                'progress' => $prog ? $prog->percentage : 0,
                'completed' => $prog ? $prog->completed : false,
            ];
        });

        $completedMaterials = $materialProgress->where('completed', true)->count();
        $totalMaterials = $materialProgress->count();

        // Module system stats
        $moduleProgress = session('module_progress', []);
        $quizModuleResults = session('quiz_results', []);
        $courses = ModuleController::getCourses();

        $moduleStats = [
            'total_courses' => count($courses),
            'total_lessons' => 0,
            'completed_lessons' => 0,
            'courses_completed' => 0,
            'quizzes_passed' => count(array_filter($quizModuleResults, fn($r) => $r['passed'] ?? false)),
            'course_progress' => [],
        ];

        foreach ($courses as $course) {
            $courseCompleted = 0;
            $courseTotal = 0;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        $courseTotal++;
                        $moduleStats['total_lessons']++;
                        if (isset($moduleProgress[$course['id']][$lesson['id']])) {
                            $courseCompleted++;
                            $moduleStats['completed_lessons']++;
                        }
                    }
                }
            }
            $percentage = $courseTotal > 0 ? round(($courseCompleted / $courseTotal) * 100) : 0;
            $moduleStats['course_progress'][] = [
                'id' => $course['id'],
                'title' => $course['title'],
                'category' => $course['category'],
                'color' => $course['color'],
                'total' => $courseTotal,
                'completed' => $courseCompleted,
                'percentage' => $percentage,
            ];
            if ($courseTotal > 0 && $courseCompleted === $courseTotal) {
                $moduleStats['courses_completed']++;
            }
        }

        return view('student.statistics', compact(
            'quizResults', 'totalQuizzes', 'passedQuizzes', 'avgScore',
            'materialProgress', 'completedMaterials', 'totalMaterials',
            'moduleStats'
        ));
    }
}
