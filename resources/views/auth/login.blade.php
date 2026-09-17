@extends('layouts.guest')

@section('title', 'EduCare - Masuk')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 mb-4">
                <div class="w-10 h-10 bg-[#2563EB] rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                </div>
                <span class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">EduCare</span>
            </a>
            <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="login.title">Masuk ke Akun</h1>
            <p class="text-[#64748B] dark:text-[#a3a3a3] mt-2" data-i18n="login.sub">Selamat datang kembali di EduCare</p>
        </div>

        <div class="bg-white rounded-2xl p-8 border border-[#E2E8F0] shadow-sm dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 text-sm rounded-xl p-4 mb-6 dark:bg-red-900/20 dark:border-red-800 dark:text-red-400">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-[#111827] mb-2 dark:text-[#ededed]" data-i18n="login.email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                        placeholder="Masukkan email">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-[#111827] mb-2 dark:text-[#ededed]" data-i18n="login.pass">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] focus:ring-2 focus:ring-[#2563EB]/20 outline-none transition-all text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]"
                        placeholder="Masukkan password">
                </div>

                <button type="submit" class="w-full bg-[#2563EB] text-white py-3 rounded-xl font-medium hover:bg-[#1D4ED8] transition-colors" data-i18n="login.btn">
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">
                    <span data-i18n="login.no_acc">Belum punya akun?</span>
                    <a href="{{ url('/register') }}" class="text-[#2563EB] font-medium hover:underline" data-i18n="login.reg">Daftar</a>
                </p>
            </div>

            <div class="mt-4 p-4 bg-[#F8FAFC] rounded-xl dark:bg-[#111111] transition-colors duration-200">
                <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] font-medium mb-2">Akun Demo:</p>
                <div class="space-y-1 text-xs text-[#64748B] dark:text-[#a3a3a3]">
                    <p><span class="font-medium">Siswa:</span> student@educare.test / password</p>
                    <p><span class="font-medium">Guru:</span> teacher@educare.test / password</p>
                    <p><span class="font-medium">Admin:</span> admin@educare.test / password</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
