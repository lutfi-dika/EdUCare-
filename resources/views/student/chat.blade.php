@extends('layouts.dashboard')

@section('title', 'EduCare - Chat Siswa')

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('page-title', 'Chat')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="s_msg.title">Chat dengan {{ $otherUser->name }}</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1">{{ $otherUser->role }}</p>
</div>

@if(session('success'))
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 text-sm rounded-xl p-4 mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-2xl border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] overflow-hidden h-[500px] flex flex-col">
    <div class="flex items-center gap-3 p-4 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
        <div class="w-10 h-10 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-sm font-semibold">
            {{ strtoupper(substr($otherUser->name, 0, 1)) }}
        </div>
        <div>
            <p class="font-medium text-[#111827] dark:text-[#ededed] text-sm">{{ $otherUser->name }}</p>
            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $otherUser->role }}</p>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto p-4 space-y-3" id="chatMessages">
        @foreach($messages as $msg)
            <div class="flex {{ $msg->sender_id == session('user.id') ? 'justify-end' : 'justify-start' }}">
                <div class="max-w-[70%] {{ $msg->sender_id == session('user.id') ? 'bg-[#2563EB] text-white' : 'bg-[#F8FAFC] dark:bg-[#2a2a2a] text-[#111827] dark:text-[#ededed]' }} rounded-2xl px-4 py-3">
                    @if($msg->material)
                        <p class="text-[10px] opacity-70 mb-1">📎 {{ $msg->material->title }}</p>
                    @endif
                    <p class="text-sm">{{ $msg->message }}</p>
                    <p class="text-[10px] opacity-70 mt-1">{{ $msg->created_at->format('H:i') }}</p>
                </div>
            </div>
        @endforeach

        @if($messages->isEmpty())
            <div class="flex items-center justify-center h-full">
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="s_msg.mulai">Mulai percakapan...</p>
            </div>
        @endif
    </div>

    <form action="{{ url('/student/messages/send') }}" method="POST" class="p-4 border-t border-[#E2E8F0] dark:border-[#2a2a2a]">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $otherUser->id }}">
        <div class="flex gap-2">
            <input type="text" name="message" data-i18n-attr="placeholder" data-i18n="s_msg.ketik" placeholder="Ketik pesan..." class="flex-1 px-4 py-2.5 bg-[#F8FAFC] dark:bg-[#2a2a2a] border border-[#E2E8F0] dark:border-[#475569] rounded-xl text-sm text-[#111827] dark:text-[#ededed] focus:outline-none focus:ring-2 focus:ring-[#2563EB]" required>
            <button type="submit" class="px-5 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors" data-i18n="s_msg.kirim">Kirim</button>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chatMessages');
    if (chatMessages) chatMessages.scrollTop = chatMessages.scrollHeight;
});
</script>
@endsection
