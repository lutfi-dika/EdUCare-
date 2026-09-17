<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\User;
use App\Models\Material;

class TeacherStatisticsController extends Controller
{
    public function index()
    {
        $user = session('user');

        $quizzes = Quiz::with('material')->where('status', 'published')->get()->map(function ($quiz) {
            $results = QuizResult::where('quiz_id', $quiz->id);
            $totalTaken = (clone $results)->count();
            $avgScore = $totalTaken > 0 ? round((clone $results)->avg('score')) : 0;
            $passed = (clone $results)->where('passed', true)->count();
            $failed = $totalTaken - $passed;

            return [
                'id' => $quiz->id,
                'title' => $quiz->title,
                'material' => $quiz->material->title ?? '-',
                'total_taken' => $totalTaken,
                'avg_score' => $avgScore,
                'passed' => $passed,
                'failed' => $failed,
                'passing_score' => $quiz->passing_score,
            ];
        });

        $totalStudents = User::where('role', 'student')->count();
        $totalQuizResults = QuizResult::count();
        $overallAvg = $totalQuizResults > 0 ? round(QuizResult::avg('score')) : 0;
        $totalPassed = QuizResult::where('passed', true)->count();
        $passRate = $totalQuizResults > 0 ? round(($totalPassed / $totalQuizResults) * 100) : 0;

        $studentScores = User::where('role', 'student')->get()->map(function ($student) {
            $avgScore = round(QuizResult::where('user_id', $student->id)->avg('score') ?? 0);
            $quizCount = QuizResult::where('user_id', $student->id)->count();
            return [
                'name' => $student->name,
                'email' => $student->email,
                'avg_score' => $avgScore,
                'quiz_count' => $quizCount,
            ];
        })->sortByDesc('avg_score')->values();

        return view('teacher.statistics', compact(
            'quizzes', 'totalStudents', 'overallAvg', 'passRate',
            'totalQuizResults', 'studentScores'
        ));
    }
}
