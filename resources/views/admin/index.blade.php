@extends('layouts.dashboard')

@section('title', 'EduCare - Dashboard Admin')

@section('sidebar')
    @include('components.sidebar-admin')
@endsection

@section('page-title', 'Dashboard Admin')

@section('content')
{{-- Welcome --}}
<div class="mb-8">
    <h1 class="text-2xl sm:text-3xl font-bold text-[#111827] dark:text-[#ededed]">Halo, {{ $user['name'] }} 👋</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Selamat datang di panel admin EduCare.</p>
</div>

{{-- Statistic Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8">
    @php
    $statCards = [
        ['label' => 'Total Users', 'value' => $stats['total_users'], 'color' => '#2563EB', 'icon' => 'users'],
        ['label' => 'Total Guru', 'value' => $stats['total_guru'], 'color' => '#16A34A', 'icon' => 'guru'],
        ['label' => 'Total Siswa', 'value' => $stats['total_siswa'], 'color' => '#F59E0B', 'icon' => 'siswa'],
        ['label' => 'Total Materi', 'value' => $stats['total_materi'], 'color' => '#8B5CF6', 'icon' => 'materi'],
        ['label' => 'Total Quiz', 'value' => $stats['total_quiz'], 'color' => '#DC2626', 'icon' => 'quiz'],
        ['label' => 'Total Sertifikat', 'value' => $stats['total_sertifikat'], 'color' => '#06B6D4', 'icon' => 'sertifikat'],
    ];
    @endphp
    @foreach($statCards as $stat)
    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background-color: {{ $stat['color'] }}15">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" style="color: {{ $stat['color'] }}">
                    @if($stat['icon'] == 'users')
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    @elseif($stat['icon'] == 'guru')
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    @elseif($stat['icon'] == 'siswa')
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    @elseif($stat['icon'] == 'materi')
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    @elseif($stat['icon'] == 'quiz')
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    @else
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    @endif
                </svg>
            </div>
            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $stat['label'] }}</span>
        </div>
        <p class="text-2xl sm:text-3xl font-bold dark:text-[#ededed]" style="color: {{ $stat['color'] }}">{{ $stat['value'] }}</p>
    </div>
    @endforeach
</div>

{{-- Quick Actions --}}
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <a href="{{ url('/admin/users') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg transition-all group flex items-center gap-4 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-12 h-12 bg-[#2563EB]/10 rounded-xl flex items-center justify-center group-hover:bg-[#2563EB] transition-colors shrink-0">
            <svg class="w-6 h-6 text-[#2563EB] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
        <div>
            <h3 class="font-bold text-[#111827] dark:text-[#ededed] text-sm">Kelola Users</h3>
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $stats['total_users'] }} user</p>
        </div>
    </a>

    <a href="{{ url('/admin/categories') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg transition-all group flex items-center gap-4 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-12 h-12 bg-[#16A34A]/10 rounded-xl flex items-center justify-center group-hover:bg-[#16A34A] transition-colors shrink-0">
            <svg class="w-6 h-6 text-[#16A34A] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
        </div>
        <div>
            <h3 class="font-bold text-[#111827] dark:text-[#ededed] text-sm">Kelola Kategori</h3>
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $stats['total_kategori'] }} kategori</p>
        </div>
    </a>

    <a href="{{ url('/admin/materials') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg transition-all group flex items-center gap-4 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-12 h-12 bg-[#F59E0B]/10 rounded-xl flex items-center justify-center group-hover:bg-[#F59E0B] transition-colors shrink-0">
            <svg class="w-6 h-6 text-[#F59E0B] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
        </div>
        <div>
            <h3 class="font-bold text-[#111827] dark:text-[#ededed] text-sm">Kelola Materi</h3>
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $stats['total_materi'] }} materi</p>
        </div>
    </a>

    <a href="{{ url('/admin/quizzes') }}" class="bg-white rounded-2xl border border-[#E2E8F0] p-5 hover:shadow-lg transition-all group flex items-center gap-4 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="w-12 h-12 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center group-hover:bg-[#8B5CF6] transition-colors shrink-0">
            <svg class="w-6 h-6 text-[#8B5CF6] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
        </div>
        <div>
            <h3 class="font-bold text-[#111827] dark:text-[#ededed] text-sm">Kelola Quiz</h3>
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $stats['total_quiz'] }} quiz</p>
        </div>
    </a>
</div>
@endsection
