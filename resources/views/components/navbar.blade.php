@php
    $currentRoute = Route::currentRouteName();
@endphp

<!-- 1. SLIM CORPORATE TOPBAR (Dark Navy with Gold Accents) -->
<div class="bg-[#061838] text-slate-200 text-xs border-b border-white/10 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-wrap items-center justify-between gap-3">
        
        <!-- Left: Verified Licensing & Contact Info -->
        <div class="flex flex-wrap items-center gap-3 sm:gap-4 text-[11px] sm:text-xs">
            <div class="inline-flex items-center text-[#FFB800] font-bold bg-white/5 px-2.5 py-1 rounded-md border border-[#FFB800]/30 overflow-hidden h-6 shadow-sm max-w-[280px] sm:max-w-[340px] md:max-w-[420px]">
                <span class="w-2 h-2 rounded-full bg-emerald-400 mr-2 animate-pulse flex-shrink-0 z-10"></span>
                <div class="overflow-hidden relative w-full flex items-center">
                    <div class="running-marquee-track text-[#FFB800]">
                        <span class="inline-block pr-6 whitespace-nowrap">SIUKAK NO. 58.58-R/2024 &bull; SIUPPAK NO. 65.21/2016 &bull; RESMI KEMENHUB &amp; KEMENAKER RI &bull; IMO STCW &amp; MLC 2006 COMPLIANT &bull; 20+ TAHUN PENGALAMAN &bull;</span>
                        <span class="inline-block pr-6 whitespace-nowrap">SIUKAK NO. 58.58-R/2024 &bull; SIUPPAK NO. 65.21/2016 &bull; RESMI KEMENHUB &amp; KEMENAKER RI &bull; IMO STCW &amp; MLC 2006 COMPLIANT &bull; 20+ TAHUN PENGALAMAN &bull;</span>
                    </div>
                </div>
            </div>
            <span class="text-white/20 hidden md:inline">|</span>
            <span class="hidden md:inline-flex items-center text-slate-300 font-medium">
                <svg class="w-3.5 h-3.5 mr-1.5 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                +62 812-3456-7890
            </span>
            <span class="text-white/20 hidden lg:inline">|</span>
            <span class="hidden lg:inline-flex items-center text-slate-300 font-medium">
                <svg class="w-3.5 h-3.5 mr-1.5 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                info@bahterakeselamatan.co.id
            </span>
        </div>

        <!-- Right: Operational Hours & Language Switcher -->
        <div class="flex items-center space-x-4 text-[11px] sm:text-xs ml-auto">
            <span class="hidden sm:inline text-slate-300 font-medium">
                <span class="text-[#FFB800] font-bold">&bull;</span> Senin &ndash; Jumat: 08:30 &ndash; 17:00 WIB
            </span>
            
            <!-- Language Switcher Flags Pill -->
            <div class="flex items-center bg-white/10 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/15 gap-2">
                <button type="button" data-set-lang="id" class="lang-flag-btn flex items-center gap-1.5 px-2 py-0.5 rounded-full text-xs font-bold text-white hover:bg-[#FFB800] hover:text-slate-950 transition" title="Bahasa Indonesia">
                    <span class="w-4 h-2.5 rounded-sm overflow-hidden inline-flex flex-col border border-white/40 shadow-sm flex-shrink-0">
                        <span class="bg-red-600 h-1/2 w-full"></span>
                        <span class="bg-white h-1/2 w-full"></span>
                    </span>
                    <span>ID</span>
                </button>
                <span class="text-white/30 text-[10px]">|</span>
                <button type="button" data-set-lang="en" class="lang-flag-btn flex items-center gap-1.5 px-2 py-0.5 rounded-full text-xs font-bold text-white hover:bg-[#FFB800] hover:text-slate-950 transition" title="English">
                    <span class="w-4 h-2.5 rounded-sm overflow-hidden inline-flex items-center justify-center bg-blue-800 text-[6px] text-white font-black border border-white/40 shadow-sm flex-shrink-0">
                        EN
                    </span>
                    <span>EN</span>
                </button>
            </div>
        </div>

    </div>
</div>

