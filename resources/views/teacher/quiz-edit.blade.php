@extends('layouts.dashboard')

@section('title', 'EduCare - Edit Quiz')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Edit Quiz')

@section('content')
<div class="max-w-2xl">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Edit Quiz</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Perbarui informasi quiz.</p>
    </div>

    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <form action="{{ url('/teacher/quizzes/' . $quiz->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Judul Quiz</label>
                <input type="text" name="title" value="{{ old('title', $quiz->title) }}" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Masukkan judul quiz">
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Materi Terkait</label>
                <select name="material_id" required class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                    <option value="">Pilih Materi</option>
                    @foreach($materials as $material)
                        <option value="{{ $material->id }}" {{ old('material_id', $quiz->material_id) == $material->id ? 'selected' : '' }}>{{ $material->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Deskripsi</label>
                <textarea name="description" rows="3" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                    placeholder="Deskripsi singkat quiz">{{ old('description', $quiz->description) }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-5">
                <div>
                    <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Durasi (menit)</label>
                    <input type="number" name="duration" value="{{ old('duration', $quiz->duration) }}" min="5" max="120"
                        class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Passing Score</label>
                    <input type="number" name="passing_score" value="{{ old('passing_score', $quiz->passing_score) }}" min="0" max="100"
                        class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Status</label>
                <select name="status" required class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                    <option value="draft" {{ old('status', $quiz->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $quiz->status) === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>

            <div class="flex gap-3">
                <a href="{{ url('/teacher/quizzes') }}" class="px-6 py-3 bg-white dark:bg-[#111111] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB] transition-colors">Batal</a>
                <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection
