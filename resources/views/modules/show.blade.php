@extends('layouts.dashboard')

@section('title', $course['title'] . ' - EduCare')
@section('page-title', $course['title'])

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-7xl mx-auto">

    {{-- Back Link --}}
    <a href="{{ url('/modules') }}" class="inline-flex items-center gap-2 text-sm text-[#64748B] dark:text-[#a3a3a3] hover:text-[#2563EB] dark:hover:text-[#60a5fa] mb-6 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
        Kembali ke Modul
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- Main Content --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- Course Header --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden">
                <div class="h-3" style="background: {{ $course['color'] }}"></div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl flex items-center justify-center" style="background: {{ $course['color'] }}15">
                                @if($course['icon'] === 'code')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                                @elseif($course['icon'] === 'zap')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                @elseif($course['icon'] === 'palette')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
                                @elseif($course['icon'] === 'cpu')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                                @elseif($course['icon'] === 'terminal')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                @elseif($course['icon'] === 'shield')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                @elseif($course['icon'] === 'database')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                                @elseif($course['icon'] === 'smartphone')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                                @elseif($course['icon'] === 'server')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" /></svg>
                                @elseif($course['icon'] === 'cloud')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 17a5 5 0 01-.916-9.916 5.002 5.002 0 019.832 0A5.002 5.002 0 0116 17H8z" /></svg>
                                @elseif($course['icon'] === 'gamepad')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" /></svg>
                                @elseif($course['icon'] === 'link')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg>
                                @elseif($course['icon'] === 'wifi')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.858 15.355-5.858 21.213 0" /></svg>
                                @elseif($course['icon'] === 'network')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                                @elseif($course['icon'] === 'trending-up')
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                                @else
                                    <svg class="w-7 h-7" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                                @endif
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold dark:text-[#ededed]">{{ $course['title'] }}</h1>
                                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">by {{ $course['instructor'] }}</p>
                            </div>
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

                    <p class="text-[#64748B] dark:text-[#a3a3a3] mb-6">{{ $course['description'] }}</p>

                    <div class="flex flex-wrap gap-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            {{ $course['duration'] }}
                        </span>
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            {{ $totalLessons }} Lessons
                        </span>
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                            {{ count($course['modules']) }} Modules
                        </span>
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" /></svg>
                            {{ $course['category'] }}
                        </span>
                    </div>
                </div>
            </div>

            {{-- Objectives --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6">
                <h3 class="text-lg font-bold mb-4 dark:text-[#ededed]">Yang Akan Dipelajari</h3>
                <ul class="space-y-3">
                    @foreach($course['objectives'] as $obj)
                        <li class="flex items-start gap-3 text-sm">
                            <svg class="w-5 h-5 mt-0.5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="text-[#64748B] dark:text-[#a3a3a3]">{{ $obj }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Prerequisites --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6">
                <h3 class="text-lg font-bold mb-4 dark:text-[#ededed]">Prasyarat</h3>
                <ul class="space-y-3">
                    @foreach($course['prerequisites'] as $pre)
                        <li class="flex items-start gap-3 text-sm">
                            <svg class="w-5 h-5 mt-0.5 text-[#2563EB] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="text-[#64748B] dark:text-[#a3a3a3]">{{ $pre }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Modules & Lessons --}}
            <div class="space-y-4">
                <h3 class="text-lg font-bold dark:text-[#ededed]">Kurikulum</h3>

                @foreach($course['modules'] as $mod)
                    @php
                        $modCompleted = 0;
                        $modTotal = 0;
                        foreach ($mod['chapters'] as $ch) {
                            foreach ($ch['lessons'] as $lesson) {
                                $modTotal++;
                                if (isset($userProgress[$course['id']][$lesson['id']])) {
                                    $modCompleted++;
                                }
                            }
                        }
                        $modPercentage = $modTotal > 0 ? round(($modCompleted / $modTotal) * 100) : 0;
                    @endphp
                    <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden">
                        {{-- Module Header --}}
                        <div class="p-5 flex items-center justify-between cursor-pointer hover:bg-gray-50 dark:hover:bg-[#2a2a2a] transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron').classList.toggle('rotate-180')">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background: {{ $course['color'] }}15">
                                    @if($mod['icon'] === 'globe')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                                    @elseif($mod['icon'] === 'file-code')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                                    @elseif($mod['icon'] === 'palette')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
                                    @elseif($mod['icon'] === 'zap')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                    @elseif($mod['icon'] === 'rocket')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                                    @elseif($mod['icon'] === 'brain')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                                    @elseif($mod['icon'] === 'sparkles')
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                                    @else
                                        <svg class="w-5 h-5" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm dark:text-[#ededed]">Module {{ $mod['id'] }}: {{ $mod['title'] }}</h4>
                                    <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ count($mod['chapters']) }} chapters  ·  {{ $mod['duration'] }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="hidden sm:block w-24">
                                    <div class="flex justify-between text-xs mb-1">
                                        <span class="text-[#64748B] dark:text-[#a3a3a3]">{{ $modCompleted }}/{{ $modTotal }}</span>
                                        <span class="font-semibold" style="color: {{ $course['color'] }}">{{ $modPercentage }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-[#2a2a2a] rounded-full h-1.5">
                                        <div class="h-1.5 rounded-full" style="width: {{ $modPercentage }}%; background: {{ $course['color'] }}"></div>
                                    </div>
                                </div>
                                <svg class="w-5 h-5 text-[#94A3B8] chevron transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>

                        {{-- Chapters & Lessons --}}
                        <div class="border-t border-[#E2E8F0] dark:border-[#2a2a2a] hidden">
                            @php
                                $prevLessonCompleted = true;
                            @endphp
                            @foreach($mod['chapters'] as $ch)
                                <div class="px-5 py-3 bg-gray-50 dark:bg-[#111]">
                                    <p class="text-xs font-semibold text-[#64748B] dark:text-[#a3a3a3] uppercase tracking-wider">Chapter {{ $ch['id'] }}: {{ $ch['title'] }}</p>
                                </div>
                                @foreach($ch['lessons'] as $lesson)
                                    @php
                                        $isCompleted = isset($userProgress[$course['id']][$lesson['id']]);
                                        $isLocked = !$isCompleted && !$prevLessonCompleted;
                                        if ($isCompleted) {
                                            $prevLessonCompleted = true;
                                        } else {
                                            $prevLessonCompleted = false;
                                        }
                                    @endphp
                                    <div class="px-5 py-3 flex items-center justify-between hover:bg-gray-50 dark:hover:bg-[#2a2a2a] transition-colors {{ $isLocked ? 'opacity-50' : '' }}">
                                        <div class="flex items-center gap-3">
                                            @if($isCompleted)
                                                <div class="w-7 h-7 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                                </div>
                                            @elseif($isLocked)
                                                <div class="w-7 h-7 rounded-full bg-gray-100 dark:bg-[#2a2a2a] flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                                </div>
                                            @else
                                                <div class="w-7 h-7 rounded-full border-2 border-[#2563EB] flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-[#2563EB]"></div>
                                                </div>
                                            @endif
                                            <div>
                                                <p class="text-sm font-medium dark:text-[#ededed] {{ $isCompleted ? 'text-green-600 dark:text-green-400' : '' }}">{{ $lesson['title'] }}</p>
                                                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $lesson['duration'] }}</p>
                                            </div>
                                        </div>
                                        @if(!$isLocked)
                                            <a href="{{ url('/modules/' . $course['id'] . '/lesson/' . $lesson['id']) }}" class="text-xs font-medium {{ $isCompleted ? 'text-green-600 dark:text-green-400' : 'text-[#2563EB] dark:text-[#60a5fa]' }} hover:underline">
                                                {{ $isCompleted ? 'Ulangi' : 'Mulai' }}
                                            </a>
                                        @else
                                            <span class="text-xs text-[#94A3B8]">Terunci</span>
                                        @endif
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{-- Sidebar --}}
        <div class="space-y-6">

            {{-- Progress Card --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6 sticky top-24">
                <div class="text-center mb-6">
                    <div class="relative w-24 h-24 mx-auto mb-4">
                        <svg class="w-24 h-24 -rotate-90" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke-width="8" fill="none" class="stroke-gray-200 dark:stroke-[#2a2a2a]" />
                            <circle cx="50" cy="50" r="40" stroke-width="8" fill="none" stroke-linecap="round" class="transition-all duration-500" style="stroke: {{ $course['color'] }}; stroke-dasharray: {{ 2 * 3.14159 * 40 }}; stroke-dashoffset: {{ 2 * 3.14159 * 40 * (1 - $progress / 100) }}" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xl font-bold" style="color: {{ $course['color'] }}">{{ $progress }}%</span>
                        </div>
                    </div>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $completedLessons }}/{{ $totalLessons }} lesson selesai</p>
                </div>

                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-[#64748B] dark:text-[#a3a3a3]">Modules</span>
                        <span class="font-semibold dark:text-[#ededed]">{{ count($course['modules']) }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-[#64748B] dark:text-[#a3a3a3]">Total Lessons</span>
                        <span class="font-semibold dark:text-[#ededed]">{{ $totalLessons }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-[#64748B] dark:text-[#a3a3a3]">Durasi</span>
                        <span class="font-semibold dark:text-[#ededed]">{{ $course['duration'] }}</span>
                    </div>
                </div>

                {{-- Quiz Button --}}
                @php
                    $quizResult = session('quiz_results', [])[$course['id']] ?? null;
                @endphp
                <div class="mt-6 pt-6 border-t border-[#E2E8F0] dark:border-[#2a2a2a]">
                    @if($quizResult && $quizResult['passed'])
                        <div class="text-center">
                            <div class="inline-flex items-center gap-2 text-green-600 dark:text-green-400 font-semibold mb-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Quiz Lulus
                            </div>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Nilai: {{ $quizResult['score'] }}%</p>
                            <a href="{{ url('/modules/' . $course['id'] . '/quiz') }}" class="inline-block mt-3 px-5 py-2.5 bg-gray-100 dark:bg-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3] text-xs font-semibold rounded-xl hover:bg-gray-200 dark:hover:bg-[#3a3a3a] transition-colors">
                                Review Quiz
                            </a>
                        </div>
                    @elseif($quizResult && !$quizResult['passed'])
                        <div class="text-center">
                            <div class="inline-flex items-center gap-2 text-red-500 font-semibold mb-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                Belum Lulus
                            </div>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Nilai: {{ $quizResult['score'] }}%</p>
                            <a href="{{ url('/modules/' . $course['id'] . '/quiz') }}" class="inline-block mt-3 px-5 py-2.5 bg-[#F59E0B] text-white text-xs font-semibold rounded-xl hover:bg-[#D97706] transition-colors">
                                Ulangi Quiz
                            </a>
                        </div>
                    @elseif($progress >= 100)
                        <a href="{{ url('/modules/' . $course['id'] . '/quiz') }}" class="block w-full py-3 text-center text-sm font-semibold rounded-xl bg-[#2563EB] text-white hover:bg-[#1d4ed8] transition-colors">
                            Mulai Quiz
                        </a>
                    @else
                        <button type="button" class="block w-full py-3 text-center text-sm font-semibold rounded-xl bg-gray-100 dark:bg-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3] cursor-not-allowed" onclick="alert('Selesaikan semua lesson terlebih dahulu!')">
                            Selesaikan Lesson Dulu
                        </button>
                    @endif
                </div>
            </div>

        </div>

    </div>

</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const firstModule = document.querySelector('.chevron');
        if (firstModule) {
            firstModule.closest('[onclick]').click();
        }
    });
</script>
@endpush

@endsection
