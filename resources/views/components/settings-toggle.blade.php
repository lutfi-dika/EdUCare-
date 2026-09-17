<div class="flex items-center gap-2">
    {{-- Dark Mode Toggle --}}
    <button onclick="toggleDarkMode()" id="darkModeBtn"
        class="relative w-9 h-9 rounded-xl flex items-center justify-center hover:bg-gray-100 dark:hover:bg-[#2a2a2a] transition-colors duration-200"
        title="Toggle Dark Mode">
        {{-- Sun icon (shown in dark mode = click to go light) --}}
        <svg id="sunIcon" class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3] hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        {{-- Moon icon (shown in light mode = click to go dark) --}}
        <svg id="moonIcon" class="w-5 h-5 text-[#64748B] dark:text-[#a3a3a3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
    </button>

    {{-- Language Toggle --}}
    <div class="relative">
        <button onclick="toggleLangMenu()" id="langBtn"
            class="flex items-center gap-1.5 px-3 py-2 rounded-xl hover:bg-gray-100 dark:hover:bg-[#2a2a2a] transition-colors duration-200 text-sm font-medium text-[#64748B] dark:text-[#a3a3a3]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
            <span id="currentLangLabel">ID</span>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
        </button>
        <div id="langMenu" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-xl border border-[#E2E8F0] shadow-lg z-50 overflow-hidden dark:bg-[#1a1a1a] dark:border-[#2a2a2a] transition-colors duration-200">
            <button onclick="setLang('id')" class="w-full flex items-center gap-3 px-4 py-3 text-sm hover:bg-[#EFF6FF] dark:hover:bg-[#2a2a2a] transition-colors duration-200 text-left">
                <span class="text-lg">🇮🇩</span>
                <span class="font-medium text-[#111827] dark:text-[#ededed]">Indonesia</span>
            </button>
            <button onclick="setLang('en')" class="w-full flex items-center gap-3 px-4 py-3 text-sm hover:bg-[#EFF6FF] dark:hover:bg-[#2a2a2a] transition-colors duration-200 text-left">
                <span class="text-lg">🇺🇸</span>
                <span class="font-medium text-[#111827] dark:text-[#ededed]">English</span>
            </button>
        </div>
    </div>
</div>

<script>
// ========== DARK MODE ==========
function isDark() {
    return localStorage.getItem('theme') === 'dark' ||
        (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
}

function applyTheme() {
    const dark = isDark();
    document.documentElement.classList.toggle('dark', dark);
    const sun = document.getElementById('sunIcon');
    const moon = document.getElementById('moonIcon');
    if (sun && moon) {
        sun.classList.toggle('hidden', !dark);
        moon.classList.toggle('hidden', dark);
    }
}

function toggleDarkMode() {
    localStorage.setItem('theme', isDark() ? 'light' : 'dark');
    applyTheme();
}

// ========== LANGUAGE ==========
function t(path) {
    const lang = localStorage.getItem('lang') || 'id';
    const keys = path.split('.');
    let val = window.translations[lang];
    for (const k of keys) {
        if (val && typeof val === 'object') val = val[k];
        else return path;
    }
    return val || path;
}

function applyLang() {
    const lang = localStorage.getItem('lang') || 'id';
    const label = document.getElementById('currentLangLabel');
    if (label) label.textContent = lang.toUpperCase();
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        const translated = t(key);
        if (translated && translated !== key) {
            if (el.hasAttribute('data-i18n-attr')) {
                const attr = el.getAttribute('data-i18n-attr');
                el.setAttribute(attr, translated);
            } else if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = translated;
            } else {
                el.innerHTML = translated;
            }
        }
    });
}

function toggleLangMenu() {
    document.getElementById('langMenu').classList.toggle('hidden');
}

function setLang(lang) {
    localStorage.setItem('lang', lang);
    document.getElementById('langMenu').classList.add('hidden');
    applyLang();
    location.reload();
}

// Close lang menu on outside click
document.addEventListener('click', function(e) {
    const btn = document.getElementById('langBtn');
    const menu = document.getElementById('langMenu');
    if (btn && menu && !btn.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.add('hidden');
    }
});

// Init
applyTheme();
applyLang();
</script>
