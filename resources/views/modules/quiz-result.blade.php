@extends('layouts.dashboard')

@section('title', 'Hasil Quiz - ' . $course['title'] . ' - EduCare')
@section('page-title', $course['title'])

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-4xl mx-auto">

    {{-- Result Card --}}
    <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-8 text-center mb-8">

        {{-- Icon --}}
        @if($passed)
            <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                <svg class="w-10 h-10 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <h1 class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">Selamat! Lulus</h1>
            <p class="text-[#64748B] dark:text-[#a3a3a3] mb-6">Kamu berhasil menyelesaikan quiz ini!</p>
        @else
            <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                <svg class="w-10 h-10 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <h1 class="text-3xl font-bold text-red-600 dark:text-red-400 mb-2">Belum Lulus</h1>
            <p class="text-[#64748B] dark:text-[#a3a3a3] mb-6">Jangan menyerah! Coba lagi ya.</p>
        @endif

        {{-- Score Circle --}}
        <div class="relative w-40 h-40 mx-auto mb-8">
            <svg class="w-40 h-40 -rotate-90" viewBox="0 0 120 120">
                <circle cx="60" cy="60" r="50" stroke-width="10" fill="none" class="stroke-gray-200 dark:stroke-[#2a2a2a]" />
                <circle cx="60" cy="60" r="50" stroke-width="10" fill="none" stroke-linecap="round"
                    class="transition-all duration-1000"
                    style="stroke: {{ $passed ? '#22C55E' : '#EF4444' }}; stroke-dasharray: {{ 2 * 3.14159 * 50 }}; stroke-dashoffset: {{ 2 * 3.14159 * 50 * (1 - $score / 100) }}" />
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <span class="text-4xl font-bold" style="color: {{ $passed ? '#22C55E' : '#EF4444' }}">{{ $score }}%</span>
                <span class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Nilai</span>
            </div>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="bg-[#F0FDF4] dark:bg-[#22C55E]/10 rounded-xl p-4">
                <p class="text-2xl font-bold text-green-600 dark:text-green-400">{{ $correctAnswers }}</p>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Benar</p>
            </div>
            <div class="bg-[#FEF2F2] dark:bg-[#EF4444]/10 rounded-xl p-4">
                <p class="text-2xl font-bold text-red-600 dark:text-red-400">{{ $wrongAnswers }}</p>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Salah</p>
            </div>
            <div class="bg-[#EFF6FF] dark:bg-[#2563EB]/10 rounded-xl p-4">
                <p class="text-2xl font-bold text-[#2563EB] dark:text-[#60a5fa]">{{ $quiz['passing_score'] }}%</p>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Min. Lulus</p>
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
            @if(!$passed)
                <a href="{{ url('/modules/' . $course['id'] . '/quiz') }}" class="px-6 py-3 bg-[#2563EB] text-white rounded-xl text-sm font-semibold hover:bg-[#1d4ed8] transition-colors">
                    Coba Lagi
                </a>
            @endif

            @if($passed)
                <a href="{{ url('/certificates/module/' . $course['id']) }}" class="px-6 py-3 bg-[#22C55E] text-white rounded-xl text-sm font-semibold hover:bg-[#16A34A] transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                    Lihat Sertifikat
                </a>
            @endif

            <a href="{{ url('/modules/' . $course['id']) }}" class="px-6 py-3 bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3] rounded-xl text-sm font-semibold hover:border-[#2563EB] dark:hover:border-[#2563EB] transition-colors">
                Kembali ke Course
            </a>
        </div>
    </div>

</div>
@endsection
