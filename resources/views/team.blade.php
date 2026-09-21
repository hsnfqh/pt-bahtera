@extends('layouts.app')

@section('title', 'Our Team & Certifications - PT. BAHTERA KESELAMATAN SENTOSA')

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
<section id="organization-structure" class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Struktur Organisasi Perusahaan</span>
                <span class="lang-en-only">Organization Structure</span>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Tim manajemen berpengalaman dan berdedikasi tinggi yang mengawal standar kualitas mutu, kepatuhan hukum maritim, dan integritas layanan crewing.</span>
                <span class="lang-en-only">An experienced and dedicated management team upholding quality standards, maritime legal compliance, and crewing integrity.</span>
            </p>
        </div>

        <!-- Hierarchy Structure -->
        <div class="space-y-8">
            
            <!-- Tier 1: President Director -->
            <div class="flex justify-center fade-in-section delay-100">
                <div class="w-full max-w-md p-8 rounded-3xl bg-gradient-to-b from-[#041126] via-[#092248] to-[#041126] text-white border border-white/15 border-t-4 border-t-[#FFB800] text-center space-y-4 shadow-2xl hover:-translate-y-1.5 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center font-black text-xl shadow-lg">
                        DIR
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-[#FFB800]">
                            <span class="lang-id-only">Direktur Utama</span>
                            <span class="lang-en-only">President Director</span>
                        </h3>
                        <p class="text-xs text-slate-300 font-black uppercase tracking-widest mt-0.5">President Director &bull; Board of Management</p>
                    </div>
                    <p class="text-slate-200 text-xs leading-relaxed font-normal pt-1">
                        <span class="lang-id-only">Memimpin visi strategis perusahaan, hubungan kemitraan internasional, dan pengawasan tata kelola operasional serta kepatuhan maritim menyeluruh.</span>
                        <span class="lang-en-only">Leading strategic vision, international partner relations, operational governance oversight, and comprehensive maritime compliance.</span>
                    </p>
                </div>
            </div>

            <!-- Tier 2: General Manager -->
            <div class="flex justify-center fade-in-section delay-200">
                <div class="w-full max-w-md p-7 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] text-center space-y-3 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1.5">
                    <div class="w-14 h-14 mx-auto rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black text-base shadow-md">
                        GM
                    </div>
                    <div>
                        <h4 class="text-lg font-black text-[#061838]">General Manager / Operations Director</h4>
                        <p class="text-xs text-[#FFB800] font-black uppercase tracking-wider bg-[#061838] px-3 py-0.5 rounded-full w-fit mx-auto mt-1">Head of Maritime Crewing Operations</p>
                    </div>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        <span class="lang-id-only">Mengkoordinasikan seluruh divisi operasional, penempatan tenaga pelaut, serta kepatuhan standar internasional IMO &amp; ILO.</span>
                        <span class="lang-en-only">Coordinating all operational divisions, seafarer placements, and strict compliance with IMO &amp; ILO international standards.</span>
                    </p>
                </div>
            </div>

            <!-- Tier 3: Department Managers Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pt-4">
                
                <div class="p-7 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-xl text-center space-y-3 transition-all duration-300 hover:-translate-y-1.5 fade-in-section delay-100">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center font-black shadow-sm">
                        REC
                    </div>
                    <div>
                        <h4 class="text-base font-black text-[#061838]">
                            <span class="lang-id-only">Divisi Rekrutmen &amp; Seleksi</span>
                            <span class="lang-en-only">Recruitment &amp; Selection</span>
                        </h4>
                        <span class="text-[11px] text-slate-500 font-bold block uppercase tracking-wider mt-0.5">Recruitment &amp; Selection</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        <span class="lang-id-only">Penyaringan kualifikasi, wawancara teknis, dan uji kompetensi pelaut berstandar STCW.</span>
                        <span class="lang-en-only">Qualification screening, technical interviews, and STCW competency testing.</span>
                    </p>
                </div>

                <div class="p-7 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-xl text-center space-y-3 transition-all duration-300 hover:-translate-y-1.5 fade-in-section delay-200">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black shadow-sm">
                        DOC
                    </div>
                    <div>
                        <h4 class="text-base font-black text-[#061838]">
                            <span class="lang-id-only">Divisi Legal &amp; Dokumen</span>
                            <span class="lang-en-only">Legal &amp; Compliance</span>
                        </h4>
                        <span class="text-[11px] text-slate-500 font-bold block uppercase tracking-wider mt-0.5">Legal, Visa &amp; Compliance</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        <span class="lang-id-only">Paspor, Seaman Book, sertifikat STCW, visa maritim, dan legalitas SIUKAK/SIUPPAK.</span>
                        <span class="lang-en-only">Passports, Seaman Books, STCW certificates, maritime visas, and official permits.</span>
                    </p>
                </div>

                <div class="p-7 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-xl text-center space-y-3 transition-all duration-300 hover:-translate-y-1.5 fade-in-section delay-300">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#FFB800] text-[#061838] flex items-center justify-center font-black shadow-sm">
                        TRN
                    </div>
                    <div>
                        <h4 class="text-base font-black text-[#061838]">
                            <span class="lang-id-only">Divisi Diklat &amp; Medikal</span>
                            <span class="lang-en-only">Training &amp; Medical</span>
                        </h4>
                        <span class="text-[11px] text-slate-500 font-bold block uppercase tracking-wider mt-0.5">Training &amp; MCU Coordinator</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        <span class="lang-id-only">Pelatihan pra-keberangkatan, standar safety drill, dan Medical Check Up (MCU) terakreditasi.</span>
                        <span class="lang-en-only">Pre-departure training, safety drills, and certified Medical Check Up (MCU).</span>
                    </p>
                </div>

                <div class="p-7 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-xl text-center space-y-3 transition-all duration-300 hover:-translate-y-1.5 fade-in-section delay-400">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black shadow-sm">
                        FIN
                    </div>
                    <div>
                        <h4 class="text-base font-black text-[#061838]">
                            <span class="lang-id-only">Divisi Keuangan &amp; HR</span>
                            <span class="lang-en-only">Finance &amp; HR</span>
                        </h4>
                        <span class="text-[11px] text-slate-500 font-bold block uppercase tracking-wider mt-0.5">Finance &amp; Crew Welfare</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        <span class="lang-id-only">Penggajian allotment kru, asuransi pelaut, dan pendampingan keluarga 24/7.</span>
                        <span class="lang-en-only">Crew allotment payroll, maritime insurance, and 24/7 family support services.</span>
                    </p>
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
                <span class="lang-id-only">Dokumen legalitas otentik yang membuktikan kepatuhan hukum penuh dan reputasi tinggi PT. Bahtera Keselamatan Sentosa.</span>
                <span class="lang-en-only">Authentic credentials and licenses verifying full regulatory compliance and reputable track record of PT. Bahtera Keselamatan Sentosa.</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
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

            <div class="p-8 rounded-3xl bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 space-y-4 fade-in-section delay-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-black uppercase px-3 py-1 rounded-full bg-[#061838] text-[#FFB800]">
                            MLC 2006 &bull; STCW
                        </span>
                        <span class="text-xs font-black text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-md border border-emerald-200">&check; Compliant</span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838]">MLC 2006 &amp; STCW 2010</h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        <span class="lang-id-only">Kepatuhan menyeluruh terhadap Maritime Labour Convention (MLC 2006) dan standar kompetensi IMO STCW 2010 Manila Amendments.</span>
                        <span class="lang-en-only">Full compliance with Maritime Labour Convention (MLC 2006) and IMO STCW 2010 Manila Amendments competency standards.</span>
                    </p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-700 flex justify-between items-center">
                    <span class="font-semibold">
                        <span class="lang-id-only">Standar:</span>
                        <span class="lang-en-only">Standard:</span>
                    </span>
                    <strong class="text-[#061838] font-black bg-white px-2.5 py-1 rounded border border-slate-200">IMO &amp; ILO MLC 2006</strong>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
