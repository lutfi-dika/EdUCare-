<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use App\Models\Progress;
use App\Models\Material;
use App\Models\Quiz;

class TeacherCalendarController extends Controller
{
    public function index()
    {
        $events = [];

        $quizResults = QuizResult::with('quiz.material', 'user')
            ->latest()
            ->take(50)
            ->get();

        foreach ($quizResults as $qr) {
            $events[] = [
                'title' => ($qr->user->name ?? 'Siswa') . ' mengerjakan ' . ($qr->quiz->title ?? 'Quiz'),
                'date' => $qr->completed_at ? $qr->completed_at->format('Y-m-d') : $qr->created_at->format('Y-m-d'),
                'type' => 'quiz',
                'color' => $qr->passed ? '#16A34A' : '#DC2626',
            ];
        }

        $progresses = Progress::with('material', 'user')
            ->latest()
            ->take(50)
            ->get();

        foreach ($progresses as $p) {
            $events[] = [
                'title' => ($p->user->name ?? 'Siswa') . ' menyelesaikan ' . ($p->material->title ?? 'Materi'),
                'date' => $p->completed_at ? $p->completed_at->format('Y-m-d') : $p->created_at->format('Y-m-d'),
                'type' => 'progress',
                'color' => '#2563EB',
            ];
        }

        $materials = Material::where('status', 'published')->latest('created_at')->take(20)->get();
        foreach ($materials as $m) {
            $events[] = [
                'title' => 'Materi "' . $m->title . '" dipublikasikan',
                'date' => $m->created_at->format('Y-m-d'),
                'type' => 'material',
                'color' => '#8B5CF6',
            ];
        }

        usort($events, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return view('teacher.calendar', compact('events'));
    }
}
