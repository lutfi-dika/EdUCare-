<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Progress;

class ProgressController extends Controller
{
    public function index()
    {
        $userId = session('user.id');

        $materials = Material::with('category', 'progressRecords')
            ->where('status', 'published')
            ->get()
            ->map(function ($m) use ($userId) {
                $prog = $m->progressRecords->where('user_id', $userId)->first();
                return [
                    'id' => $m->id,
                    'title' => $m->title,
                    'category' => $m->category->name ?? '',
                    'progress' => $prog ? $prog->percentage : 0,
                    'completed' => $prog ? $prog->completed : false,
                ];
            });

        $completedCount = $materials->where('completed', true)->count();
        $totalCount = $materials->count();
        $overallProgress = $totalCount > 0 ? round(($completedCount / $totalCount) * 100) : 0;

        return view('progress.index', compact('overallProgress', 'materials'));
    }

    public function start($materialId)
    {
        $userId = session('user.id');
        if (!$userId) return redirect('/login');

        Progress::updateOrCreate(
            ['user_id' => $userId, 'material_id' => $materialId],
            ['percentage' => 10, 'completed' => false]
        );

        return back()->with('success', 'Materi berhasil dimulai!');
    }

    public function complete($materialId)
    {
        $userId = session('user.id');
        if (!$userId) return redirect('/login');

        Progress::updateOrCreate(
            ['user_id' => $userId, 'material_id' => $materialId],
            ['percentage' => 100, 'completed' => true, 'completed_at' => now()]
        );

        return back()->with('success', 'Materi berhasil diselesaikan!');
    }
}
