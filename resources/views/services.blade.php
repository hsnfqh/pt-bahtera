@extends('layouts.app')

@section('title', 'Our Services & Vessel Types - PT. BAHTERA ANUGERAH SENTOSA')

@section('content')

<!-- Top Subpage Header with PT. BKS Logo -->
<x-subpage-banner 
    titleId="Layanan &amp; <br><span class='text-[#FFB800]'>Jenis Kapal</span>"
    titleEn="Our Services &amp; <br><span class='text-[#FFB800]'>Vessel Types</span>"
    subtitleId="Solusi Manajemen Awak Kapal Terpadu &amp; Berstandar Internasional"
    subtitleEn="Integrated Maritime Crewing Solutions &amp; International Standards"
    badge="MARITIME CREWING SOLUTIONS"
/>

<!-- 1. OUR SERVICES SECTION (Light Slate Theme) -->
<section id="services-list" class="py-20 lg:py-28 bg-[#F8FAFC] relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 fade-in-section">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Layanan Keagenan Awak Kapal</span>
                <span class="lang-en-only">Our Crewing Services</span>
            </h2>
            <div class="text-slate-600 text-xs sm:text-sm leading-relaxed space-y-3 max-w-2xl mx-auto">
                <p>
                    <span class="lang-id-only">Kami berspesialisasi dalam perekrutan, seleksi, penempatan, dan penyaluran pelaut yang berkualifikasi untuk berbagai jenis kapal dan operasional maritim.</span>
                    <span class="lang-en-only">We specialize in the recruitment, selection, placement, and deployment of qualified seafarers for various types of vessels and maritime operations.</span>
                </p>
                <p>
                    <span class="lang-id-only">Setiap kandidat dinilai dan diseleksi secara cermat berdasarkan kualifikasi, pengalaman, kompetensi teknis, disiplin, tanggung jawab, dan sikap profesional. Kami meyakini bahwa awak kapal yang tepat sangat penting untuk memastikan operasional setiap kapal berjalan aman, efisien, dan sukses.</span>
                    <span class="lang-en-only">Every candidate is carefully assessed and selected based on their qualifications, experience, technical competence, discipline, responsibility, and professional attitude. We believe that the right crew is essential to ensuring the safe, efficient, and successful operation of every vessel.</span>
                </p>
                <p class="font-bold text-[#061838] pt-1">
                    <span class="lang-id-only">Layanan keagenan awak kapal kami meliputi:</span>
                    <span class="lang-en-only">Our crewing services include:</span>
                </p>
            </div>
        </div>

        <!-- 7 Core Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            <!-- Service 1: Seafarer Recruitment & Selection -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-100">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/crew-training.jpg') }}" alt="Recruitment" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-sm">
                            <span class="lang-id-only">Rekrutmen &bull; Seleksi</span>
                            <span class="lang-en-only">Recruitment &bull; Selection</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Rekrutmen &amp; Seleksi Pelaut</span>
                            <span class="lang-en-only">Seafarer Recruitment &amp; Selection</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Proses rekrutmen dan seleksi ketat berbasis kompetensi teknis maritim, verifikasi dokumen, serta uji fisik dan mental pelaut komprehensif.</span>
                            <span class="lang-en-only">Rigorous competency-based screening, maritime document verification, and comprehensive physical and psychological fitness tests.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Penyaringan Standar</span>
                        <span class="lang-en-only">Standardized Screening</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">SIUKAK Compliant</span>
                </div>
            </div>

            <!-- Service 2: Crew Placement & Deployment -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-150">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/hero-banner.jpg') }}" alt="Placement" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-sm">
                            <span class="lang-id-only">Pemberangkatan &bull; Penempatan</span>
                            <span class="lang-en-only">Embarkation &bull; Placement</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Penempatan &amp; Pemberangkatan Kru</span>
                            <span class="lang-en-only">Crew Placement &amp; Deployment</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Penempatan dan pemberangkatan kru pelaut ke kapal-kapal internasional secara tepat waktu sesuai jadwal operasional pemilik kapal.</span>
                            <span class="lang-en-only">Timely seafarer deployment and embarkation to global merchant and fishing fleets tailored to shipowners' schedules.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Tepat Waktu</span>
                        <span class="lang-en-only">On-Time Departure</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">Fit-to-Position</span>
                </div>
            </div>

            <!-- Service 3: Crew Documentation & Certification -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-200">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/subpage-banner.jpg') }}" alt="Documentation" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-sm">
                            <span class="lang-id-only">Visa &bull; Endorsement</span>
                            <span class="lang-en-only">Visa &bull; Endorsement</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Dokumentasi &amp; Sertifikasi Kru</span>
                            <span class="lang-en-only">Crew Documentation &amp; Certification</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Pengurusan lengkap Paspor Pelaut, Seaman Book, sertifikat SIUKAK &amp; SIUPPAK, visa maritim, endorsement negara bendera, dan MCU.</span>
                            <span class="lang-en-only">Full management of Seaman Book, SIUKAK &amp; SIUPPAK certificates, maritime transit visas, flag state endorsements, and certified MCU.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Endorsement Bendera</span>
                        <span class="lang-en-only">Flag Endorsement</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">Medical Clearance</span>
                </div>
            </div>

            <!-- Service 4: Crew Coordination & Travel Arrangement -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-100">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/ship-bridge.jpg') }}" alt="Logistics" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-sm">
                            <span class="lang-id-only">Perjalanan &bull; Transit</span>
                            <span class="lang-en-only">Travel &bull; Transit</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Koordinasi &amp; Pengaturan Perjalanan</span>
                            <span class="lang-en-only">Crew Coordination &amp; Travel Arrangement</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Koordinasi perjalanan mulai dari tiket penerbangan, penjemputan bandara, akomodasi transit, hingga pendampingan sign-on di pelabuhan.</span>
                            <span class="lang-en-only">Seamless travel arrangement from flight ticketing, airport pickups, transit accommodation, to port sign-on liaison.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Logistik Penerbangan</span>
                        <span class="lang-en-only">Flight Logistics</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">Port Liaison</span>
                </div>
            </div>

            <!-- Service 5: Crew Replacement & Rotation -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-150">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/vessel-fishing-trawler.jpg') }}" alt="Rotation" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-sm">
                            <span class="lang-id-only">Rotasi &bull; Pergantian</span>
                            <span class="lang-en-only">Rotation &bull; Relief</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Penggantian &amp; Rotasi Kru</span>
                            <span class="lang-en-only">Crew Replacement &amp; Rotation</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Perencanaan jadwal rotasi dan penggantian kru secara teratur demi kestabilan dan produktivitas operasi kapal tanpa jeda waktu kosong.</span>
                            <span class="lang-en-only">Systematic crew rotation planning and standby pool management ensuring zero vessel downtime and uninterrupted voyage operations.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Pergantian Terencana</span>
                        <span class="lang-en-only">Planned Relief</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">Standby Ready</span>
                </div>
            </div>

            <!-- Service 6: Crew Management Support -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-200">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/vessel-factory-trawler.jpg') }}" alt="Management" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-sm">
                            <span class="lang-id-only">Manajemen &bull; Kru</span>
                            <span class="lang-en-only">Crew &bull; Management</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Dukungan Manajemen Kru</span>
                            <span class="lang-en-only">Crew Management Support</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Pengelolaan gaji tepat waktu, alokasi remitansi keluarga, asuransi jiwa &amp; kesehatan, serta pemantauan kesejahteraan dan kinerja pelaut.</span>
                            <span class="lang-en-only">Punctual salary processing, family remittance management, life &amp; medical insurance, and seafarer welfare and performance monitoring.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Remitansi Tepat Waktu</span>
                        <span class="lang-en-only">Timely Remittance</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">MLC Compliant</span>
                </div>
            </div>

            <!-- Service 7: Compliance with International Maritime Standards -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-250 md:col-span-2 md:max-w-md md:mx-auto lg:col-span-1 lg:col-start-2 lg:max-w-none w-full">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/vessel-reefer.jpg') }}" alt="Compliance" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-sm">
                            <span class="lang-id-only">Kepatuhan &bull; Standar</span>
                            <span class="lang-en-only">Compliance &bull; Standards</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Kepatuhan Standar Maritim Internasional</span>
                            <span class="lang-en-only">Compliance with International Maritime Standards</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Memastikan seluruh operasi penempatan pelaut memenuhi standar SIUKAK &amp; SIUPPAK secara penuh dan konsisten.</span>
                            <span class="lang-en-only">Ensuring all seafarer deployment operations fully and consistently comply with SIUKAK &amp; SIUPPAK international standards.</span>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center justify-between bg-slate-50/70">
                    <span>
                        <span class="lang-id-only">Standar Kepatuhan</span>
                        <span class="lang-en-only">Compliance Standard</span>
                    </span>
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">SIUKAK &amp; SIUPPAK</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 2. VESSEL TYPES SECTION (Deep Ocean Navy Theme) -->
<section id="vessel-types" class="py-20 lg:py-28 bg-[#041126] text-white relative overflow-hidden border-t border-white/10">
    <!-- Radial Ocean Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_20%,#0e3268_0%,#041126_100%)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 fade-in-section">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white tracking-tight uppercase">
                <span class="lang-id-only">Jenis Kapal</span>
                <span class="lang-en-only">Vessel Types</span>
            </h2>
            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Selama bertahun-tahun, kami telah sukses menyalurkan awak kapal yang berkualifikasi untuk berbagai macam armada kapal komersial dan penangkap ikan, meliputi:</span>
                <span class="lang-en-only">Over the years, we have successfully supplied qualified crew for a wide range of commercial and fishing vessels, including:</span>
            </p>
        </div>

        <!-- 7 Vessel Cards in Dark Luxury Style -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- Vessel 1: Factory Trawlers -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-100">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-factory-trawler.jpg') }}" alt="Factory Trawlers" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">01</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Factory Vessel
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Factory Trawlers</h3>
                </div>
            </div>

            <!-- Vessel 2: Fishing Trawlers -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-150">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-fishing-trawler.jpg') }}" alt="Fishing Trawlers" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">02</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Stern Trawler
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Fishing Trawlers</h3>
                </div>
            </div>

            <!-- Vessel 3: Longliners -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-200">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-longliner.jpg') }}" alt="Longliners" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">03</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Tuna Longline
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Longliners</h3>
                </div>
            </div>

            <!-- Vessel 4: Purse Seiners -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-100">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-purse-seiner.jpg') }}" alt="Purse Seiners" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">04</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Purse Seine
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Purse Seiners</h3>
                </div>
            </div>

            <!-- Vessel 5: Squid Fishing Vessels -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-150">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-squid-jigger.jpg') }}" alt="Squid Fishing Vessels" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">05</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Squid Jigging
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Squid Fishing Vessels</h3>
                </div>
            </div>

            <!-- Vessel 6: Cargo Reefer Vessels -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-200">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-reefer.jpg') }}" alt="Cargo Reefer Vessels" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">06</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Reefer Fleet
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Cargo Reefer Vessels</h3>
                </div>
            </div>

            <!-- Vessel 7: Other Commercial & Fishing Vessels -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-250 md:col-span-2 md:max-w-md md:mx-auto lg:col-span-1 lg:col-start-2 lg:max-w-none w-full">
                <div class="h-48 sm:h-52 overflow-hidden relative">
                    <img src="{{ asset('images/hero-banner.jpg') }}" alt="Other Commercial & Fishing Vessels" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">07</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Commercial Fleet
                    </span>
                </div>
                <div class="p-5 sm:p-6">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Other Commercial &amp; Fishing Vessels</h3>
                </div>
            </div>

        </div>

        <!-- Closing Note Below Vessel Cards -->
        <div class="text-center max-w-3xl mx-auto p-6 sm:p-7 rounded-3xl bg-[#061838]/80 border border-white/10 backdrop-blur-md shadow-xl fade-in-section">
            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed font-normal">
                <span class="lang-id-only">Pengalaman kami yang luas di berbagai jenis kapal memungkinkan kami memahami persyaratan operasional spesifik dari setiap armada dan menyediakan kru yang paling sesuai dengan kebutuhan kapal.</span>
                <span class="lang-en-only">Our extensive experience across different vessel types allows us to understand the specific operational requirements of each fleet and provide crew who are well-suited to the vessel's needs.</span>
            </p>
        </div>

    </div>
</section>

<!-- 3. INTERNATIONAL EXPERIENCE SECTION (Clean Light Theme) -->
<section id="international-experience" class="py-20 lg:py-28 bg-[#FFFFFF] relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 fade-in-section">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Pengalaman Internasional</span>
                <span class="lang-en-only">International Experience</span>
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Pelaut kami telah bertugas di atas kapal-kapal yang beroperasi di bawah berbagai bendera internasional dan di berbagai wilayah maritim, meliputi:</span>
                <span class="lang-en-only">Our seafarers have served onboard vessels operating under various international flags and in different maritime regions, including:</span>
            </p>
        </div>

        <!-- 8 Flag Countries Grid (Centered 4x2 Layout) -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 max-w-5xl mx-auto fade-in-section">
            
            <!-- Country 1: Belize -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/bz.png" alt="Belize Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">Belize</h4>
                    <p class="text-[10px] text-slate-500 font-medium">International Fleet</p>
                </div>
            </div>

            <!-- Country 2: Russia -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/ru.png" alt="Russia Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">Russia</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Pacific &amp; Far East</p>
                </div>
            </div>

            <!-- Country 3: Norway -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/no.png" alt="Norway Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">Norway</h4>
                    <p class="text-[10px] text-slate-500 font-medium">North Sea Fleet</p>
                </div>
            </div>

            <!-- Country 4: Oman -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/om.png" alt="Oman Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">Oman</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Middle East Waters</p>
                </div>
            </div>

            <!-- Country 5: Spain -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/es.png" alt="Spain Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">Spain</h4>
                    <p class="text-[10px] text-slate-500 font-medium">European Waters</p>
                </div>
            </div>

            <!-- Country 6: Taiwan -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/tw.png" alt="Taiwan Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">Taiwan</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Pacific Tuna Fleet</p>
                </div>
            </div>

            <!-- Country 7: South Korea -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                    <img src="https://flagcdn.com/w160/kr.png" alt="South Korea Flag" class="w-full h-full object-cover">
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838]">South Korea</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Oceanic Fisheries</p>
                </div>
            </div>

            <!-- Country 8: And many other countries -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 bg-[#061838] flex items-center justify-center text-[#FFB800] group-hover:scale-105 transition flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="space-y-0.5">
                    <h4 class="text-xs font-black text-[#061838] leading-tight">
                        <span class="lang-id-only">Negara Lainnya</span>
                        <span class="lang-en-only">And many other countries</span>
                    </h4>
                    <p class="text-[10px] text-slate-500 font-medium">
                        <span class="lang-id-only">Rute Global</span>
                        <span class="lang-en-only">Global Maritime Routes</span>
                    </p>
                </div>
            </div>

        </div>

        <!-- Closing Note Below Countries Grid -->
        <div class="text-center max-w-3xl mx-auto p-6 sm:p-7 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm fade-in-section">
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed font-normal">
                <span class="lang-id-only">Pengalaman internasional kami telah memperkuat pemahaman kami terhadap berbagai praktik maritim, persyaratan operasional, dan ekspektasi klien.</span>
                <span class="lang-en-only">Our international experience has strengthened our understanding of different maritime practices, operational requirements, and client expectations.</span>
            </p>
        </div>

    </div>
</section>

<!-- 4. BUILDING PARTNERSHIPS. PROVIDING PROFESSIONAL CREW. (Clean Light Theme) -->
<section id="building-partnerships" class="py-20 lg:py-28 bg-[#F8FAFC] relative overflow-hidden border-t border-slate-200/70">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center space-y-6 fade-in-section">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase leading-tight">
                BUILDING PARTNERSHIPS.<br>
                <span class="text-[#061838]">PROVIDING PROFESSIONAL CREW.</span>
            </h2>
            
            <div class="text-slate-600 text-xs sm:text-sm leading-relaxed space-y-4 max-w-3xl mx-auto">
                <p>
                    <span class="lang-id-only">Kami merasa terhormat dapat menjadi mitra keagenan awak kapal terpercaya Anda dan mendukung armada kapal Anda dengan para profesional maritim yang berkualifikasi dan dapat diandalkan.</span>
                    <span class="lang-en-only">We would be honored to become your trusted crewing partner and support your fleet with qualified and dependable maritime professionals.</span>
                </p>
                <p>
                    <span class="lang-id-only">Baik Anda membutuhkan kru untuk kapal penangkap ikan, factory trawlers, longliners, purse seiners, kapal cargo reefer, maupun kapal komersial lainnya, PT. BAHTERA ANUGERAH SENTOSA siap menyediakan solusi penyaluran kru yang andal dan disesuaikan dengan kebutuhan Anda.</span>
                    <span class="lang-en-only">Whether you require crew for fishing vessels, factory trawlers, longliners, purse seiners, cargo reefer vessels, or other commercial vessels, PT. BAHTERA ANUGERAH SENTOSA is ready to provide reliable crewing solutions tailored to your requirements.</span>
                </p>
                <p class="font-semibold text-[#061838]">
                    <span class="lang-id-only">Kami menantikan terjalinnya kemitraan yang sukses, terpercaya, dan berkelanjutan dalam jangka panjang bersama para pemilik kapal, operator armada, dan perusahaan maritim di seluruh dunia.</span>
                    <span class="lang-en-only">We look forward to establishing a successful, trusted, and long-lasting partnership with ship owners, vessel operators, and maritime companies around the world.</span>
                </p>
            </div>

            <div class="pt-2">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-2xl bg-[#061838] hover:bg-[#FFB800] text-white hover:text-[#061838] font-black text-xs uppercase tracking-wider transition-all duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-0.5">
                    <span class="lang-id-only">Hubungi Kami</span>
                    <span class="lang-en-only">Contact Us</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
