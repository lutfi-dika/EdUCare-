@extends('layouts.dashboard')

@section('title', 'EduCare - Dashboard')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('page-title', 'Dashboard')

@section('content')
{{-- Welcome --}}
<div class="mb-6">
    <h1 class="text-2xl sm:text-3xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="dashboard.halo">Halo, {{ session('user.name') }} 👋</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="dashboard.slogan">Selamat datang kembali di EduCare. Semangat belajar hari ini!</p>
</div>

{{-- Statistic Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] hover:border-[#2563EB]/30 transition-colors dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#2563EB]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Course Tersedia</span>
        </div>
        <p class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">{{ $moduleStats['total_courses'] }}</p>
    </div>

    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] hover:border-[#16A34A]/30 transition-colors dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#16A34A]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Lesson Selesai</span>
        </div>
        <p class="text-2xl font-bold text-[#16A34A]">{{ $moduleStats['completed_lessons'] }}<span class="text-sm text-[#64748B] dark:text-[#a3a3a3] font-normal">/{{ $moduleStats['total_lessons'] }}</span></p>
    </div>

    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] hover:border-[#F59E0B]/30 transition-colors dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Quiz Lulus</span>
        </div>
        <p class="text-2xl font-bold text-[#F59E0B]">{{ $moduleStats['quizzes_passed'] }}</p>
    </div>

    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] hover:border-[#8B5CF6]/30 transition-colors dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-[#8B5CF6]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Course Selesai</span>
        </div>
        <p class="text-2xl font-bold text-[#8B5CF6]">{{ $moduleStats['courses_completed'] }}</p>
    </div>
</div>

{{-- Quick Access Module --}}
<div class="bg-gradient-to-r from-[#2563EB] to-[#1D4ED8] rounded-2xl p-6 mb-6 text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-10 -mt-10 blur-xl"></div>
    <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full -ml-8 -mb-8 blur-xl"></div>
    <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-lg font-bold mb-1" data-i18n="mod.quick_access">Modul Belajar</h2>
            <p class="text-blue-100 text-sm">{{ $moduleStats['total_courses'] }} <span data-i18n="mod.quick_desc">course</span> · {{ $moduleStats['completed_lessons'] }}/{{ $moduleStats['total_lessons'] }} <span data-i18n="mod.total_lesson">lesson</span> selesai</p>
        </div>
        <a href="{{ url('/modules') }}" class="px-5 py-2.5 bg-white text-[#2563EB] text-sm font-semibold rounded-xl hover:bg-blue-50 transition-colors flex items-center gap-2">
            <span data-i18n="mod.start_learning">Mulai Belajar</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
        </a>
    </div>
</div>

{{-- Tab Navigation --}}
<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden mb-6 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
    <div class="flex border-b border-[#E2E8F0] dark:border-[#2a2a2a] overflow-x-auto">
        <a href="?tab=modul" class="flex items-center gap-2 px-6 py-4 text-sm font-medium whitespace-nowrap transition-colors {{ $tab === 'modul' ? 'text-[#2563EB] border-b-2 border-[#2563EB] bg-[#2563EB]/5' : 'text-[#64748B] hover:text-[#111827] hover:bg-[#F8FAFC] dark:text-[#a3a3a3] dark:hover:text-[#ededed] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
            <span data-i18n="tab.modul_belajar">Modul Belajar</span>
        </a>
        <a href="?tab=video" class="flex items-center gap-2 px-6 py-4 text-sm font-medium whitespace-nowrap transition-colors {{ $tab === 'video' ? 'text-[#2563EB] border-b-2 border-[#2563EB] bg-[#2563EB]/5' : 'text-[#64748B] hover:text-[#111827] hover:bg-[#F8FAFC] dark:text-[#a3a3a3] dark:hover:text-[#ededed] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span data-i18n="tab.video_pembelajaran">Video Pembelajaran</span>
        </a>
        <a href="?tab=quiz" class="flex items-center gap-2 px-6 py-4 text-sm font-medium whitespace-nowrap transition-colors {{ $tab === 'quiz' ? 'text-[#2563EB] border-b-2 border-[#2563EB] bg-[#2563EB]/5' : 'text-[#64748B] hover:text-[#111827] hover:bg-[#F8FAFC] dark:text-[#a3a3a3] dark:hover:text-[#ededed] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
            <span data-i18n="tab.quiz">Quiz</span>
        </a>
        <a href="?tab=sertifikat" class="flex items-center gap-2 px-6 py-4 text-sm font-medium whitespace-nowrap transition-colors {{ $tab === 'sertifikat' ? 'text-[#2563EB] border-b-2 border-[#2563EB] bg-[#2563EB]/5' : 'text-[#64748B] hover:text-[#111827] hover:bg-[#F8FAFC] dark:text-[#a3a3a3] dark:hover:text-[#ededed] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
            <span data-i18n="tab.sertifikat">Sertifikat</span>
        </a>
    </div>

    {{-- Tab Content: Modul --}}
    @if($tab === 'modul')
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]">Modul Pembelajaran</h2>
            <a href="{{ url('/materials') }}" class="text-sm text-[#2563EB] font-medium hover:underline" data-i18n="dashboard.lihat_semua">Lihat Semua &rarr;</a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($recentMaterials as $material)
                <a href="{{ url('/materials/' . $material['id']) }}" class="group bg-[#F8FAFC] dark:bg-[#111111] rounded-xl p-4 border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB]/30 hover:shadow-md transition-all duration-300">
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
                        @if($material['progress'] > 0)
                            <div class="flex items-center justify-between text-xs mb-1">
                                <span class="text-[#64748B] dark:text-[#a3a3a3]">Progress</span>
                                <span class="font-medium text-[#2563EB]">{{ $material['progress'] }}%</span>
                            </div>
                            <div class="h-1.5 bg-[#E2E8F0] dark:bg-[#2a2a2a] rounded-full overflow-hidden">
                                <div class="h-full bg-[#2563EB] rounded-full" style="width: {{ $material['progress'] }}%"></div>
                            </div>
                        @else
                            <span class="text-xs font-medium text-[#2563EB]">Mulai Belajar &rarr;</span>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Tab Content: Video --}}
    @elseif($tab === 'video')
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]">Video Pembelajaran</h2>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $videos->count() }} video tersedia</span>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse($videos as $video)
                <div class="group bg-[#F8FAFC] dark:bg-[#111111] rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] overflow-hidden hover:shadow-md hover:border-[#2563EB]/30 transition-all duration-300">
                    <div class="relative aspect-video bg-gradient-to-br from-[#2563EB]/5 to-[#2563EB]/10 flex items-center justify-center cursor-pointer" onclick="openVideoModal('{{ $video->video_url }}', '{{ addslashes($video->title) }}')">
                        <div class="w-14 h-14 bg-[#2563EB]/90 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <div class="absolute top-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded-lg">
                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /></svg>
                            Video
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 px-2 py-0.5 rounded-full">{{ $video->category->name ?? '' }}</span>
                            <span class="text-xs font-medium text-[#64748B] dark:text-[#a3a3a3]">{{ ucfirst($video->difficulty) }}</span>
                        </div>
                        <h3 class="font-semibold text-[#111827] dark:text-[#ededed] text-sm mb-1 group-hover:text-[#2563EB] transition-colors">{{ $video->title }}</h3>
                        <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] line-clamp-2">{{ $video->description }}</p>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 text-[#E2E8F0] dark:text-[#475569] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <p class="text-[#64748B] dark:text-[#a3a3a3]">Belum ada video pembelajaran.</p>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Tab Content: Quiz --}}
    @elseif($tab === 'quiz')
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]">Quiz Pembelajaran</h2>
        </div>
        <div class="space-y-3">
            @forelse($moduleQuizzes as $mQuiz)
                @php
                    $courseModuleProgress = $moduleProgress[$mQuiz['course_id']] ?? [];
                    $allLessonsCount = 0;
                    $completedLessonsCount = 0;
                    foreach ($courses as $c) {
                        if ($c['id'] == $mQuiz['course_id']) {
                            foreach ($c['modules'] as $mod) {
                                foreach ($mod['chapters'] as $ch) {
                                    foreach ($ch['lessons'] as $lesson) {
                                        $allLessonsCount++;
                                        if (isset($courseModuleProgress[$lesson['id']])) {
                                            $completedLessonsCount++;
                                        }
                                    }
                                }
                            }
                            break;
                        }
                    }
                    $allDone = $allLessonsCount > 0 && $completedLessonsCount === $allLessonsCount;
                @endphp
                <div class="flex items-center gap-4 p-4 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl hover:bg-[#EFF6FF] dark:hover:bg-[#222222] transition-colors">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0" style="background: {{ $mQuiz['color'] }}15">
                        @if($mQuiz['status'] === 'passed')
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @elseif($mQuiz['status'] === 'failed')
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @else
                            <svg class="w-6 h-6" style="color: {{ $mQuiz['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        @endif
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-[#111827] dark:text-[#ededed] truncate">{{ $mQuiz['title'] }}</h3>
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $mQuiz['total_questions'] }} soal &middot; {{ $mQuiz['duration'] }} menit</p>
                    </div>
                    <div class="shrink-0 text-right">
                        @if($mQuiz['status'] === 'passed')
                            <span class="inline-flex items-center gap-1 text-xs font-semibold px-3 py-1 rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                Lulus
                            </span>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] mt-1">Nilai: {{ $mQuiz['score'] }}</p>
                        @elseif($mQuiz['status'] === 'failed')
                            <span class="inline-flex items-center gap-1 text-xs font-semibold px-3 py-1 rounded-full bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                Gagal
                            </span>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] mt-1">Nilai: {{ $mQuiz['score'] }}</p>
                        @else
                            @if(!$allDone)
                                <span class="inline-flex items-center gap-1 text-xs font-semibold px-3 py-1 rounded-full bg-gray-100 text-gray-500 dark:bg-[#2a2a2a] dark:text-[#a3a3a3]">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                    Terkunci
                                </span>
                                <p class="text-xs text-[#94A3B8] mt-1">Selesaikan materi dulu</p>
                            @else
                                <a href="{{ url('/modules/' . $mQuiz['course_id'] . '/quiz') }}" class="inline-flex items-center gap-1 text-xs font-semibold px-3 py-1 rounded-full bg-[#2563EB] text-white hover:bg-[#1d4ed8] transition-colors">
                                    Kerjakan
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center py-12">
                    <p class="text-[#64748B] dark:text-[#a3a3a3]">Belum ada quiz tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Tab Content: Sertifikat --}}
    @elseif($tab === 'sertifikat')
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]">Sertifikat Saya</h2>
            <a href="{{ url('/certificates') }}" class="text-sm text-[#2563EB] font-medium hover:underline">Lihat Semua &rarr;</a>
        </div>
        @if($certificates->count() > 0)
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach($certificates as $cert)
                    <div class="bg-gradient-to-br from-[#2563EB] to-[#1D4ED8] rounded-xl p-5 text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-8 -mt-8 blur-xl"></div>
                        <div class="relative">
                            <svg class="w-8 h-8 mb-3 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <h3 class="font-bold text-sm mb-1">{{ $cert->title }}</h3>
                            <p class="text-white/70 text-xs">No. {{ $cert->certificate_number }}</p>
                            <p class="text-white/70 text-xs mt-1">{{ $cert->issued_at ? $cert->issued_at->format('d M Y') : '-' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl">
                <svg class="w-16 h-16 text-[#E2E8F0] dark:text-[#475569] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                <p class="text-[#64748B] dark:text-[#a3a3a3] mb-2">Belum ada sertifikat</p>
                <p class="text-sm text-[#94A3B8] dark:text-[#a3a3a3]">Selesaikan materi dan quiz untuk mendapatkan sertifikat.</p>
            </div>
        @endif
    </div>
    @endif
</div>

{{-- Video Modal --}}
<div id="videoModal" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-4" onclick="closeVideoModal(event)">
    <div class="bg-white dark:bg-[#1a1a1a] rounded-2xl w-full max-w-3xl overflow-hidden">
        <div class="flex items-center justify-between p-4 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
            <h3 id="videoModalTitle" class="font-bold text-[#111827] dark:text-[#ededed] truncate">Video Pembelajaran</h3>
            <button onclick="closeVideoModal()" class="w-8 h-8 rounded-lg bg-[#F8FAFC] dark:bg-[#111111] hover:bg-[#E2E8F0] dark:hover:bg-[#2a2a2a] flex items-center justify-center transition-colors">
                <svg class="w-4 h-4 text-[#64748B] dark:text-[#a3a3a3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
        <div class="aspect-video">
            <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full h-full"></iframe>
        </div>
    </div>
</div>

<script>
function openVideoModal(url, title) {
    document.getElementById('videoModal').classList.remove('hidden');
    document.getElementById('videoModalTitle').textContent = title;
    document.getElementById('videoFrame').src = url + '?autoplay=1';
    document.body.style.overflow = 'hidden';
}
function closeVideoModal(e) {
    if (!e || e.target === document.getElementById('videoModal')) {
        document.getElementById('videoModal').classList.add('hidden');
        document.getElementById('videoFrame').src = '';
        document.body.style.overflow = '';
    }
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeVideoModal();
});
</script>
@endsection
