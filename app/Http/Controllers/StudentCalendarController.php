<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use App\Models\Progress;
use App\Models\Material;

class StudentCalendarController extends Controller
{
    public function index()
    {
        $userId = session('user.id');
        $events = [];

        // Legacy quiz results
        $quizResults = QuizResult::with('quiz.material')
            ->where('user_id', $userId)
            ->latest()
            ->get();

        foreach ($quizResults as $qr) {
            $events[] = [
                'title' => 'Quiz: ' . ($qr->quiz->title ?? 'Quiz'),
                'date' => $qr->completed_at ? $qr->completed_at->format('Y-m-d') : $qr->created_at->format('Y-m-d'),
                'type' => 'quiz',
                'color' => $qr->passed ? '#16A34A' : '#DC2626',
            ];
        }

        // Legacy material progress
        $progresses = Progress::with('material')
            ->where('user_id', $userId)
            ->latest()
            ->get();

        foreach ($progresses as $p) {
            $events[] = [
                'title' => 'Materi: ' . ($p->material->title ?? 'Materi'),
                'date' => $p->completed_at ? $p->completed_at->format('Y-m-d') : $p->created_at->format('Y-m-d'),
                'type' => 'progress',
                'color' => $p->completed ? '#16A34A' : '#2563EB',
            ];
        }

        // Module lesson completions
        $moduleProgress = session('module_progress', []);
        $courses = ModuleController::getCourses();
        $courseMap = [];
        foreach ($courses as $course) {
            $courseMap[$course['id']] = $course;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        if (isset($moduleProgress[$course['id']][$lesson['id']])) {
                            $completedAt = $moduleProgress[$course['id']][$lesson['id']]['completed_at'] ?? now()->format('Y-m-d');
                            $events[] = [
                                'title' => 'Lesson: ' . $lesson['title'],
                                'date' => $completedAt,
                                'type' => 'module_lesson',
                                'color' => $course['color'] ?? '#2563EB',
                            ];
                        }
                    }
                }
            }
        }

        // Module quiz results
        $quizModuleResults = session('quiz_results', []);
        foreach ($quizModuleResults as $courseId => $result) {
            if (isset($courseMap[$courseId])) {
                $events[] = [
                    'title' => 'Module Quiz: ' . $courseMap[$courseId]['title'],
                    'date' => $result['completed_at'] ?? now()->format('Y-m-d'),
                    'type' => 'module_quiz',
                    'color' => ($result['passed'] ?? false) ? '#16A34A' : '#F59E0B',
                ];
            }
        }

        usort($events, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return view('student.calendar', compact('events'));
    }
}
