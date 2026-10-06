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
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
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
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
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
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed text-justify">
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
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed text-justify">
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
        @php
        $certificatesData = [
            [
                'tag' => 'FAIR RECRUITMENT',
                'badge' => 'ITC-ILO',
                'title' => 'Establishing Fair Recruitment Processes',
                'descId' => 'Pelatihan proses rekrutmen beretika, penghapusan biaya bagi pelaut, dan perlindungan hak calon awak kapal.',
                'descEn' => 'Ethical recruitment processes, elimination of recruitment fees, and seafarer protection.',
                'file' => 'Establishing Fair Recruitment Processes.jpg',
            ],
            [
                'tag' => 'COMMERCIAL FISHING',
                'badge' => 'ITC-ILO & 8.7 LAB',
                'title' => 'Detecting Forced Labour in Commercial Fishing',
                'descId' => 'Identifikasi dan pencegahan indikasi kerja paksa pada armada perikanan komersial internasional.',
                'descEn' => 'Detection and prevention of forced labour indicators on commercial fishing vessels.',
                'file' => 'Detecting Forced Labour in Commercial Fishing.jpg',
            ],
            [
                'tag' => 'LABOUR STANDARDS',
                'badge' => 'ITC-ILO',
                'title' => 'Introduction to International Labour Standards',
                'descId' => 'Pemahaman konvensi dan kerangka hukum ketenagakerjaan internasional ILO secara menyeluruh.',
                'descEn' => 'Foundational understanding of ILO conventions and international legal labour frameworks.',
                'file' => 'Introduction to International Labour Standards.jpg',
            ],
            [
                'tag' => 'DECENT WORK',
                'badge' => 'ITC-ILO eCAMPUS',
                'title' => 'Business and Decent Work',
                'descId' => 'Penerapan prinsip kerja layak, perlindungan sosial, dan kondisi kerja manusiawi dalam operasional maritim.',
                'descEn' => 'Implementing decent work principles and fair working conditions in corporate operations.',
                'file' => 'Business and Decent Work.jpg',
            ],
            [
                'tag' => 'PAY EQUITY',
                'badge' => 'EU & UN WOMEN & ILO',
                'title' => 'Achieving Pay Equity in Your Company',
                'descId' => 'Program manajerial kesetaraan kompensasi dan sistem upah berkeadilan (WE EMPOWER G7).',
                'descEn' => 'Managerial training on fair compensation and pay equity systems under WE EMPOWER G7.',
                'file' => 'ACHIEVING PAY EQUITY IN YOUR COMPANY.jpg',
            ],
            [
                'tag' => 'CHILD LABOUR ERADICATION',
                'badge' => 'ITC-ILO',
                'title' => 'End Child Labour Masterclass',
                'descId' => 'Komitmen tegas perlindungan usia minimum dan pemberantasan pekerja anak dalam rantai pasok maritim.',
                'descEn' => 'Strict commitment to eradicate child labour and verify minimum maritime working ages.',
                'file' => 'End Child Labour Masterclass.jpg',
            ],
            [
                'tag' => 'LEGAL EDUCATION',
                'badge' => 'ITC-ILO',
                'title' => 'Continuing Legal Education: Labour Standards',
                'descId' => 'Pendidikan hukum ketenagakerjaan berkelanjutan untuk kepatuhan regulasi maritim global.',
                'descEn' => 'Continuing legal education in international maritime labor jurisprudence and compliance.',
                'file' => 'CONTINUING LEGAL EDUCATION 1_ INTRODUCTION TO INTERNATIONAL LABOUR STANDARDS.jpg',
            ],
        ];
        @endphp

        <div class="pt-16 border-t border-slate-200/80 space-y-12 fade-in-section">
            
            {{-- Header Section --}}
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#061838]/5 border border-[#061838]/10 text-xs font-black text-[#061838] tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-[#FFB800]"></span>
                    <span class="lang-id-only">Standar Ketenagakerjaan Global &middot; ITC-ILO</span>
                    <span class="lang-en-only">Global Labour Standards &middot; ITC-ILO</span>
                </div>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
                    <span class="lang-id-only">Sertifikasi Kompetensi &amp; Pelatihan Internasional</span>
                    <span class="lang-en-only">International Competency &amp; Training Certifications</span>
                </h3>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-3xl mx-auto text-center">
                    <span class="lang-id-only">Sertifikasi pelatihan resmi dari <strong>International Training Centre of the ILO (ITC-ILO)</strong> yang diraih oleh manajemen perusahaan untuk menjamin kepatuhan standar ketenagakerjaan maritim dunia, rekrutmen beretika tanpa pemungutan biaya awak kapal, serta pencegahan kerja paksa.</span>
                    <span class="lang-en-only">Official training credentials from the <strong>International Training Centre of the ILO (ITC-ILO)</strong> earned by company management, ensuring compliance with global maritime labour conventions, ethical zero-fee recruitment, and prevention of forced labour.</span>
                </p>

                {{-- Trust Highlights --}}
                <div class="pt-2 flex flex-wrap justify-center items-center gap-2 sm:gap-4 text-[11px] font-bold text-slate-600">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-slate-200 shadow-2xs">
                        <span class="text-emerald-600 font-black">&check;</span> 7 Kredensial Terotentikasi
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-slate-200 shadow-2xs">
                        <span class="text-[#0A326E] font-black">&bull;</span> Standar Konvensi ILO
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-slate-200 shadow-2xs">
                        <span class="text-amber-600 font-black">&bull;</span> Rekrutmen Beretika &amp; Adil
                    </span>
                </div>
            </div>

            {{-- STYLES KHUSUS UNTUK FORMASI 4-3 DAN DOKUMEN MODAL SCROLLABLE --}}
            <style>
            /* 4 - 3 SYMMETRICAL CERTIFICATE LAYOUT */
            .cert-grid-row-1 {
                display: grid;
                grid-template-columns: repeat(1, minmax(0, 1fr));
                gap: 1.5rem;
            }
            @media (min-width: 640px) {
                .cert-grid-row-1 {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }
            @media (min-width: 1024px) {
                .cert-grid-row-1 {
                    grid-template-columns: repeat(4, minmax(0, 1fr));
                }
            }

            .cert-grid-row-2 {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 1.5rem;
                margin-top: 1.5rem;
            }

            .cert-card-col-row2 {
                width: 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            @media (min-width: 640px) {
                .cert-card-col-row2 {
                    width: calc(50% - 0.75rem);
                    flex: 0 0 calc(50% - 0.75rem);
                    max-width: calc(50% - 0.75rem);
                }
            }
            @media (min-width: 1024px) {
                .cert-card-col-row2 {
                    /* Lebar persis sama dengan tiap kolom pada grid 4-kolom baris 1 */
                    width: calc((100% - 4.5rem) / 4);
                    flex: 0 0 calc((100% - 4.5rem) / 4);
                    max-width: calc((100% - 4.5rem) / 4);
                }
            }

            /* MODAL DOCUMENT VIEWER */
            #certModal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                z-index: 99999;
                background: rgba(3, 9, 20, 0.94);
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px);
                display: none;
                align-items: center;
                justify-content: center;
                padding: 1.25rem;
                box-sizing: border-box;
            }
            #certModal.modal-open {
                display: flex !important;
            }

            .cert-modal-window {
                width: 100%;
                max-width: 960px;
                height: 90vh;
                max-height: 90vh;
                background: #061838;
                border: 1px solid rgba(255, 255, 255, 0.18);
                border-radius: 16px;
                box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.9), 0 0 0 1px rgba(255, 184, 0, 0.35);
                display: flex;
                flex-direction: column;
                overflow: hidden;
                position: relative;
            }

            .cert-modal-header-bar {
                flex: 0 0 58px;
                height: 58px;
                background: #030d20;
                border-bottom: 1px solid rgba(255, 255, 255, 0.12);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 1.25rem;
                color: #ffffff;
                z-index: 30;
                gap: 1rem;
            }

            .cert-modal-body-scroll {
                flex: 1 1 auto;
                min-height: 0;
                overflow-y: auto;
                overflow-x: auto;
                background: #020617;
                padding: 2.5rem 1.5rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start; /* Dokumen mulai dari atas dengan margin rapi, bisa discroll ke bawah */
            }

            .cert-paper-container {
                background: #ffffff;
                padding: 14px;
                border-radius: 8px;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
                width: 100%;
                max-width: 660px;
                margin: 0 auto;
                transition: max-width 0.2s ease, width 0.2s ease;
            }

            .cert-paper-container img {
                width: 100%;
                height: auto;
                display: block;
                user-select: none;
                border-radius: 4px;
            }

            .cert-modal-footer-bar {
                flex: 0 0 52px;
                height: 52px;
                background: #030d20;
                border-top: 1px solid rgba(255, 255, 255, 0.12);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 1.25rem;
                color: #cbd5e1;
                z-index: 30;
                gap: 1rem;
                font-size: 12px;
            }
            </style>

            {{-- 7 SERTIFIKAT INTERNASIONAL: 4 PADA BARIS 1 & 3 PADA BARIS 2 --}}
            <div class="cert-section-wrapper">

                {{-- BARIS 1: 4 KARTU BERJEJER HORIZONTAL --}}
                <div class="cert-grid-row-1">
                    @foreach(array_slice($certificatesData, 0, 4) as $idx => $cert)
                    <div 
                        class="bg-white rounded-2xl border-2 border-slate-200/90 hover:border-[#FFB800] shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col overflow-hidden group cursor-pointer"
                        onclick="openCertModal({{ $idx }})"
                    >
                        {{-- Preview Dokumen Utuh Tanpa Terpotong (Rasio Kertas A4) --}}
                        <div class="p-3.5 bg-gradient-to-b from-slate-100 via-slate-50 to-slate-100/90 border-b border-slate-200/80">
                            <div class="relative w-full aspect-[1/1.4] bg-white rounded-lg shadow-xs group-hover:shadow-md transition-shadow border border-slate-200/90 overflow-hidden flex items-center justify-center p-1.5">
                                <img 
                                    src="{{ asset('images/' . $cert['file']) }}" 
                                    alt="{{ $cert['title'] }}" 
                                    class="max-w-full max-h-full w-auto h-auto object-contain select-none transition-transform duration-300 group-hover:scale-[1.02]"
                                    loading="lazy"
                                />
                                {{-- Hover Overlay --}}
                                <div class="absolute inset-0 bg-[#061838]/75 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-3 text-center">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        <span class="lang-id-only">Buka Dokumen</span>
                                        <span class="lang-en-only">Open Document</span>
                                    </span>
                                    <span class="text-[10px] text-amber-200 font-medium mt-2">Bisa discroll penuh</span>
                                </div>
                            </div>
                        </div>

                        {{-- Metadata Kartu --}}
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between space-y-3 bg-white">
                            <div class="space-y-1.5">
                                <div class="flex items-center justify-between">
                                    <span class="px-2 py-0.5 rounded text-[10px] font-black uppercase tracking-wider bg-[#061838]/5 text-[#0A326E] border border-[#0A326E]/15">
                                        {{ $cert['badge'] }}
                                    </span>
                                    <span class="text-[10px] font-extrabold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200 flex items-center gap-1">
                                        &check; Verified
                                    </span>
                                </div>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] group-hover:text-[#0A326E] transition-colors leading-snug line-clamp-2 pt-1">
                                    {{ $cert['title'] }}
                                </h4>
                                <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2 text-justify">
                                    <span class="lang-id-only">{{ $cert['descId'] }}</span>
                                    <span class="lang-en-only">{{ $cert['descEn'] }}</span>
                                </p>
                            </div>

                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                                <div>
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block">
                                        <span class="lang-id-only">Penerima</span>
                                        <span class="lang-en-only">Recipient</span>
                                    </span>
                                    <span class="font-bold text-[#061838] text-[11px] truncate block max-w-[130px]">
                                        Fernanda Safira F., S.Ak.
                                    </span>
                                </div>
                                <span class="text-xs font-black text-[#0A326E] group-hover:text-[#D97706] inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Lihat</span>
                                    <span class="lang-en-only">View</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- BARIS 2: 3 KARTU BERJEJER HORIZONTAL DI TENGAH (UKURAN & GAP PERSIS SAMA) --}}
                <div class="cert-grid-row-2">
                    @foreach(array_slice($certificatesData, 4, 3) as $subIdx => $cert)
                    @php $actualIndex = $subIdx + 4; @endphp
                    <div 
                        class="cert-card-col-row2 bg-white rounded-2xl border-2 border-slate-200/90 hover:border-[#FFB800] shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col overflow-hidden group cursor-pointer"
                        onclick="openCertModal({{ $actualIndex }})"
                    >
                        {{-- Preview Dokumen Utuh Tanpa Terpotong (Rasio Kertas A4) --}}
                        <div class="p-3.5 bg-gradient-to-b from-slate-100 via-slate-50 to-slate-100/90 border-b border-slate-200/80">
                            <div class="relative w-full aspect-[1/1.4] bg-white rounded-lg shadow-xs group-hover:shadow-md transition-shadow border border-slate-200/90 overflow-hidden flex items-center justify-center p-1.5">
                                <img 
                                    src="{{ asset('images/' . $cert['file']) }}" 
                                    alt="{{ $cert['title'] }}" 
                                    class="max-w-full max-h-full w-auto h-auto object-contain select-none transition-transform duration-300 group-hover:scale-[1.02]"
                                    loading="lazy"
                                />
                                {{-- Hover Overlay --}}
                                <div class="absolute inset-0 bg-[#061838]/75 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-3 text-center">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#FFB800] text-[#061838] font-black text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        <span class="lang-id-only">Buka Dokumen</span>
                                        <span class="lang-en-only">Open Document</span>
                                    </span>
                                    <span class="text-[10px] text-amber-200 font-medium mt-2">Bisa discroll penuh</span>
                                </div>
                            </div>
                        </div>

                        {{-- Metadata Kartu --}}
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between space-y-3 bg-white">
                            <div class="space-y-1.5">
                                <div class="flex items-center justify-between">
                                    <span class="px-2 py-0.5 rounded text-[10px] font-black uppercase tracking-wider bg-[#061838]/5 text-[#0A326E] border border-[#0A326E]/15">
                                        {{ $cert['badge'] }}
                                    </span>
                                    <span class="text-[10px] font-extrabold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200 flex items-center gap-1">
                                        &check; Verified
                                    </span>
                                </div>
                                <h4 class="text-xs sm:text-sm font-black text-[#061838] group-hover:text-[#0A326E] transition-colors leading-snug line-clamp-2 pt-1">
                                    {{ $cert['title'] }}
                                </h4>
                                <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2 text-justify">
                                    <span class="lang-id-only">{{ $cert['descId'] }}</span>
                                    <span class="lang-en-only">{{ $cert['descEn'] }}</span>
                                </p>
                            </div>

                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                                <div>
                                    <span class="text-[10px] uppercase font-bold text-slate-400 block">
                                        <span class="lang-id-only">Penerima</span>
                                        <span class="lang-en-only">Recipient</span>
                                    </span>
                                    <span class="font-bold text-[#061838] text-[11px] truncate block max-w-[130px]">
                                        Fernanda Safira F., S.Ak.
                                    </span>
                                </div>
                                <span class="text-xs font-black text-[#0A326E] group-hover:text-[#D97706] inline-flex items-center gap-1 transition-colors">
                                    <span class="lang-id-only">Lihat</span>
                                    <span class="lang-en-only">View</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</section>

