<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Progress;
use App\Models\QuizResult;

class TeacherStudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')
            ->withCount(['progress', 'quizResults'])
            ->get()
            ->map(function ($student) {
                $avgScore = QuizResult::where('user_id', $student->id)->avg('score') ?? 0;
                $progressAvg = Progress::where('user_id', $student->id)->avg('percentage') ?? 0;
                return [
                    'id' => $student->id,
                    'name' => $student->name,
                    'email' => $student->email,
                    'progress' => round($progressAvg),
                    'score' => round($avgScore),
                    'status' => 'Aktif',
                ];
            });

        return view('teacher.students', compact('students'));
    }
}
