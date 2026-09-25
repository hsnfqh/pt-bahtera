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

            <!-- Mobile Quick Action: Open Full Diagram Modal / Image -->
            <div class="pt-4 text-center">
                <button 
                    type="button"
                    onclick="document.getElementById('org-chart-modal').classList.remove('hidden'); document.body.style.overflow='hidden';"
                    class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-full bg-slate-900 text-white hover:bg-[#0A326E] text-xs font-bold transition-all shadow-md active:scale-95"
                >
                    <svg class="w-4 h-4 text-[#FFB800]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                    </svg>
                    <span class="lang-id-only">Buka Versi Bagan Grafik Penuh</span>
                    <span class="lang-en-only">View Full Graphic Diagram</span>
                </button>
            </div>
        </div>

        <!-- Full Diagram Modal (Accessible on Mobile & Desktop) -->
        <div id="org-chart-modal" class="fixed inset-0 z-50 hidden bg-[#061838]/90 backdrop-blur-md p-4 sm:p-6 flex flex-col items-center justify-center">
            <!-- Modal Header -->
            <div class="w-full max-w-5xl flex items-center justify-between pb-3 text-white border-b border-white/10">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#FFB800]"></span>
                    <span class="font-black text-sm uppercase tracking-wider">
                        <span class="lang-id-only">Bagan Organisasi Lengkap</span>
                        <span class="lang-en-only">Full Organization Chart</span>
                    </span>
                </div>
                <button 
                    type="button" 
                    onclick="document.getElementById('org-chart-modal').classList.add('hidden'); document.body.style.overflow='auto';"
                    class="p-2 rounded-xl bg-white/10 hover:bg-white/20 text-white text-sm font-bold transition-all"
                    aria-label="Tutup"
                >
                    ✕ Tutup
                </button>
            </div>

            <!-- Modal Content (Scrollable & Zoomable) -->
            <div class="w-full max-w-5xl flex-1 overflow-auto py-4 flex items-center justify-center">
                <div class="bg-white p-4 sm:p-8 rounded-2xl shadow-2xl min-w-[320px] max-w-full">
                    <img 
                        src="{{ asset('images/struktur-organisasi.svg') }}" 
                        alt="Struktur Organisasi PT. Bahtera Anugerah Sentosa" 
                        class="w-full h-auto min-w-[500px] object-contain"
                    />
                </div>
            </div>

            <!-- Modal Footer Hint -->
            <p class="text-xs text-white/70 text-center pt-2">
                <span class="lang-id-only">💡 Geser ke samping atau cubit (pinch) layar untuk memperbesar tampilan bagan.</span>
                <span class="lang-en-only">💡 Swipe horizontally or pinch screen to zoom the diagram.</span>
            </p>
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
                    <h3 class="text-lg font-black text-[#061838]">SIUKAK No. 58.58-R Tahun 2024</h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        <span class="lang-id-only">Surat Izin Usaha Perekrutan dan Penempatan Awak Kapal resmi dari Kementerian Ketenagakerjaan RI untuk armada perikanan dan niaga internasional.</span>
                        <span class="lang-en-only">Official Recruitment &amp; Placement Business License from the Indonesian Ministry of Manpower for international fishing and commercial vessels.</span>
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
                    <h3 class="text-lg font-black text-[#061838]">SIUPPAK No. 65.21 Tahun 2016</h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        <span class="lang-id-only">Surat Izin Usaha Perekrutan dan Penempatan Awak Kapal dari Direktorat Jenderal Perhubungan Laut, Kementerian Perhubungan RI.</span>
                        <span class="lang-en-only">Seafarer Recruitment and Placement License issued by Directorate General of Sea Transportation, Indonesian Ministry of Transportation.</span>
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

    </div>
</section>

@endsection
