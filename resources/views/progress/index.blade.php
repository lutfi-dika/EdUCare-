@extends('layouts.dashboard')

@section('title', 'EduCare - Progress Belajar')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('page-title', 'Progress Belajar')

@section('content')
{{-- Overall Progress --}}
<div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 mb-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <div class="flex flex-col sm:flex-row items-center gap-8">
        <div class="relative shrink-0">
            <svg class="w-36 h-36 transform -rotate-90">
                <circle cx="72" cy="72" r="60" stroke="#E2E8F0" class="dark:stroke-[#475569]" stroke-width="10" fill="none" />
                <circle cx="72" cy="72" r="60" stroke="#2563EB" stroke-width="10" fill="none"
                    stroke-dasharray="{{ 2 * 3.14159 * 60 }}"
                    stroke-dashoffset="{{ 2 * 3.14159 * 60 * (1 - $overallProgress / 100) }}"
                    stroke-linecap="round" />
            </svg>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <p class="text-3xl font-bold text-[#111827] dark:text-[#ededed]">{{ $overallProgress }}%</p>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">Selesai</p>
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-xl font-bold text-[#111827] dark:text-[#ededed] mb-2">Overall Progress</h2>
            <p class="text-[#64748B] dark:text-[#a3a3a3] mb-4">Kamu telah menyelesaikan {{ $overallProgress }}% dari total materi yang tersedia.</p>
            <div class="flex items-center gap-4 text-sm">
                <span class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-[#16A34A] rounded-full"></span>
                    Selesai: 2 materi
                </span>
                <span class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-[#2563EB] rounded-full"></span>
                    Dalam Proses: 5 materi
                </span>
            </div>
        </div>
    </div>
</div>

{{-- Detail Progress --}}
<div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-6">Detail Progress per Materi</h2>

    <div class="space-y-4">
        @foreach($materials as $material)
            <div class="flex items-center gap-4 p-4 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl transition-colors duration-200">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0
                    {{ $material['completed'] ? 'bg-[#16A34A]/10' : 'bg-[#2563EB]/10' }}">
                    @if($material['completed'])
                        <svg class="w-6 h-6 text-[#16A34A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    @else
                        <svg class="w-6 h-6 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    @endif
                </div>

                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <p class="font-semibold text-[#111827] dark:text-[#ededed] truncate">{{ $material['title'] }}</p>
                        @if($material['completed'])
                            <span class="text-xs font-medium text-[#16A34A] bg-[#16A34A]/10 px-2 py-0.5 rounded-full">Selesai</span>
                        @endif
                    </div>
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $material['category'] }}</p>
                    <div class="mt-3">
                        <div class="flex items-center justify-between text-xs mb-1">
                            <span class="text-[#64748B] dark:text-[#a3a3a3]">Progress</span>
                            <span class="font-medium {{ $material['completed'] ? 'text-[#16A34A]' : 'text-[#2563EB]' }}">{{ $material['progress'] }}%</span>
                        </div>
                        <div class="h-2 bg-[#E2E8F0] dark:bg-[#475569] rounded-full overflow-hidden">
                            <div class="h-full rounded-full {{ $material['completed'] ? 'bg-[#16A34A]' : 'bg-[#2563EB]' }}" style="width: {{ $material['progress'] }}%"></div>
                        </div>
                    </div>
                </div>

                @if(!$material['completed'])
                    <a href="{{ url('/materials/' . $material['id']) }}" class="shrink-0 px-4 py-2 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
                        Lanjutkan
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
