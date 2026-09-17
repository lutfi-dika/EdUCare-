@extends('layouts.dashboard')

@section('title', 'EduCare - Pesan Guru')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Pesan')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_msg.title">Pesan & Diskusi</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="t_msg.sub">Komunikasi dengan siswa.</p>
</div>

@if(session('success'))
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 text-sm rounded-xl p-4 mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="grid lg:grid-cols-3 gap-6">
    {{-- Conversation List --}}
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] overflow-hidden">
            <div class="p-4 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
                <button onclick="document.getElementById('newMessageModal').classList.remove('hidden')" class="w-full px-4 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
                    <span data-i18n="t_msg.pesan_baru">+ Pesan Baru</span>
                </button>
            </div>
            <div class="divide-y divide-[#E2E8F0] dark:divide-[#2a2a2a] max-h-[500px] overflow-y-auto">
                @forelse($conversations as $conv)
                    <a href="{{ url('/teacher/messages/' . $conv['user']->id) }}" class="flex items-center gap-3 p-4 hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <div class="w-10 h-10 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-sm font-semibold shrink-0">
                            {{ strtoupper(substr($conv['user']->name, 0, 1)) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between">
                                <p class="font-medium text-[#111827] dark:text-[#ededed] text-sm truncate">{{ $conv['user']->name }}</p>
                                <span class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ $conv['last_time']->diffForHumans() }}</span>
                            </div>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] truncate">{{ $conv['last_message'] }}</p>
                        </div>
                        @if($conv['unread_count'] > 0)
                            <span class="w-5 h-5 bg-[#DC2626] text-white text-[10px] font-bold rounded-full flex items-center justify-center shrink-0">{{ $conv['unread_count'] }}</span>
                        @endif
                    </a>
                @empty
                    <div class="p-6 text-center">
                        <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_msg.belum_ada">Belum ada percakapan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Chat Area --}}
    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] overflow-hidden h-[600px] flex flex-col">
            @if(isset($otherUser))
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
                </div>

                <form action="{{ url('/teacher/messages/send') }}" method="POST" class="p-4 border-t border-[#E2E8F0] dark:border-[#2a2a2a]">
                    @csrf
                    <input type="hidden" name="receiver_id" value="{{ $otherUser->id }}">
                    <div class="flex gap-2">
                        <input type="text" name="message" data-i18n-attr="placeholder" data-i18n="t_msg.ketik" placeholder="Ketik pesan..." class="flex-1 px-4 py-2.5 bg-[#F8FAFC] dark:bg-[#2a2a2a] border border-[#E2E8F0] dark:border-[#475569] rounded-xl text-sm text-[#111827] dark:text-[#ededed] focus:outline-none focus:ring-2 focus:ring-[#2563EB]" required>
                        <button type="submit" class="px-5 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors" data-i18n="t_msg.kirim">Kirim</button>
                    </div>
                </form>
            @else
                <div class="flex-1 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-[#E2E8F0] dark:text-[#475569] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                        <p class="text-[#64748B] dark:text-[#a3a3a3]" data-i18n="t_msg.pilih_chat">Pilih percakapan atau mulai pesan baru</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

{{-- New Message Modal --}}
<div id="newMessageModal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
    <div class="bg-white dark:bg-[#1a1a1a] rounded-2xl w-full max-w-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_msg.pesan_baru">Pesan Baru</h3>
            <button onclick="document.getElementById('newMessageModal').classList.add('hidden')" class="text-[#64748B] hover:text-[#111827] dark:hover:text-[#ededed]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
        <form action="{{ url('/teacher/messages/send') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-[#64748B] dark:text-[#a3a3a3] mb-1" data-i18n="t_msg.kepada">Kepada</label>
                <select name="receiver_id" class="w-full px-4 py-2.5 bg-[#F8FAFC] dark:bg-[#2a2a2a] border border-[#E2E8F0] dark:border-[#475569] rounded-xl text-sm text-[#111827] dark:text-[#ededed]" required>
                    <option value="" data-i18n="t_msg.pilih_siswa">Pilih siswa...</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-[#64748B] dark:text-[#a3a3a3] mb-1"><span data-i18n="t_msg.terkait">Terkait Materi</span> <span data-i18n="t_msg.opsional">(opsional)</span></label>
                <select name="material_id" class="w-full px-4 py-2.5 bg-[#F8FAFC] dark:bg-[#2a2a2a] border border-[#E2E8F0] dark:border-[#475569] rounded-xl text-sm text-[#111827] dark:text-[#ededed]">
                    <option value="" data-i18n="t_msg.tanpa_materi">Tanpa materi</option>
                    @foreach($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-[#64748B] dark:text-[#a3a3a3] mb-1" data-i18n="t_msg.pesan">Pesan</label>
                <textarea name="message" rows="3" class="w-full px-4 py-2.5 bg-[#F8FAFC] dark:bg-[#2a2a2a] border border-[#E2E8F0] dark:border-[#475569] rounded-xl text-sm text-[#111827] dark:text-[#ededed] focus:outline-none focus:ring-2 focus:ring-[#2563EB]" required></textarea>
            </div>
            <button type="submit" class="w-full px-4 py-2.5 bg-[#2563EB] text-white text-sm font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors" data-i18n="t_msg.kirim">Kirim Pesan</button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chatMessages');
    if (chatMessages) chatMessages.scrollTop = chatMessages.scrollHeight;
});
</script>
@endsection
