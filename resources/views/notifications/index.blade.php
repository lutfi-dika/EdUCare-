@extends('layouts.dashboard')

@section('title', 'EduCare - Notifikasi')

@section('sidebar')
    @php
        $role = session('user.role');
        $sidebar = $role === 'admin' ? 'admin' : ($role === 'teacher' ? 'teacher' : 'student');
    @endphp
    @include('components.sidebar-' . $sidebar)
@endsection

@section('page-title', 'Notifikasi')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="notif.title">Notifikasi</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">{{ $unreadCount }} <span data-i18n="notif.belum_dibaca">belum dibaca</span></p>
    </div>
    @if($unreadCount > 0)
        <form action="{{ url('/notifications/read-all') }}" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 text-sm font-medium text-[#2563EB] bg-[#EFF6FF] rounded-xl hover:bg-[#DBEAFE] transition-colors" data-i18n="notif.tandai_baca">
                Tandai Semua Dibaca
            </button>
        </form>
    @endif
</div>

<div class="space-y-3">
    @forelse($notifications as $notification)
        <a href="{{ url('/notifications/' . $notification->id) }}" class="flex items-start gap-4 p-4 bg-white dark:bg-[#1a1a1a] rounded-2xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB]/30 transition-all {{ !$notification->is_read ? 'ring-1 ring-[#2563EB]/20 bg-[#EFF6FF]/50 dark:bg-[#2563EB]/5' : '' }}">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0
                {{ $notification->type === 'quiz_result' ? 'bg-[#F59E0B]/10' : '' }}
                {{ $notification->type === 'quiz_passed' ? 'bg-[#16A34A]/10' : '' }}
                {{ $notification->type === 'message' ? 'bg-[#2563EB]/10' : '' }}
                {{ $notification->type === 'info' ? 'bg-[#8B5CF6]/10' : '' }}">
                @if($notification->type === 'quiz_result' || $notification->type === 'quiz_passed')
                    <svg class="w-5 h-5 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                @elseif($notification->type === 'message')
                    <svg class="w-5 h-5 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                @else
                    <svg class="w-5 h-5 text-[#8B5CF6]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                @endif
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-[#111827] dark:text-[#ededed] text-sm">{{ $notification->title }}</p>
                    @if(!$notification->is_read)
                        <span class="w-2 h-2 bg-[#2563EB] rounded-full shrink-0 ml-2"></span>
                    @endif
                </div>
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] mt-0.5">{{ $notification->message }}</p>
                <p class="text-xs text-[#94A3B8] dark:text-[#64748B] mt-1">{{ $notification->created_at->diffForHumans() }}</p>
            </div>
        </a>
    @empty
        <div class="text-center py-16 bg-white dark:bg-[#1a1a1a] rounded-2xl border border-[#E2E8F0] dark:border-[#2a2a2a]">
            <svg class="w-16 h-16 text-[#E2E8F0] dark:text-[#475569] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
            <p class="text-[#64748B] dark:text-[#a3a3a3]" data-i18n="notif.belum_ada">Belum ada notifikasi.</p>
        </div>
    @endforelse
</div>
@endsection
