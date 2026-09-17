@extends('layouts.dashboard')

@section('title', 'EduCare - Kelola Materi')

@section('sidebar')
    @include('components.sidebar-admin')
@endsection

@section('page-title', 'Kelola Materi')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Semua Materi</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Lihat semua materi yang tersedia di platform.</p>
</div>

<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Judul</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Kategori</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Level</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($materials as $material)
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-medium text-[#111827] dark:text-[#ededed]">{{ $material->title }}</p>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $material->category->name ?? '-' }}</td>
                        <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ ucfirst($material->difficulty) }}</td>
                        <td class="px-6 py-4">
                            @if($material->status === 'published')
                                <span class="text-xs font-medium text-[#16A34A] bg-[#16A34A]/10 px-3 py-1 rounded-full">Published</span>
                            @else
                                <span class="text-xs font-medium text-[#F59E0B] bg-[#F59E0B]/10 px-3 py-1 rounded-full">Draft</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
