<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Material;
use Illuminate\Http\Request;

class TeacherQuizController extends Controller
{
    public function index()
    {
        $userId = session('user.id');
        $quizzes = Quiz::with('material')->where('user_id', $userId)->get();
        return view('teacher.quizzes', compact('quizzes'));
    }

    public function create()
    {
        $userId = session('user.id');
        $materials = Material::where('user_id', $userId)->get();
        return view('teacher.quiz-create', compact('materials'));
    }

    public function store(Request $request)
    {
        $userId = session('user.id');

        $request->validate([
            'title' => 'required|string|max:255',
            'material_id' => 'required|exists:materials,id',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:5|max:120',
            'passing_score' => 'required|integer|min:0|max:100',
        ]);

        Material::where('id', $request->material_id)->where('user_id', $userId)->firstOrFail();

        Quiz::create([
            'user_id' => $userId,
            'material_id' => $request->material_id,
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'passing_score' => $request->passing_score,
            'status' => 'draft',
        ]);

        return redirect('/teacher/quizzes')->with('success', 'Quiz berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $userId = session('user.id');
        $quiz = Quiz::where('id', $id)->where('user_id', $userId)->firstOrFail();
        $materials = Material::where('user_id', $userId)->get();
        return view('teacher.quiz-edit', compact('quiz', 'materials'));
    }

    public function update(Request $request, $id)
    {
        $userId = session('user.id');
        $quiz = Quiz::where('id', $id)->where('user_id', $userId)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'material_id' => 'required|exists:materials,id',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:5|max:120',
            'passing_score' => 'required|integer|min:0|max:100',
            'status' => 'required|in:draft,published',
        ]);

        Material::where('id', $request->material_id)->where('user_id', $userId)->firstOrFail();

        $quiz->update([
            'title' => $request->title,
            'material_id' => $request->material_id,
            'description' => $request->description,
            'duration' => $request->duration,
            'passing_score' => $request->passing_score,
            'status' => $request->status,
        ]);

        return redirect('/teacher/quizzes')->with('success', 'Quiz berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $userId = session('user.id');
        $quiz = Quiz::where('id', $id)->where('user_id', $userId)->firstOrFail();
        $quiz->delete();
        return redirect('/teacher/quizzes')->with('success', 'Quiz berhasil dihapus.');
    }
}
