@extends('layouts.app')

@section('title', 'PT. BAHTERA KESELAMATAN SENTOSA - Professional Crewing & Manning Agency')

@section('content')

{{-- =====================================================================
     1. HERO BANNER — strong overlay so text is always readable
     ===================================================================== --}}
<section class="relative w-full min-h-[88vh] flex flex-col justify-center items-center text-center overflow-hidden">

    {{-- Background image with strong overlay for readability --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-banner.jpg') }}"
             alt="Armada Kapal PT. Bahtera Keselamatan Sentosa"
             class="w-full h-full object-cover object-center scale-105">
        <div class="absolute inset-0 bg-gradient-to-b from-[#061838]/60 via-[#061838]/50 to-[#061838]/70"></div>
    </div>

    <div class="relative z-10 w-full max-w-4xl mx-auto px-6 flex flex-col items-center gap-5 py-24 fade-in-section">

        {{-- Main headline — clean gold without shadow --}}
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-[#FFB800] tracking-tight leading-tight whitespace-nowrap fade-in-section delay-100" style="color: #FFB800 !important;">
            PT. BAHTERA KESELAMATAN SENTOSA
        </h1>

        {{-- Subtitle --}}
        <p class="text-white text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed font-medium fade-in-section delay-200">
            <span class="lang-id-only">Mitra Resmi Crewing &amp; Manning Agency Terpercaya di Indonesia. Legalitas SIUKAK, SIUPPAK, Kepatuhan IMO STCW &amp; MLC 2006.</span>
            <span class="lang-en-only">Your Trusted Official Crewing &amp; Manning Agency in Indonesia. Licensed SIUKAK, SIUPPAK, IMO STCW &amp; MLC 2006 Compliant.</span>
        </p>

        {{-- CTA Button --}}
        <div class="flex justify-center pt-2 fade-in-section delay-300">
            <a href="{{ route('contact') }}"
               class="px-8 py-3.5 rounded-xl bg-red-600 hover:bg-red-700 text-white font-bold text-sm uppercase tracking-wider shadow-lg transition hover:-translate-y-0.5 transform">
                <span class="lang-id-only">Daftarkan Pelaut &nearr;</span>
                <span class="lang-en-only">Apply Seafarer &nearr;</span>
            </a>
        </div>
    </div>
</section>

{{-- =====================================================================
     2. STATS STRIP
     ===================================================================== --}}
<div class="relative z-20 -mt-12 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 fade-in-section delay-150">
    <div class="bg-white rounded-2xl shadow-2xl px-8 py-6 grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
        <div>
            <div class="text-3xl font-black text-[#061838]">20+</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Tahun Pengalaman</div>
        </div>
        <div>
            <div class="text-3xl font-black text-red-600">100%</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Legalitas Resmi</div>
        </div>
        <div>
            <div class="text-3xl font-black text-[#FFB800]">10+</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Negara Tujuan</div>
        </div>
        <div>
            <div class="text-3xl font-black text-[#061838]">24/7</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Dukungan Kru</div>
        </div>
    </div>
</div>

{{-- =====================================================================
     3. ABOUT US
     ===================================================================== --}}
<section id="about-us" class="py-24 lg:py-32 bg-[#F8FAFC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">

            {{-- Left: Content --}}
            <div class="space-y-7 fade-in-left">
                <div class="space-y-3">
                    <span class="inline-block px-3 py-1 rounded-md bg-[#061838] text-[#FFB800] text-xs font-extrabold uppercase tracking-widest">About Us</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#FFB800] leading-tight" style="color: #FFB800 !important;">
                        Perusahaan Crewing &amp; Manning Terpercaya
                    </h2>
                </div>

                <p class="text-slate-600 text-base leading-relaxed">
                    <strong class="text-slate-900">PT. BAHTERA KESELAMATAN SENTOSA</strong> adalah perusahaan keagenan awak kapal terkemuka di Indonesia yang memegang izin resmi <strong>SIUKAK No. 58.58-R Tahun 2024</strong> dan <strong>SIUPPAK No. 65.21 Tahun 2016</strong>. Dengan pengalaman lebih dari <strong>20 tahun</strong>, kami melayani perekrutan, verifikasi dokumen, sertifikasi STCW &amp; MLC 2006, dan penempatan pelaut Indonesia ke armada internasional.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white shadow-sm border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900">STCW &amp; MLC 2006</div>
                            <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Standar ILO dan IMO Manila Amendments</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white shadow-sm border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-[#FFB800] text-slate-900 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2m-6 9l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900">Dokumen &amp; MCU</div>
                            <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Pemeriksaan kesehatan RS terakreditasi</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('team') }}"
                   class="inline-flex items-center gap-2 text-sm font-bold text-[#061838] hover:text-red-700 transition group">
                    <span>Pelajari Profil &amp; Legalitas</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            {{-- Right: Photo with badge — landscape ratio --}}
            <div class="relative pb-6 pl-0 sm:pl-6 fade-in-right delay-200">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl h-[360px] lg:h-[400px]">
                    <img src="{{ asset('images/crew-training.jpg') }}"
                         alt="Tim PT. Bahtera Keselamatan Sentosa"
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/65 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 left-5 right-5">
                        <p class="text-[#FFB800] text-xs font-bold uppercase tracking-widest">Pelaut Bersertifikasi</p>
                        <h4 class="text-white font-black text-base">Siap Berlayar di Perairan Internasional</h4>
                    </div>
                </div>
                <div class="absolute -bottom-3 -left-3 bg-[#FFB800] text-slate-900 p-4 rounded-2xl shadow-xl hidden sm:flex items-center gap-3">
                    <div class="text-3xl font-black leading-none">20+</div>
                    <div class="text-xs font-bold leading-tight">
                        <span class="block">Tahun</span>
                        <span class="block">Pengalaman</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- =====================================================================
     4. VISI & MISI — Maritime Navigational Chart & Deep Oceanic Atmosphere
     ===================================================================== --}}
