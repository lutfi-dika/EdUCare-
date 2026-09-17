<footer id="kontak" class="bg-[#111827] dark:bg-[#020617] text-white mt-20 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            {{-- Brand --}}
            <div class="md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-9 h-9 bg-[#2563EB] rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold">EduCare</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">Platform pembelajaran digital untuk membantu kamu belajar dengan cara yang lebih terstruktur dan interaktif.</p>
            </div>

            {{-- Links --}}
            <div>
                <h3 class="font-semibold text-sm mb-4">Menu</h3>
                <div class="flex flex-col gap-2">
                    <a href="{{ url('/') }}" class="text-gray-400 text-sm hover:text-white transition-colors">Beranda</a>
                    <a href="{{ url('/#tentang') }}" class="text-gray-400 text-sm hover:text-white transition-colors">Tentang</a>
                    <a href="{{ url('/materials') }}" class="text-gray-400 text-sm hover:text-white transition-colors">Materi</a>
                    <a href="{{ url('/#faq') }}" class="text-gray-400 text-sm hover:text-white transition-colors">FAQ</a>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-sm mb-4">Akun</h3>
                <div class="flex flex-col gap-2">
                    <a href="{{ url('/login') }}" class="text-gray-400 text-sm hover:text-white transition-colors">Masuk</a>
                    <a href="{{ url('/register') }}" class="text-gray-400 text-sm hover:text-white transition-colors">Daftar</a>
                    <a href="{{ url('/dashboard') }}" class="text-gray-400 text-sm hover:text-white transition-colors">Dashboard</a>
                </div>
            </div>

            {{-- Kontak --}}
            <div>
                <h3 class="font-semibold text-sm mb-4">Kontak</h3>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#2563EB] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-400 text-sm">info@educare.id</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-[#2563EB] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-400 text-sm">Jakarta, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 dark:border-gray-700 mt-12 pt-8 text-center transition-colors duration-200">
            <p class="text-gray-500 dark:text-gray-400 text-sm transition-colors duration-200">&copy; {{ date('Y') }} EduCare. All rights reserved.</p>
        </div>
    </div>
</footer>
