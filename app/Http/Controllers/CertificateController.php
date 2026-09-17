<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        $userId = session('user.id');
        $certificates = Certificate::where('user_id', $userId)->get();

        return view('certificates.index', compact('certificates'));
    }
}
