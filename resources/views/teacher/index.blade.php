@extends('layouts.dashboard')

@section('title', 'EduCare - Dashboard Guru')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Dashboard Guru')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl sm:text-3xl font-bold text-[#111827] dark:text-[#ededed]"><span data-i18n="t_dash.halo">Halo</span>, {{ $user['name'] }} 👋</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="t_dash.welcome">Selamat datang di panel guru EduCare.</p>
</div>

<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#2563EB]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.total_siswa">Total Siswa</span>
        </div>
        <p class="text-2xl sm:text-3xl font-bold text-[#111827] dark:text-[#ededed]">{{ $stats['total_siswa'] }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#16A34A]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.total_materi">Total Materi</span>
        </div>
        <p class="text-2xl sm:text-3xl font-bold text-[#16A34A]">{{ $stats['total_materi'] }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.total_quiz">Total Quiz</span>
        </div>
        <p class="text-2xl sm:text-3xl font-bold text-[#F59E0B]">{{ $stats['total_quiz'] }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#8B5CF6]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.rata_rata">Rata-rata Nilai</span>
        </div>
        <p class="text-2xl sm:text-3xl font-bold text-[#8B5CF6]">{{ $stats['rata_rata_nilai'] }}</p>
    </div>
</div>

<div class="mb-8">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_dash.materi_title">Materi Pembelajaran</h2>
        <a href="{{ url('/teacher/materials') }}" class="text-sm text-[#2563EB] font-medium hover:underline" data-i18n="t_dash.lihat_semua">Lihat Semua &rarr;</a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($recentMaterials as $material)
            <a href="{{ url('/teacher/materials/' . $material['id'] . '/edit') }}" class="group bg-white dark:bg-[#1a1a1a] rounded-xl p-4 border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB]/30 hover:shadow-md transition-all duration-300">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-[#2563EB]/10 rounded-xl flex items-center justify-center group-hover:bg-[#2563EB] transition-colors">
                        @if($material['icon'] === 'calculator')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                        @elseif($material['icon'] === 'leaf')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                        @elseif($material['icon'] === 'globe')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        @elseif($material['icon'] === 'languages')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" /></svg>
                        @elseif($material['icon'] === 'clock')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        @elseif($material['icon'] === 'code')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        @elseif($material['icon'] === 'palette')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
                        @elseif($material['icon'] === 'zap')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        @elseif($material['icon'] === 'server')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                        @elseif($material['icon'] === 'terminal')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        @elseif($material['icon'] === 'database')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" /></svg>
                        @elseif($material['icon'] === 'git-branch')
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        @else
                            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        @endif
                    </div>
                    <div>
                        <span class="text-xs font-medium text-[#64748B] dark:text-[#a3a3a3]">{{ $material['category'] }}</span>
                        <span class="text-xs text-[#E2E8F0] dark:text-[#475569] mx-1">|</span>
                        <span class="text-xs font-medium text-[#2563EB]">{{ $material['difficulty'] }}</span>
                    </div>
                </div>
                <h3 class="font-semibold text-[#111827] dark:text-[#ededed] mb-1 group-hover:text-[#2563EB] transition-colors text-sm">{{ $material['title'] }}</h3>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] line-clamp-2 mb-3">{{ $material['description'] }}</p>
                <div class="mt-auto">
                    <div class="flex items-center justify-between text-xs mb-1">
                        <span class="text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.rata_progress">Rata-rata Progress Siswa</span>
                        <span class="font-medium text-[#2563EB]">{{ $material['avg_progress'] }}%</span>
                    </div>
                    <div class="h-1.5 bg-[#E2E8F0] dark:bg-[#2a2a2a] rounded-full overflow-hidden">
                        <div class="h-full bg-[#2563EB] rounded-full" style="width: {{ $material['avg_progress'] }}%"></div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<div class="mb-8">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_dash.quiz_title">Quiz Terbaru</h2>
        <a href="{{ url('/teacher/quizzes') }}" class="text-sm text-[#2563EB] font-medium hover:underline" data-i18n="t_dash.lihat_semua">Lihat Semua &rarr;</a>
    </div>
    <div class="space-y-3">
        @forelse($recentQuizzes as $quiz)
            <div class="flex items-center gap-4 p-4 bg-white dark:bg-[#1a1a1a] rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a]">
                <div class="w-12 h-12 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-[#111827] dark:text-[#ededed] truncate text-sm">{{ $quiz['title'] }}</h3>
                    <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $quiz['material'] }} &middot; {{ $quiz['total_taken'] }} <span data-i18n="t_dash.dikerjakan">dikerjakan</span></p>
                </div>
                <div class="text-right shrink-0">
                    <p class="text-lg font-bold {{ $quiz['avg_score'] >= 70 ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $quiz['avg_score'] }}</p>
                    <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.rata_rata">Rata-rata</p>
                </div>
            </div>
        @empty
            <div class="text-center py-8 bg-white dark:bg-[#1a1a1a] rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a]">
                <p class="text-[#64748B] dark:text-[#a3a3a3]">Belum ada quiz.</p>
            </div>
        @endforelse
    </div>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <a href="{{ url('/teacher/materials') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all group dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-11 h-11 bg-[#2563EB]/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-[#2563EB] transition-colors">
            <svg class="w-5 h-5 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
        </div>
        <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1 text-sm" data-i18n="t_dash.kelola_materi">Kelola Materi</h3>
        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.kelola_materi_desc">Buat dan edit materi</p>
    </a>
    <a href="{{ url('/teacher/quizzes') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all group dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-11 h-11 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-[#F59E0B] transition-colors">
            <svg class="w-5 h-5 text-[#F59E0B] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
        </div>
        <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1 text-sm" data-i18n="t_dash.kelola_quiz">Kelola Quiz</h3>
        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.kelola_quiz_desc">Buat dan edit quiz</p>
    </a>
    <a href="{{ url('/teacher/students') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all group dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-11 h-11 bg-[#16A34A]/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-[#16A34A] transition-colors">
            <svg class="w-5 h-5 text-[#16A34A] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
        </div>
        <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1 text-sm" data-i18n="t_dash.lihat_siswa">Lihat Siswa</h3>
        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.lihat_siswa_desc">Monitor progress siswa</p>
    </a>
    <a href="{{ url('/teacher/statistics') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all group dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-11 h-11 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center mb-3 group-hover:bg-[#8B5CF6] transition-colors">
            <svg class="w-5 h-5 text-[#8B5CF6] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
        </div>
        <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1 text-sm" data-i18n="t_dash.statistik">Statistik</h3>
        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_dash.statistik_desc">Lihat data nilai</p>
    </a>
</div>
@endsection
