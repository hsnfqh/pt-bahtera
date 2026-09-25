@extends('layouts.app')

@section('title', 'Our Team & Certifications - PT. BAHTERA ANUGERAH SENTOSA')

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

        <!-- High-Definition Visual Chart Card -->
        <div class="max-w-5xl mx-auto">
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
