@extends('layouts.dashboard')

@section('title', 'EduCare - Profil')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('page-title', 'Profil')

@section('content')
<div class="max-w-2xl">
    {{-- Profile Card --}}
    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 mb-6 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <div class="flex items-center gap-6 mb-8">
            <div class="w-20 h-20 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-2xl font-bold shrink-0">
                {{ strtoupper(substr($user['name'], 0, 1)) }}
            </div>
            <div>
                <h2 class="text-xl font-bold text-[#111827] dark:text-[#ededed]">{{ $user['name'] }}</h2>
                <p class="text-[#64748B] dark:text-[#a3a3a3]">{{ $user['email'] }}</p>
                <span class="inline-block mt-2 text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 px-3 py-1 rounded-full capitalize">{{ $user['role'] }}</span>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 text-sm rounded-xl p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/profile') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label for="name" class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ $user['name'] }}" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ $user['email'] }}" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
                Simpan Perubahan
            </button>
        </form>
    </div>

    {{-- Change Password --}}
    <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 sm:p-8 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
        <h3 class="text-lg font-bold text-[#111827] dark:text-[#ededed] mb-6">Ubah Password</h3>

        <form action="{{ url('/profile/password') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label for="current_password" class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Password Saat Ini</label>
                <input type="password" id="current_password" name="current_password" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <div class="mb-5">
                <label for="new_password" class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Password Baru</label>
                <input type="password" id="new_password" name="new_password" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <div class="mb-6">
                <label for="new_password_confirmation" class="block text-sm font-medium text-[#111827] dark:text-[#ededed] mb-2">Konfirmasi Password Baru</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
            </div>

            <button type="submit" class="px-6 py-3 bg-[#111827] dark:bg-[#f1f5f9] text-white dark:text-[#111827] text-sm font-medium rounded-xl hover:bg-[#111827]/90 dark:hover:bg-[#f1f5f9]/90 transition-colors">
                Ubah Password
            </button>
        </form>
    </div>
</div>
@endsection
