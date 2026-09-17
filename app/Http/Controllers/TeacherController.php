<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Quiz;
use App\Models\User;
use App\Models\QuizResult;
use App\Models\Progress;
use App\Models\Category;

class TeacherController extends Controller
{
    public function index()
    {
        $user = session('user');

        $totalQuizResult = QuizResult::count();
        $rataRata = $totalQuizResult > 0 ? round(QuizResult::avg('score')) : 0;

        $stats = [
            'total_materi' => Material::where('status', 'published')->count(),
            'total_quiz' => Quiz::where('status', 'published')->count(),
            'total_siswa' => User::where('role', 'student')->count(),
            'rata_rata_nilai' => $rataRata,
        ];

        $recentMaterials = Material::with('category')
            ->where('status', 'published')
            ->latest()
            ->take(6)
            ->get()
            ->map(function ($m) {
                $avgProgress = Progress::where('material_id', $m->id)->avg('percentage') ?? 0;
                return [
                    'id' => $m->id,
                    'title' => $m->title,
                    'category' => $m->category->name ?? '',
                    'difficulty' => ucfirst($m->difficulty),
                    'icon' => $m->icon,
                    'description' => $m->description,
                    'avg_progress' => round($avgProgress),
                ];
            });

        $recentQuizzes = Quiz::with('material')
            ->where('status', 'published')
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($q) {
                $totalTaken = QuizResult::where('quiz_id', $q->id)->count();
                $avgScore = QuizResult::where('quiz_id', $q->id)->avg('score') ?? 0;
                return [
                    'id' => $q->id,
                    'title' => $q->title,
                    'material' => $q->material->title ?? '',
                    'total_taken' => $totalTaken,
                    'avg_score' => round($avgScore),
                ];
            });

        return view('teacher.index', compact('user', 'stats', 'recentMaterials', 'recentQuizzes'));
    }
}
