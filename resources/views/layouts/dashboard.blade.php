<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EduCare - Dashboard')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script>
        (function() {
            const theme = localStorage.getItem('theme');
            if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('lang')
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-white text-[#111827] antialiased dark:bg-black dark:text-[#ededed] transition-colors duration-200">

    {{-- Sidebar Overlay --}}
    <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden dark:bg-black/70" onclick="toggleDashboardSidebar()"></div>

    {{-- Sidebar --}}
    @yield('sidebar')

    {{-- Main --}}
    <div class="lg:ml-[260px] min-h-screen">

        {{-- Top Bar --}}
        <header class="bg-white border-b border-[#E2E8F0] sticky top-0 z-30 dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
            <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                <button onclick="toggleDashboardSidebar()" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors dark:hover:bg-[#2a2a2a]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="hidden lg:block">
                    <h2 class="text-lg font-semibold dark:text-[#ededed]">@yield('page-title', 'Dashboard')</h2>
                </div>
                <div class="flex items-center gap-3">
                    @include('components.notification-bell')
                    @include('components.settings-toggle')
                    <div class="w-px h-6 bg-[#E2E8F0] dark:bg-[#2a2a2a]"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 bg-[#2563EB] rounded-full flex items-center justify-center text-white text-sm font-semibold">
                            {{ strtoupper(substr(session('user.name', 'U'), 0, 1)) }}
                        </div>
                        <div class="hidden sm:block">
                            <p class="text-sm font-medium">{{ session('user.name', 'User') }}</p>
                            <p class="text-xs text-[#64748B] dark:text-[#a3a3a3] capitalize">{{ session('user.role', 'student') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="p-4 sm:p-6 lg:p-8">
            @yield('content')
        </main>
    </div>

    <script>
        function toggleDashboardSidebar() {
            const sidebar = document.getElementById('dashboard-sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>
    @stack('scripts')
</body>
</html>
