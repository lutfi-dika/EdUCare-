@extends('layouts.dashboard')

@section('title', 'Modul Belajar - EduCare')
@section('page-title', 'Modul Belajar')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-7xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold dark:text-[#ededed]" data-i18n="mod.title">Modul Belajar</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="mod.subtitle">Pilih course dan mulai belajar dari dasar hingga mahir.</p>
    </div>

    {{-- Search & Filter --}}
    <form method="GET" class="mb-8">
        <div class="flex flex-col sm:flex-row gap-3">
            <div class="flex-1 relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                <input type="text" name="search" value="{{ $search }}" data-i18n-placeholder="mod.search" placeholder="Cari course..." class="w-full pl-10 pr-4 py-3 bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-xl text-sm focus:outline-none focus:border-[#2563EB] dark:focus:border-[#2563EB] transition-colors">
            </div>
            <select name="category" class="px-4 py-3 bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-xl text-sm focus:outline-none focus:border-[#2563EB] dark:focus:border-[#2563EB] transition-colors">
                <option value="" data-i18n="mod.all_cat">Semua Kategori</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat['name'] }}" {{ $category === $cat['name'] ? 'selected' : '' }}>{{ $cat['name'] }}</option>
                @endforeach
            </select>
            <select name="level" class="px-4 py-3 bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-xl text-sm focus:outline-none focus:border-[#2563EB] dark:focus:border-[#2563EB] transition-colors">
                <option value="" data-i18n="mod.all_level">Semua Level</option>
                <option value="Pemula" {{ $level === 'Pemula' ? 'selected' : '' }}>Pemula</option>
                <option value="Menengah" {{ $level === 'Menengah' ? 'selected' : '' }}>Menengah</option>
                <option value="Lanjutan" {{ $level === 'Lanjutan' ? 'selected' : '' }}>Lanjutan</option>
            </select>
            <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white rounded-xl text-sm font-medium hover:bg-[#1d4ed8] transition-colors" data-i18n="mod.filter">Filter</button>
        </div>
    </form>

    {{-- Stats --}}
    @php
        $completedCoursesCount = 0;
        foreach ($courses as $course) {
            $totalL = $course['total_lessons'];
            $completedL = 0;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        if (isset($userProgress[$course['id']][$lesson['id']])) {
                            $completedL++;
                        }
                    }
                }
            }
            if ($totalL > 0 && $completedL === $totalL) {
                $completedCoursesCount++;
            }
        }
    @endphp
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
        <div class="bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-4">
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="mod.total_course">Total Course</p>
            <p class="text-2xl font-bold mt-1">{{ count($courses) }}</p>
        </div>
        <div class="bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-4">
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]" data-i18n="mod.total_lesson">Total Lesson</p>
            <p class="text-2xl font-bold mt-1">{{ collect($courses)->sum('total_lessons') }}</p>
        </div>
        <div class="bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-4">
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Selesai</p>
            <p class="text-2xl font-bold mt-1 text-green-600">{{ $completedCoursesCount }}</p>
        </div>
        <div class="bg-[#F8FAFC] dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-4">
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Sertifikat</p>
            <p class="text-2xl font-bold mt-1 text-[#2563EB]">{{ session('quiz_results', []) ? count(array_filter(session('quiz_results', []), fn($r) => $r['passed'] ?? false)) : 0 }}</p>
        </div>
    </div>

    {{-- Course Grid --}}
    @if(count($courses) > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($courses as $course)
            @php
                $totalLessons = $course['total_lessons'];
                $completedLessons = 0;
                foreach ($course['modules'] as $mod) {
                    foreach ($mod['chapters'] as $ch) {
                        foreach ($ch['lessons'] as $lesson) {
                            if (isset($userProgress[$course['id']][$lesson['id']])) {
                                $completedLessons++;
                            }
                        }
                    }
                }
                $percentage = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;
            @endphp
            <a href="{{ url('/modules/' . $course['id']) }}" class="group bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden hover:shadow-lg hover:border-[#2563EB]/30 dark:hover:border-[#2563EB]/30 transition-all duration-300">
                {{-- Color Bar --}}
                <div class="h-2" style="background: {{ $course['color'] }}"></div>

                <div class="p-6">
                    {{-- Icon & Level --}}
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: {{ $course['color'] }}15">
                            @if($course['icon'] === 'code')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                            @elseif($course['icon'] === 'zap')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            @elseif($course['icon'] === 'palette')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
                            @elseif($course['icon'] === 'cpu')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                            @elseif($course['icon'] === 'terminal')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            @elseif($course['icon'] === 'shield')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            @elseif($course['icon'] === 'database')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                            @elseif($course['icon'] === 'smartphone')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                            @elseif($course['icon'] === 'server')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                            @elseif($course['icon'] === 'cloud')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 17a5 5 0 01-.916-9.916 5.002 5.002 0 019.832 0A5.002 5.002 0 0116 17H8z" /></svg>
                            @elseif($course['icon'] === 'gamepad')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" /></svg>
                            @elseif($course['icon'] === 'link')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg>
                            @elseif($course['icon'] === 'wifi')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.858 15.355-5.858 21.213 0" /></svg>
                            @elseif($course['icon'] === 'network')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                            @elseif($course['icon'] === 'trending-up')
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                            @else
                                <svg class="w-6 h-6" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                            @endif
                        </div>
                        <span class="text-xs font-semibold px-3 py-1 rounded-full
                            {{ $course['level_color'] === 'green' ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400' : '' }}
                            {{ $course['level_color'] === 'yellow' ? 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400' : '' }}
                            {{ $course['level_color'] === 'blue' ? 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400' : '' }}
                            {{ $course['level_color'] === 'purple' ? 'bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400' : '' }}
                            {{ $course['level_color'] === 'red' ? 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400' : '' }}">
                            {{ $course['level'] }}
                        </span>
                    </div>

                    {{-- Title & Description --}}
                    <h3 class="text-lg font-bold mb-2 group-hover:text-[#2563EB] transition-colors dark:text-[#ededed]">{{ $course['title'] }}</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-4 line-clamp-2">{{ $course['short_description'] }}</p>

                    {{-- Meta --}}
                    <div class="flex items-center gap-4 text-xs text-[#64748B] dark:text-[#a3a3a3] mb-4">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            {{ $course['duration'] }}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            {{ $totalLessons }} Lessons
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                            {{ count($course['modules']) }} Module
                        </span>
                    </div>

                    {{-- Progress --}}
                    <div>
                        <div class="flex justify-between text-xs mb-1">
                            <span class="text-[#64748B] dark:text-[#a3a3a3]">{{ $completedLessons }}/{{ $totalLessons }} lesson</span>
                            <span class="font-semibold" style="color: {{ $course['color'] }}">{{ $percentage }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-[#2a2a2a] rounded-full h-2">
                            <div class="h-2 rounded-full transition-all duration-500" style="width: {{ $percentage }}%; background: {{ $course['color'] }}"></div>
                        </div>
                        <div class="mt-2">
                            @if($percentage === 0)
                                <span class="text-xs font-medium text-[#2563EB]">Belum dimulai</span>
                            @elseif($percentage >= 100)
                                <span class="text-xs font-medium text-green-600">✓ Selesai</span>
                            @else
                                <span class="text-xs font-medium text-[#F59E0B]">Sedang dipelajari</span>
                            @endif
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @else
    <div class="text-center py-16">
        <svg class="w-16 h-16 mx-auto text-[#94A3B8] dark:text-[#64748B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
        <h3 class="text-lg font-semibold mt-4 dark:text-[#ededed]">Tidak ada course ditemukan</h3>
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mt-1">Coba kata kunci atau filter lain.</p>
        <a href="{{ url('/modules') }}" class="inline-block mt-4 px-4 py-2 bg-[#2563EB] text-white text-sm rounded-xl hover:bg-[#1d4ed8] transition-colors">Reset Filter</a>
    </div>
    @endif

</div>
@endsection
