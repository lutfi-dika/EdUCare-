@extends('layouts.guest')

@section('title', 'EduCare - Hasil Quiz')

@section('content')
<div class="min-h-screen bg-white dark:bg-black flex items-center justify-center p-4 transition-colors duration-200">

    <div class="w-full max-w-lg">

        {{-- Result Card --}}
        <div class="bg-white dark:bg-[#1a1a1a] rounded-2xl border border-[#E2E8F0] dark:border-[#2a2a2a] overflow-hidden shadow-sm transition-colors duration-200">

            {{-- Header --}}
            <div class="p-8 text-center {{ $passed ? 'bg-gradient-to-br from-[#16A34A] to-[#15803D]' : 'bg-gradient-to-br from-[#DC2626] to-[#B91C1C]' }} text-white relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full">
                    <div class="absolute top-4 left-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                    <div class="absolute bottom-4 right-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                </div>
                <div class="relative">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        @if($passed)
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @else
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l2-2m-2 2l-2-2m7 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @endif
                    </div>
                    <h1 class="text-2xl font-bold mb-1">{{ $passed ? 'Selamat!' : 'Coba Lagi' }}</h1>
                    <p class="text-white/80">{{ $passed ? 'Kamu berhasil lulus quiz ini!' : 'Kamu belum mencapai passing score.' }}</p>
                </div>
            </div>

            {{-- Score --}}
            <div class="p-8">
                <div class="text-center mb-8">
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-2">Nilai Kamu</p>
                    <p class="text-6xl font-bold {{ $passed ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $score }}</p>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mt-2">Passing Score: {{ $quiz->passing_score }}</p>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-8">
                    <div class="text-center p-4 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl transition-colors duration-200">
                        <p class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">{{ $totalQuestions }}</p>
                        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Total Soal</p>
                    </div>
                    <div class="text-center p-4 bg-[#16A34A]/5 rounded-xl">
                        <p class="text-2xl font-bold text-[#16A34A]">{{ $correctAnswers }}</p>
                        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Benar</p>
                    </div>
                    <div class="text-center p-4 bg-[#DC2626]/5 rounded-xl">
                        <p class="text-2xl font-bold text-[#DC2626]">{{ $wrongAnswers }}</p>
                        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Salah</p>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-2 mb-8 p-4 rounded-xl {{ $passed ? 'bg-[#16A34A]/5 text-[#16A34A]' : 'bg-[#DC2626]/5 text-[#DC2626]' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-bold">Status: {{ $passed ? 'LULUS' : 'BELUM LULUS' }}</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ url('/quiz') }}" class="flex-1 px-6 py-3 bg-white dark:bg-[#111111] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB] transition-colors text-center">
                        Kembali ke Quiz
                    </a>
                    @if(!$passed)
                        <a href="{{ url('/quiz/' . $quiz->id) }}" class="flex-1 px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors text-center">
                            Coba Lagi
                        </a>
                    @endif
                    @if($passed)
                        <a href="{{ url('/certificates') }}" class="flex-1 px-6 py-3 bg-[#16A34A] text-white font-medium rounded-xl hover:bg-[#15803D] transition-colors text-center">
                            Lihat Sertifikat
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
