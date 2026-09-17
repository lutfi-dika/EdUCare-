<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EduCare')</title>
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

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobile-sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
        function toggleFaq(id) {
            const content = document.getElementById('faq-content-' + id);
            const icon = document.getElementById('faq-icon-' + id);
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    </script>
    @stack('scripts')
</body>
</html>
