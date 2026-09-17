<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeacherMaterialController extends Controller
{
    public function index()
    {
        $userId = session('user.id');
        $materials = Material::with('category')->where('user_id', $userId)->get();
        return view('teacher.materials', compact('materials'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('teacher.material-create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'difficulty' => 'required|in:beginner,intermediate,advanced',
        ]);

        Material::create([
            'user_id' => session('user.id'),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'content' => $request->content,
            'difficulty' => $request->difficulty,
            'status' => 'draft',
        ]);

        return redirect('/teacher/materials')->with('success', 'Materi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $material = Material::where('id', $id)->where('user_id', session('user.id'))->firstOrFail();
        $categories = Category::all();
        return view('teacher.material-edit', compact('material', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $material = Material::where('id', $id)->where('user_id', session('user.id'))->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'difficulty' => 'required|in:beginner,intermediate,advanced',
            'status' => 'required|in:draft,published',
        ]);

        $material->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'difficulty' => $request->difficulty,
            'status' => $request->status,
        ]);

        return redirect('/teacher/materials')->with('success', 'Materi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Material::where('id', $id)->where('user_id', session('user.id'))->firstOrFail()->delete();
        return redirect('/teacher/materials')->with('success', 'Materi berhasil dihapus.');
    }
}
