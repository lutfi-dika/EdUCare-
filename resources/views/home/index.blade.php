@extends('layouts.app')

@section('title', 'EduCare - Belajar Lebih Mudah')

@section('content')

{{-- Hero Section --}}
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-[#EFF6FF] via-white to-[#F0F9FF] dark:from-[#0f172a] dark:via-[#1e293b] dark:to-[#0f172a]"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-[#2563EB]/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-[#2563EB]/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left --}}
            <div>
                <div class="inline-flex items-center gap-2 bg-[#2563EB]/10 text-[#2563EB] px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span data-i18n="hero.badge">Platform Pembelajaran Digital</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#111827] dark:text-[#ededed] leading-tight mb-6">
                    <span data-i18n="hero.title1">Belajar Lebih</span>
                    <span class="text-[#2563EB]" data-i18n="hero.title2">Mudah</span>,
                    <span data-i18n="hero.title3">Berkembang Lebih</span>
                    <span class="text-[#2563EB]" data-i18n="hero.title4">Cepat</span>
                </h1>

                <p class="text-lg text-[#64748B] leading-relaxed mb-8 max-w-lg" data-i18n="hero.subtitle">
                    EduCare membantu kamu belajar secara terstruktur melalui materi pembelajaran, quiz, dan pemantauan progress.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/register') }}" class="inline-flex items-center gap-2 bg-[#2563EB] text-white px-8 py-3.5 rounded-xl font-medium hover:bg-[#1D4ED8] transition-colors shadow-lg shadow-[#2563EB]/25">
                        <span data-i18n="hero.cta1">Mulai Belajar</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ url('/materials') }}" class="inline-flex items-center gap-2 bg-white text-[#111827] px-8 py-3.5 rounded-xl font-medium border border-[#E2E8F0] hover:border-[#2563EB] hover:text-[#2563EB] transition-colors dark:bg-[#1a1a1a] dark:border-[#2a2a2a] dark:text-[#ededed]">
                        <span data-i18n="hero.cta2">Lihat Materi</span>
                    </a>
                </div>

                <div class="flex items-center gap-8 mt-10">
                    <div>
                        <p class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">50+</p>
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="hero.stat1">Materi</p>
                    </div>
                    <div class="w-px h-10 bg-[#E2E8F0] dark:bg-[#2a2a2a]"></div>
                    <div>
                        <p class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">1200+</p>
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="hero.stat2">Siswa</p>
                    </div>
                    <div class="w-px h-10 bg-[#E2E8F0] dark:bg-[#2a2a2a]"></div>
                    <div>
                        <p class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">95%</p>
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="hero.stat3">Puas</p>
                    </div>
                </div>
            </div>

            {{-- Right: Illustration --}}
            <div class="relative flex justify-center lg:justify-end">
                <div class="relative w-full max-w-md">
                    <div class="bg-white rounded-3xl shadow-2xl shadow-[#2563EB]/10 p-8 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-[#2563EB]/10 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-[#111827] dark:text-[#ededed]">Materi Terstruktur</p>
                                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Dasar Pemrograman</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 bg-[#F8FAFC] rounded-xl dark:bg-[#111111]">
                                <div class="w-8 h-8 bg-[#16A34A]/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                <span class="text-sm text-[#111827] dark:text-[#ededed]">Pengenalan Variable</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-[#F8FAFC] rounded-xl dark:bg-[#111111]">
                                <div class="w-8 h-8 bg-[#16A34A]/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                <span class="text-sm text-[#111827] dark:text-[#ededed]">Tipe Data</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-[#2563EB]/5 rounded-xl border border-[#2563EB]/20">
                                <div class="w-8 h-8 bg-[#2563EB]/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /></svg>
                                </div>
                                <span class="text-sm font-medium text-[#2563EB]">Conditionals</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-[#F8FAFC] rounded-xl opacity-50 dark:bg-[#111111]">
                                <div class="w-8 h-8 bg-gray-200 rounded-lg flex items-center justify-center dark:bg-[#2a2a2a]">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                                <span class="text-sm text-[#64748B]">Loops</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="flex justify-between text-sm mb-2">
                                <span class="text-[#64748B] dark:text-[#a3a3a3]">Progress</span>
                                <span class="font-medium text-[#2563EB]">60%</span>
                            </div>
                            <div class="h-2 bg-[#E2E8F0] rounded-full overflow-hidden dark:bg-[#2a2a2a]">
                                <div class="h-full bg-[#2563EB] rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Cards --}}
                    <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-lg p-4 border border-[#E2E8F0] hidden sm:block dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div>
                                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Quiz Score</p>
                                <p class="font-bold text-[#111827] dark:text-[#ededed]">85/100</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-lg p-4 border border-[#E2E8F0] hidden sm:block dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-[#16A34A]/10 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                            </div>
                            <div>
                                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Sertifikat</p>
                                <p class="font-bold text-[#111827] dark:text-[#ededed]">Selesai!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tentang Section --}}
<section id="tentang" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-[#2563EB]/10 text-[#2563EB] px-4 py-2 rounded-full text-sm font-medium mb-4" data-i18n="cat.badge">
                Kategori Belajar
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="cat.title">Kategori Pendidikan</h2>
            <p class="text-[#64748B] dark:text-[#a3a3a3] max-w-2xl mx-auto text-lg" data-i18n="cat.subtitle">
                Pilih kategori yang ingin kamu pelajari.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">
            {{-- General Education --}}
            <div class="bg-white rounded-2xl p-6 border border-[#E2E8F0] hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all duration-300 group dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                <div class="w-14 h-14 bg-[#2563EB]/10 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-[#2563EB] transition-colors">
                    <svg class="w-7 h-7 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-2 text-lg" data-i18n="cat.gen">General Education</h3>
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-4" data-i18n="cat.gen_desc">Materi pendidikan umum untuk membangun fondasi pengetahuan.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Basic Algebra</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Interaction of Living Things</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Social & Cultural Diversity</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Indonesian & English Language</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Time Management</span>
                </div>
            </div>

            {{-- IT Education --}}
            <div class="bg-white rounded-2xl p-6 border border-[#E2E8F0] hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all duration-300 group dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                <div class="w-14 h-14 bg-[#16A34A]/10 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-[#16A34A] transition-colors">
                    <svg class="w-7 h-7 text-[#16A34A] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-2 text-lg" data-i18n="cat.it">IT Education</h3>
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-4" data-i18n="cat.it_desc">Materi teknologi informasi dan pemrograman.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">HTML Basics</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">CSS Basics</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">JavaScript</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">PHP</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Python</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Databases & SQL</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">Git & GitHub</span>
                    <span class="text-xs bg-[#F8FAFC] border border-[#E2E8F0] px-3 py-1 rounded-full text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a]">UI/UX Design</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Materi Section --}}
<section class="py-20 bg-white dark:bg-[#111111]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-[#2563EB]/10 text-[#2563EB] px-4 py-2 rounded-full text-sm font-medium mb-4" data-i18n="mat.badge">
                Materi Populer
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="mat.title">Materi Pembelajaran</h2>
            <p class="text-[#64748B] dark:text-[#a3a3a3] max-w-2xl mx-auto text-lg" data-i18n="mat.subtitle">
                Pilih materi yang ingin kamu pelajari dan mulai perjalanan belajarmu.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $materials = [
                    ['id' => 6, 'title' => 'HTML Basics', 'category' => 'IT Education', 'description' => 'Pelajari dasar HTML untuk membuat struktur halaman web.', 'difficulty' => 'Pemula', 'icon' => 'code'],
                    ['id' => 7, 'title' => 'CSS Basics', 'category' => 'IT Education', 'description' => 'Belajar CSS untuk mempercantik tampilan website.', 'difficulty' => 'Pemula', 'icon' => 'palette'],
                    ['id' => 8, 'title' => 'JavaScript Basics', 'category' => 'IT Education', 'description' => 'Pelajari dasar JavaScript untuk website interaktif.', 'difficulty' => 'Menengah', 'icon' => 'zap'],
                    ['id' => 1, 'title' => 'Basic Algebra', 'category' => 'General Education', 'description' => 'Pelajari konsep dasar aljabar.', 'difficulty' => 'Pemula', 'icon' => 'calculator'],
                ];
            @endphp

            @foreach($materials as $material)
                <a href="{{ url('/materials/' . $material['id']) }}" class="group bg-[#F8FAFC] rounded-2xl p-6 border border-[#E2E8F0] hover:border-[#2563EB]/30 hover:shadow-lg hover:shadow-[#2563EB]/5 transition-all duration-300 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                    <div class="w-12 h-12 bg-[#2563EB]/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#2563EB] transition-colors">
                        @if($material['icon'] === 'code')
                            <svg class="w-6 h-6 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        @elseif($material['icon'] === 'palette')
                            <svg class="w-6 h-6 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
                        @elseif($material['icon'] === 'zap')
                            <svg class="w-6 h-6 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        @else
                            <svg class="w-6 h-6 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                        @endif
                    </div>
                    <p class="text-xs font-medium text-[#2563EB] mb-1">{{ $material['category'] }}</p>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-2 group-hover:text-[#2563EB] transition-colors">{{ $material['title'] }}</h3>
                    <p class="text-sm text-[#64748B] mb-4">{{ $material['description'] }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium text-[#64748B] bg-white px-3 py-1 rounded-full border border-[#E2E8F0] dark:bg-[#111111] dark:border-[#2a2a2a]">{{ $material['difficulty'] }}</span>
                        <span class="text-sm font-medium text-[#2563EB] group-hover:translate-x-1 transition-transform" data-i18n="mat.learn">Pelajari &rarr;</span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ url('/materials') }}" class="inline-flex items-center gap-2 text-[#2563EB] font-medium hover:underline">
                <span data-i18n="mat.view_all">Lihat Semua Materi</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
        </div>
    </div>
</section>

{{-- Fitur Section --}}
<section id="fitur" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-[#2563EB]/10 text-[#2563EB] px-4 py-2 rounded-full text-sm font-medium mb-4" data-i18n="feat.badge">
                Fitur Unggulan
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="feat.title">Kenapa Pilih EduCare?</h2>
            <p class="text-[#64748B] dark:text-[#a3a3a3] max-w-2xl mx-auto text-lg" data-i18n="feat.subtitle">
                Fitur lengkap untuk mendukung perjalanan belajarmu.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex gap-4">
                <div class="w-12 h-12 bg-[#2563EB]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1" data-i18n="f1">Materi Lengkap</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="f1d">Koleksi materi dari dasar hingga lanjutan.</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-12 h-12 bg-[#16A34A]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1" data-i18n="f2">Quiz Interaktif</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="f2d">Uji pemahaman dengan quiz yang seru.</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-12 h-12 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1" data-i18n="f4">Progress Tracking</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="f4d">Pantau kemajuan belajar secara real-time.</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-12 h-12 bg-[#DC2626]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#DC2626]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1" data-i18n="f5">Sertifikat</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="f5d">Dapatkan sertifikat setelah menyelesaikan materi.</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-12 h-12 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#8B5CF6]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1" data-i18n="f6">Multi Role</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="f6d">Akses sebagai siswa, guru, atau admin.</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-12 h-12 bg-[#06B6D4]/10 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#06B6D4]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1" data-i18n="f7">Responsive</h3>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="f7d">Akses dari perangkat apapun, kapan saja.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section id="faq" class="py-20 bg-white dark:bg-[#111111]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-[#2563EB]/10 text-[#2563EB] px-4 py-2 rounded-full text-sm font-medium mb-4" data-i18n="faq.badge">
                FAQ
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="faq.title">Pertanyaan Umum</h2>
            <p class="text-[#64748B] dark:text-[#a3a3a3] text-lg" data-i18n="faq.sub">
                Jawaban untuk pertanyaan yang sering ditanyakan.
            </p>
        </div>

        <div class="space-y-4">
            @php
                $faqs = [
                    ['q_key' => 'faq.q1', 'a_key' => 'faq.a1', 'question' => 'Apa itu EduCare?', 'answer' => 'EduCare adalah platform pembelajaran digital yang membantu siswa belajar secara terstruktur melalui materi pembelajaran, quiz, dan pemantauan progress.'],
                    ['q_key' => 'faq.q2', 'a_key' => 'faq.a2', 'question' => 'Bagaimana cara belajar di EduCare?', 'answer' => 'Cukup daftar akun, pilih materi yang ingin dipelajari, baca materi, kerjakan quiz, dan pantau progress belajarmu.'],
                    ['q_key' => 'faq.q3', 'a_key' => 'faq.a3', 'question' => 'Apakah EduCare gratis?', 'answer' => 'Ya, EduCare dapat digunakan secara gratis. Kamu bisa mengakses semua materi dan fitur tanpa biaya.'],
                    ['q_key' => 'faq.q4', 'a_key' => 'faq.a4', 'question' => 'Ada video pembelajaran?', 'answer' => 'Ya, banyak materi dilengkapi video untuk pemahaman lebih baik.'],
                    ['q_key' => 'faq.q5', 'a_key' => 'faq.a5', 'question' => 'Bagaimana cara mengerjakan quiz?', 'answer' => 'Pilih quiz yang tersedia, kerjakan soal-soal yang ada, dan lihat hasilnya setelah selesai. Nilai akan otomatis terhitung.'],
                    ['q_key' => 'faq.q6', 'a_key' => 'faq.a6', 'question' => 'Bagaimana mendapatkan sertifikat?', 'answer' => 'Selesaikan materi dan quiz dengan nilai yang memenuhi passing score, maka sertifikat akan otomatis diterbitkan.'],
                ];
            @endphp

            @foreach($faqs as $index => $faq)
                <div class="bg-[#F8FAFC] rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                    <button onclick="toggleFaq({{ $index }})" class="w-full flex items-center justify-between p-5 text-left">
                        <span class="font-semibold text-[#111827] dark:text-[#ededed]" data-i18n="{{ $faq['q_key'] }}">{{ $faq['question'] }}</span>
                        <svg id="faq-icon-{{ $index }}" class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3] transition-transform duration-300 shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-content-{{ $index }}" class="hidden px-5 pb-5">
                        <p class="text-[#64748B] dark:text-[#a3a3a3] leading-relaxed" data-i18n="{{ $faq['a_key'] }}">{{ $faq['answer'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-[#2563EB] to-[#1D4ED8] rounded-3xl p-10 sm:p-16 text-center text-white relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                <div class="absolute bottom-10 right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
            </div>
            <div class="relative">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4" data-i18n="cta.title">Siap Belajar?</h2>
                <p class="text-blue-100 text-lg mb-8 max-w-xl mx-auto" data-i18n="cta.sub">
                    Mulai perjalanan belajarmu sekarang dan raih sertifikat pertamamu.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ url('/register') }}" class="inline-flex items-center gap-2 bg-white text-[#2563EB] px-8 py-3.5 rounded-xl font-medium hover:bg-blue-50 transition-colors">
                        <span data-i18n="cta.btn1">Daftar Gratis</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                    <a href="{{ url('/materials') }}" class="inline-flex items-center gap-2 bg-white/10 text-white px-8 py-3.5 rounded-xl font-medium border border-white/20 hover:bg-white/20 transition-colors">
                        <span data-i18n="cta.btn2">Lihat Materi</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
