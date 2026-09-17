@extends('layouts.dashboard')

@section('title', 'EduCare - Statistik Saya')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('page-title', 'Statistik Saya')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="s_stat.title">Statistik Belajar Saya</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="s_stat.sub">Ringkasan performa belajar kamu.</p>
</div>

{{-- Overview Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1">Course Tersedia</p>
        <p class="text-2xl font-bold text-[#2563EB]">{{ $moduleStats['total_courses'] }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1">Lesson Selesai</p>
        <p class="text-2xl font-bold text-[#16A34A]">{{ $moduleStats['completed_lessons'] }}<span class="text-sm text-[#64748B] dark:text-[#a3a3a3] font-normal">/{{ $moduleStats['total_lessons'] }}</span></p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1">Quiz Lulus</p>
        <p class="text-2xl font-bold text-[#F59E0B]">{{ $moduleStats['quizzes_passed'] }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1">Course Selesai</p>
        <p class="text-2xl font-bold text-[#8B5CF6]">{{ $moduleStats['courses_completed'] }}</p>
    </div>
</div>

{{-- Course Progress --}}
<div class="mb-8">
    <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-4">Progress Course</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($moduleStats['course_progress'] as $cp)
            <a href="{{ url('/modules/' . $cp['id']) }}" class="bg-white rounded-2xl p-4 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] hover:border-[#2563EB]/30 transition-colors group">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-semibold text-[#111827] dark:text-[#ededed] text-sm group-hover:text-[#2563EB] transition-colors">{{ $cp['title'] }}</h3>
                    @if($cp['percentage'] === 100)
                        <span class="text-[10px] font-medium text-[#16A34A] bg-[#16A34A]/10 px-2 py-0.5 rounded-full">Selesai</span>
                    @endif
                </div>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] mb-3">{{ $cp['category'] }}</p>
                <div class="flex items-center justify-between text-xs mb-1">
                    <span class="text-[#64748B] dark:text-[#a3a3a3]">{{ $cp['completed'] }}/{{ $cp['total'] }} lesson</span>
                    <span class="font-medium" style="color: {{ $cp['color'] }}">{{ $cp['percentage'] }}%</span>
                </div>
                <div class="h-1.5 bg-[#E2E8F0] dark:bg-[#2a2a2a] rounded-full overflow-hidden">
                    <div class="h-full rounded-full" style="width: {{ $cp['percentage'] }}%; background: {{ $cp['color'] }}"></div>
                </div>
            </a>
        @endforeach
    </div>
</div>

{{-- Legacy Material Progress --}}
@if($totalMaterials > 0)
<div class="mb-8">
    <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="s_stat.progress_materi">Progress Materi</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($materialProgress as $mp)
            <div class="bg-white rounded-2xl p-4 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-semibold text-[#111827] dark:text-[#ededed] text-sm">{{ $mp['title'] }}</h3>
                    @if($mp['completed'])
                        <span class="text-[10px] font-medium text-[#16A34A] bg-[#16A34A]/10 px-2 py-0.5 rounded-full">Selesai</span>
                    @endif
                </div>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] mb-3">{{ $mp['category'] }}</p>
                <div class="flex items-center justify-between text-xs mb-1">
                    <span class="text-[#64748B] dark:text-[#a3a3a3]">Progress</span>
                    <span class="font-medium text-[#2563EB]">{{ $mp['progress'] }}%</span>
                </div>
                <div class="h-1.5 bg-[#E2E8F0] dark:bg-[#2a2a2a] rounded-full overflow-hidden">
                    <div class="h-full bg-[#2563EB] rounded-full" style="width: {{ $mp['progress'] }}%"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif

{{-- Quiz History --}}
<div>
    <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="s_stat.riwayat_quiz">Riwayat Quiz</h2>
    <div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                        <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Quiz</th>
                        <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Materi</th>
                        <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="s_stat.benar_salah">Benar/Salah</th>
                        <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="s_stat.skor">Skor</th>
                        <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Status</th>
                        <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="s_stat.tanggal">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($quizResults as $qr)
                        <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a]">
                            <td class="px-6 py-4 font-medium text-[#111827] dark:text-[#ededed] text-sm">{{ $qr['quiz_title'] }}</td>
                            <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $qr['material'] }}</td>
                            <td class="px-6 py-4 text-center text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $qr['correct'] }}/{{ $qr['correct'] + $qr['wrong'] }}</td>
                            <td class="px-6 py-4 text-center">
                                <span class="font-bold {{ $qr['score'] >= 70 ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $qr['score'] }}</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if($qr['passed'])
                                    <span class="text-xs font-medium text-[#16A34A] bg-[#16A34A]/10 px-3 py-1 rounded-full" data-i18n="s_stat.lulus">Lulus</span>
                                @else
                                    <span class="text-xs font-medium text-[#DC2626] bg-red-50 dark:bg-red-900/20 px-3 py-1 rounded-full" data-i18n="s_stat.gagal">Gagal</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $qr['date'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-[#64748B] dark:text-[#a3a3a3]" data-i18n="s_stat.belum_ada">Belum ada riwayat quiz.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