<!-- 2. MAIN SOLID YELLOW NAVBAR (Clean Underline Only — No Boxes) -->
<header class="sticky top-0 z-40 bg-[#FFB800] border-b-2 border-amber-500 shadow-md transition-all duration-300" style="background-color: #FFB800 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Company Logo & Brand -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3.5 group py-2 focus:outline-none">
                <div class="w-12 h-12 flex-shrink-0 transition transform group-hover:scale-105 duration-200 bg-[#061838] p-2 rounded-2xl shadow-md border border-white/20 flex items-center justify-center">
                    <img src="{{ asset('images/logo-emblem.svg') }}" alt="Logo PT. Bahtera Keselamatan Sentosa" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center space-x-1.5">
                        <span class="text-[10px] font-black tracking-wider px-1.5 py-0.5 rounded bg-red-600 text-white leading-none shadow-sm">PT</span>
                        <span class="text-base sm:text-lg font-black tracking-tight text-[#061838]">
                            BAHTERA <span class="text-red-700">KESELAMATAN</span> SENTOSA
                        </span>
                    </div>
                    <span class="text-[10px] sm:text-[11px] font-extrabold text-[#061838]/90 tracking-wide">
                        <span class="lang-id-only">Official Maritime Crewing &amp; Manning Agency</span>
                        <span class="lang-en-only">Official Maritime Crewing &amp; Manning Agency</span>
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links (Clean Underline Only — Strictly NO Box Backgrounds or Focus Rings) -->
            <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                <!-- Home Link -->
                <a href="{{ route('home') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'home' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Home</span>
                    <span class="lang-en-only">Home</span>
                </a>

                <!-- Our Service Link -->
                <a href="{{ route('services') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'services' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Our Services</span>
                    <span class="lang-en-only">Our Services</span>
                </a>

                <!-- Our Team Link -->
                <a href="{{ route('team') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'team' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Our Team</span>
                    <span class="lang-en-only">Our Team</span>
                </a>

                <!-- Gallery Link -->
                <a href="{{ route('gallery') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'gallery' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Gallery</span>
                    <span class="lang-en-only">Gallery</span>
                </a>

                <!-- Contact Us Link -->
                <a href="{{ route('contact') }}" class="py-2 text-sm transition-all duration-200 border-b-[3px] focus:outline-none focus:ring-0 {{ $currentRoute === 'contact' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700 font-extrabold' }}">
                    <span class="lang-id-only">Contact Us</span>
                    <span class="lang-en-only">Contact Us</span>
                </a>

                <!-- Apply Seafarer CTA -->
                <a href="{{ route('contact') }}" class="ml-2 px-5 py-2.5 rounded-xl text-xs font-black uppercase tracking-wider bg-red-600 hover:bg-red-700 text-white shadow-md shadow-red-700/20 transition duration-200 transform hover:-translate-y-0.5 flex items-center gap-2 focus:outline-none">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    <span class="lang-id-only">Daftar Pelaut</span>
                    <span class="lang-en-only">Apply Crew</span>
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
            <span class="lang-id-only">Home</span>
            <span class="lang-en-only">Home</span>
        </a>
        <a href="{{ route('services') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'services' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Our Services</span>
            <span class="lang-en-only">Our Services</span>
        </a>
        <a href="{{ route('team') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'team' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Our Team</span>
            <span class="lang-en-only">Our Team</span>
        </a>
        <a href="{{ route('gallery') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'gallery' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Gallery</span>
            <span class="lang-en-only">Gallery</span>
        </a>
        <a href="{{ route('contact') }}" class="block px-3 py-2.5 text-sm font-bold border-b-2 {{ $currentRoute === 'contact' ? 'text-red-700 border-red-700 font-black' : 'text-[#061838] border-transparent hover:text-red-700 hover:border-red-700' }}">
            <span class="lang-id-only">Contact Us</span>
            <span class="lang-en-only">Contact Us</span>
        </a>

        <div class="pt-2">
            <a href="{{ route('contact') }}" class="block text-center w-full py-3 rounded-xl text-xs font-bold uppercase tracking-wider bg-red-600 hover:bg-red-700 text-white shadow-md">
                <span class="lang-id-only">Daftar Pelaut Sekarang (Upload PDF) &nearr;</span>
                <span class="lang-en-only">Apply Seafarer Now (Upload PDF) &nearr;</span>
            </a>
        </div>
    </div>
</header>
