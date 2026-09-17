@extends('layouts.dashboard')

@section('title', 'EduCare - Statistik Guru')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Statistik')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_stat.title">Statistik Nilai Quiz</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="t_stat.sub">Analisis performa quiz semua siswa.</p>
</div>

{{-- Overview Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1" data-i18n="t_stat.total_siswa">Total Siswa</p>
        <p class="text-2xl font-bold text-[#2563EB]">{{ $totalStudents }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1" data-i18n="t_stat.total_pengerjaan">Total Pengerjaan</p>
        <p class="text-2xl font-bold text-[#F59E0B]">{{ $totalQuizResults }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1" data-i18n="t_stat.rata_rata">Rata-rata Nilai</p>
        <p class="text-2xl font-bold text-[#8B5CF6]">{{ $overallAvg }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-1" data-i18n="t_stat.tingkat_lulus">Tingkat Kelulusan</p>
        <p class="text-2xl font-bold text-[#16A34A]">{{ $passRate }}%</p>
    </div>
</div>

{{-- Per Quiz Statistics --}}
<div class="mb-8">
    <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="t_stat.per_quiz">Statistik Per Quiz</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($quizzes as $quiz)
            <div class="bg-white rounded-2xl p-5 border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
                <h3 class="font-bold text-[#111827] dark:text-[#ededed] text-sm mb-1">{{ $quiz['title'] }}</h3>
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] mb-3">{{ $quiz['material'] }}</p>
                <div class="flex items-center justify-between text-sm mb-2">
                    <span class="text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_stat.dikerjakan">Dikerjakan</span>
                    <span class="font-medium text-[#111827] dark:text-[#ededed]">{{ $quiz['total_taken'] }} kali</span>
                </div>
                <div class="flex items-center justify-between text-sm mb-2">
                    <span class="text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_stat.rata2">Rata-rata</span>
                    <span class="font-bold {{ $quiz['avg_score'] >= $quiz['passing_score'] ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $quiz['avg_score'] }}</span>
                </div>
                <div class="flex items-center justify-between text-sm mb-3">
                    <span class="text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_stat.lulus_gagal">Lulus / Gagal</span>
                    <span><span class="text-[#16A34A] font-medium">{{ $quiz['passed'] }}</span> / <span class="text-[#DC2626] font-medium">{{ $quiz['failed'] }}</span></span>
                </div>
                @if($quiz['total_taken'] > 0)
                    <div class="h-2 bg-[#E2E8F0] dark:bg-[#2a2a2a] rounded-full overflow-hidden">
                        <div class="h-full rounded-full {{ $quiz['avg_score'] >= $quiz['passing_score'] ? 'bg-[#16A34A]' : 'bg-[#DC2626]' }}" style="width: {{ $quiz['avg_score'] }}%"></div>
                    </div>
                @endif
            </div>
        @empty
            <div class="col-span-full text-center py-12 bg-white dark:bg-[#1a1a1a] rounded-2xl border border-[#E2E8F0] dark:border-[#2a2a2a]">
                <p class="text-[#64748B] dark:text-[#a3a3a3]">Belum ada data quiz.</p>
            </div>
        @endforelse
    </div>
</div>

{{-- Per Student Scores --}}
<div>
    <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-4">Nilai Per Siswa</h2>
    <div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                        <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Nama</th>
                        <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Email</th>
                        <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Quiz Dikerjakan</th>
                        <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Rata-rata Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($studentScores as $student)
                        <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a]">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                        {{ strtoupper(substr($student['name'], 0, 1)) }}
                                    </div>
                                    <p class="font-medium text-[#111827] dark:text-[#ededed]">{{ $student['name'] }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $student['email'] }}</td>
                            <td class="px-6 py-4 text-center text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $student['quiz_count'] }}</td>
                            <td class="px-6 py-4 text-center">
                                <span class="font-bold {{ $student['avg_score'] >= 70 ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $student['avg_score'] }}</span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-[#64748B] dark:text-[#a3a3a3]">Belum ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
