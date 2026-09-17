<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\Notification;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with('material')->where('status', 'published')->get();
        return view('quiz.index', compact('quizzes'));
    }

    public function show($id)
    {
        $quiz = Quiz::with('material')->findOrFail($id);
        $questions = $quiz->questions;

        return view('quiz.show', compact('quiz', 'questions'));
    }

    public function result(Request $request, $id)
    {
        $quiz = Quiz::with('material')->findOrFail($id);
        $questions = $quiz->questions;

        $correctAnswers = 0;
        $totalQuestions = $questions->count();

        foreach ($questions as $index => $question) {
            $userAnswer = $request->input("answer_{$index}");
            if ($userAnswer && strtoupper($userAnswer) === strtoupper($question->correct_answer)) {
                $correctAnswers++;
            }
        }

        $wrongAnswers = $totalQuestions - $correctAnswers;
        $score = $totalQuestions > 0 ? round(($correctAnswers / $totalQuestions) * 100) : 0;
        $passed = $score >= $quiz->passing_score;

        $userId = session('user.id');

        $quizResult = QuizResult::create([
            'user_id' => $userId,
            'quiz_id' => $quiz->id,
            'score' => $score,
            'correct_answers' => $correctAnswers,
            'wrong_answers' => $wrongAnswers,
            'passed' => $passed,
            'completed_at' => now(),
        ]);

        Notification::create([
            'user_id' => $userId,
            'title' => 'Quiz Selesai',
            'message' => 'Kamu menyelesaikan quiz "' . $quiz->title . '" dengan skor ' . $score . '.',
            'type' => 'quiz_result',
            'link' => '/quiz/' . $quiz->id,
        ]);

        if ($passed) {
            Notification::create([
                'user_id' => $userId,
                'title' => 'Quiz Lulus! 🎉',
                'message' => 'Selamat! Kamu lulus quiz "' . $quiz->title . '" dengan skor ' . $score . '.',
                'type' => 'quiz_passed',
                'link' => '/quiz/' . $quiz->id,
            ]);
        }

        return view('quiz.result', compact('quiz', 'totalQuestions', 'correctAnswers', 'wrongAnswers', 'score', 'passed'));
    }
}
