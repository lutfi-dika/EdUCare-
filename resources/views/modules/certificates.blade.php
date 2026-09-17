@extends('layouts.dashboard')

@section('title', 'Sertifikat Saya - EduCare')
@section('page-title', 'Sertifikat Saya')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-7xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold dark:text-[#ededed]">Sertifikat Saya</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Sertifikat yang sudah kamu peroleh dari course yang diselesaikan.</p>
    </div>

    @if(count($certificates) > 0)
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($certificates as $cert)
                <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl overflow-hidden hover:shadow-lg transition-shadow">
                    {{-- Certificate Preview --}}
                    <div class="bg-gradient-to-br from-[#2563EB] to-[#1D4ED8] p-8 text-center text-white relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-full">
                            <div class="absolute top-4 left-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                            <div class="absolute bottom-4 right-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                        </div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <p class="text-xs text-blue-200 mb-1">SERTIFIKAT PENYELESAIAN</p>
                            <h3 class="text-base font-bold">{{ $cert['course_name'] }}</h3>
                            <p class="text-xs text-blue-200 mt-2">No. {{ $cert['certificate_number'] }}</p>
                        </div>
                    </div>

                    {{-- Info --}}
                    <div class="p-5">
                        <div class="space-y-2 mb-5">
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Nama</span>
                                <span class="text-sm font-semibold dark:text-[#ededed]">{{ $cert['user_name'] }}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Score</span>
                                <span class="text-sm font-semibold text-green-600 dark:text-green-400">{{ $cert['score'] }}%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Tanggal</span>
                                <span class="text-sm font-semibold dark:text-[#ededed]">{{ $cert['completed_at'] }}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-[#64748B] dark:text-[#a3a3a3]">Status</span>
                                <span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Valid</span>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <a href="{{ url('/certificates/module/' . $cert['course_id']) }}" class="flex-1 px-4 py-2.5 bg-[#2563EB] text-white text-xs font-semibold rounded-xl hover:bg-[#1d4ed8] transition-colors text-center">
                                Lihat
                            </a>
                            <a href="{{ url('/certificates/module/' . $cert['course_id'] . '/verify') }}" class="px-4 py-2.5 bg-gray-100 dark:bg-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3] text-xs font-semibold rounded-xl hover:bg-gray-200 dark:hover:bg-[#3a3a3a] transition-colors text-center">
                                Verifikasi
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        {{-- Empty State --}}
        <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-12 text-center">
            <div class="w-20 h-20 bg-gray-100 dark:bg-[#2a2a2a] rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-[#94A3B8] dark:text-[#64748B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold dark:text-[#ededed] mb-2">Belum Ada Sertifikat</h3>
            <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-6">Selesaikan semua lesson dan lulus quiz untuk mendapatkan sertifikat.</p>
            <a href="{{ url('/modules') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-[#2563EB] text-white text-sm font-semibold rounded-xl hover:bg-[#1d4ed8] transition-colors">
                Mulai Belajar
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
        </div>
    @endif

</div>
@endsection
