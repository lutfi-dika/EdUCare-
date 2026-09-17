@extends('layouts.dashboard')

@section('title', 'EduCare - Kelola Users')

@section('sidebar')
    @include('components.sidebar-admin')
@endsection

@section('page-title', 'Kelola Users')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]">Kelola Users</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">Kelola semua pengguna EduCare.</p>
</div>

@if(session('success'))
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 text-sm rounded-xl p-4 mb-6">
        {{ session('success') }}
    </div>
@endif

{{-- Filter --}}
<div class="bg-white rounded-2xl border border-[#E2E8F0] p-4 sm:p-6 mb-6 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <form action="{{ url('/admin/users') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
        <div class="flex-1 relative">
            <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari user..."
                class="w-full pl-12 pr-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#ededed]">
        </div>
        <select name="role" class="px-4 py-3 rounded-xl border border-[#E2E8F0] focus:border-[#2563EB] outline-none text-sm text-[#64748B] dark:bg-[#111111] dark:border-[#2a2a2a] dark:text-[#a3a3a3]">
            <option value="">Semua Role</option>
            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="teacher" {{ request('role') == 'teacher' ? 'selected' : '' }}>Guru</option>
            <option value="student" {{ request('role') == 'student' ? 'selected' : '' }}>Siswa</option>
        </select>
        <button type="submit" class="px-6 py-3 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
            Filter
        </button>
    </form>
</div>

{{-- Table --}}
<div class="bg-white rounded-2xl border border-[#E2E8F0] overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Name</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Email</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Role</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Status</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Created</th>
                    <th class="text-right px-6 py-4 text-sm font-semibold text-[#64748B] dark:text-[#a3a3a3]">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b border-[#E2E8F0] dark:border-[#2a2a2a] last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-xs font-semibold">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <p class="font-medium text-[#111827] dark:text-[#ededed]">{{ $user->name }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $user->email }}</td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-medium px-3 py-1 rounded-full
                                {{ $user->role == 'admin' ? 'text-[#DC2626] bg-red-50 dark:bg-red-900/20' : ($user->role == 'teacher' ? 'text-[#16A34A] bg-green-50 dark:bg-green-900/20' : 'text-[#2563EB] bg-blue-50 dark:bg-blue-900/20') }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-medium px-3 py-1 rounded-full text-[#16A34A] bg-[#16A34A]/10">Aktif</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $user->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" class="px-3 py-1.5 text-xs font-medium text-[#2563EB] bg-[#EFF6FF] dark:bg-[#2563EB]/20 rounded-lg hover:bg-[#DBEAFE] dark:hover:bg-[#2563EB]/30 transition-colors">Edit</a>
                                <form action="{{ url('/admin/users/' . $user->id) }}" method="POST" onsubmit="return confirm('Yakin hapus user ini?')">
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
