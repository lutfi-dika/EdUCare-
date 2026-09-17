<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Material;
use App\Models\Quiz;
use App\Models\Certificate;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        $user = session('user');

        $stats = [
            'total_users' => User::count(),
            'total_guru' => User::where('role', 'teacher')->count(),
            'total_siswa' => User::where('role', 'student')->count(),
            'total_materi' => Material::count(),
            'total_quiz' => Quiz::count(),
            'total_sertifikat' => Certificate::count(),
            'total_kategori' => Category::count(),
        ];

        return view('admin.index', compact('user', 'stats'));
    }
}