<section class="bg-[#040e1f] py-24 lg:py-32 relative overflow-hidden text-white border-y border-white/10">

    {{-- Layer 1: Deep Ocean Radial Vignette for Lighting Depth --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_90%_70%_at_50%_35%,#0d2a59_0%,#040e1f_100%)] pointer-events-none"></div>

    {{-- Layer 2: Maritime Navigational Chart & Bathymetric Depth Contours (Classy, Professional, Not Tacky) --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-35" style="mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%);">
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 900" fill="none">
            <defs>
                {{-- Technical Coordinate Dot-Grid --}}
                <pattern id="visiNauticalDots" width="48" height="48" patternUnits="userSpaceOnUse">
                    <circle cx="24" cy="24" r="1" fill="#FFB800" fill-opacity="0.3" />
                    <path d="M 22 24 L 26 24 M 24 22 L 24 26" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                </pattern>
            </defs>

            {{-- Grid Mesh Fill --}}
            <rect width="100%" height="100%" fill="url(#visiNauticalDots)" />

            {{-- Smooth Bathymetric Depth Contour Lines (Oceanic Topography) --}}
            <path d="M-100 220 C 300 160, 500 340, 850 260 C 1200 180, 1380 300, 1600 220" stroke="#FFB800" stroke-opacity="0.18" stroke-width="1.2" stroke-dasharray="4 4" fill="none" />
            <path d="M-100 400 C 280 320, 520 520, 920 420 C 1220 340, 1420 460, 1600 400" stroke="rgba(255,255,255,0.12)" stroke-width="1" fill="none" />
            <path d="M-100 580 C 220 480, 620 700, 1020 600 C 1320 520, 1460 640, 1600 580" stroke="#FFB800" stroke-opacity="0.15" stroke-width="1.2" fill="none" />
            <path d="M-100 760 C 360 680, 680 820, 1080 740 C 1380 680, 1520 760, 1600 720" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="6 6" fill="none" />

            {{-- Navigation Chart Bearing Compass Rings (Left & Right Flanks) --}}
            <g transform="translate(140, 350)" opacity="0.4">
                <circle cx="0" cy="0" r="240" stroke="#FFB800" stroke-opacity="0.25" stroke-width="1" stroke-dasharray="2 6" />
                <circle cx="0" cy="0" r="150" stroke="rgba(255,255,255,0.15)" stroke-width="0.8" />
                <circle cx="0" cy="0" r="70" stroke="#FFB800" stroke-opacity="0.3" stroke-width="0.8" />
                <line x1="-260" y1="0" x2="260" y2="0" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
                <line x1="0" y1="-260" x2="0" y2="260" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
            </g>

            <g transform="translate(1300, 480)" opacity="0.4">
                <circle cx="0" cy="0" r="280" stroke="#FFB800" stroke-opacity="0.25" stroke-width="1" stroke-dasharray="3 7" />
                <circle cx="0" cy="0" r="180" stroke="rgba(255,255,255,0.15)" stroke-width="0.8" />
                <circle cx="0" cy="0" r="90" stroke="#FFB800" stroke-opacity="0.3" stroke-width="0.8" />
                <line x1="-300" y1="0" x2="300" y2="0" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
                <line x1="0" y1="-300" x2="0" y2="300" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
            </g>

            {{-- Navigational Course Lines --}}
            <line x1="0" y1="800" x2="1440" y2="120" stroke="#FFB800" stroke-opacity="0.2" stroke-width="1.2" stroke-dasharray="10 10" />
            <line x1="0" y1="200" x2="1440" y2="780" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14 relative z-10">

        {{-- Header: centered --}}
        <div class="text-center max-w-4xl mx-auto space-y-4 fade-in-section">
            <span class="inline-block px-3.5 py-1 rounded-md bg-[#FFB800] text-slate-950 text-xs font-black uppercase tracking-widest shadow-md">
                VISI &amp; MISI
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black leading-tight tracking-tight">
                <span class="text-white">Menjadi </span><span class="text-[#FFB800]" style="color: #FFB800 !important;">Total Maritime Crewing Solution</span>
                <span class="block text-white mt-1.5">Terpadu, Unggul dan Terpercaya</span>
            </h2>
            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                Menjadi perusahaan crewing terkemuka yang unggul dan terpercaya, memberikan pelaut berkualitas tinggi untuk armada niaga dan perikanan internasional.
            </p>
        </div>

        {{-- 3 Misi Points horizontal --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-100">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">1</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">Menyediakan pelaut Indonesia berkualitas, berdisiplin tinggi, dan bersertifikasi IMO STCW.</p>
            </div>
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-200">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">2</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">Menerapkan standar seleksi ketat, verifikasi dokumen, dan pemeriksaan kesehatan (MCU) komprehensif.</p>
            </div>
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-300">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">3</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">Menjamin kepatuhan penuh terhadap regulasi pemerintah (SIUKAK &amp; SIUPPAK) dan MLC 2006.</p>
            </div>
        </div>

        {{-- 3 Landscape Photo Cards with hover animation --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Card 1 --}}
            <div class="group relative rounded-2xl overflow-hidden h-60 sm:h-72 cursor-pointer shadow-xl fade-in-section delay-100 border border-white/10">
                <img src="{{ asset('images/crew-training.jpg') }}"
                     alt="Crew Training"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/90 via-[#061838]/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <span class="inline-block px-2.5 py-1 rounded bg-[#FFB800] text-slate-900 text-xs font-extrabold uppercase mb-2">Rekrutmen</span>
                    <h3 class="text-white font-black text-base leading-tight">Crew Recruitment &amp; Selection</h3>
                    <p class="text-slate-300 text-xs mt-1.5 leading-relaxed max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300">
                        Seleksi ketat pelaut berpengalaman dengan uji kompetensi teknis dan background check menyeluruh.
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="group relative rounded-2xl overflow-hidden h-60 sm:h-72 cursor-pointer shadow-xl fade-in-section delay-200 border border-white/10">
                <img src="{{ asset('images/ship-bridge.jpg') }}"
                     alt="Ship Operations"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/90 via-[#061838]/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <span class="inline-block px-2.5 py-1 rounded bg-[#FFB800] text-slate-900 text-xs font-extrabold uppercase mb-2">Operasional</span>
                    <h3 class="text-white font-black text-base leading-tight">Maritime Operations &amp; Support</h3>
                    <p class="text-slate-300 text-xs mt-1.5 leading-relaxed max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300">
                        Penanganan visa maritim, paspor, tiket penerbangan, dan transit pelabuhan keberangkatan.
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="group relative rounded-2xl overflow-hidden h-60 sm:h-72 cursor-pointer shadow-xl fade-in-section delay-300 border border-white/10">
                <img src="{{ asset('images/vessel-fishing-trawler.jpg') }}"
                     alt="Fishing Vessel"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/90 via-[#061838]/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <span class="inline-block px-2.5 py-1 rounded bg-[#FFB800] text-slate-900 text-xs font-extrabold uppercase mb-2">Armada</span>
                    <h3 class="text-white font-black text-base leading-tight">Fleet Coverage &amp; Global Reach</h3>
                    <p class="text-slate-300 text-xs mt-1.5 leading-relaxed max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300">
                        Jangkauan ke 10+ negara — Belize, Rusia, Spanyol, Taiwan, Panama, Korea Selatan dan lainnya.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =====================================================================
     5. LEGALITY PERUSAHAAN — Certificate Dossier Style (Light Luxury Background)
     ===================================================================== --}}
<section id="legality" class="py-24 lg:py-32 bg-gradient-to-b from-slate-50 via-white to-slate-50 relative overflow-hidden border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#061838] text-[#FFB800] text-xs font-black uppercase tracking-widest shadow-sm">
                Legalitas &amp; Izin Resmi
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase" style="color: #FFB800 !important;">
                Legality Perusahaan
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                Beroperasi dengan otorisasi hukum penuh di bawah izin resmi Kementerian Republik Indonesia dan standar kepatuhan maritim internasional (IMO &amp; ILO).
            </p>
        </div>

        {{-- 3 Dossier Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Card 1: SIUKAK --}}
            <div class="group bg-white rounded-3xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1.5 overflow-hidden flex flex-col justify-between fade-in-section delay-100">
                <div>
                    <div class="h-2.5 bg-[#FFB800]"></div>
                    <div class="p-8 space-y-5">
                        <div class="flex items-center justify-between">
                            <div class="w-14 h-14 rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 font-extrabold text-[11px] uppercase tracking-wider">
                                SIUKAK 2024
                            </span>
                        </div>

                        <div>
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Surat Izin Usaha Keagenan Awak Kapal</span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">No. 58.58-R / 2024</h3>
                            <p class="text-xs font-semibold text-slate-500 mt-1">Kemenaker &amp; Kementerian Kelautan dan Perikanan RI</p>
                        </div>

                        <p class="text-slate-600 text-sm leading-relaxed">
                            Otorisasi resmi rekrutmen, penempatan, dan perlindungan awak kapal niaga serta perikanan internasional di perairan global.
                        </p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-2">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-bold text-slate-800">
                            Terverifikasi Aktif
                        </span>
                        <span class="text-[10px] font-black uppercase text-slate-700 bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-2xs">Resmi RI</span>
                    </div>
                </div>
            </div>

            {{-- Card 2: SIUPPAK --}}
            <div class="group bg-white rounded-3xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1.5 overflow-hidden flex flex-col justify-between fade-in-section delay-200">
                <div>
                    <div class="h-2.5 bg-[#FFB800]"></div>
                    <div class="p-8 space-y-5">
                        <div class="flex items-center justify-between">
                            <div class="w-14 h-14 rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2m-6 9l2 2 4-4"/></svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 font-extrabold text-[11px] uppercase tracking-wider">
                                SIUPPAK 2016
                            </span>
                        </div>

                        <div>
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Surat Izin Usaha Perekrutan &amp; Penempatan</span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">No. 65.21 / 2016</h3>
                            <p class="text-xs font-semibold text-slate-500 mt-1">Direktorat Jenderal Perhubungan Laut (Hubla RI)</p>
                        </div>

                        <p class="text-slate-600 text-sm leading-relaxed">
                            Lisensi resmi dari Ditjen Hubla Kementerian Perhubungan RI untuk tata kelola dokumen pelaut dan operasional manning agency legal.
                        </p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-2">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-bold text-slate-800">
                            Terverifikasi Aktif
                        </span>
                        <span class="text-[10px] font-black uppercase text-slate-700 bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-2xs">Hubla Kemenhub</span>
                    </div>
                </div>
            </div>

            {{-- Card 3: MLC & STCW --}}
            <div class="group bg-white rounded-3xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1.5 overflow-hidden flex flex-col justify-between fade-in-section delay-300">
                <div>
                    <div class="h-2.5 bg-[#FFB800]"></div>
                    <div class="p-8 space-y-5">
                        <div class="flex items-center justify-between">
                            <div class="w-14 h-14 rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 font-extrabold text-[11px] uppercase tracking-wider">
                                GLOBAL STANDARD
                            </span>
                        </div>

                        <div>
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Maritime Labour Convention &amp; STCW</span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">IMO &amp; ILO Standard</h3>
                            <p class="text-xs font-semibold text-slate-500 mt-1">Kepatuhan Penuh Standar Internasional</p>
                        </div>

                        <p class="text-slate-600 text-sm leading-relaxed">
                            Perlindungan hak pelaut, perjanjian kerja laut (PKL) transparan, asuransi, dan pelatihan tersertifikasi IMO Manila Amendments.
                        </p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-2">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-bold text-slate-800">
                            MLC 2006 Compliant
                        </span>
                        <span class="text-[10px] font-black uppercase text-slate-700 bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-2xs">STCW Certified</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =====================================================================
     6. OUR COMMITMENT — Maritime Navigation Mesh & Royal Navy Depth
     ===================================================================== --}}
<section id="commitment" class="py-24 lg:py-32 bg-[#040e1f] relative overflow-hidden text-white border-y border-white/10">

    {{-- Layer 1: Deep Ocean Radial Vignette for Lighting Depth --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_90%_70%_at_50%_35%,#0d2a59_0%,#040e1f_100%)] pointer-events-none"></div>

    {{-- Layer 2: Maritime Navigational Chart & Bathymetric Depth Contours (Classy, Professional, Not Tacky) --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-35" style="mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%);">
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 800" fill="none">
            <defs>
                {{-- Technical Coordinate Dot-Grid --}}
                <pattern id="nauticalDots" width="48" height="48" patternUnits="userSpaceOnUse">
                    <circle cx="24" cy="24" r="1" fill="#FFB800" fill-opacity="0.3" />
                    <path d="M 22 24 L 26 24 M 24 22 L 24 26" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                </pattern>
            </defs>

            {{-- Grid Mesh Fill --}}
            <rect width="100%" height="100%" fill="url(#nauticalDots)" />

            {{-- Smooth Bathymetric Depth Contour Lines (Oceanic Topography) --}}
            <path d="M-100 200 C 250 150, 450 320, 800 240 C 1150 160, 1350 280, 1600 200" stroke="#FFB800" stroke-opacity="0.18" stroke-width="1.2" stroke-dasharray="4 4" fill="none" />
            <path d="M-100 350 C 300 280, 500 480, 900 380 C 1200 300, 1400 420, 1600 360" stroke="rgba(255,255,255,0.12)" stroke-width="1" fill="none" />
            <path d="M-100 500 C 200 420, 600 620, 1000 520 C 1300 440, 1450 560, 1600 500" stroke="#FFB800" stroke-opacity="0.15" stroke-width="1.2" fill="none" />
            <path d="M-100 650 C 350 580, 650 720, 1050 640 C 1350 580, 1500 660, 1600 620" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="6 6" fill="none" />

            {{-- Navigation Chart Bearing Compass Rings (Left & Right Flanks) --}}
            <g transform="translate(120, 400)" opacity="0.4">
                <circle cx="0" cy="0" r="220" stroke="#FFB800" stroke-opacity="0.25" stroke-width="1" stroke-dasharray="2 6" />
                <circle cx="0" cy="0" r="140" stroke="rgba(255,255,255,0.15)" stroke-width="0.8" />
                <circle cx="0" cy="0" r="60" stroke="#FFB800" stroke-opacity="0.3" stroke-width="0.8" />
                <line x1="-240" y1="0" x2="240" y2="0" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
                <line x1="0" y1="-240" x2="0" y2="240" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
            </g>

            <g transform="translate(1320, 380)" opacity="0.4">
                <circle cx="0" cy="0" r="260" stroke="#FFB800" stroke-opacity="0.25" stroke-width="1" stroke-dasharray="3 7" />
                <circle cx="0" cy="0" r="170" stroke="rgba(255,255,255,0.15)" stroke-width="0.8" />
                <circle cx="0" cy="0" r="80" stroke="#FFB800" stroke-opacity="0.3" stroke-width="0.8" />
                <line x1="-280" y1="0" x2="280" y2="0" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
                <line x1="0" y1="-280" x2="0" y2="280" stroke="rgba(255,255,255,0.12)" stroke-width="0.75" stroke-dasharray="4 4" />
            </g>

            {{-- Navigational Course Lines --}}
            <line x1="0" y1="720" x2="1440" y2="100" stroke="#FFB800" stroke-opacity="0.2" stroke-width="1.2" stroke-dasharray="10 10" />
            <line x1="0" y1="180" x2="1440" y2="680" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 relative z-10">

        {{-- Header: Contrast High-Impact --}}
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <span class="inline-block px-3.5 py-1 rounded-full bg-[#FFB800] text-[#061838] text-xs font-black uppercase tracking-widest shadow-md">
                5 Pilar Mutu Kami
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#FFB800] uppercase tracking-tight" style="color: #FFB800 !important;">
                Our Commitment
            </h2>
            <p class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto font-normal">
                Dedikasi dan prinsip utama yang kami pegang teguh dalam setiap penyaluran, pembinaan, dan perlindungan pelaut profesional Indonesia.
            </p>
        </div>

        {{-- 5 High-Contrast Cards with Top Golden Border Accent --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5">

            {{-- 01: Safety --}}
            <div class="group relative p-6 rounded-3xl bg-gradient-to-b from-white/[0.09] to-white/[0.03] backdrop-blur-md border border-white/15 border-t-2 border-t-[#FFB800] hover:border-[#FFB800] hover:from-white/[0.14] hover:to-white/[0.06] shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between fade-in-section delay-75">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">01</span>
                        <div class="w-12 h-12 rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform" style="background-color: #FFB800 !important; color: #061838 !important;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-black text-base uppercase tracking-wider" style="color: #FFB800 !important;">SAFETY</h4>
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">Prioritas mutlak keselamatan jiwa di laut (SOLAS) dan proteksi keselamatan kru di setiap rute pelayaran.</p>
                    </div>
                </div>
                <span class="text-[11px] font-black px-3 py-1 rounded-full w-fit mt-5 shadow-sm" style="background-color: #FFB800 !important; color: #061838 !important;">
                    SOLAS Compliant
                </span>
            </div>

            {{-- 02: Quality --}}
            <div class="group relative p-6 rounded-3xl bg-gradient-to-b from-white/[0.09] to-white/[0.03] backdrop-blur-md border border-white/15 border-t-2 border-t-[#FFB800] hover:border-[#FFB800] hover:from-white/[0.14] hover:to-white/[0.06] shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between fade-in-section delay-150">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">02</span>
                        <div class="w-12 h-12 rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform" style="background-color: #FFB800 !important; color: #061838 !important;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-black text-base uppercase tracking-wider" style="color: #FFB800 !important;">QUALITY</h4>
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">Standar seleksi kompetensi ketat, sertifikasi STCW resmi terotentikasi, dan uji kesehatan MCU komprehensif.</p>
                    </div>
                </div>
                <span class="text-[11px] font-black px-3 py-1 rounded-full w-fit mt-5 shadow-sm" style="background-color: #FFB800 !important; color: #061838 !important;">
                    STCW Verified
                </span>
            </div>

            {{-- 03: Professionalism --}}
            <div class="group relative p-6 rounded-3xl bg-gradient-to-b from-white/[0.09] to-white/[0.03] backdrop-blur-md border border-white/15 border-t-2 border-t-[#FFB800] hover:border-[#FFB800] hover:from-white/[0.14] hover:to-white/[0.06] shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between fade-in-section delay-200">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">03</span>
                        <div class="w-12 h-12 rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform" style="background-color: #FFB800 !important; color: #061838 !important;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-black text-base uppercase tracking-wider" style="color: #FFB800 !important;">PROFESSIONALISM</h4>
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">Etos kerja tinggi, disiplin navigasi, loyalitas awak kapal, dan komunikasi maritim standar internasional.</p>
                    </div>
                </div>
                <span class="text-[11px] font-black px-3 py-1 rounded-full w-fit mt-5 shadow-sm" style="background-color: #FFB800 !important; color: #061838 !important;">
                    High Discipline
                </span>
            </div>

            {{-- 04: Integrity --}}
            <div class="group relative p-6 rounded-3xl bg-gradient-to-b from-white/[0.09] to-white/[0.03] backdrop-blur-md border border-white/15 border-t-2 border-t-[#FFB800] hover:border-[#FFB800] hover:from-white/[0.14] hover:to-white/[0.06] shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between fade-in-section delay-250">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">04</span>
                        <div class="w-12 h-12 rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform" style="background-color: #FFB800 !important; color: #061838 !important;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-black text-base uppercase tracking-wider" style="color: #FFB800 !important;">INTEGRITY</h4>
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">Kejujuran tata kelola, transparansi penggajian allotment keluarga, dan nol toleransi dokumen palsu.</p>
                    </div>
                </div>
                <span class="text-[11px] font-black px-3 py-1 rounded-full w-fit mt-5 shadow-sm" style="background-color: #FFB800 !important; color: #061838 !important;">
                    100% Honest
                </span>
            </div>

            {{-- 05: Reliability --}}
            <div class="group relative p-6 rounded-3xl bg-gradient-to-b from-white/[0.09] to-white/[0.03] backdrop-blur-md border border-white/15 border-t-2 border-t-[#FFB800] hover:border-[#FFB800] hover:from-white/[0.14] hover:to-white/[0.06] shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between fade-in-section delay-300">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">05</span>
                        <div class="w-12 h-12 rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center shadow-md group-hover:scale-105 transition-transform" style="background-color: #FFB800 !important; color: #061838 !important;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-black text-base uppercase tracking-wider" style="color: #FFB800 !important;">RELIABILITY</h4>
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">Ketepatan jadwal sign-on &amp; sign-off kapal, rotasi teratur, dan tim siaga tanggap darurat 24/7.</p>
                    </div>
                </div>
                <span class="text-[11px] font-black px-3 py-1 rounded-full w-fit mt-5 shadow-sm" style="background-color: #FFB800 !important; color: #061838 !important;">
                    On-Time Deploy
                </span>
            </div>

        </div>

    </div>
</section>

{{-- =====================================================================
     7. WHY CHOOSE US — Asymmetric Split Layout (Warm Slate #F1F5F9)
     ===================================================================== --}}
<section id="why-choose-us" class="py-24 lg:py-32 bg-[#F1F5F9] relative overflow-hidden border-t border-slate-300/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            {{-- Left Column: Executive Summary & Trust Callout (5 cols) --}}
            <div class="lg:col-span-5 space-y-7 lg:sticky lg:top-28 fade-in-left">
                <div class="space-y-3">
                    <span class="inline-block px-3.5 py-1.5 rounded-full bg-[#FFB800] text-[#061838] text-xs font-black uppercase tracking-widest shadow-sm">
                        Keunggulan Strategis
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-[#061838] leading-snug tracking-tight">
                        Mengapa Memilih <span class="text-[#FFB800] block mt-1" style="color: #FFB800 !important;">PT. Bahtera Keselamatan Sentosa?</span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Rekam jejak lebih dari 20 tahun membuktikan komitmen kami sebagai mitra crewing paling tepercaya bagi pemilik kapal niaga dan armada penangkap ikan internasional.
                    </p>
                </div>

                {{-- Trust Callout Box in Ocean Navy Gradient (matching Visi & Misi theme) --}}
                <div class="p-7 rounded-3xl bg-gradient-to-b from-[#041126] via-[#092248] to-[#041126] text-white shadow-2xl border border-white/15 border-t-2 border-t-[#FFB800] space-y-5 relative overflow-hidden">
                    <div class="flex items-center space-x-3 pb-3 border-b border-white/10 relative z-10">
                        <div class="w-10 h-10 rounded-xl bg-[#FFB800] text-[#061838] font-black flex items-center justify-center text-lg shadow-md">
                            &check;
                        </div>
                        <div>
                            <h4 class="font-black text-sm uppercase tracking-wide text-[#FFB800]">Jaminan Mutu &amp; Kepatuhan</h4>
                            <p class="text-xs text-slate-300">Resmi, Terverifikasi, &amp; Berstandar Internasional</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 text-center relative z-10">
                        <div class="p-3.5 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10">
                            <div class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">20+</div>
                            <div class="text-[11px] font-bold text-slate-200 uppercase mt-0.5">Tahun Pengalaman</div>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10">
                            <div class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">10+</div>
                            <div class="text-[11px] font-bold text-slate-200 uppercase mt-0.5">Negara Kemitraan</div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-xl bg-[#FFB800] hover:bg-[#FFD700] text-[#061838] font-black text-xs uppercase tracking-wider shadow-lg transition-transform hover:-translate-y-0.5 transform relative z-10">
                        <span>Konsultasikan Kebutuhan Kru &nearr;</span>
                    </a>
                </div>
            </div>

            {{-- Right Column: 6 Interactive Advantage Cards (7 cols) --}}
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">

                {{-- 01 --}}
                <div class="group p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#FFB800] transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between fade-in-section delay-100">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-[#FFB800] uppercase tracking-wider bg-[#061838] px-2.5 py-0.5 rounded-md">01</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#061838] flex items-center justify-center group-hover:bg-[#FFB800] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                        </div>
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">Legalitas Resmi Lengkap</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Izin SIUKAK No. 58.58-R/2024 dan SIUPPAK No. 65.21/2016 serta kepatuhan standar IMO STCW &amp; MLC 2006.</p>
                    </div>
                </div>

                {{-- 02 --}}
                <div class="group p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#FFB800] transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between fade-in-section delay-150">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-[#FFB800] uppercase tracking-wider bg-[#061838] px-2.5 py-0.5 rounded-md">02</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#061838] flex items-center justify-center group-hover:bg-[#FFB800] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                        </div>
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">20+ Tahun Pengalaman</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Rekam jejak lebih dari dua dekade dalam rekrutmen dan penempatan pelaut andal untuk armada kapal global.</p>
                    </div>
                </div>

                {{-- 03 --}}
                <div class="group p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#FFB800] transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between fade-in-section delay-200">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-[#FFB800] uppercase tracking-wider bg-[#061838] px-2.5 py-0.5 rounded-md">03</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#061838] flex items-center justify-center group-hover:bg-[#FFB800] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2m-6 9l2 2 4-4"/></svg>
                            </div>
                        </div>
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">Seleksi &amp; MCU Ketat</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Uji kecakapan teknis, background check, dan Medical Check Up (MCU) menyeluruh di rumah sakit terakreditasi.</p>
                    </div>
                </div>

                {{-- 04 --}}
                <div class="group p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#FFB800] transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between fade-in-section delay-250">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-[#FFB800] uppercase tracking-wider bg-[#061838] px-2.5 py-0.5 rounded-md">04</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#061838] flex items-center justify-center group-hover:bg-[#FFB800] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/></svg>
                            </div>
                        </div>
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">Dokumen &amp; Logistik Lengkap</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Pengurusan visa maritim, paspor, endorsement negara bendera, tiket pesawat, dan transit pelabuhan.</p>
                    </div>
                </div>

                {{-- 05 --}}
                <div class="group p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#FFB800] transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between fade-in-section delay-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-[#FFB800] uppercase tracking-wider bg-[#061838] px-2.5 py-0.5 rounded-md">05</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#061838] flex items-center justify-center group-hover:bg-[#FFB800] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                        </div>
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">Jaringan Global Luas</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Kemitraan strategis dengan pemilik kapal di Belize, Rusia, Spanyol, Taiwan, Panama, Korea Selatan, dll.</p>
                    </div>
                </div>

                {{-- 06 --}}
                <div class="group p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#FFB800] transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between fade-in-section delay-350">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black text-[#FFB800] uppercase tracking-wider bg-[#061838] px-2.5 py-0.5 rounded-md">06</span>
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#061838] flex items-center justify-center group-hover:bg-[#FFB800] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            </div>
                        </div>
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">Dukungan Kru 24/7</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">Transparansi slip gaji (allotment), asuransi pelaut, pendampingan keluarga, dan monitoring darurat 24 jam.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
