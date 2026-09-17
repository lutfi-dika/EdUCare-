@extends('layouts.dashboard')

@section('title', 'EduCare - Edit Materi')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Edit Materi')

@section('content')
<div class="max-w-2xl">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Edit Materi</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Perbarui informasi materi.</p>
    </div>

    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <form action="{{ url('/teacher/materials/' . $material->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Judul Materi</label>
                <input type="text" name="title" value="{{ $material->title }}" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Deskripsi</label>
                <textarea name="description" rows="3" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">{{ $material->description }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-5">
                <div>
                    <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Kategori</label>
                    <select name="category_id" class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $material->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Level</label>
                    <select name="difficulty" class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                        <option {{ $material->difficulty == 'beginner' ? 'selected' : '' }}>Pemula</option>
                        <option {{ $material->difficulty == 'intermediate' ? 'selected' : '' }}>Menengah</option>
                        <option {{ $material->difficulty == 'advanced' ? 'selected' : '' }}>Lanjut</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Konten Materi</label>
                <textarea name="content" rows="10" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm font-mono dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">{{ $material->content }}</textarea>
            </div>

            <div class="flex gap-3">
                <a href="{{ url('/teacher/materials') }}" class="px-6 py-3 bg-white dark:bg-[#111111] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB] transition-colors">Batal</a>
                <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">Perbarui Materi</button>
            </div>
        </form>
    </div>
</div>
@endsection
