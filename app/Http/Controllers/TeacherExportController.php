<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\QuizResult;
use App\Models\Progress;
use App\Models\Material;
use App\Models\Quiz;

class TeacherExportController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->get()->map(function ($student) {
            $avgScore = round(QuizResult::where('user_id', $student->id)->avg('score') ?? 0);
            $progressAvg = round(Progress::where('user_id', $student->id)->avg('percentage') ?? 0);
            $quizCount = QuizResult::where('user_id', $student->id)->count();
            $completedMaterials = Progress::where('user_id', $student->id)->where('completed', true)->count();

            return [
                'name' => $student->name,
                'email' => $student->email,
                'progress' => $progressAvg,
                'score' => $avgScore,
                'quiz_count' => $quizCount,
                'completed_materials' => $completedMaterials,
            ];
        });

        return view('teacher.export', compact('students'));
    }

    public function downloadCsv()
    {
        $students = User::where('role', 'student')->get()->map(function ($student) {
            $avgScore = round(QuizResult::where('user_id', $student->id)->avg('score') ?? 0);
            $progressAvg = round(Progress::where('user_id', $student->id)->avg('percentage') ?? 0);
            $quizCount = QuizResult::where('user_id', $student->id)->count();
            $completedMaterials = Progress::where('user_id', $student->id)->where('completed', true)->count();

            return [
                'Nama' => $student->name,
                'Email' => $student->email,
                'Progress (%)' => $progressAvg,
                'Rata-rata Nilai' => $avgScore,
                'Quiz Dikerjakan' => $quizCount,
                'Materi Selesai' => $completedMaterials,
            ];
        });

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="laporan_siswa_' . date('Y-m-d') . '.csv"',
        ];

        $callback = function () use ($students) {
            $file = fopen('php://output', 'w');
            if ($students->count() > 0) {
                fputcsv($file, array_keys($students->first()));
                foreach ($students as $row) {
                    fputcsv($file, $row);
                }
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
