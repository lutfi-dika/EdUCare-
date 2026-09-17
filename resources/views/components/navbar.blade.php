<nav class="bg-white border-b border-[#E2E8F0] sticky top-0 z-50 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <div class="w-9 h-9 bg-[#2563EB] rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-[#111827] dark:text-[#ededed]">EduCare</span>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ url('/') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.beranda">Beranda</a>
                <a href="{{ url('/#tentang') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.tentang">Tentang</a>
                <a href="{{ url('/materials') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.materi">Materi</a>
                <a href="{{ url('/#fitur') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.fitur">Fitur</a>
                <a href="{{ url('/#faq') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.faq">FAQ</a>
            </div>

            {{-- Desktop Button --}}
            <div class="hidden md:flex items-center gap-3">
                @include('components.settings-toggle')
                <div class="w-px h-6 bg-[#E2E8F0] dark:bg-[#2a2a2a]"></div>
                @if(session('user'))
                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.dashboard">Dashboard</a>
                    <form action="{{ url('/logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-[#64748B] hover:text-[#DC2626] dark:text-[#a3a3a3] dark:hover:text-[#f87171] transition-colors" data-i18n="nav.logout">Logout</button>
                    </form>
                @else
                    <a href="{{ url('/login') }}" class="text-sm font-medium text-[#64748B] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:text-[#60a5fa] transition-colors px-4 py-2" data-i18n="nav.masuk">Masuk</a>
                    <a href="{{ url('/register') }}" class="text-sm font-medium text-white bg-[#2563EB] hover:bg-[#1D4ED8] px-5 py-2.5 rounded-xl transition-colors" data-i18n="nav.daftar">Daftar</a>
                @endif
            </div>

            {{-- Mobile Hamburger --}}
            <div class="flex items-center gap-2 md:hidden">
                @include('components.settings-toggle')
                <button onclick="toggleSidebar()" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-[#2a2a2a] transition-colors">
                    <svg class="w-6 h-6 text-[#111827] dark:text-[#ededed]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Sidebar --}}
    <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black/50 z-40 md:hidden" onclick="toggleSidebar()"></div>
    <div id="mobile-sidebar" class="fixed top-0 left-0 h-full w-72 bg-white z-50 transform -translate-x-full transition-transform duration-300 md:hidden shadow-xl dark:bg-[#1a1a1a]">
        <div class="flex items-center justify-between p-4 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <div class="w-9 h-9 bg-[#2563EB] rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-[#111827] dark:text-[#ededed]">EduCare</span>
            </a>
            <button onclick="toggleSidebar()" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-[#2a2a2a]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-4 flex flex-col gap-1">
            <a href="{{ url('/') }}" class="px-4 py-3 rounded-xl text-sm font-medium text-[#64748B] hover:bg-[#EFF6FF] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.beranda">Beranda</a>
            <a href="{{ url('/materials') }}" class="px-4 py-3 rounded-xl text-sm font-medium text-[#64748B] hover:bg-[#EFF6FF] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a] dark:hover:text-[#60a5fa] transition-colors" data-i18n="nav.materi">Materi</a>
        </div>
        <div class="p-4 border-t border-[#E2E8F0] dark:border-[#2a2a2a] flex flex-col gap-2">
            @if(session('user'))
                <a href="{{ url('/dashboard') }}" class="text-center px-4 py-3 rounded-xl text-sm font-medium text-[#64748B] hover:bg-[#EFF6FF] hover:text-[#2563EB] dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a] transition-colors" data-i18n="nav.dashboard">Dashboard</a>
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full px-4 py-3 rounded-xl text-sm font-medium text-[#DC2626] hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors" data-i18n="nav.logout">Logout</button>
                </form>
            @else
                <a href="{{ url('/login') }}" class="text-center px-4 py-3 rounded-xl text-sm font-medium text-[#64748B] border border-[#E2E8F0] dark:border-[#2a2a2a] dark:text-[#a3a3a3] hover:bg-gray-50 dark:hover:bg-[#2a2a2a] transition-colors" data-i18n="nav.masuk">Masuk</a>
                <a href="{{ url('/register') }}" class="text-center px-4 py-3 rounded-xl text-sm font-medium text-white bg-[#2563EB] hover:bg-[#1D4ED8] transition-colors" data-i18n="nav.daftar">Daftar</a>
            @endif
        </div>
    </div>
</nav>
