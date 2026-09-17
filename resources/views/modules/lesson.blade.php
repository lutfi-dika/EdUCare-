@extends('layouts.dashboard')

@section('title', $currentLesson['title'] . ' - EduCare')
@section('page-title', $course['title'])

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-7xl mx-auto">

    {{-- Breadcrumb --}}
    <nav class="flex items-center gap-2 text-sm text-[#64748B] dark:text-[#a3a3a3] mb-6">
        <a href="{{ url('/modules') }}" class="hover:text-[#2563EB] dark:hover:text-[#60a5fa] transition-colors">Modul</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
        <a href="{{ url('/modules/' . $course['id']) }}" class="hover:text-[#2563EB] dark:hover:text-[#60a5fa] transition-colors">{{ $course['title'] }}</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
        <span class="text-[#111827] dark:text-[#ededed] font-medium">{{ $currentLesson['title'] }}</span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- Main Content --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- Lesson Header --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6">
                <div class="flex items-center gap-2 text-xs text-[#64748B] dark:text-[#a3a3a3] mb-3">
                    <span>Module {{ $currentModule['id'] }}: {{ $currentModule['title'] }}</span>
                    <span>·</span>
                    <span>Chapter {{ $currentChapter['id'] }}: {{ $currentChapter['title'] }}</span>
                </div>
                <h1 class="text-2xl font-bold dark:text-[#ededed] mb-2">{{ $currentLesson['title'] }}</h1>
                <div class="flex items-center gap-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        {{ $currentLesson['duration'] }}
                    </span>
                    @if($isCompleted)
                        <span class="flex items-center gap-1.5 text-green-600 dark:text-green-400 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            Selesai
                        </span>
                    @endif
                </div>
            </div>

            {{-- Progress Bar --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-4">
                <div class="flex justify-between text-xs mb-2">
                    <span class="text-[#64748B] dark:text-[#a3a3a3]">Progress Course</span>
                    <span class="font-semibold" style="color: {{ $course['color'] }}">{{ $courseProgress }}% ({{ $completedCount }}/{{ $totalLessons }})</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-[#2a2a2a] rounded-full h-2">
                    <div class="h-2 rounded-full transition-all duration-500" style="width: {{ $courseProgress }}%; background: {{ $course['color'] }}"></div>
                </div>
            </div>

            {{-- Learning Objectives --}}
            @if(isset($lessonContent['objectives']) && count($lessonContent['objectives']) > 0)
            <div class="bg-[#EFF6FF] dark:bg-[#2563EB]/10 border border-[#BFDBFE] dark:border-[#2563EB]/30 rounded-2xl p-6">
                <h3 class="text-sm font-bold text-[#2563EB] dark:text-[#60a5fa] mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Tujuan Pembelajaran
                </h3>
                <ul class="space-y-2">
                    @foreach($lessonContent['objectives'] as $obj)
                        <li class="flex items-start gap-2 text-sm text-[#1E40AF] dark:text-[#93C5FD]">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" /></svg>
                            {{ $obj }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Content --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6">
                <div class="prose prose-lg max-w-none dark:prose-invert
                    prose-headings:text-[#111827] dark:prose-headings:text-[#ededed]
                    prose-p:text-[#64748B] dark:prose-p:text-[#a3a3a3]
                    prose-strong:text-[#111827] dark:prose-strong:text-[#ededed]
                    prose-code:text-[#2563EB] dark:prose-code:text-[#60a5fa]
                    prose-code:bg-gray-100 dark:prose-code:bg-[#2a2a2a]
                    prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded
                    prose-a:text-[#2563EB] dark:prose-a:text-[#60a5fa]">
                    {!! $lessonContent['content'] !!}
                </div>
            </div>

            {{-- Code Example --}}
            @if(isset($lessonContent['code']) && $lessonContent['code'])
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-50 dark:bg-[#111] border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <span class="text-xs font-semibold text-[#64748B] dark:text-[#a3a3a3] uppercase tracking-wider">Contoh Kode</span>
                    <button onclick="copyCode(this)" class="text-xs text-[#2563EB] dark:text-[#60a5fa] hover:underline font-medium">Salin Kode</button>
                </div>
                <pre class="p-6 text-sm overflow-x-auto bg-[#1E293B] text-[#E2E8F0]"><code>{{ $lessonContent['code'] }}</code></pre>
            </div>
            @endif

            {{-- Tips --}}
            @if(isset($lessonContent['tips']) && count($lessonContent['tips']) > 0)
            <div class="bg-[#FFFBEB] dark:bg-[#F59E0B]/10 border border-[#FDE68A] dark:border-[#F59E0B]/30 rounded-2xl p-6">
                <h3 class="text-sm font-bold text-[#D97706] dark:text-[#FBBF24] mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                    Tips & Catatan
                </h3>
                <ul class="space-y-2">
                    @foreach($lessonContent['tips'] as $tip)
                        <li class="flex items-start gap-2 text-sm text-[#92400E] dark:text-[#FCD34D]">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            {{ $tip }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Summary --}}
            @if(isset($lessonContent['summary']))
            <div class="bg-[#F0FDF4] dark:bg-[#22C55E]/10 border border-[#BBF7D0] dark:border-[#22C55E]/30 rounded-2xl p-6">
                <h3 class="text-sm font-bold text-[#15803D] dark:text-[#4ADE80] mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                    Ringkasan
                </h3>
                <p class="text-sm text-[#166534] dark:text-[#86EFAC]">{{ $lessonContent['summary'] }}</p>
            </div>
            @endif

            {{-- Complete Button --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6">
                @if($isCompleted)
                    <div class="flex items-center justify-center gap-3 text-green-600 dark:text-green-400 font-semibold">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Lesson ini sudah selesai!
                    </div>
                @else
                    <form method="POST" action="{{ url('/modules/' . $course['id'] . '/lesson/' . $currentLesson['id'] . '/complete') }}">
                        @csrf
                        <button type="submit" class="w-full py-3 bg-[#22C55E] text-white font-semibold rounded-xl hover:bg-[#16A34A] transition-colors flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            Tandai Selesai
                        </button>
                    </form>
                @endif
            </div>

            {{-- Navigation --}}
            <div class="flex items-center justify-between gap-4">
                @if($prevLesson)
                    <a href="{{ url('/modules/' . $course['id'] . '/lesson/' . $prevLesson['lesson']['id']) }}" class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-xl text-sm font-medium text-[#64748B] dark:text-[#a3a3a3] hover:border-[#2563EB] dark:hover:border-[#2563EB] transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                        {{ $prevLesson['lesson']['title'] }}
                    </a>
                @else
                    <div></div>
                @endif

                @if($nextLesson)
                    <a href="{{ url('/modules/' . $course['id'] . '/lesson/' . $nextLesson['lesson']['id']) }}" class="flex items-center gap-2 px-4 py-3 bg-[#2563EB] text-white rounded-xl text-sm font-medium hover:bg-[#1d4ed8] transition-colors">
                        {{ $nextLesson['lesson']['title'] }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                    </a>
                @endif
            </div>

        </div>

        {{-- Sidebar --}}
        <div class="space-y-6">

            {{-- Lesson List --}}
            <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden sticky top-24">
                <div class="p-4 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <h3 class="font-bold text-sm dark:text-[#ededed]">Daftar Lesson</h3>
                    <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] mt-1">{{ $completedCount }}/{{ $totalLessons }} selesai</p>
                </div>
                <div class="max-h-[400px] overflow-y-auto">
                    @php
                        $currentModuleId = null;
                        $prevCompleted = true;
                    @endphp
                    @foreach($allLessons as $item)
                        @if($item['module']['id'] !== $currentModuleId)
                            @php $currentModuleId = $item['module']['id']; @endphp
                            <div class="px-4 py-2 bg-gray-50 dark:bg-[#111] text-xs font-semibold text-[#64748B] dark:text-[#a3a3a3] uppercase tracking-wider">
                                Module {{ $currentModuleId }}
                            </div>
                        @endif
                        @php
                            $isActive = $item['lesson']['id'] == $lessonId;
                            $isDone = isset($userProgress[$course['id']][$item['lesson']['id']]);
                            $isLockedSidebar = !$isDone && !$prevCompleted;
                            if ($isDone) {
                                $prevCompleted = true;
                            } else {
                                $prevCompleted = false;
                            }
                        @endphp
                        @if($isLockedSidebar)
                            <div class="flex items-center gap-3 px-4 py-3 text-sm opacity-50">
                                <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-[#2a2a2a] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                </div>
                                <span class="text-[#94A3B8]">{{ $item['lesson']['title'] }}</span>
                            </div>
                        @else
                            <a href="{{ url('/modules/' . $course['id'] . '/lesson/' . $item['lesson']['id']) }}"
                               class="flex items-center gap-3 px-4 py-3 text-sm transition-colors
                                {{ $isActive ? 'bg-[#EFF6FF] dark:bg-[#2563EB]/10 border-r-2 border-[#2563EB]' : 'hover:bg-gray-50 dark:hover:bg-[#2a2a2a]' }}">
                                @if($isDone)
                                    <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    </div>
                                @elseif($isActive)
                                    <div class="w-6 h-6 rounded-full bg-[#2563EB] flex items-center justify-center flex-shrink-0">
                                        <div class="w-2 h-2 rounded-full bg-white"></div>
                                    </div>
                                @else
                                    <div class="w-6 h-6 rounded-full border-2 border-gray-300 dark:border-[#2a2a2a] flex-shrink-0"></div>
                                @endif
                                <span class="{{ $isActive ? 'font-semibold text-[#2563EB] dark:text-[#60a5fa]' : ($isDone ? 'text-green-600 dark:text-green-400' : 'text-[#64748B] dark:text-[#a3a3a3]') }}">
                                    {{ $item['lesson']['title'] }}
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>

@push('scripts')
<script>
    function copyCode(btn) {
        const code = btn.closest('.rounded-2xl').querySelector('code');
        navigator.clipboard.writeText(code.textContent);
        const originalText = btn.textContent;
        btn.textContent = 'Tersalin!';
        setTimeout(() => btn.textContent = originalText, 2000);
    }
</script>
@endpush

@endsection
