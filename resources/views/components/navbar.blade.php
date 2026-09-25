@php
    $currentRoute = Route::currentRouteName();
@endphp

<!-- FIXED / STICKY HEADER (Topbar + Main Navigation stay pinned when scrolling) -->
<header class="sticky top-0 z-50 w-full shadow-lg">

    <!-- 1. SLIM CORPORATE TOPBAR (Dark Navy with Gold Accents) -->
    <div class="bg-[#061838] text-slate-200 text-xs border-b border-white/10 relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-wrap items-center justify-between gap-3">
            
            <!-- Left: Contact Info -->
            <div class="flex flex-wrap items-center gap-3 sm:gap-4 text-[11px] sm:text-xs">
                <a href="tel:+622189106967" class="inline-flex items-center text-slate-300 font-medium hover:text-[#FFB800] transition">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    (+62) 21 89106967
                </a>
                <span class="text-white/20 hidden sm:inline">|</span>
                <div class="hidden sm:inline-flex items-center gap-1.5 text-slate-300 font-medium">
                    <svg class="w-3.5 h-3.5 mr-1 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <a href="mailto:pt_basn@outlook.co.id" class="hover:text-[#FFB800] transition">pt_basn@outlook.co.id</a>
                    <span class="text-white/25">/</span>
                    <a href="mailto:pt_basn@yahoo.co.id" class="hover:text-[#FFB800] transition">pt_basn@yahoo.co.id</a>
                </div>
            </div>

            <!-- Right: Operational Hours & Language Switcher -->
            <div class="flex items-center space-x-4 text-[11px] sm:text-xs ml-auto">
                <span class="hidden sm:inline text-slate-300 font-medium">
                    <span class="text-[#FFB800] font-bold">&bull;</span>
                    <span class="lang-id-only">Senin &ndash; Jumat: 08:00 &ndash; 16:00 WIB</span>
                    <span class="lang-en-only">Mon &ndash; Fri: 08:00 &ndash; 16:00 WIB (UTC+7)</span>
                </span>
                
                <!-- Language Switcher Flags Pill (ID / EN) -->
                <div class="flex items-center bg-black/30 backdrop-blur-md p-1 rounded-full border border-white/20 gap-1 shadow-inner">
                    <!-- ID Button with Indonesia Flag SVG -->
                    <button type="button" data-set-lang="id" onclick="window.setLanguage('id')" class="lang-flag-btn flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold transition cursor-pointer" title="Bahasa Indonesia">
                        <svg class="w-4 h-2.5 rounded-[2px] overflow-hidden shadow-xs border border-white/40 flex-shrink-0" viewBox="0 0 640 480" xmlns="http://www.w3.org/2000/svg">
                            <rect width="640" height="240" fill="#E70011"/>
                            <rect y="240" width="640" height="240" fill="#FFFFFF"/>
                        </svg>
                        <span>ID</span>
                    </button>
                    <span class="text-white/30 text-[10px]">|</span>
                    <!-- EN Button with UK Flag SVG -->
                    <button type="button" data-set-lang="en" onclick="window.setLanguage('en')" class="lang-flag-btn flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold transition cursor-pointer" title="English">
                        <svg class="w-4 h-2.5 rounded-[2px] overflow-hidden shadow-xs border border-white/40 flex-shrink-0" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="30" fill="#012169"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#FFFFFF" stroke-width="6"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="3"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#FFFFFF" stroke-width="10"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                        </svg>
                        <span>EN</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- 2. MAIN SOLID YELLOW NAVBAR -->
    <div class="bg-[#FFB800] border-b-2 border-amber-500 shadow-md transition-all duration-300" style="background-color: #FFB800 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Company Logo & Brand -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3.5 group py-2 focus:outline-none">
                <div class="w-12 h-12 flex-shrink-0 transition transform group-hover:scale-105 duration-200 bg-white p-1.5 rounded-2xl shadow-md border border-slate-200/80 flex items-center justify-center">
                    <img src="{{ asset('images/logo-emblem.svg') }}" alt="Logo PT. Bahtera Anugerah Sentosa" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center space-x-1.5">
                        <span class="text-[10px] font-black tracking-wider px-1.5 py-0.5 rounded bg-red-600 text-white leading-none shadow-sm">PT</span>
                        <span class="text-base sm:text-lg font-black tracking-tight text-[#061838]">
                            BAHTERA <span class="text-red-700">ANUGERAH</span> SENTOSA
                        </span>
                    </div>
                    <span class="text-[10px] sm:text-[11px] font-extrabold text-[#061838]/90 tracking-wide">
                        <span class="lang-id-only">Agensi Pengawakan &amp; Penyaluran Pelaut Resmi</span>
                        <span class="lang-en-only">Official Maritime Crewing &amp; Manning Agency</span>
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links (Clean Underline Only — Strictly NO Box Backgrounds or Focus Rings) -->
            <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                <!-- Home Link -->
                <a href="{{ route('home') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'home' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Beranda</span>
                    <span class="lang-en-only">Home</span>
                </a>

                <!-- Our Service Link -->
                <a href="{{ route('services') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'services' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Layanan Kami</span>
                    <span class="lang-en-only">Our Services</span>
                </a>

                <!-- Our Team Link -->
                <a href="{{ route('team') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'team' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Tim Kami</span>
                    <span class="lang-en-only">Our Team</span>
                </a>

                <!-- Gallery Link -->
                <a href="{{ route('gallery') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'gallery' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Galeri</span>
                    <span class="lang-en-only">Gallery</span>
                </a>

                <!-- Contact Us Link -->
                <a href="{{ route('contact') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'contact' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Hubungi Kami</span>
                    <span class="lang-en-only">Contact Us</span>
                </a>
            </nav>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center space-x-3 lg:hidden">
                <button id="mobile-menu-btn" type="button" class="p-2.5 rounded-xl text-[#061838] bg-black/10 hover:bg-black/20 focus:outline-none" aria-label="Toggle navigation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-menu" class="hidden lg:hidden border-b-2 border-amber-500 bg-[#FFB800] px-4 pt-3 pb-6 space-y-2 shadow-xl">
        <a href="{{ route('home') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'home' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Beranda</span>
            <span class="lang-en-only">Home</span>
        </a>
        <a href="{{ route('services') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'services' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Layanan Kami</span>
            <span class="lang-en-only">Our Services</span>
        </a>
        <a href="{{ route('team') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'team' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Tim Kami</span>
            <span class="lang-en-only">Our Team</span>
        </a>
        <a href="{{ route('gallery') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'gallery' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Galeri</span>
            <span class="lang-en-only">Gallery</span>
        </a>
        <a href="{{ route('contact') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'contact' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Hubungi Kami</span>
            <span class="lang-en-only">Contact Us</span>
        </a>
    </div>
    </div>
</header>
