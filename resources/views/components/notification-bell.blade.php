@php
    $userId = session('user.id');
    $unreadCount = $userId ? \App\Models\Notification::where('user_id', $userId)->where('is_read', false)->count() : 0;
@endphp

<a href="{{ url('/notifications') }}" class="relative p-2 rounded-xl hover:bg-[#F8FAFC] dark:hover:bg-[#2a2a2a] transition-colors" title="Notifikasi">
    <svg class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
    </svg>
    @if($unreadCount > 0)
        <span class="absolute -top-0.5 -right-0.5 w-4 h-4 bg-[#DC2626] text-white text-[9px] font-bold rounded-full flex items-center justify-center">{{ $unreadCount > 9 ? '9+' : $unreadCount }}</span>
    @endif
</a>
