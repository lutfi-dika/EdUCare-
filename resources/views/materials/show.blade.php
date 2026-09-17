@extends('layouts.app')

@section('title', 'EduCare - ' . $material->title)

@section('content')

<section class="py-12 sm:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-[#64748B] dark:text-[#a3a3a3] mb-8">
            <a href="{{ url('/') }}" class="hover:text-[#2563EB] transition-colors" data-i18n="nav.beranda">Beranda</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            <a href="{{ url('/materials') }}" class="hover:text-[#2563EB] transition-colors" data-i18n="nav.materi">Materi</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            <a href="{{ url('/materials/' . $material->id) }}" class="text-[#111827] font-medium dark:text-[#ededed]">{{ $material->title }}</a>
        </div>

        {{-- Material Header --}}
        <div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden mb-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
            <div class="bg-gradient-to-br from-[#2563EB] to-[#1D4ED8] p-8 sm:p-10 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-3xl"></div>
                <div class="relative">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-sm font-medium bg-white/20 px-3 py-1 rounded-full">{{ $material->category->name ?? '' }}</span>
                        <span class="text-sm font-medium bg-white/20 px-3 py-1 rounded-full">{{ ucfirst($material->difficulty) }}</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold mb-4">{{ $material->title }}</h1>
                    <p class="text-blue-100 text-lg">{{ $material->description }}</p>
                </div>
            </div>

            <div class="p-6 sm:p-8">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm text-[#64748B]" data-i18n="mat.progress">Progress Belajar</span>
                    <span class="text-sm font-bold text-[#2563EB]">{{ $material->progress ?? 0 }}%</span>
                </div>
                <div class="h-3 bg-[#E2E8F0] rounded-full overflow-hidden dark:bg-[#2a2a2a]">
                    <div class="h-full bg-[#2563EB] rounded-full transition-all duration-500" style="width: {{ $material->progress ?? 0 }}%"></div>
                </div>

                @if(($material->progress ?? 0) == 0)
                    <form action="{{ url('/progress/' . $material->id . '/start') }}" method="POST" class="mt-6">
                        @csrf
                        <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors" data-i18n="mat.start">
                            Mulai Belajar
                        </button>
                    </form>
                @elseif(($material->progress ?? 0) < 100)
                    <form action="{{ url('/progress/' . $material->id . '/complete') }}" method="POST" class="mt-6">
                        @csrf
                        <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
                            Lanjutkan Belajar
                        </button>
                    </form>
                @else
                    <div class="mt-6 flex items-center gap-2 text-[#16A34A]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span class="font-medium" data-i18n="mat.done">Materi Selesai!</span>
                    </div>
                @endif
            </div>
        </div>

        {{-- Video Section --}}
        @if($material->video_url)
        <div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden mb-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
            <div class="p-6 sm:p-8 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#DC2626]/10 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#DC2626]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="mat.video">Video Pembelajaran</h2>
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Tonton video untuk pemahaman yang lebih baik.</p>
                    </div>
                </div>
            </div>
            <div class="aspect-video">
                <iframe src="{{ $material->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full h-full"></iframe>
            </div>
        </div>
        @endif

        {{-- Material Content --}}
        <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 mb-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
            <h2 class="text-xl font-bold text-[#111827] dark:text-[#ededed] mb-6" data-i18n="mat.content">Konten Materi</h2>
            <div class="prose prose-lg max-w-none text-[#374151] dark:text-[#a3a3a3] leading-relaxed">
                {!! $material->content !!}
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ url('/materials') }}" class="flex-1 px-6 py-3 bg-white text-[#111827] font-medium rounded-xl border border-[#E2E8F0] hover:border-[#2563EB] hover:text-[#2563EB] transition-colors text-center dark:bg-[#1a1a1a] dark:border-[#2a2a2a] dark:text-[#ededed]">
                &larr; <span data-i18n="mat.back">Kembali ke Materi</span>
            </a>
            @if(($material->progress ?? 0) < 100)
                <form action="{{ url('/progress/' . $material->id . '/complete') }}" method="POST" class="flex-1">
                    @csrf
                    <button type="submit" class="w-full px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors text-center" data-i18n="mat.mark_done">
                        Tandai Selesai
                    </button>
                </form>
            @endif
        </div>
    </div>
</section>

<style>
    .prose h3 { font-size: 1.25rem; font-weight: 700; color: #111827; margin-top: 2rem; margin-bottom: 1rem; }
    .prose p { margin-bottom: 1rem; }
    .prose ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1rem; }
    .prose li { margin-bottom: 0.5rem; }
    .prose pre { background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 0.75rem; padding: 1rem 1.5rem; overflow-x: auto; font-size: 0.875rem; margin-bottom: 1rem; }
    .prose code { font-family: 'Fira Code', 'Consolas', monospace; color: #2563EB; }
    .dark .prose h3 { color: #ededed; }
    .dark .prose p { color: #a3a3a3; }
    .dark .prose pre { background: #111111; border-color: #2a2a2a; }
    .dark .prose pre code { color: #60a5fa; }
</style>

@endsection
