@extends('layouts.app')

@section('title', 'Activity Gallery - PT. BAHTERA KESELAMATAN SENTOSA')

@section('content')

<!-- Top Subpage Header with PT. BKS Logo -->
<x-subpage-banner 
    titleId="Galeri <span class='text-[#FFB800]'>Aktivitas</span>"
    titleEn="Activity <span class='text-[#FFB800]'>Gallery</span>"
    subtitleId="Dokumentasi Pelatihan, Penempatan, dan Operasional Pelaut PT. Bahtera Keselamatan Sentosa"
    subtitleEn="Documentation of Training, Deployment, and Seafarer Operations"
    badge="ACTIVITY &amp; FLEET GALLERY"
/>

<!-- ACTIVITY GALLERY SECTION -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Galeri Kegiatan &amp; Operasional Kapal</span>
                <span class="lang-en-only">Activity Gallery &amp; Vessel Operations</span>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Dokumentasi profesionalisme kru kami di anjungan navigasi kapal, pelatihan pra-keberangkatan, dan operasi armada di pelabuhan dunia.</span>
                <span class="lang-en-only">Visual documentation of our crew professionalism across ship bridges, pre-departure drills, and international fleet operations.</span>
            </p>
        </div>

        <!-- Gallery Grid with Lightbox Triggers -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Item 1 -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-100"
                 data-img-src="{{ asset('images/hero-banner.jpg') }}"
                 data-img-title="Armada Kapal di Pelabuhan"
                 data-img-desc="Armada kapal mitra PT. Bahtera Keselamatan Sentosa dengan kru pelaut berpengalaman.">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/hero-banner.jpg') }}" alt="Armada Kapal" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-md">
                        Vessel Fleet
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Pelabuhan Niaga</span>
                            <span class="lang-en-only">Commercial Port</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">Operasional Armada di Pelabuhan</span>
                        <span class="lang-en-only">Port Fleet Operations</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Pemberangkatan dan koordinasi kru kapal penangkap ikan internasional.</span>
                        <span class="lang-en-only">Departure and coordination of international fishing fleet crew members.</span>
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-200"
                 data-img-src="{{ asset('images/ship-bridge.jpg') }}"
                 data-img-title="Navigasi Anjungan Kapal (Bridge Operations)"
                 data-img-desc="Perwira navigasi kapal mengoperasikan radar modern dan ECDIS.">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/ship-bridge.jpg') }}" alt="Navigasi Anjungan" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-md">
                        Bridge Ops
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">Radar &amp; ECDIS</span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">Navigasi Anjungan &amp; Radar</span>
                        <span class="lang-en-only">Bridge Navigation &amp; Radar</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Kesiapan perwira navigasi memandu kapal di perairan samudera luas.</span>
                        <span class="lang-en-only">Navigational officers handling advanced radar systems across open ocean waters.</span>
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-300"
                 data-img-src="{{ asset('images/crew-training.jpg') }}"
                 data-img-title="Pelatihan Keselamatan di Dek (Safety Drill)"
                 data-img-desc="Pelatihan kepatuhan STCW dan safety drill kru dek di atas kapal.">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/crew-training.jpg') }}" alt="Pelatihan Kru Dek" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-md">
                        Crew Training
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">Safety Drill</span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">Pelatihan Keselamatan Dek</span>
                        <span class="lang-en-only">Deck Safety Drills</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Standard Operating Procedure (SOP) keselamatan awak kapal IMO.</span>
                        <span class="lang-en-only">IMO standard safety operating procedures for deck and engine crew.</span>
                    </p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-100"
                 data-img-src="{{ asset('images/subpage-banner.jpg') }}"
                 data-img-title="Pelayaran Internasional Kapal Kargo Reefer"
                 data-img-desc="Kapal logistik hasil laut melintasi samudera luas.">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/subpage-banner.jpg') }}" alt="Pelayaran Kapal Kargo" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-md">
                        Ocean Voyage
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Rute Global</span>
                            <span class="lang-en-only">Global Routes</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">Pelayaran Samudera Lepas</span>
                        <span class="lang-en-only">Ocean Voyage Operations</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Perjalanan aman dan produktif melintasi perairan internasional.</span>
                        <span class="lang-en-only">Safe and productive navigation across international high seas.</span>
                    </p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-200"
                 data-img-src="{{ asset('images/crew-training.jpg') }}"
                 data-img-title="Pre-Departure Briefing &amp; Verifikasi"
                 data-img-desc="Pemberian pengarahan kontrak kerja (PKLA) dan hak pelaut.">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/crew-training.jpg') }}" alt="Briefing Pra Keberangkatan" class="w-full h-full object-cover filter saturate-150 group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-md">
                        Briefing &amp; PKLA
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Kontrak Resmi</span>
                            <span class="lang-en-only">Official Contract</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">Pre-Departure Briefing</span>
                        <span class="lang-en-only">Pre-Departure Briefing</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Pengarahan hak dan kewajiban pelaut sebelum sign-on di kapal.</span>
                        <span class="lang-en-only">Guidance on seafarer rights, responsibilities, and welfare before vessel boarding.</span>
                    </p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-300"
                 data-img-src="{{ asset('images/hero-banner.jpg') }}"
                 data-img-title="Koordinasi Keagenan Pelabuhan"
                 data-img-desc="Koordinasi dengan agen pelabuhan luar negeri untuk kelancaran kru.">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/hero-banner.jpg') }}" alt="Keagenan Pelabuhan" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-md">
                        Port Agency
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Sign-On Support</span>
                            <span class="lang-en-only">Sign-On Support</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">Koordinasi Sign-On Pelabuhan</span>
                        <span class="lang-en-only">Port Sign-On Coordination</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Pendampingan penuh dari keberangkatan hingga naik ke atas kapal.</span>
                        <span class="lang-en-only">Comprehensive transit support from departure terminal to on-board sign-on.</span>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
