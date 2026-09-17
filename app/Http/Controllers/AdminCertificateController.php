<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class AdminCertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::with('user')->get();
        return view('admin.certificates', compact('certificates'));
    }
}
