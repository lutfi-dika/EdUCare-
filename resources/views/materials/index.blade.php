@extends('layouts.app')

@section('title', 'EduCare - Materi Pembelajaran')

@section('content')

<section class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="mat.title">Materi Pembelajaran</h1>
            <p class="text-[#64748B] dark:text-[#a3a3a3] text-lg max-w-2xl mx-auto" data-i18n="mat.subtitle">
                Pilih materi yang ingin kamu pelajari dan mulai perjalanan belajarmu.
            </p>
        </div>

        {{-- Search & Filter --}}
        <div class="bg-white rounded-2xl border border-[#E2E8F0] p-4 sm:p-6 mb-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
            <form action="{{ url('/materials') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1 relative">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" name="search" value="{{ request('search') }}" data-i18n="mat.search" placeholder="Cari materi..."
                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
                </div>
                <select name="category"
                    class="px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                    <option value="" data-i18n="mat.all">Semua Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->name }}" {{ request('category') == $cat->name ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
                <select name="difficulty"
                    class="px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                    <option value="">Semua Level</option>
                    <option value="Pemula" {{ request('difficulty') == 'Pemula' ? 'selected' : '' }}>Pemula</option>
                    <option value="Menengah" {{ request('difficulty') == 'Menengah' ? 'selected' : '' }}>Menengah</option>
                    <option value="Lanjut" {{ request('difficulty') == 'Lanjut' ? 'selected' : '' }}>Lanjut</option>
                </select>
                <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors" data-i18n="mat.search">
                    Cari
                </button>
            </form>
        </div>

        {{-- Materials Grid --}}
        @if(count($materials) > 0)
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($materials as $material)
                    <a href="{{ url('/materials/' . $material->id) }}" class="group bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden hover:shadow-lg hover:shadow-[#2563EB]/5 hover:border-[#2563EB]/30 transition-all duration-300 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                        <div class="h-40 bg-gradient-to-br from-[#2563EB]/5 to-[#2563EB]/10 flex items-center justify-center relative">
                            <svg class="w-12 h-12 text-[#2563EB]/40" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xs font-medium text-[#2563EB] bg-[#EFF6FF] px-2.5 py-1 rounded-full">{{ $material->category->name ?? '' }}</span>
                                <span class="text-xs font-medium text-[#64748B] bg-[#F8FAFC] px-2.5 py-1 rounded-full border border-[#E2E8F0] dark:bg-[#111111] dark:border-[#2a2a2a]">{{ ucfirst($material->difficulty) }}</span>
                            </div>
                            <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-2 group-hover:text-[#2563EB] transition-colors">{{ $material->title }}</h3>
                            <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] line-clamp-2 mb-4">{{ $material->description }}</p>
                            <span class="text-sm font-medium text-[#2563EB] group-hover:translate-x-1 inline-block transition-transform" data-i18n="mat.learn">Mulai Belajar &rarr;</span>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-2xl border border-[#E2E8F0] p-12 text-center dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                <div class="w-20 h-20 bg-[#F8FAFC] rounded-full flex items-center justify-center mx-auto mb-6 dark:bg-[#111111]">
                    <svg class="w-10 h-10 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-2">Tidak Ditemukan</h3>
                <p class="text-[#64748B] dark:text-[#a3a3a3] mb-6">Tidak ada materi yang sesuai dengan pencarianmu.</p>
                <a href="{{ url('/materials') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
                    Lihat Semua Materi
                </a>
            </div>
        @endif
    </div>
</section>

@endsection
