@extends('layouts.dashboard')

@section('title', 'EduCare - Kelola Kategori')

@section('sidebar')
    @include('components.sidebar-admin')
@endsection

@section('page-title', 'Kelola Kategori')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Kategori</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Kelola kategori materi pembelajaran.</p>
    </div>
    <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="px-5 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
        + Tambah Kategori
    </button>
</div>

@if(session('success'))
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 text-sm rounded-xl p-4 mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($categories as $cat)
        <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 bg-[#2563EB]/10 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 rounded-lg hover:bg-[#DBEAFE] dark:hover:bg-[#2563EB]/30 transition-colors">Edit</button>
                    <form action="{{ url('/admin/categories/' . $cat->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1.5 text-xs font-medium text-[#DC2626] bg-red-50 dark:bg-red-900/20 rounded-lg hover:bg-red-100 dark:hover:bg-red-900/30 transition-colors">Hapus</button>
                    </form>
                </div>
            </div>
            <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-1">{{ $cat->name }}</h3>
            <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mb-3">{{ $cat->description ?? '-' }}</p>
            <span class="text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 px-3 py-1 rounded-full">{{ $cat->materials_count }} materi</span>
        </div>
    @endforeach
</div>

{{-- Add Modal --}}
<div id="addModal" class="hidden fixed inset-0 bg-black/50 dark:bg-black/70 z-50 flex items-center justify-center p-4">
    <div class="bg-white dark:bg-[#1a1a1a] rounded-2xl w-full max-w-md p-6 sm:p-8 transition-colors duration-200">
        <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-6">Tambah Kategori</h2>
        <form action="{{ url('/admin/categories') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Nama Kategori</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Masukkan nama kategori">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Deskripsi</label>
                <textarea name="description" rows="3"
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Deskripsi singkat"></textarea>
            </div>
            <div class="flex gap-3">
                <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="flex-1 px-4 py-3 bg-white dark:bg-[#111111] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] transition-colors">Batal</button>
                <button type="submit" class="flex-1 px-4 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
