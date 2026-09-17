@extends('layouts.dashboard')

@section('title', 'EduCare - Sertifikat')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('page-title', 'Sertifikat')

@section('content')
@if($certificates->count() > 0)
    <div class="grid sm:grid-cols-2 gap-6">
        @foreach($certificates as $cert)
            <div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
                {{-- Certificate Preview --}}
                <div class="bg-gradient-to-br from-[#2563EB] to-[#1D4ED8] p-8 text-center text-white relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full">
                        <div class="absolute top-4 left-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                        <div class="absolute bottom-4 right-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                    </div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <p class="text-sm text-blue-200 mb-1">Sertifikat Penyelesaian</p>
                        <h3 class="text-lg font-bold">{{ $cert->title }}</h3>
                        <p class="text-xs text-blue-200 mt-2">No. {{ $cert->certificate_number }}</p>
                    </div>
                </div>

                {{-- Info --}}
                <div class="p-6">
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Nama</span>
                            <span class="text-sm font-medium text-[#111827] dark:text-[#ededed]">{{ session('user.name') }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Tanggal</span>
                            <span class="text-sm font-medium text-[#111827] dark:text-[#ededed]">{{ $cert->issued_at ? $cert->issued_at->format('d M Y') : '-' }}</span>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button onclick="window.print()" class="flex-1 px-4 py-2.5 bg-[#F8FAFC] dark:bg-[#111111] text-[#111827] dark:text-[#ededed] text-sm font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:bg-[#EFF6FF] dark:hover:bg-[#222222] transition-colors text-center">
                            Lihat Sertifikat
                        </button>
                        <button onclick="window.print()" class="flex-1 px-4 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors text-center">
                            Download
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    {{-- Empty State --}}
    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-12 text-center dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <div class="w-20 h-20 bg-[#F8FAFC] dark:bg-[#111111] rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-[#94A3B8] dark:text-[#475569]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
        </div>
        <h3 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-2">Belum Ada Sertifikat</h3>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mb-6">Selesaikan materi dan quiz untuk mendapatkan sertifikat pertamamu.</p>
        <a href="{{ url('/materials') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
            Mulai Belajar
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
@endif

<style>
    @media print {
        body * { visibility: hidden; }
        .bg-gradient-to-br { display: block !important; }
        .bg-gradient-to-br * { visibility: visible; }
        .bg-gradient-to-br { position: absolute; left: 0; top: 0; width: 100%; }
    }
</style>
@endsection
