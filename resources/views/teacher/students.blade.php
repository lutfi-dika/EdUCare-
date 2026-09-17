@extends('layouts.dashboard')

@section('title', 'EduCare - Daftar Siswa')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Daftar Siswa')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Daftar Siswa</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Monitor progress dan nilai siswa.</p>
</div>

<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Nama</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Email</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Progress</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Nilai</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-sm font-semibold">
                                    {{ strtoupper(substr($student['name'], 0, 1)) }}
                                </div>
                                <p class="font-medium text-[#111827] dark:text-[#ededed]">{{ $student['name'] }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $student['email'] }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-24 h-2 bg-[#E2E8F0] dark:bg-[#475569] rounded-full overflow-hidden">
                                    <div class="h-full bg-[#2563EB] rounded-full" style="width: {{ $student['progress'] }}%"></div>
                                </div>
                                <span class="text-xs font-medium text-[#64748B] dark:text-[#a3a3a3]">{{ $student['progress'] }}%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold {{ $student['score'] >= 70 ? 'text-[#16A34A]' : 'text-[#DC2626]' }}">{{ $student['score'] }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-medium text-[#16A34A] bg-[#16A34A]/10 px-3 py-1 rounded-full">{{ $student['status'] }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
