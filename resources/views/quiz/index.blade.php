@extends('layouts.app')

@section('title', 'EduCare - Quiz')

@section('content')

<section class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl font-bold text-[#111827] dark:text-[#ededed] mb-4">Quiz Pembelajaran</h1>
            <p class="text-[#64748B] dark:text-[#a3a3a3] text-lg max-w-2xl mx-auto">
                Uji pemahamanmu dengan mengerjakan quiz dari setiap materi.
            </p>
        </div>

        {{-- Quiz Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($quizzes as $quiz)
                <div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all duration-300 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                    {{-- Header --}}
                    <div class="bg-gradient-to-r from-[#2563EB]/5 to-[#2563EB]/10 p-6 dark:from-[#2563EB]/10 dark:to-[#2563EB]/20">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="w-10 h-10 bg-[#2563EB]/10 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 px-3 py-1 rounded-full">{{ $quiz->material->title ?? '' }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#111827] dark:text-[#ededed]">{{ $quiz->title }}</h3>
                    </div>

                    {{-- Info --}}
                    <div class="p-6">
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-6">{{ $quiz->description }}</p>

                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div class="text-center">
                                <div class="w-10 h-10 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Soal</p>
                                <p class="font-bold text-[#111827] dark:text-[#ededed]">{{ $quiz->questions_count ?? $quiz->questions->count() }}</p>
                            </div>
                            <div class="text-center">
                                <div class="w-10 h-10 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Durasi</p>
                                <p class="font-bold text-[#111827] dark:text-[#ededed]">{{ $quiz->duration }}m</p>
                            </div>
                            <div class="text-center">
                                <div class="w-10 h-10 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Passing</p>
                                <p class="font-bold text-[#111827] dark:text-[#ededed]">{{ $quiz->passing_score }}</p>
                            </div>
                        </div>

                        <a href="{{ url('/quiz/' . $quiz->id) }}" class="block w-full px-6 py-3 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors text-center">
                            Mulai Quiz
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
