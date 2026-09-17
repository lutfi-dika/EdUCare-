@extends('layouts.dashboard')

@section('title', 'EduCare - Kelola Sertifikat')

@section('sidebar')
    @include('components.sidebar-admin')
@endsection

@section('page-title', 'Kelola Sertifikat')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Semua Sertifikat</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Lihat semua sertifikat yang telah diterbitkan.</p>
</div>

<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Nama</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Sertifikat</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Tanggal</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($certificates as $cert)
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                    {{ strtoupper(substr($cert->user->name ?? '', 0, 1)) }}
                                </div>
                                <p class="font-medium text-[#111827] dark:text-[#ededed]">{{ $cert->user->name ?? '-' }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $cert->title }}</td>
                        <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $cert->issued_at ? $cert->issued_at->format('d M Y') : '-' }}</td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-medium text-[#16A34A] bg-[#16A34A]/10 px-3 py-1 rounded-full">Aktif</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
