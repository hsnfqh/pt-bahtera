@extends('layouts.app')

@section('title', 'PT. BAHTERA ANUGERAH SENTOSA - Professional Crewing & Manning Agency')

@section('content')

{{-- =====================================================================
     1. HERO BANNER — strong overlay so text is always readable
     ===================================================================== --}}
<section class="relative w-full min-h-[88vh] flex flex-col justify-center items-center text-center overflow-hidden">

    {{-- Background image with strong overlay for readability --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-banner.jpg') }}"
             alt="Armada Kapal PT. Bahtera Anugerah Sentosa"
             class="w-full h-full object-cover object-center scale-105">
        <div class="absolute inset-0 bg-gradient-to-b from-[#061838]/60 via-[#061838]/50 to-[#061838]/70"></div>
    </div>

    <div class="relative z-10 w-full max-w-4xl mx-auto px-6 flex flex-col items-center gap-5 py-24 fade-in-section">

        {{-- Main headline — clean gold without shadow --}}
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-[#FFB800] tracking-tight leading-tight whitespace-nowrap fade-in-section delay-100" style="color: #FFB800 !important;">
            PT. BAHTERA ANUGERAH SENTOSA
        </h1>

        {{-- Subtitle --}}
        <p class="text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl max-w-3xl leading-tight font-bold fade-in-section delay-200 mt-2">
            <span class="lang-id-only">Integritas adalah Prioritas Kami</span>
            <span class="lang-en-only">Intergrity is Our Priority</span>
        </p>
    </div>
</section>

{{-- =====================================================================
     2. STATS STRIP
     ===================================================================== --}}
<div class="relative z-20 -mt-12 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 fade-in-section delay-150">
    <div class="bg-white rounded-2xl shadow-2xl px-8 py-6 grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
        <div>
            <div class="text-3xl font-black text-[#061838]">20+</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">
                <span class="lang-id-only">Tahun Pengalaman</span>
                <span class="lang-en-only">Years Experience</span>
            </div>
        </div>
        <div>
            <div class="text-3xl font-black text-red-600">100%</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">
                <span class="lang-id-only">Legalitas Resmi</span>
                <span class="lang-en-only">Official Legality</span>
            </div>
        </div>
        <div>
            <div class="text-3xl font-black text-[#FFB800]">50+</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">
                <span class="lang-id-only">Negara Tujuan</span>
                <span class="lang-en-only">Destination Countries</span>
            </div>
        </div>
        <div>
            <div class="text-3xl font-black text-[#061838]">6.000+</div>
            <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">
                <span class="lang-id-only">Anggota Kru</span>
                <span class="lang-en-only">Crew Member</span>
            </div>
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
                    <span class="inline-block px-3 py-1 rounded-md bg-[#061838] text-[#FFB800] text-xs font-extrabold uppercase tracking-widest">
                        <span class="lang-id-only">Tentang Kami</span>
                        <span class="lang-en-only">About Us</span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#FFB800] leading-tight" style="color: #FFB800 !important;">
                        <span class="lang-id-only">Perusahaan Crewing &amp; Manning Terpercaya</span>
                        <span class="lang-en-only">Trusted Crewing &amp; Manning Agency</span>
                    </h2>
                </div>

                <div class="text-slate-600 text-sm sm:text-base leading-relaxed space-y-3.5">
                    <div class="lang-id-only space-y-3">
                        <p class="font-bold text-slate-900">
                            <strong>PT. BAHTERA ANUGERAH SENTOSA</strong> &ndash; Mitra Terpercaya Anda dalam Layanan Crewing &amp; Manning Profesional
                        </p>
                        <p>
                            Memegang izin resmi termasuk <strong>SIUKAK No. 58.58-R Tahun 2024</strong> dan <strong>SIUPPAK No. 65.21 Tahun 2016</strong>. <strong>PT. BAHTERA ANUGERAH SENTOSA</strong> adalah agensi crewing dan manning profesional yang berkomitmen untuk menyediakan pelaut yang berkualifikasi tinggi, berpengalaman, andal, dan profesional untuk industri maritim internasional.
                        </p>
                        <p>
                            Dengan pengalaman lebih dari <strong>20 tahun</strong> dalam bisnis crewing dan manning, kami telah membangun reputasi yang kuat dalam menghadirkan personel maritim yang kompeten dan memenuhi standar internasional serta kebutuhan operasional pemilik dan operator kapal di seluruh dunia.
                        </p>
                        <p>
                            Komitmen kami terhadap profesionalisme, kualitas, integritas, dan keandalan memungkinkan kami untuk menjalin dan mempertahankan kemitraan jangka panjang dengan klien dan mitra bisnis kami di seluruh industri maritim global.
                        </p>
                    </div>
                    <div class="lang-en-only space-y-3">
                        <p class="font-bold text-slate-900">
                            <strong>PT. BAHTERA ANUGERAH SENTOSA</strong> &ndash; Your Trusted Partner in Professional Crewing &amp; Manning Services
                        </p>
                        <p>
                            With valid licenses including <strong>SIUKAK No. 58.58-R Tahun 2024</strong> and <strong>SIUPPAK No. 65.21 Tahun 2016</strong>. <strong>PT. BAHTERA ANUGERAH SENTOSA</strong> is a professional crewing and manning agency committed to providing highly qualified, experienced, reliable, and professional seafarers to the international maritime industry.
                        </p>
                        <p>
                            With more than <strong>20 years</strong> of experience in the crewing and manning business, we have built a strong reputation for delivering competent maritime personnel who meet international standards and the operational requirements of ship owners and vessel operators worldwide.
                        </p>
                        <p>
                            Our commitment to professionalism, quality, integrity, and reliability enables us to establish and maintain long-term partnerships with our clients and business partners across the global maritime industry.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white shadow-sm border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900">SIUKAK &amp; SIUPPAK</div>
                            <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">
                                SIUKAK No. 58.58-R Tahun 2024 and SIUPPAK No. 65.21 Tahun 2016
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white shadow-sm border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-[#FFB800] text-slate-900 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2m-6 9l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900">
                                <span class="lang-id-only">Dokumen &amp; MCU</span>
                                <span class="lang-en-only">Documents &amp; MCU</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">
                                <span class="lang-id-only">Pemeriksaan kesehatan RS terakreditasi</span>
                                <span class="lang-en-only">Accredited hospital medical checkup</span>
                            </p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('team') }}"
                   class="inline-flex items-center gap-2 text-sm font-bold text-[#061838] hover:text-red-700 transition group">
                    <span class="lang-id-only">Pelajari Profil &amp; Legalitas</span>
                    <span class="lang-en-only">View Profile &amp; Legality</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            {{-- Right: Photo with badge — landscape ratio --}}
            <div class="relative pb-6 pl-0 sm:pl-6 fade-in-right delay-200">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl h-[360px] lg:h-[400px]">
                    <img src="{{asset('images/FB_IMG_1789792894133.jpg') }}"
                         alt="Tim PT. Bahtera Anugerah Sentosa"
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/65 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 left-5 right-5">
                        <p class="text-[#FFB800] text-xs font-bold uppercase tracking-widest">
                            <span class="lang-id-only">Pelaut Bersertifikasi</span>
                            <span class="lang-en-only">Certified Seafarers</span>
                        </p>
                        <h4 class="text-white font-black text-base">
                            <span class="lang-id-only">Siap Berlayar di Perairan Internasional</span>
                            <span class="lang-en-only">Ready for Global Voyages</span>
                        </h4>
                    </div>
                </div>
                <div class="absolute -bottom-3 -left-3 bg-[#FFB800] text-slate-900 p-4 rounded-2xl shadow-xl hidden sm:flex items-center gap-3">
                    <div class="text-3xl font-black leading-none">20+</div>
                    <div class="text-xs font-bold leading-tight">
                        <span class="block lang-id-only">Tahun</span>
                        <span class="block lang-id-only">Pengalaman</span>
                        <span class="block lang-en-only">Years</span>
                        <span class="block lang-en-only">Experience</span>
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

    {{-- Layer 2: Maritime Navigational Chart & Bathymetric Depth Contours --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-35" style="mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%);">
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 900" fill="none">
            <defs>
                <pattern id="visiNauticalDots" width="48" height="48" patternUnits="userSpaceOnUse">
                    <circle cx="24" cy="24" r="1" fill="#FFB800" fill-opacity="0.3" />
                    <path d="M 22 24 L 26 24 M 24 22 L 24 26" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                </pattern>
            </defs>

            <rect width="100%" height="100%" fill="url(#visiNauticalDots)" />

            <path d="M-100 220 C 300 160, 500 340, 850 260 C 1200 180, 1380 300, 1600 220" stroke="#FFB800" stroke-opacity="0.18" stroke-width="1.2" stroke-dasharray="4 4" fill="none" />
            <path d="M-100 400 C 280 320, 520 520, 920 420 C 1220 340, 1420 460, 1600 400" stroke="rgba(255,255,255,0.12)" stroke-width="1" fill="none" />
            <path d="M-100 580 C 220 480, 620 700, 1020 600 C 1320 520, 1460 640, 1600 580" stroke="#FFB800" stroke-opacity="0.15" stroke-width="1.2" fill="none" />
            <path d="M-100 760 C 360 680, 680 820, 1080 740 C 1380 680, 1520 760, 1600 720" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="6 6" fill="none" />

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

            <line x1="0" y1="800" x2="1440" y2="120" stroke="#FFB800" stroke-opacity="0.2" stroke-width="1.2" stroke-dasharray="10 10" />
            <line x1="0" y1="200" x2="1440" y2="780" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14 relative z-10">

        {{-- Header: centered --}}
        <div class="text-center max-w-4xl mx-auto space-y-4 fade-in-section">
            <span class="inline-block px-3.5 py-1 rounded-md bg-[#FFB800] text-slate-950 text-xs font-black uppercase tracking-widest shadow-md">
                <span class="lang-id-only">VISI &amp; MISI</span>
                <span class="lang-en-only">VISION &amp; MISSION</span>
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black leading-tight tracking-tight">
                <span class="lang-id-only">
                    <span class="text-white">Menjadi </span><span class="text-[#FFB800]" style="color: #FFB800 !important;">Mitra Crewing Internasional Terpercaya</span>
                    <span class="block text-white mt-1.5">Profesional, Andal &amp; Berkompeten Tinggi</span>
                </span>
                <span class="lang-en-only">
                    <span class="text-white">To Become a </span><span class="text-[#FFB800]" style="color: #FFB800 !important;">Trusted International Crewing Partner</span>
                    <span class="block text-white mt-1.5">Professional, Reliable &amp; Highly Competent</span>
                </span>
            </h2>
            <p class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-3xl mx-auto font-medium">
                <span class="lang-id-only">Menjadi mitra crewing internasional yang terpercaya dan terkemuka, diakui dalam menyediakan pelaut yang profesional, andal, dan sangat kompeten untuk industri maritim global.</span>
                <span class="lang-en-only">To become a trusted and leading international crewing partner, recognized for providing professional, reliable, and highly competent seafarers to the global maritime industry.</span>
            </p>
        </div>

        {{-- 5 Misi Points --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-100">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">1</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">
                    <span class="lang-id-only">Menyediakan pelaut yang sangat berkualitas dan berpengalaman.</span>
                    <span class="lang-en-only">To provide highly qualified and experienced seafarers.</span>
                </p>
            </div>
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-200">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">2</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">
                    <span class="lang-id-only">Mempertahankan standar tinggi dalam rekrutmen dan manajemen awak kapal.</span>
                    <span class="lang-en-only">To maintain high standards of recruitment and crew management.</span>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-300">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">3</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">
                    <span class="lang-id-only">Mendukung operasional kapal yang aman dan efisien.</span>
                    <span class="lang-en-only">To support the safe and efficient operation of vessels.</span>
                </p>
            </div>
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-400">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">4</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">
                    <span class="lang-id-only">Membangun hubungan yang kuat dan berkelanjutan dengan pemilik dan operator kapal.</span>
                    <span class="lang-en-only">To build strong and sustainable relationships with ship owners and operators.</span>
                </p>
            </div>
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10 hover:border-[#FFB800]/40 transition-all duration-300 hover:-translate-y-1 shadow-lg fade-in-section delay-500">
                <div class="w-10 h-10 rounded-full bg-[#FFB800] text-slate-900 flex items-center justify-center font-black text-sm flex-shrink-0 shadow-md">5</div>
                <p class="text-slate-200 text-sm leading-relaxed pt-1">
                    <span class="lang-id-only">Terus meningkatkan layanan kami sesuai dengan standar maritim internasional.</span>
                    <span class="lang-en-only">To continuously improve our services in line with international maritime standards.</span>
                </p>
            </div>
        </div>

        {{-- 3 Landscape Photo Cards with hover animation --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Card 1 --}}
            <div class="group relative rounded-2xl overflow-hidden h-60 sm:h-72 cursor-pointer shadow-xl fade-in-section delay-100 border border-white/10">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80&fit=crop"
                     alt="Recruitment Team Interview"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/90 via-[#061838]/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <span class="inline-block px-2.5 py-1 rounded bg-[#FFB800] text-slate-900 text-xs font-extrabold uppercase mb-2">
                        <span class="lang-id-only">Rekrutmen</span>
                        <span class="lang-en-only">Recruitment</span>
                    </span>
                    <h3 class="text-white font-black text-base leading-tight">Crew Recruitment &amp; Selection</h3>
                    <p class="text-slate-300 text-xs mt-1.5 leading-relaxed max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300">
                        <span class="lang-id-only">Seleksi ketat pelaut berpengalaman dengan uji kompetensi teknis dan background check menyeluruh.</span>
                        <span class="lang-en-only">Strict screening of experienced seafarers with technical competency tests and background checks.</span>
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="group relative rounded-2xl overflow-hidden h-60 sm:h-72 cursor-pointer shadow-xl fade-in-section delay-200 border border-white/10">
                <img src="{{ asset('images/20260621_221340.jpg') }}"
                     alt="Seafarers International Departure"
                     class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/90 via-[#061838]/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <span class="inline-block px-2.5 py-1 rounded bg-[#FFB800] text-slate-900 text-xs font-extrabold uppercase mb-2">
                        <span class="lang-id-only">Operasional</span>
                        <span class="lang-en-only">Operations</span>
                    </span>
                    <h3 class="text-white font-black text-base leading-tight">Maritime Operations &amp; Support</h3>
                    <p class="text-slate-300 text-xs mt-1.5 leading-relaxed max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300">
                        <span class="lang-id-only">Penanganan visa maritim, paspor, tiket penerbangan, dan transit pelabuhan keberangkatan.</span>
                        <span class="lang-en-only">Handling maritime visas, seaman passports, flights, and departure port transits.</span>
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="group relative rounded-2xl overflow-hidden h-60 sm:h-72 cursor-pointer shadow-xl fade-in-section delay-300 border border-white/10">
                <img src="{{ asset('images/FB_IMG_1789792894133.jpg') }}"
                     alt="Fleet Coverage"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/90 via-[#061838]/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <span class="inline-block px-2.5 py-1 rounded bg-[#FFB800] text-slate-900 text-xs font-extrabold uppercase mb-2">
                        <span class="lang-id-only">Armada</span>
                        <span class="lang-en-only">Fleet</span>
                    </span>
                    <h3 class="text-white font-black text-base leading-tight">Fleet Coverage &amp; Global Reach</h3>
                    <p class="text-slate-300 text-xs mt-1.5 leading-relaxed max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300">
                        <span class="lang-id-only">Jangkauan ke 50+ negara — Belize, Rusia, Spanyol, Taiwan, Panama, Korea Selatan dan lainnya.</span>
                        <span class="lang-en-only">Global deployment across 50+ countries — Belize, Russia, Spain, Taiwan, Panama, South Korea, etc.</span>
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
                <span class="lang-id-only">Legalitas &amp; Izin Resmi</span>
                <span class="lang-en-only">Official Legality &amp; Licenses</span>
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase" style="color: #FFB800 !important;">
                <span class="lang-id-only">Legalitas Perusahaan</span>
                <span class="lang-en-only">Corporate Legality</span>
            </h2>
        </div>

        {{-- 2 Dossier Cards --}}
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

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
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">
                                <span class="lang-id-only">Surat Izin Usaha Keagenan Awak Kapal</span>
                                <span class="lang-en-only">Seafarer Manning Agency Business License</span>
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">No. 58.58-R / 2024</h3>
                            <p class="text-xs font-semibold text-slate-500 mt-1">
                                <span class="lang-id-only">Kemenaker &amp; Kementerian Kelautan dan Perikanan RI</span>
                                <span class="lang-en-only">Ministry of Manpower &amp; Maritime Affairs RI</span>
                            </p>
                        </div>

                        <p class="text-slate-600 text-sm leading-relaxed">
                            <span class="lang-id-only">Otorisasi resmi rekrutmen, penempatan, dan perlindungan awak kapal niaga serta perikanan internasional di perairan global.</span>
                            <span class="lang-en-only">Official authorization for recruitment, deployment, and protection of seafarers for international merchant and fishing fleets.</span>
                        </p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-2">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-bold text-slate-800">
                            <span class="lang-id-only">Terverifikasi Aktif</span>
                            <span class="lang-en-only">Verified Active</span>
                        </span>
                        <span class="text-[10px] font-black uppercase text-slate-700 bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-2xs">
                            <span class="lang-id-only">Resmi RI</span>
                            <span class="lang-en-only">Gov Certified</span>
                        </span>
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
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">
                                <span class="lang-id-only">Surat Izin Usaha Perekrutan &amp; Penempatan</span>
                                <span class="lang-en-only">Seafarer Recruitment &amp; Placement License</span>
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">No. 65.21 / 2016</h3>
                            <p class="text-xs font-semibold text-slate-500 mt-1">
                                <span class="lang-id-only">Direktorat Jenderal Perhubungan Laut (Hubla RI)</span>
                                <span class="lang-en-only">Directorate General of Sea Transportation RI</span>
                            </p>
                        </div>

                        <p class="text-slate-600 text-sm leading-relaxed">
                            <span class="lang-id-only">Lisensi resmi dari Ditjen Hubla Kementerian Perhubungan RI untuk tata kelola dokumen pelaut dan operasional manning agency legal.</span>
                            <span class="lang-en-only">Official license from Sea Transportation Directorate General for seafarer certification governance and legal agency operations.</span>
                        </p>
                    </div>
                </div>

                <div class="px-8 pb-8 pt-2">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200">
                        <span class="text-xs font-bold text-slate-800">
                            <span class="lang-id-only">Terverifikasi Aktif</span>
                            <span class="lang-en-only">Verified Active</span>
                        </span>
                        <span class="text-[10px] font-black uppercase text-slate-700 bg-white px-2.5 py-1 rounded-md border border-slate-200 shadow-2xs">Hubla Kemenhub</span>
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

    {{-- Layer 2: Maritime Navigational Chart & Bathymetric Depth Contours --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-35" style="mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 75% 70% at 50% 50%, black 50%, transparent 100%);">
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 800" fill="none">
            <defs>
                <pattern id="nauticalDots" width="48" height="48" patternUnits="userSpaceOnUse">
                    <circle cx="24" cy="24" r="1" fill="#FFB800" fill-opacity="0.3" />
                    <path d="M 22 24 L 26 24 M 24 22 L 24 26" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                </pattern>
            </defs>

            <rect width="100%" height="100%" fill="url(#nauticalDots)" />

            <path d="M-100 200 C 250 150, 450 320, 800 240 C 1150 160, 1350 280, 1600 200" stroke="#FFB800" stroke-opacity="0.18" stroke-width="1.2" stroke-dasharray="4 4" fill="none" />
            <path d="M-100 350 C 300 280, 500 480, 900 380 C 1200 300, 1400 420, 1600 360" stroke="rgba(255,255,255,0.12)" stroke-width="1" fill="none" />
            <path d="M-100 500 C 200 420, 600 620, 1000 520 C 1300 440, 1450 560, 1600 500" stroke="#FFB800" stroke-opacity="0.15" stroke-width="1.2" fill="none" />
            <path d="M-100 650 C 350 580, 650 720, 1050 640 C 1350 580, 1500 660, 1600 620" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="6 6" fill="none" />

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

            <line x1="0" y1="720" x2="1440" y2="100" stroke="#FFB800" stroke-opacity="0.2" stroke-width="1.2" stroke-dasharray="10 10" />
            <line x1="0" y1="180" x2="1440" y2="680" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 relative z-10">

        {{-- Header: Contrast High-Impact --}}
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <span class="inline-block px-3.5 py-1 rounded-full bg-[#FFB800] text-[#061838] text-xs font-black uppercase tracking-widest shadow-md">
                <span class="lang-id-only">5 Pilar Mutu Kami</span>
                <span class="lang-en-only">Our 5 Quality Pillars</span>
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#FFB800] uppercase tracking-tight" style="color: #FFB800 !important;">
                <span class="lang-id-only">Komitmen Kami</span>
                <span class="lang-en-only">Our Commitment</span>
            </h2>
            <div class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-3xl mx-auto font-normal space-y-4 text-left sm:text-center">
                <div class="lang-id-only space-y-4">
                    <p>PT. BAHTERA ANUGERAH SENTOSA, kami percaya bahwa sumber daya manusia yang berkualitas adalah fondasi utama dari operasi maritim yang sukses.</p>
                    <p>Misi kami adalah menyediakan pelaut yang kompeten, dapat diandalkan, dan profesional yang berkontribusi terhadap keselamatan, efisiensi, dan produktivitas pada setiap kapal tempat mereka bertugas.</p>
                    <p>Kami terus meningkatkan proses rekrutmen, seleksi, pelatihan, dan manajemen kru kami untuk memastikan pelaut kami siap memenuhi tuntutan industri maritim modern.</p>
                    <p>Kami berkomitmen untuk mempertahankan standar tertinggi dalam kualitas, keselamatan, dan kepatuhan operasional.</p>
                </div>
                <div class="lang-en-only space-y-4">
                    <p>PT. BAHTERA ANUGERAH SENTOSA, we believe that quality people are the foundation of a successful maritime operation.</p>
                    <p>Our mission is to provide competent, dependable, and professional seafarers who contribute to the safety, efficiency, and productivity of every vessel they serve.</p>
                    <p>We continuously improve our recruitment, selection, training, and crew management processes to ensure that our seafarers are prepared to meet the demands of the modern maritime industry.</p>
                    <p>We are committed to maintaining the highest standards of quality, safety, and operational compliance.</p>
                </div>
            </div>
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
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">
                            <span class="lang-id-only">Prioritas mutlak keselamatan jiwa di laut (SOLAS) dan proteksi keselamatan kru di setiap rute pelayaran.</span>
                            <span class="lang-en-only">Absolute priority for Safety of Life at Sea (SOLAS) and crew safety across all global sailing routes.</span>
                        </p>
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
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">
                            <span class="lang-id-only">Standar seleksi kompetensi ketat, sertifikasi SIUKAK &amp; SIUPPAK resmi terotentikasi, dan uji kesehatan MCU komprehensif.</span>
                            <span class="lang-en-only">Strict competency selection, authentic SIUKAK &amp; SIUPPAK certification, and comprehensive MCU medical testing.</span>
                        </p>
                    </div>
                </div>
                <span class="text-[11px] font-black px-3 py-1 rounded-full w-fit mt-5 shadow-sm" style="background-color: #FFB800 !important; color: #061838 !important;">
                    SIUKAK &amp; SIUPPAK Verified
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
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">
                            <span class="lang-id-only">Etos kerja tinggi, disiplin navigasi, loyalitas awak kapal, dan komunikasi maritim standar internasional.</span>
                            <span class="lang-en-only">High work ethic, navigation discipline, crew loyalty, and international maritime communication.</span>
                        </p>
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
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">
                            <span class="lang-id-only">Kejujuran tata kelola, transparansi penggajian allotment keluarga, dan nol toleransi dokumen palsu.</span>
                            <span class="lang-en-only">Governance honesty, family allotment transparency, and zero tolerance for fraudulent documents.</span>
                        </p>
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
                        <p class="text-xs text-slate-100 mt-2 leading-relaxed font-normal" style="color: #F8FAFC !important;">
                            <span class="lang-id-only">Ketepatan jadwal sign-on &amp; sign-off kapal, rotasi teratur, dan tim siaga tanggap darurat 24/7.</span>
                            <span class="lang-en-only">On-time vessel sign-on &amp; sign-off schedules, orderly rotation, and 24/7 emergency response team.</span>
                        </p>
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
                        <span class="lang-id-only">Keunggulan Strategis</span>
                        <span class="lang-en-only">Strategic Advantages</span>
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-[#061838] leading-snug tracking-tight">
                        <span class="lang-id-only">
                            Mengapa Memilih <span class="text-[#FFB800] block mt-1" style="color: #FFB800 !important;">PT. Bahtera Anugerah Sentosa?</span>
                        </span>
                        <span class="lang-en-only">
                            Why Choose <span class="text-[#FFB800] block mt-1" style="color: #FFB800 !important;">PT. Bahtera Anugerah Sentosa?</span>
                        </span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        <span class="lang-id-only">Rekam jejak lebih dari 20 tahun membuktikan komitmen kami sebagai mitra crewing paling tepercaya bagi pemilik kapal niaga dan armada penangkap ikan internasional.</span>
                        <span class="lang-en-only">A proven track record of over 20 years demonstrates our commitment as the most trusted crewing partner for international merchant and fishing vessel owners.</span>
                    </p>
                </div>

                {{-- Trust Callout Box in Ocean Navy Gradient --}}
                <div class="p-7 rounded-3xl bg-gradient-to-b from-[#041126] via-[#092248] to-[#041126] text-white shadow-2xl border border-white/15 border-t-2 border-t-[#FFB800] space-y-5 relative overflow-hidden">
                    <div class="flex items-center space-x-3 pb-3 border-b border-white/10 relative z-10">
                        <div class="w-10 h-10 rounded-xl bg-[#FFB800] text-[#061838] font-black flex items-center justify-center text-lg shadow-md">
                            &check;
                        </div>
                        <div>
                            <h4 class="font-black text-sm uppercase tracking-wide text-[#FFB800]">
                                <span class="lang-id-only">Jaminan Mutu &amp; Kepatuhan</span>
                                <span class="lang-en-only">Quality &amp; Compliance Assurance</span>
                            </h4>
                            <p class="text-xs text-slate-300">
                                <span class="lang-id-only">Resmi, Terverifikasi, &amp; Berstandar Internasional</span>
                                <span class="lang-en-only">Official, Verified, &amp; International Standards</span>
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 text-center relative z-10">
                        <div class="p-3.5 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10">
                            <div class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">20+</div>
                            <div class="text-[11px] font-bold text-slate-200 uppercase mt-0.5">
                                <span class="lang-id-only">Tahun Pengalaman</span>
                                <span class="lang-en-only">Years Experience</span>
                            </div>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-white/[0.07] backdrop-blur-sm border border-white/10">
                            <div class="text-2xl font-black text-[#FFB800]" style="color: #FFB800 !important;">50+</div>
                            <div class="text-[11px] font-bold text-slate-200 uppercase mt-0.5">
                                <span class="lang-id-only">Negara Kemitraan</span>
                                <span class="lang-en-only">Partner Countries</span>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-xl bg-[#FFB800] hover:bg-[#FFD700] text-[#061838] font-black text-xs uppercase tracking-wider shadow-lg transition-transform hover:-translate-y-0.5 transform relative z-10">
                        <span class="lang-id-only">Konsultasikan Kebutuhan Kru &nearr;</span>
                        <span class="lang-en-only">Inquire Crewing Services &nearr;</span>
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
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">
                            <span class="lang-id-only">20+ Tahun Pengalaman</span>
                            <span class="lang-en-only">20+ Years of Experience</span>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            <span class="lang-id-only">Lebih dari dua dekade pengalaman di industri crewing dan manning internasional.</span>
                            <span class="lang-en-only">More than two decades of experience in the international crewing and manning industry.</span>
                        </p>
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
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">
                            <span class="lang-id-only">Pelaut Berkualitas</span>
                            <span class="lang-en-only">Qualified Seafarers</span>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            <span class="lang-id-only">Sekelompok profesional maritim yang berpengalaman, kompeten, dan dipilih secara saksama.</span>
                            <span class="lang-en-only">A carefully selected pool of experienced and competent maritime professionals.</span>
                        </p>
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
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">
                            <span class="lang-id-only">Paparan Internasional</span>
                            <span class="lang-en-only">International Exposure</span>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            <span class="lang-id-only">Pengalaman menyuplai kru untuk kapal yang beroperasi di bawah berbagai bendera internasional.</span>
                            <span class="lang-en-only">Experience supplying crew for vessels operating under various international flags.</span>
                        </p>
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
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">
                            <span class="lang-id-only">Rekrutmen Profesional</span>
                            <span class="lang-en-only">Professional Recruitment</span>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            <span class="lang-id-only">Proses rekrutmen dan seleksi terstruktur yang berfokus pada kompetensi, pengalaman, kedisiplinan, dan keandalan.</span>
                            <span class="lang-en-only">A structured recruitment and selection process focused on competence, experience, discipline, and reliability.</span>
                        </p>
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
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">
                            <span class="lang-id-only">Kemitraan Jangka Panjang</span>
                            <span class="lang-en-only">Long-Term Partnership</span>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            <span class="lang-id-only">Kami percaya dalam membangun hubungan yang langgeng berdasarkan kepercayaan, transparansi, dan kesuksesan bersama.</span>
                            <span class="lang-en-only">We believe in building lasting relationships based on trust, transparency, and mutual success.</span>
                        </p>
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
                        <h3 class="font-black text-slate-900 text-base leading-tight group-hover:text-[#061838]">
                            <span class="lang-id-only">Solusi Kru yang Andal</span>
                            <span class="lang-en-only">Reliable Crew Solutions</span>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            <span class="lang-id-only">Kami menyediakan solusi crewing yang fleksibel dan andal, disesuaikan dengan kebutuhan operasional pemilik dan operator kapal.</span>
                            <span class="lang-en-only">We provide flexible and dependable crewing solutions tailored to the operational requirements of ship owners and vessel operators.</span>
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
