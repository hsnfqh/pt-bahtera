@extends('layouts.app')

@section('title', 'Our Team & Certifications - PT BAHTERA ANUGERAH SENTOSA')

@section('content')

<!-- Top Subpage Header with PT. BKS Logo -->
<x-subpage-banner 
    titleId="Struktur Organisasi &amp; <span class='text-[#FFB800]'>Sertifikasi</span>"
    titleEn="Our Organization &amp; <span class='text-[#FFB800]'>Certifications</span>"
    subtitleId="Manajemen Profesional &amp; Legalitas Resmi Standar Internasional"
    subtitleEn="Professional Maritime Management &amp; Certified Global Credentials"
    badge="MANAGEMENT &amp; COMPLIANCE"
/>

<!-- 1. STRUKTUR ORGANISASI SECTION -->
<section id="organization-structure" class="py-20 lg:py-28 bg-[#F8FAFC] relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-60 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 fade-in-section">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#061838]/5 border border-[#061838]/10 text-xs font-black text-[#061838] tracking-widest uppercase">
                <span class="w-2 h-2 rounded-full bg-[#FFB800]"></span>
                <span class="lang-id-only">Bagan Organisasi Resmi</span>
                <span class="lang-en-only">Official Organization Chart</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Struktur Organisasi Perusahaan</span>
                <span class="lang-en-only">Organization Structure</span>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Bagan hierarki kepemimpinan dan pembagian divisi kerja PT. Bahtera Anugerah Sentosa.</span>
                <span class="lang-en-only">Official leadership hierarchy and operational divisions of PT. Bahtera Anugerah Sentosa.</span>
            </p>
        </div>

        <!-- DESKTOP / TABLET: High-Definition Visual Chart Card (Hidden on Mobile) -->
        <div class="hidden md:block max-w-5xl mx-auto">
            <div class="bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-1.5 overflow-hidden group cursor-pointer" tabindex="0">
                <div class="w-full flex justify-center items-center">
                    <img 
                        src="{{ asset('images/struktur-organisasi.svg') }}" 
                        alt="Struktur Organisasi PT. Bahtera Anugerah Sentosa" 
                        class="w-full h-auto max-w-4xl object-contain select-none transition-transform duration-300 group-hover:scale-[1.01]"
                        loading="eager"
                    />
                </div>
            </div>
        </div>

        <!-- MOBILE VIEW: Dedicated Interactive Hierarchy Cards (Visible only on Mobile) -->
        <div class="block md:hidden max-w-lg mx-auto space-y-4">
            
            <!-- 1. COMMISSIONER -->
            <div class="relative bg-white rounded-2xl border-2 border-[#0A326E] shadow-md overflow-hidden transition-all">
                <div class="bg-[#0A326E] px-4 py-2 text-center">
                    <span class="text-xs font-black text-white tracking-widest uppercase">COMMISSIONER</span>
                </div>
                <div class="p-4 text-center space-y-1 bg-[#EDF4FC]/40">
                    <h3 class="text-base font-extrabold text-[#061838]">NOVA OLHA PRANG, S.Th.</h3>
                    <p class="text-xs font-semibold text-slate-500">
                        <span class="lang-id-only">Komisaris Perusahaan</span>
                        <span class="lang-en-only">Company Commissioner</span>
                    </p>
                </div>
            </div>

            <!-- Connector Down -->
            <div class="flex justify-center -my-2">
                <div class="w-0.5 h-6 bg-[#0A326E] relative">
                    <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 text-[#0A326E] text-xs">▼</span>
                </div>
            </div>

            <!-- 2. DIRECTOR -->
            <div class="relative bg-white rounded-2xl border-2 border-[#0A326E] shadow-md overflow-hidden transition-all">
                <div class="bg-[#0A326E] px-4 py-2 text-center">
                    <span class="text-xs font-black text-white tracking-widest uppercase">DIRECTOR</span>
                </div>
                <div class="p-4 text-center space-y-1 bg-[#EDF4FC]/40">
                    <h3 class="text-base font-extrabold text-[#061838]">SUGIARNO, S.H.</h3>
                    <p class="text-xs font-semibold text-slate-500">
                        <span class="lang-id-only">Direktur Utama</span>
                        <span class="lang-en-only">Managing Director</span>
                    </p>
                </div>
            </div>

            <!-- Connector & Corporate Secretary Branch -->
            <div class="space-y-4 pt-1">
                <!-- 3. CORPORATE SECRETARY (Staff Khusus Direksi) -->
                <div class="relative pl-6">
                    <!-- Left branch elbow line -->
                    <div class="absolute left-2 top-0 bottom-1/2 w-4 border-l-2 border-b-2 border-[#D97706] rounded-bl-lg"></div>
                    <div class="bg-[#FFFDF5] rounded-2xl border-2 border-[#D97706] shadow-sm overflow-hidden">
                        <div class="bg-[#D97706] px-4 py-1.5 flex items-center justify-between">
                            <span class="text-[11px] font-black text-white tracking-wider uppercase">CORPORATE SECRETARY</span>
                            <span class="text-[10px] font-bold bg-white/20 text-white px-2 py-0.5 rounded">Staff Direksi</span>
                        </div>
                        <div class="p-3.5 space-y-0.5">
                            <h4 class="text-sm font-extrabold text-[#061838]">FERNANDA SAFIRA FENTURINI, S.Ak.</h4>
                            <p class="text-xs text-amber-900/80 font-medium">
                                <span class="lang-id-only">Sekretaris Perusahaan</span>
                                <span class="lang-en-only">Corporate Secretary</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Connector Down to Operational Manager -->
                <div class="flex justify-center -my-2">
                    <div class="w-0.5 h-6 bg-[#0A326E] relative">
                        <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 text-[#0A326E] text-xs">▼</span>
                    </div>
                </div>

                <!-- 4. OPERATIONAL MANAGER -->
                <div class="relative bg-white rounded-2xl border-2 border-[#0A326E] shadow-md overflow-hidden transition-all">
                    <div class="bg-[#0A326E] px-4 py-2 text-center">
                        <span class="text-xs font-black text-white tracking-widest uppercase">OPERATIONAL MANAGER</span>
                    </div>
                    <div class="p-4 text-center space-y-1 bg-[#EDF4FC]/40">
                        <h3 class="text-base font-extrabold text-[#061838]">RAHMI DEWI SAPUTRI, S.E.</h3>
                        <p class="text-xs font-semibold text-slate-500">
                            <span class="lang-id-only">Manajer Operasional</span>
                            <span class="lang-en-only">Operational Manager</span>
                        </p>
                    </div>
                </div>

                <!-- Connector Fork to Admins -->
                <div class="flex justify-center -my-2">
                    <div class="w-0.5 h-6 bg-[#0A326E] relative">
                        <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 text-[#0A326E] text-xs">▼</span>
                    </div>
                </div>

                <!-- 5. ADMIN TEAM (GRID 2 COLS) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                    <!-- Admin 1 -->
                    <div class="bg-white rounded-2xl border-2 border-[#0A326E]/80 shadow-sm overflow-hidden">
                        <div class="bg-[#0A326E]/90 px-3 py-1.5 text-center">
                            <span class="text-[11px] font-black text-white tracking-wider uppercase">ADMIN</span>
                        </div>
                        <div class="p-3 text-center space-y-1 bg-[#EDF4FC]/30">
                            <h4 class="text-xs font-extrabold text-[#061838]">VEGA VAREN SITOFAYA WALEAN</h4>
                            <p class="text-[11px] text-slate-500">
                                <span class="lang-id-only">Divisi Administrasi</span>
                                <span class="lang-en-only">Administration Staff</span>
                            </p>
                        </div>
                    </div>

                    <!-- Admin 2 -->
                    <div class="bg-white rounded-2xl border-2 border-[#0A326E]/80 shadow-sm overflow-hidden">
                        <div class="bg-[#0A326E]/90 px-3 py-1.5 text-center">
                            <span class="text-[11px] font-black text-white tracking-wider uppercase">ADMIN</span>
                        </div>
                        <div class="p-3 text-center space-y-1 bg-[#EDF4FC]/30">
                            <h4 class="text-xs font-extrabold text-[#061838]">JONA DENI WUNGKANA</h4>
                            <p class="text-[11px] text-slate-500">
                                <span class="lang-id-only">Divisi Administrasi</span>
                                <span class="lang-en-only">Administration Staff</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- 2. SERTIFIKASI SECTION -->
<section id="certifications" class="py-24 lg:py-32 bg-[#F8FAFC] relative border-t border-slate-200/60 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Sertifikasi &amp; Lisensi Resmi</span>
                <span class="lang-en-only">Official Certifications &amp; Licenses</span>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Dokumen legalitas otentik yang membuktikan kepatuhan hukum penuh dan reputasi tinggi PT. Bahtera Anugerah Sentosa.</span>
                <span class="lang-en-only">Authentic credentials and licenses verifying full regulatory compliance and reputable track record of PT. Bahtera Anugerah Sentosa.</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <div class="p-8 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 space-y-4 fade-in-section delay-100 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-black uppercase px-3 py-1 rounded-full bg-[#061838] text-[#FFB800]">
                            SIUKAK 2024
                        </span>
                        <span class="text-xs font-black text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                            <span class="lang-id-only">&check; Terverifikasi</span>
                            <span class="lang-en-only">&check; Verified</span>
                        </span>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">
                            <span class="lang-id-only">Surat Izin Usaha Keagenan Awak Kapal</span>
                            <span class="lang-en-only">Ship Manning Agency's License</span>
                        </span>
                        <h3 class="text-lg font-black text-[#061838] mt-1">SIUKAK No. 58.58-R Tahun 2024</h3>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        <span class="lang-id-only">Surat Izin Usaha Keagenan Awak Kapal resmi dari Kementerian Ketenagakerjaan RI untuk armada perikanan dan niaga internasional.</span>
                        <span class="lang-en-only">Official Ship Manning Agency's License from the Indonesian Ministry of Manpower for international fishing and commercial vessels.</span>
                    </p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-700 flex justify-between items-center">
                    <span class="font-semibold">
                        <span class="lang-id-only">Nomor Izin:</span>
                        <span class="lang-en-only">License No:</span>
                    </span>
                    <strong class="text-[#061838] font-black bg-white px-2.5 py-1 rounded border border-slate-200">58.58-R / 2024</strong>
                </div>
            </div>

            <div class="p-8 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 space-y-4 fade-in-section delay-200 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-black uppercase px-3 py-1 rounded-full bg-[#061838] text-[#FFB800]">
                            SIUPPAK 2016
                        </span>
                        <span class="text-xs font-black text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">
                            <span class="lang-id-only">&check; Terverifikasi</span>
                            <span class="lang-en-only">&check; Verified</span>
                        </span>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">
                            <span class="lang-id-only">Surat Izin Usaha Perekrutan dan Penempatan Awak Kapal</span>
                            <span class="lang-en-only">Recruitment and Placement Seafarers Agency's License</span>
                        </span>
                        <h3 class="text-lg font-black text-[#061838] mt-1">SIUPPAK No. 65.21 Tahun 2016</h3>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        <span class="lang-id-only">Surat Izin Usaha Perekrutan dan Penempatan Awak Kapal dari Direktorat Jenderal Perhubungan Laut, Kementerian Perhubungan RI.</span>
                        <span class="lang-en-only">Recruitment and Placement Seafarers Agency's License issued by Directorate General of Sea Transportation, Indonesian Ministry of Transportation.</span>
                    </p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-700 flex justify-between items-center">
                    <span class="font-semibold">
                        <span class="lang-id-only">Nomor Izin:</span>
                        <span class="lang-en-only">License No:</span>
                    </span>
                    <strong class="text-[#061838] font-black bg-white px-2.5 py-1 rounded border border-slate-200">65.21 / 2016</strong>
                </div>
            </div>

        </div>

        {{-- SUBSECTION: 7 SERTIFIKAT KOMPETENSI INTERNASIONAL (ITC-ILO) --}}
        <div class="pt-16 border-t border-slate-200/80 space-y-10 fade-in-section">
            
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-[#061838]/5 border border-[#061838]/10 text-xs font-black text-[#061838] tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-[#FFB800]"></span>
                    <span class="lang-id-only">Standar Ketenagakerjaan Global</span>
                    <span class="lang-en-only">Global Labour Standards</span>
                </div>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
                    <span class="lang-id-only">Sertifikasi Kompetensi &amp; Pelatihan Internasional</span>
                    <span class="lang-en-only">International Competency &amp; Training Certifications</span>
                </h3>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-2xl mx-auto">
                    <span class="lang-id-only">Sertifikat pelatihan resmi dari <strong>International Training Centre of the ILO (ITC-ILO)</strong> yang diraih oleh manajemen perusahaan untuk menjamin rekrutmen beretika, pencegahan kerja paksa, perlindungan hak pelaut, dan kepatuhan standar maritim global.</span>
                    <span class="lang-en-only">Official training credentials from the <strong>International Training Centre of the ILO (ITC-ILO)</strong> earned by company management, ensuring ethical recruitment, prevention of forced labour, seafarer protection, and compliance with global maritime standards.</span>
                </p>
            </div>

            {{-- 7 CERTIFICATES: BARIS 1 (4 FOTO) & BARIS 2 (3 FOTO CENTERED) --}}
            <div class="space-y-8">
                
                {{-- BARIS 1: 4 KARTU SERTIFIKAT --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    {{-- 1. Establishing Fair Recruitment Processes --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(0)">
                            <img 
                                src="{{ asset('images/Establishing Fair Recruitment Processes.jpg') }}" 
                                alt="Establishing Fair Recruitment Processes - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                ITC-ILO
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">FAIR RECRUITMENT</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    Establishing Fair Recruitment Processes
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Pelatihan proses rekrutmen beretika, bebas biaya rekrutmen, dan perlindungan calon awak kapal.</span>
                                    <span class="lang-en-only">Ethical recruitment processes, elimination of recruitment fees, and seafarer protection.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(0)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- 2. Detecting Forced Labour in Commercial Fishing --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(1)">
                            <img 
                                src="{{ asset('images/Detecting Forced Labour in Commercial Fishing.jpg') }}" 
                                alt="Detecting Forced Labour in Commercial Fishing - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                ITC-ILO &middot; 8.7 LAB
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">COMMERCIAL FISHING</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    Detecting Forced Labour in Commercial Fishing
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Identifikasi dan pencegahan indikasi kerja paksa pada armada perikanan komersial laut lepas.</span>
                                    <span class="lang-en-only">Detection and prevention of forced labour indicators on commercial fishing vessels.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(1)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Introduction to International Labour Standards --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(2)">
                            <img 
                                src="{{ asset('images/Introduction to International Labour Standards.jpg') }}" 
                                alt="Introduction to International Labour Standards - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                ITC-ILO
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">LABOUR STANDARDS</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    Introduction to International Labour Standards
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Pemahaman konvensi dan kerangka hukum ketenagakerjaan internasional ILO secara menyeluruh.</span>
                                    <span class="lang-en-only">Foundational understanding of ILO conventions and international legal labour frameworks.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(2)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- 4. Business and Decent Work --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(3)">
                            <img 
                                src="{{ asset('images/Business and Decent Work.jpg') }}" 
                                alt="Business and Decent Work - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                ITC-ILO eCAMPUS
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">DECENT WORK</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    Business and Decent Work
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Implementasi prinsip pekerjaan yang layak dan kondisi kerja manusiawi dalam operasional maritim.</span>
                                    <span class="lang-en-only">Implementing decent work principles and fair working conditions in corporate operations.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(3)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- BARIS 2: 3 KARTU SERTIFIKAT (CENTERED PADA DESKTOP) --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">

                    {{-- 5. Achieving Pay Equity in Your Company --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(4)">
                            <img 
                                src="{{ asset('images/ACHIEVING PAY EQUITY IN YOUR COMPANY.jpg') }}" 
                                alt="Achieving Pay Equity in Your Company - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                EU &middot; UN WOMEN &middot; ILO
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">PAY EQUITY</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    Achieving Pay Equity in Your Company
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Program manajerial kesetaraan kompensasi dan sistem upah berkeadilan (WE EMPOWER G7).</span>
                                    <span class="lang-en-only">Managerial training on fair compensation and pay equity systems under WE EMPOWER G7.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(4)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- 6. End Child Labour Masterclass --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(5)">
                            <img 
                                src="{{ asset('images/End Child Labour Masterclass.jpg') }}" 
                                alt="End Child Labour Masterclass - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                ITC-ILO
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">CHILD PROTECTION</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    End Child Labour Masterclass
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Komitmen tegas penghapusan pekerja anak dan verifikasi usia minimum pelaut secara ketat.</span>
                                    <span class="lang-en-only">Strict commitment to eradicate child labour and verify minimum maritime working ages.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(5)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- 7. Continuing Legal Education 1: International Labour Standards --}}
                    <div class="group bg-white rounded-2xl border-2 border-slate-200/80 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col overflow-hidden">
                        <div class="relative aspect-[1/1.38] bg-slate-100 overflow-hidden cursor-pointer" onclick="openCertModal(6)">
                            <img 
                                src="{{ asset('images/CONTINUING LEGAL EDUCATION 1_ INTRODUCTION TO INTERNATIONAL LABOUR STANDARDS.jpg') }}" 
                                alt="Continuing Legal Education 1: Introduction to International Labour Standards - ITC-ILO" 
                                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-[#061838]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3 backdrop-blur-2xs">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="lang-id-only">Lihat Dokumen</span>
                                    <span class="lang-en-only">View Certificate</span>
                                </span>
                            </div>
                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md text-[10px] font-black tracking-wider bg-[#061838]/90 text-[#FFB800] backdrop-blur-xs shadow-xs">
                                ITC-ILO
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2.5 bg-white">
                            <div>
                                <span class="text-[10px] font-black uppercase text-amber-700 tracking-wider block">LEGAL EDUCATION</span>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] leading-snug line-clamp-2 mt-0.5">
                                    Continuing Legal Education: Labour Standards
                                </h4>
                                <p class="text-[11px] text-slate-500 mt-1 line-clamp-2 leading-relaxed">
                                    <span class="lang-id-only">Pendidikan hukum ketenagakerjaan berkelanjutan untuk kepatuhan regulasi maritim internasional.</span>
                                    <span class="lang-en-only">Continuing legal education in international maritime labor jurisprudence and compliance.</span>
                                </p>
                            </div>
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px]">
                                <span class="text-slate-600 font-semibold truncate max-w-[130px]">Fernanda Safira F.</span>
                                <button type="button" onclick="openCertModal(6)" class="text-[#0A326E] group-hover:text-[#D97706] font-bold inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Detail</span>
                                    <span class="lang-en-only">Zoom</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

{{-- CERTIFICATE LIGHTBOX MODAL --}}
<div id="certModal" class="fixed inset-0 z-50 hidden bg-[#061838]/85 backdrop-blur-md items-center justify-center p-3 sm:p-6 transition-all duration-300" role="dialog" aria-modal="true" aria-labelledby="modalCertTitle">
    <div class="relative max-w-4xl w-full bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col max-h-[92vh] border border-slate-200 animate-in fade-in zoom-in-95 duration-200">
        
        {{-- Modal Topbar --}}
        <div class="px-5 sm:px-6 py-3.5 bg-[#061838] text-white flex items-center justify-between border-b border-slate-800">
            <div class="flex items-center space-x-3 pr-3 overflow-hidden">
                <span class="px-2.5 py-0.5 rounded text-[10px] font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] flex-shrink-0">
                    ITC-ILO CERTIFIED
                </span>
                <h3 id="modalCertTitle" class="text-xs sm:text-sm md:text-base font-bold text-white truncate"></h3>
            </div>
            <button id="closeCertModal" type="button" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors flex-shrink-0" aria-label="Tutup">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- Modal Image Display --}}
        <div class="relative flex-1 bg-slate-950/5 p-3 sm:p-6 flex items-center justify-center overflow-auto min-h-[300px]">
            <img id="modalCertImage" src="" alt="Preview Sertifikat" class="max-h-[64vh] sm:max-h-[70vh] w-auto max-w-full object-contain rounded-lg shadow-lg border border-slate-200 bg-white">

            {{-- Prev / Next Navigation --}}
            <button id="prevCertBtn" type="button" class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/95 hover:bg-[#FFB800] text-[#061838] shadow-xl flex items-center justify-center transition-all hover:scale-110 border border-slate-200 z-10" aria-label="Sebelumnya">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="nextCertBtn" type="button" class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/95 hover:bg-[#FFB800] text-[#061838] shadow-xl flex items-center justify-center transition-all hover:scale-110 border border-slate-200 z-10" aria-label="Selanjutnya">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>

        {{-- Modal Footer --}}
        <div class="px-5 sm:px-6 py-3 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 text-xs">
            <div class="flex items-center gap-2">
                <span id="modalCertCounter" class="font-extrabold text-[#061838] bg-white px-2.5 py-1 rounded border border-slate-200"></span>
                <span id="modalCertDesc" class="text-slate-600 font-medium"></span>
            </div>
            <div class="text-[11px] text-slate-500 font-medium">
                <span class="lang-id-only">Penerima: <strong class="text-[#061838]">Fernanda Safira Fenturini, S.Ak.</strong> (Corporate Secretary)</span>
                <span class="lang-en-only">Delivered to: <strong class="text-[#061838]">Fernanda Safira Fenturini, S.Ak.</strong> (Corporate Secretary)</span>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
(function() {
    const certList = [
        {
            title: 'Establishing Fair Recruitment Processes',
            image: "{{ asset('images/Establishing Fair Recruitment Processes.jpg') }}",
            descId: 'Proses Rekrutmen yang Adil & Beretika — ITC-ILO',
            descEn: 'Establishing Fair Recruitment Processes — ITC-ILO'
        },
        {
            title: 'Detecting Forced Labour in Commercial Fishing',
            image: "{{ asset('images/Detecting Forced Labour in Commercial Fishing.jpg') }}",
            descId: 'Deteksi Kerja Paksa di Perikanan Komersial — ITC-ILO & 8.7 Accelerator Lab',
            descEn: 'Detecting Forced Labour in Commercial Fishing — ITC-ILO & 8.7 Accelerator Lab'
        },
        {
            title: 'Introduction to International Labour Standards',
            image: "{{ asset('images/Introduction to International Labour Standards.jpg') }}",
            descId: 'Pengenalan Standar Kerja Internasional — ITC-ILO',
            descEn: 'Introduction to International Labour Standards — ITC-ILO'
        },
        {
            title: 'Business and Decent Work',
            image: "{{ asset('images/Business and Decent Work.jpg') }}",
            descId: 'Bisnis dan Pekerjaan yang Layak — ITC-ILO eCampus',
            descEn: 'Business and Decent Work — ITC-ILO eCampus'
        },
        {
            title: 'Achieving Pay Equity in Your Company',
            image: "{{ asset('images/ACHIEVING PAY EQUITY IN YOUR COMPANY.jpg') }}",
            descId: 'Kesetaraan Upah di Perusahaan — WE EMPOWER G7 (EU, UN Women & ILO)',
            descEn: 'Achieving Pay Equity in Your Company — WE EMPOWER G7 (EU, UN Women & ILO)'
        },
        {
            title: 'End Child Labour Masterclass',
            image: "{{ asset('images/End Child Labour Masterclass.jpg') }}",
            descId: 'Masterclass Penghapusan Pekerja Anak — ITC-ILO',
            descEn: 'End Child Labour Masterclass — ITC-ILO'
        },
        {
            title: 'Continuing Legal Education 1: Introduction to International Labour Standards',
            image: "{{ asset('images/CONTINUING LEGAL EDUCATION 1_ INTRODUCTION TO INTERNATIONAL LABOUR STANDARDS.jpg') }}",
            descId: 'Pendidikan Hukum: Standar Kerja Internasional — ITC-ILO',
            descEn: 'Continuing Legal Education: Labour Standards — ITC-ILO'
        }
    ];

    let currentCertIdx = 0;
    const modal = document.getElementById('certModal');
    const modalImg = document.getElementById('modalCertImage');
    const modalTitle = document.getElementById('modalCertTitle');
    const modalDesc = document.getElementById('modalCertDesc');
    const modalCounter = document.getElementById('modalCertCounter');
    const closeBtn = document.getElementById('closeCertModal');
    const prevBtn = document.getElementById('prevCertBtn');
    const nextBtn = document.getElementById('nextCertBtn');

    function updateModal(idx) {
        currentCertIdx = ((idx % certList.length) + certList.length) % certList.length;
        const cert = certList[currentCertIdx];
        const isEn = document.documentElement.getAttribute('data-lang') === 'en';
        
        if (modalImg) modalImg.src = cert.image;
        if (modalTitle) modalTitle.textContent = cert.title;
        if (modalDesc) modalDesc.textContent = isEn ? cert.descEn : cert.descId;
        if (modalCounter) modalCounter.textContent = (currentCertIdx + 1) + ' / ' + certList.length;
    }

    window.openCertModal = function(idx) {
        if (!modal) return;
        updateModal(idx);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    };

    function closeModal() {
        if (!modal) return;
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (prevBtn) prevBtn.addEventListener('click', function(e) { e.stopPropagation(); updateModal(currentCertIdx - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function(e) { e.stopPropagation(); updateModal(currentCertIdx + 1); });
    if (modal) modal.addEventListener('click', function(e) { if (e.target === modal) closeModal(); });

    document.addEventListener('keydown', function(e) {
        if (!modal || modal.classList.contains('hidden')) return;
        if (e.key === 'Escape') closeModal();
        if (e.key === 'ArrowLeft') updateModal(currentCertIdx - 1);
        if (e.key === 'ArrowRight') updateModal(currentCertIdx + 1);
    });
})();
</script>
@endpush

@endsection
