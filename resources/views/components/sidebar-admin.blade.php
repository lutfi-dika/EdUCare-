<aside id="dashboard-sidebar" class="fixed top-0 left-0 h-full w-[260px] bg-white border-r border-[#E2E8F0] z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 dark:bg-[#1a1a1a] dark:border-[#2a2a2a]">
    <div class="flex items-center gap-3 px-6 h-16 border-b border-[#E2E8F0] dark:border-[#2a2a2a]">
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <div class="w-9 h-9 bg-[#2563EB] rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
            </div>
            <span class="text-lg font-bold text-[#111827] dark:text-[#ededed]">EduCare</span>
        </a>
    </div>
    <nav class="p-4 flex flex-col gap-1 overflow-y-auto h-[calc(100vh-64px)]">
        <p class="text-xs font-semibold text-[#94A3B8] uppercase tracking-wider px-4 mb-2">Admin</p>
        <a href="{{ url('/admin') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('admin') && !request()->is('admin/*') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
            Dashboard
        </a>
        <p class="text-xs font-semibold text-[#94A3B8] uppercase tracking-wider px-4 mb-2 mt-4">Manajemen</p>
        <a href="{{ url('/admin/users') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('admin/users*') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
            Users
        </a>
        <a href="{{ url('/admin/categories') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('admin/categories*') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" /></svg>
            Kategori
        </a>
        <a href="{{ url('/admin/materials') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('admin/materials*') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
            Materi
        </a>
        <a href="{{ url('/admin/quizzes') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('admin/quizzes*') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
            Quiz
        </a>
        <a href="{{ url('/admin/certificates') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('admin/certificates*') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
            Sertifikat
        </a>
        <div class="border-t border-[#E2E8F0] dark:border-[#2a2a2a] my-3"></div>
        <p class="text-xs font-semibold text-[#94A3B8] uppercase tracking-wider px-4 mb-2">Akun</p>
        <a href="{{ url('/profile') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->is('profile') ? 'bg-[#EFF6FF] text-[#2563EB] dark:bg-[#2563EB]/15 dark:text-[#60a5fa]' : 'text-[#64748B] hover:bg-gray-50 dark:text-[#a3a3a3] dark:hover:bg-[#2a2a2a]' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
            Profil
        </a>
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-[#64748B] hover:bg-red-50 hover:text-[#DC2626] dark:text-[#a3a3a3] dark:hover:bg-red-900/20 dark:hover:text-[#f87171] transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                Logout
            </button>
        </form>
    </nav>
</aside>
