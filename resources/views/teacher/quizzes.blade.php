@extends('layouts.dashboard')

@section('title', 'EduCare - Kelola Quiz')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Kelola Quiz')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Quiz</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Kelola quiz yang telah kamu buat.</p>
    </div>
    <a href="{{ url('/teacher/quizzes/create') }}" class="px-5 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
        + Tambah Quiz
    </a>
</div>

@if(session('success'))
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 text-sm rounded-xl p-4 mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Quiz</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Materi</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Soal</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Durasi</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Status</th>
                    <th class="text-right px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quizzes as $quiz)
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-medium text-[#111827] dark:text-[#ededed]">{{ $quiz->title }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $quiz->material->title ?? '-' }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $quiz->questions_count ?? $quiz->questions->count() }} soal</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $quiz->duration }} menit</span>
                        </td>
                        <td class="px-6 py-4">
                            @if($quiz->status === 'published')
                                <span class="text-xs font-medium text-[#16A34A] bg-[#16A34A]/10 px-3 py-1 rounded-full">Published</span>
                            @else
                                <span class="text-xs font-medium text-[#F59E0B] bg-[#F59E0B]/10 px-3 py-1 rounded-full">Draft</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ url('/teacher/quizzes/' . $quiz->id . '/edit') }}" class="px-3 py-1.5 text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 rounded-lg hover:bg-[#DBEAFE] dark:hover:bg-[#2563EB]/30 transition-colors">Edit</a>
                                <form method="POST" action="{{ url('/teacher/quizzes/' . $quiz->id) }}" class="inline" onsubmit="return confirm('Yakin ingin menghapus quiz ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1.5 text-xs font-medium text-[#DC2626] bg-red-50 dark:bg-red-900/20 rounded-lg hover:bg-red-100 dark:hover:bg-red-900/30 transition-colors">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
