@extends('layouts.dashboard')

@section('title', 'EduCare - Export Laporan')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Export Laporan')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_exp.title">Export Laporan</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="t_exp.sub">Download data siswa dalam format CSV.</p>
    </div>
    <a href="{{ url('/teacher/export/csv') }}" class="px-5 py-2.5 bg-[#16A34A] text-white text-sm font-medium rounded-xl hover:bg-[#15803D] transition-colors flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
        <span data-i18n="t_exp.download">Download CSV</span>
    </a>
</div>

<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.nama">Nama</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.email">Email</th>
                    <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.progress">Progress</th>
                    <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.rata2">Rata-rata Nilai</th>
                    <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.quiz_dk">Quiz Dikerjakan</th>
                    <th class="text-center px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.materi_selesai">Materi Selesai</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
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
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <div class="w-20 h-2 bg-[#E2E8F0] dark:bg-[#475569] rounded-full overflow-hidden">
                                    <div class="h-full bg-[#2563EB] rounded-full" style="width: {{ $student['progress'] }}%"></div>
                                </div>
                                <span class="text-xs font-medium text-[#64748B] dark:text-[#a3a3a3]">{{ $student['progress'] }}%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="font-bold {{ $student['score'] >= 70 ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $student['score'] }}</span>
                        </td>
                        <td class="px-6 py-4 text-center text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $student['quiz_count'] }}</td>
                        <td class="px-6 py-4 text-center text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $student['completed_materials'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_exp.belum_ada">Belum ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
