<?php

namespace App\Http\Controllers;

use App\Models\Material;

class AdminMaterialController extends Controller
{
    public function index()
    {
        $materials = Material::with('category')->get();
        return view('admin.materials', compact('materials'));
    }
}
