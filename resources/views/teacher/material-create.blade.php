@extends('layouts.dashboard')

@section('title', 'EduCare - Tambah Materi')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Tambah Materi')

@section('content')
<div class="max-w-2xl">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Tambah Materi Baru</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Isi form berikut untuk membuat materi baru.</p>
    </div>

    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <form action="{{ url('/teacher/materials') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Judul Materi</label>
                <input type="text" name="title" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Masukkan judul materi">
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Deskripsi</label>
                <textarea name="description" rows="3" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Deskripsi singkat materi"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-5">
                <div>
                    <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Kategori</label>
                    <select name="category" class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                        <option>Programming</option>
                        <option>Web Development</option>
                        <option>AI</option>
                        <option>Digital Literacy</option>
                        <option>Computational Thinking</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Level</label>
                    <select name="difficulty" class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                        <option>Pemula</option>
                        <option>Menengah</option>
                        <option>Lanjut</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Konten Materi</label>
                <textarea name="content" rows="10" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm font-mono dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Tulis konten materi di sini (HTML)..."></textarea>
            </div>

            <div class="flex gap-3">
                <a href="{{ url('/teacher/materials') }}" class="px-6 py-3 bg-white dark:bg-[#111111] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB] transition-colors">Batal</a>
                <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">Simpan Materi</button>
            </div>
        </form>
    </div>
</div>
@endsection
