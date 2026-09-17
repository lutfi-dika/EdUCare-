<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class AdminQuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with('material')->get();
        return view('admin.quizzes', compact('quizzes'));
    }
}
