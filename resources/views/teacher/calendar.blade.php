@extends('layouts.dashboard')

@section('title', 'EduCare - Kalender Guru')

@section('sidebar')
    @include('components.sidebar-teacher')
@endsection

@section('page-title', 'Kalender')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-[#111827] dark:text-[#ededed]" data-i18n="t_cal.title">Kalender Kegiatan</h1>
    <p class="text-[#64748B] dark:text-[#a3a3a3] mt-1" data-i18n="t_cal.sub">Jadwal kegiatan belajar mengajar.</p>
</div>

<div class="grid lg:grid-cols-3 gap-6">
    {{-- Calendar Grid --}}
    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] p-6">
            <div id="calendar-header" class="flex items-center justify-between mb-6">
                <button onclick="changeMonth(-1)" class="p-2 rounded-lg hover:bg-[#F8FAFC] dark:hover:bg-[#2a2a2a]">
                    <svg class="w-5 h-5 text-[#64748B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <h2 id="calendar-month" class="text-lg font-bold text-[#111827] dark:text-[#ededed]"></h2>
                <button onclick="changeMonth(1)" class="p-2 rounded-lg hover:bg-[#F8FAFC] dark:hover:bg-[#2a2a2a]">
                    <svg class="w-5 h-5 text-[#64748B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
            <div class="grid grid-cols-7 gap-1 text-center text-xs font-medium text-[#64748B] dark:text-[#a3a3a3] mb-2">
                <div class="py-2">Min</div><div class="py-2">Sen</div><div class="py-2">Sel</div>
                <div class="py-2">Rab</div><div class="py-2">Kam</div><div class="py-2">Jum</div><div class="py-2">Sab</div>
            </div>
            <div id="calendar-grid" class="grid grid-cols-7 gap-1"></div>
        </div>
    </div>

    {{-- Event List --}}
    <div>
        <div class="bg-white rounded-2xl border border-[#E2E8F0] dark:bg-[#1a1a1a] dark:border-[#2a2a2a] p-6">
            <h3 class="font-bold text-[#111827] dark:text-[#ededed] mb-4" data-i18n="t_cal.terbaru">Kegiatan Terbaru</h3>
            <div class="space-y-3 max-h-[500px] overflow-y-auto">
                @forelse($events as $event)
                    <div class="flex items-start gap-3 p-3 rounded-xl hover:bg-[#F8FAFC] dark:hover:bg-[#0f172a] transition-colors">
                        <div class="w-3 h-3 rounded-full mt-1.5 shrink-0" style="background-color: {{ $event['color'] }}"></div>
                        <div>
                            <p class="text-sm font-medium text-[#111827] dark:text-[#ededed]">{{ $event['title'] }}</p>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3]">{{ \Carbon\Carbon::parse($event['date'])->format('d M Y') }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-[#64748B] dark:text-[#a3a3a3] text-center py-4">Belum ada kegiatan.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<script>
const events = @json($events);
let currentDate = new Date();

function renderCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    const monthNames = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    document.getElementById('calendar-month').textContent = monthNames[month] + ' ' + year;

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const today = new Date();

    let html = '';
    for (let i = 0; i < firstDay; i++) html += '<div></div>';

    for (let d = 1; d <= daysInMonth; d++) {
        const dateStr = `${year}-${String(month+1).padStart(2,'0')}-${String(d).padStart(2,'0')}`;
        const dayEvents = events.filter(e => e.date === dateStr);
        const isToday = today.getDate() === d && today.getMonth() === month && today.getFullYear() === year;

        html += `<div class="relative p-1 min-h-[60px] rounded-lg ${isToday ? 'bg-[#2563EB]/10 ring-1 ring-[#2563EB]' : 'hover:bg-[#F8FAFC] dark:hover:bg-[#2a2a2a]'} transition-colors cursor-default">`;
        html += `<span class="text-xs font-medium ${isToday ? 'text-[#2563EB] font-bold' : 'text-[#64748B] dark:text-[#a3a3a3]'}">${d}</span>`;
        dayEvents.slice(0, 2).forEach(e => {
            html += `<div class="text-[10px] mt-0.5 px-1 py-0.5 rounded text-white truncate" style="background-color: ${e.color}">${e.title.substring(0,15)}...</div>`;
        });
        if (dayEvents.length > 2) html += `<div class="text-[10px] text-[#64748B] dark:text-[#a3a3a3] px-1">+${dayEvents.length - 2}</div>`;
        html += '</div>';
    }
    document.getElementById('calendar-grid').innerHTML = html;
}

function changeMonth(delta) {
    currentDate.setMonth(currentDate.getMonth() + delta);
    renderCalendar();
}

renderCalendar();
</script>
@endsection
