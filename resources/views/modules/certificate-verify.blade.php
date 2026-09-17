@extends('layouts.dashboard')

@section('title', 'Verifikasi Sertifikat - EduCare')
@section('page-title', 'Verifikasi Sertifikat')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-2xl mx-auto">

    {{-- Header --}}
    <div class="text-center mb-8">
        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-[#EFF6FF] dark:bg-[#2563EB]/10 flex items-center justify-center">
            <svg class="w-8 h-8 text-[#2563EB] dark:text-[#60a5fa]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
        </div>
        <h1 class="text-2xl font-bold dark:text-[#ededed]">Verifikasi Sertifikat</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Nomor: <strong>{{ $number }}</strong></p>
    </div>

    {{-- Verification Result --}}
    <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden">

        @if($cert)
            {{-- Valid --}}
            <div class="bg-green-50 dark:bg-green-900/10 border-b border-green-200 dark:border-green-800/30 p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h2 class="text-xl font-bold text-green-700 dark:text-green-400">Sertifikat Valid</h2>
                <p class="text-sm text-green-600 dark:text-green-300 mt-1">Sertifikat ini benar dan dikeluarkan oleh EduCare.</p>
            </div>

            <div class="p-6 space-y-4">
                <div class="flex items-center justify-between py-3 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Nomor Sertifikat</span>
                    <span class="text-sm font-semibold dark:text-[#ededed]">{{ $cert['certificate_number'] }}</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Nama Penerima</span>
                    <span class="text-sm font-semibold dark:text-[#ededed]">{{ $cert['user_name'] }}</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Course</span>
                    <span class="text-sm font-semibold dark:text-[#ededed]">{{ $cert['course_name'] }}</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Score</span>
                    <span class="text-sm font-semibold text-green-600 dark:text-green-400">{{ $cert['score'] }}%</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Tanggal Dikeluarkan</span>
                    <span class="text-sm font-semibold dark:text-[#ededed]">{{ $cert['issued_at'] }}</span>
                </div>
                <div class="flex items-center justify-between py-3">
                    <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Status</span>
                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Valid</span>
                </div>
            </div>

            <div class="px-6 pb-6">
                <a href="{{ url('/certificates/module/' . $cert['id']) }}" class="block w-full py-3 text-center bg-[#2563EB] text-white text-sm font-semibold rounded-xl hover:bg-[#1d4ed8] transition-colors">
                    Lihat Sertifikat
                </a>
            </div>

        @else
            {{-- Invalid --}}
            <div class="bg-red-50 dark:bg-red-900/10 border-b border-red-200 dark:border-red-800/30 p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                    <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h2 class="text-xl font-bold text-red-700 dark:text-red-400">Sertifikat Tidak Ditemukan</h2>
                <p class="text-sm text-red-600 dark:text-red-300 mt-1">Nomor sertifikat <strong>{{ $number }}</strong> tidak valid atau belum dikeluarkan.</p>
            </div>

            <div class="p-6 text-center">
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-4">Pastikan nomor sertifikat yang dimasukkan benar.</p>
                <a href="{{ url('/certificates/module') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-[#2563EB] text-white text-sm font-semibold rounded-xl hover:bg-[#1d4ed8] transition-colors">
                    Lihat Sertifikat Saya
                </a>
            </div>
        @endif

    </div>

</div>
@endsection