{{-- CERTIFICATE DOCUMENT VIEWER MODAL --}}
<div id="certModal" role="dialog" aria-modal="true" aria-labelledby="modalCertTitle">
    <div class="cert-modal-window">
        
        {{-- Modal Topbar --}}
        <div class="cert-modal-header-bar">
            <div class="flex items-center space-x-3 overflow-hidden min-w-0">
                <span class="px-2.5 py-1 rounded text-[10px] font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] flex-shrink-0">
                    ITC-ILO CERTIFIED
                </span>
                <h3 id="modalCertTitle" class="text-xs sm:text-sm md:text-base font-bold text-white truncate"></h3>
            </div>
            
            <div class="flex items-center space-x-2 sm:space-x-3 flex-shrink-0">
                {{-- In-Viewer Zoom Controls --}}
                <div class="hidden sm:inline-flex items-center bg-white/10 rounded-lg p-0.5 border border-white/15 text-xs text-white">
                    <button id="zoomOutBtn" type="button" class="w-7 h-7 flex items-center justify-center hover:bg-white/20 rounded font-bold" title="Perkecil (−)">−</button>
                    <span id="zoomLevelText" class="px-2 font-mono text-[11px] font-bold text-amber-300 select-none">100%</span>
                    <button id="zoomInBtn" type="button" class="w-7 h-7 flex items-center justify-center hover:bg-white/20 rounded font-bold" title="Perbesar (+)">+</button>
                    <button id="zoomResetBtn" type="button" class="px-2 h-7 flex items-center justify-center hover:bg-white/20 rounded text-[11px] font-semibold border-l border-white/15" title="Reset Ukuran">Reset</button>
                </div>

                {{-- Open Image in New Tab --}}
                <a id="modalOpenTabBtn" href="#" target="_blank" class="p-2 rounded-xl bg-white/10 hover:bg-white/20 text-white transition-colors" title="Buka gambar penuh di tab baru">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>

                {{-- Close Button --}}
                <button id="closeCertModal" type="button" class="px-3 py-1.5 rounded-xl bg-white/10 hover:bg-rose-600 text-white transition-colors flex items-center gap-1.5 font-bold text-xs" aria-label="Tutup">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                    <span class="hidden sm:inline">Tutup</span>
                </button>
            </div>
        </div>

        {{-- Scrollable Document Body (Mulai Dari Atas, Scroll Vertikal Penuh) --}}
        <div id="modalScrollContainer" class="cert-modal-body-scroll">
            
            {{-- Kertas Dokumen Sertifikat Resmi --}}
            <div id="certPaperContainer" class="cert-paper-container">
                <img 
                    id="modalCertImage" 
                    src="" 
                    alt="Dokumen Sertifikat Resmi" 
                    loading="eager"
                />
            </div>

            {{-- Floating Prev / Next Buttons Inside Modal Window --}}
            <button id="prevCertBtn" type="button" class="absolute left-3 sm:left-5 top-1/2 -translate-y-1/2 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#061838]/90 hover:bg-[#FFB800] text-white hover:text-[#061838] shadow-2xl flex items-center justify-center transition-all hover:scale-110 border border-slate-600 z-40" aria-label="Sebelumnya">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="nextCertBtn" type="button" class="absolute right-3 sm:right-5 top-1/2 -translate-y-1/2 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#061838]/90 hover:bg-[#FFB800] text-white hover:text-[#061838] shadow-2xl flex items-center justify-center transition-all hover:scale-110 border border-slate-600 z-40" aria-label="Selanjutnya">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>

        {{-- Modal Footer Sticky --}}
        <div class="cert-modal-footer-bar">
            <div class="flex items-center gap-2 overflow-hidden min-w-0">
                <span id="modalCertCounter" class="font-black text-[#FFB800] bg-slate-800/90 px-2.5 py-0.5 rounded border border-slate-700 flex-shrink-0"></span>
                <span id="modalCertDesc" class="text-slate-300 font-medium truncate max-w-xs sm:max-w-md"></span>
            </div>
            <div class="text-[11px] text-slate-400 flex-shrink-0 hidden sm:block">
                <span class="lang-id-only">Penerima: <strong class="text-white">Fernanda Safira Fenturini, S.Ak.</strong></span>
                <span class="lang-en-only">Delivered to: <strong class="text-white">Fernanda Safira Fenturini, S.Ak.</strong></span>
            </div>
            <div class="flex items-center gap-2">
                <button id="footerPrevBtn" type="button" class="px-2.5 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-semibold flex items-center gap-1 transition-colors">
                    &larr; <span class="lang-id-only">Sebelumnya</span><span class="lang-en-only">Prev</span>
                </button>
                <button id="footerNextBtn" type="button" class="px-2.5 py-1 rounded-lg bg-[#FFB800] hover:bg-amber-400 text-[#061838] text-xs font-black flex items-center gap-1 transition-colors shadow">
                    <span class="lang-id-only">Berikutnya</span><span class="lang-en-only">Next</span> &rarr;
                </button>
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
    const defaultPaperWidth = 660;
    let currentPaperWidth = defaultPaperWidth;

    const modal = document.getElementById('certModal');
    const scrollContainer = document.getElementById('modalScrollContainer');
    const paperContainer = document.getElementById('certPaperContainer');
    const modalImg = document.getElementById('modalCertImage');
    const modalTitle = document.getElementById('modalCertTitle');
    const modalDesc = document.getElementById('modalCertDesc');
    const modalCounter = document.getElementById('modalCertCounter');
    const modalOpenTabBtn = document.getElementById('modalOpenTabBtn');
    const closeBtn = document.getElementById('closeCertModal');
    const prevBtn = document.getElementById('prevCertBtn');
    const nextBtn = document.getElementById('nextCertBtn');
    const footerPrevBtn = document.getElementById('footerPrevBtn');
    const footerNextBtn = document.getElementById('footerNextBtn');

    const zoomInBtn = document.getElementById('zoomInBtn');
    const zoomOutBtn = document.getElementById('zoomOutBtn');
    const zoomResetBtn = document.getElementById('zoomResetBtn');
    const zoomLevelText = document.getElementById('zoomLevelText');

    function applyZoom(newWidth) {
        currentPaperWidth = Math.max(380, Math.min(1200, newWidth));
        if (paperContainer) {
            paperContainer.style.maxWidth = currentPaperWidth + 'px';
        }
        if (zoomLevelText) {
            const percent = Math.round((currentPaperWidth / defaultPaperWidth) * 100);
            zoomLevelText.textContent = percent + '%';
        }
    }

    if (zoomInBtn) zoomInBtn.addEventListener('click', function(e) { e.stopPropagation(); applyZoom(currentPaperWidth + 120); });
    if (zoomOutBtn) zoomOutBtn.addEventListener('click', function(e) { e.stopPropagation(); applyZoom(currentPaperWidth - 120); });
    if (zoomResetBtn) zoomResetBtn.addEventListener('click', function(e) { e.stopPropagation(); applyZoom(defaultPaperWidth); });

    function updateModal(idx) {
        currentCertIdx = ((idx % certList.length) + certList.length) % certList.length;
        const cert = certList[currentCertIdx];
        const isEn = document.documentElement.getAttribute('data-lang') === 'en';
        
        if (modalImg) modalImg.src = cert.image;
        if (modalTitle) modalTitle.textContent = cert.title;
        if (modalDesc) modalDesc.textContent = isEn ? cert.descEn : cert.descId;
        if (modalCounter) modalCounter.textContent = (currentCertIdx + 1) + ' / ' + certList.length;
        if (modalOpenTabBtn) modalOpenTabBtn.href = cert.image;

        // Reset scroll position ke paling atas setiap ganti sertifikat
        if (scrollContainer) {
            scrollContainer.scrollTop = 0;
            scrollContainer.scrollLeft = 0;
        }

        // Reset zoom ke default
        applyZoom(defaultPaperWidth);
    }

    window.openCertModal = function(idx) {
        if (!modal) return;
        updateModal(idx);
        modal.classList.add('modal-open');
        document.body.style.overflow = 'hidden';
    };

    function closeModal() {
        if (!modal) return;
        modal.classList.remove('modal-open');
        document.body.style.overflow = '';
    }

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (prevBtn) prevBtn.addEventListener('click', function(e) { e.stopPropagation(); updateModal(currentCertIdx - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function(e) { e.stopPropagation(); updateModal(currentCertIdx + 1); });
    if (footerPrevBtn) footerPrevBtn.addEventListener('click', function(e) { e.stopPropagation(); updateModal(currentCertIdx - 1); });
    if (footerNextBtn) footerNextBtn.addEventListener('click', function(e) { e.stopPropagation(); updateModal(currentCertIdx + 1); });

    if (modal) modal.addEventListener('click', function(e) { 
        if (e.target === modal) closeModal(); 
    });

    document.addEventListener('keydown', function(e) {
        if (!modal || !modal.classList.contains('modal-open')) return;
        if (e.key === 'Escape') closeModal();
        if (e.key === 'ArrowLeft') updateModal(currentCertIdx - 1);
        if (e.key === 'ArrowRight') updateModal(currentCertIdx + 1);
        if (e.key === '+' || e.key === '=') applyZoom(currentPaperWidth + 120);
        if (e.key === '-' || e.key === '_') applyZoom(currentPaperWidth - 120);
    });
})();
</script>
@endpush

@endsection
