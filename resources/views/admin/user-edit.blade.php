@extends('layouts.dashboard')

@section('title', 'EduCare - Edit User')

@section('sidebar')
    @include('components.sidebar-admin')
@endsection

@section('page-title', 'Edit User')

@section('content')
<div class="max-w-2xl">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Edit User</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Perbarui informasi dan role user.</p>
    </div>

    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <form action="{{ url('/admin/users/' . $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Nama</label>
                <input type="text" name="name" value="{{ $user->name }}" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Role</label>
                <select name="role" class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
                    <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Student</option>
                    <option value="teacher" {{ $user->role == 'teacher' ? 'selected' : '' }}>Teacher</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <div class="flex gap-3">
                <a href="{{ url('/admin/users') }}" class="px-6 py-3 bg-white dark:bg-[#111111] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB] transition-colors">Batal</a>
                <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection
