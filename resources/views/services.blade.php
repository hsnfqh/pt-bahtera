@extends('layouts.app')

@section('title', 'Our Services & Vessel Types - PT. BAHTERA KESELAMATAN SENTOSA')

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
        <div class="text-center max-w-3xl mx-auto space-y-3 fade-in-section">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Layanan Keagenan Awak Kapal</span>
                <span class="lang-en-only">Our Crewing Services</span>
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Kami berspesialisasi dalam perekrutan, seleksi, penempatan, dan penyaluran pelaut berkualifikasi untuk berbagai armada kapal di seluruh dunia dengan kepatuhan penuh standar IMO STCW &amp; MLC 2006.</span>
                <span class="lang-en-only">We specialize in recruiting, selecting, placing, and deploying certified seafarers for various international vessel fleets in full compliance with IMO STCW &amp; MLC 2006 standards.</span>
            </p>
        </div>

        <!-- 6 Core Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- Service 1 -->
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
                    <span class="text-[#061838] font-black bg-[#FFB800]/25 px-2 py-0.5 rounded text-[10px]">STCW Compliant</span>
                </div>
            </div>

            <!-- Service 2 -->
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

            <!-- Service 3 -->
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
                            <span class="lang-id-only">Pengurusan lengkap Paspor Pelaut, Seaman Book, sertifikat STCW, visa maritim negara tujuan, endorsement negara bendera, dan MCU.</span>
                            <span class="lang-en-only">Full management of Seaman Book, STCW certificates, maritime transit visas, flag state endorsements, and certified MCU.</span>
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

            <!-- Service 4 -->
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
                            <span class="lang-id-only">Koordinasi Logistik &amp; Perjalanan</span>
                            <span class="lang-en-only">Crew Coordination &amp; Travel Logistics</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Koordinasi logistik perjalanan mulai dari tiket penerbangan, transportasi darat, akomodasi transit, hingga pendampingan sign-on di pelabuhan.</span>
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

            <!-- Service 5 -->
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
                            <span class="lang-id-only">Rotasi &amp; Pergantian Kru</span>
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

            <!-- Service 6 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 border border-slate-200/90 hover:border-[#FFB800] flex flex-col justify-between group fade-in-section delay-200">
                <div>
                    <div class="h-44 sm:h-48 overflow-hidden relative">
                        <img src="{{ asset('images/vessel-factory-trawler.jpg') }}" alt="Welfare" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-sm">
                            <span class="lang-id-only">Kesejahteraan &bull; Gaji</span>
                            <span class="lang-en-only">Welfare &bull; Payroll</span>
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="text-base sm:text-lg font-black text-[#061838] group-hover:text-[#0b3b82] transition-colors leading-snug">
                            <span class="lang-id-only">Kesejahteraan &amp; Administrasi Gaji</span>
                            <span class="lang-en-only">Crew Welfare &amp; Payroll Administration</span>
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            <span class="lang-id-only">Pengelolaan gaji tepat waktu, alokasi remitansi keluarga (allotment), asuransi jiwa &amp; kesehatan kerja, serta pemantauan kesejahteraan pelaut.</span>
                            <span class="lang-en-only">Punctual salary processing, family remittance (allotment) management, life &amp; medical insurance, and seafarer welfare monitoring.</span>
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
                <span class="lang-id-only">Jenis Kapal Armada</span>
                <span class="lang-en-only">Supported Vessel Fleet Types</span>
            </h2>
            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Pengalaman kami melayani berbagai jenis kapal memungkinkan kami memahami persyaratan spesifik setiap armada dan menyediakan kru yang tepat.</span>
                <span class="lang-en-only">Our extensive experience across various vessel types enables us to understand specific fleet requirements and supply the right crew.</span>
            </p>
        </div>

        <!-- 6 Vessel Cards in Dark Luxury Style -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- Vessel 1 -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-100">
                <div class="h-44 sm:h-48 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-factory-trawler.jpg') }}" alt="Factory Trawler" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">01</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Factory Vessel
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Factory Trawlers</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        <span class="lang-id-only">Kapal penangkap dan pemrosesan ikan modern di laut lepas dengan fasilitas pabrik pembekuan standar ekspor.</span>
                        <span class="lang-en-only">Modern oceanic fishing and fish-processing factory vessels with export-standard onboard freezing facilities.</span>
                    </p>
                </div>
            </div>

            <!-- Vessel 2 -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-150">
                <div class="h-44 sm:h-48 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-fishing-trawler.jpg') }}" alt="Fishing Trawler" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">02</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Stern Trawler
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Fishing Trawlers</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        <span class="lang-id-only">Kapal pukat hela untuk penangkapan ikan laut dalam di berbagai perairan internasional dengan kru dek terlatih.</span>
                        <span class="lang-en-only">Deep-sea bottom and pelagic trawlers operating across global fishing grounds with skilled deck crews.</span>
                    </p>
                </div>
            </div>

            <!-- Vessel 3 -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-200">
                <div class="h-44 sm:h-48 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-longliner.jpg') }}" alt="Longliner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">03</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Tuna Longline
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Longliners</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        <span class="lang-id-only">Armada rawai tuna samudra lepas dengan ABK berpengalaman dalam penanganan hasil tangkapan bernilai tinggi.</span>
                        <span class="lang-en-only">Oceanic tuna longline vessels manned by seasoned seafarers skilled in handling high-value sashimi-grade catches.</span>
                    </p>
                </div>
            </div>

            <!-- Vessel 4 -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-100">
                <div class="h-44 sm:h-48 overflow-hidden relative">
                    <img src="{{ asset('images/vessel-squid-jigger.jpg') }}" alt="Squid Jigger" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">04</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Jigging System
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Squid Jiggers</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        <span class="lang-id-only">Kapal pemancing cumi-cumi otomatis dengan pencahayaan khusus berdaya tinggi dan sistem pembekuan cepat.</span>
                        <span class="lang-en-only">Automated squid jigging vessels equipped with high-powered lighting arrays and blast freezing systems.</span>
                    </p>
                </div>
            </div>

            <!-- Vessel 5 -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-150">
                <div class="h-44 sm:h-48 overflow-hidden relative">
                    <img src="{{ asset('images/hero-banner.jpg') }}" alt="Cargo & Container" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">05</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Merchant Fleet
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">General Cargo &amp; Container</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        <span class="lang-id-only">Kapal kargo umum dan peti kemas niaga dengan kru berlisensi perwira dan rating deck/engine lengkap.</span>
                        <span class="lang-en-only">Merchant general cargo and container vessels staffed with certified officers and skilled deck/engine ratings.</span>
                    </p>
                </div>
            </div>

            <!-- Vessel 6 -->
            <div class="rounded-3xl bg-[#061838]/80 backdrop-blur-md border border-white/10 hover:border-[#FFB800] shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1.5 overflow-hidden group fade-in-section delay-200">
                <div class="h-44 sm:h-48 overflow-hidden relative">
                    <img src="{{ asset('images/subpage-banner.jpg') }}" alt="Tugboat & Offshore" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838] via-transparent to-transparent"></div>
                    <div class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-lg bg-[#041126]/90 text-[#FFB800] font-black text-xs border border-[#FFB800]/40">06</div>
                    <span class="absolute bottom-3 left-3 text-[10px] font-black text-slate-900 uppercase tracking-wider bg-[#FFB800] px-2.5 py-0.5 rounded-md shadow-sm">
                        Support &bull; Tug
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-base sm:text-lg font-black text-white group-hover:text-[#FFB800] transition-colors">Tugboat &amp; Offshore Support</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        <span class="lang-id-only">Kapal tunda pelabuhan dan armada pendukung lepas pantai (AHTS/Supply Vessel) untuk operasi logistik energi.</span>
                        <span class="lang-en-only">Harbor tugboats and offshore support vessels (AHTS / PSV) facilitating maritime logistics and marine energy operations.</span>
                    </p>
                </div>
            </div>

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
                <span class="lang-id-only">Rekam jejak penempatan kru pelaut kami telah menjangkau rute perairan global dan berlayar di bawah berbagai bendera negara maritim terkemuka.</span>
                <span class="lang-en-only">Our crew placement track record spans global maritime routes, sailing under the world's most prestigious flag states.</span>
            </p>
        </div>

        <!-- 2-Column Showcase Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            
            <!-- Left: Flag States & Global Reach Card -->
            <div class="lg:col-span-5 p-7 sm:p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm flex flex-col justify-between space-y-6 fade-in-left">
                <div class="space-y-4">
                    <h3 class="text-lg sm:text-xl font-black text-[#061838] leading-snug">
                        <span class="lang-id-only">Kepatuhan Regulasi &amp;<br>Bendera Kapal Global</span>
                        <span class="lang-en-only">Regulatory Compliance &amp;<br>Global Flag States</span>
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        <span class="lang-id-only">Kru kami telah berpengalaman berlayar di bawah regulasi bendera maritim utama dunia, menjamin kelancaran inspeksi Port State Control (PSC) dan kepatuhan penuh konvensi ILO &amp; IMO.</span>
                        <span class="lang-en-only">Our seafarers are experienced under major global flag states, ensuring seamless Port State Control (PSC) inspections and compliance with ILO &amp; IMO conventions.</span>
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-3 pt-2">
                    <div class="p-3.5 rounded-2xl bg-white border border-slate-200 text-center">
                        <strong class="text-xl font-black text-[#061838] block">100%</strong>
                        <span class="text-[11px] text-slate-500 font-semibold">STCW Certified</span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-white border border-slate-200 text-center">
                        <strong class="text-xl font-black text-[#FFB800] block">MLC</strong>
                        <span class="text-[11px] text-slate-500 font-semibold">2006 Compliant</span>
                    </div>
                </div>
            </div>

            <!-- Right: Flag Countries Grid -->
            <div class="lg:col-span-7 grid grid-cols-2 sm:grid-cols-4 gap-4 fade-in-right">
                
                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/pa.png" alt="Panama Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Panama</h4>
                        <p class="text-[10px] text-slate-500 font-medium">Major Flag State</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/lr.png" alt="Liberia Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Liberia</h4>
                        <p class="text-[10px] text-slate-500 font-medium">Global Fleet</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/mh.png" alt="Marshall Islands Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Marshall Is.</h4>
                        <p class="text-[10px] text-slate-500 font-medium">Standard Fleet</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/sg.png" alt="Singapore Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Singapore</h4>
                        <p class="text-[10px] text-slate-500 font-medium">Asian Hub Fleet</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/no.png" alt="Norway Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Norway</h4>
                        <p class="text-[10px] text-slate-500 font-medium">North Sea Fleet</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/es.png" alt="Spain Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Spain</h4>
                        <p class="text-[10px] text-slate-500 font-medium">European Waters</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/tw.png" alt="Taiwan Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">Taiwan</h4>
                        <p class="text-[10px] text-slate-500 font-medium">Pacific Tuna Fleet</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-[#FFB800] shadow-sm hover:shadow-lg text-center flex flex-col items-center justify-center space-y-3 transition duration-200 group transform hover:-translate-y-1">
                    <div class="w-14 h-9.5 rounded-lg overflow-hidden shadow-sm border border-slate-200 group-hover:scale-105 transition flex-shrink-0">
                        <img src="https://flagcdn.com/w160/kr.png" alt="South Korea Flag" class="w-full h-full object-cover">
                    </div>
                    <div class="space-y-0.5">
                        <h4 class="text-xs font-black text-[#061838]">South Korea</h4>
                        <p class="text-[10px] text-slate-500 font-medium">Oceanic Fisheries</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- 4. BUILDING PARTNERSHIPS. PROVIDING PROFESSIONAL CREW. (Clean Light Theme) -->
<section id="building-partnerships" class="py-20 lg:py-28 bg-[#F8FAFC] relative overflow-hidden border-t border-slate-200/70">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 fade-in-section">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#061838] tracking-tight uppercase leading-tight">
                BUILDING PARTNERSHIPS.<br>
                <span class="text-[#061838]">PROVIDING PROFESSIONAL CREW.</span>
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-2xl mx-auto">
                <span class="lang-id-only">Kami berkomitmen membangun kemitraan strategis jangka panjang bersama pemilik kapal (Shipowner) dan pengelola armada global dengan senantiasa menyediakan tenaga pelaut profesional, kompeten, dan berintegritas tinggi.</span>
                <span class="lang-en-only">We are committed to building long-term strategic partnerships with global shipowners and fleet managers by continuously providing professional, competent, and high-integrity seafarers.</span>
            </p>
        </div>

        <!-- 3 Executive Pillar Cards (Clean Light Theme) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            <div class="p-7 rounded-3xl bg-white border border-slate-200/90 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 space-y-3 fade-in-section delay-100">
                <div class="w-10 h-10 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black text-sm shadow-sm">
                    01
                </div>
                <h3 class="text-base sm:text-lg font-black text-[#061838]">
                    <span class="lang-id-only">Kemitraan Strategis</span>
                    <span class="lang-en-only">Strategic Partnership</span>
                </h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    <span class="lang-id-only">Kolaborasi erat yang berorientasi pada keberlanjutan operasional, efisiensi biaya crewing, dan pemenuhan kebutuhan spesifik setiap kapal mitra.</span>
                    <span class="lang-en-only">Close collaboration focused on operational continuity, cost-effective crewing solutions, and tailored maritime partner specifications.</span>
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border border-slate-200/90 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 space-y-3 fade-in-section delay-150">
                <div class="w-10 h-10 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black text-sm shadow-sm">
                    02
                </div>
                <h3 class="text-base sm:text-lg font-black text-[#061838]">
                    <span class="lang-id-only">Pelaut Berkualifikasi</span>
                    <span class="lang-en-only">Qualified Seafarers</span>
                </h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    <span class="lang-id-only">Pelaut bersertifikasi lengkap sesuai regulasi STCW terkini, berpengalaman di perairan internasional, serta melalui proses seleksi dan verifikasi medis ketat.</span>
                    <span class="lang-en-only">Fully certified crew adhering to latest STCW guidelines, proven international sea-time, and rigorous medical clearances.</span>
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border border-slate-200/90 hover:border-[#FFB800] shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 space-y-3 fade-in-section delay-200">
                <div class="w-10 h-10 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black text-sm shadow-sm">
                    03
                </div>
                <h3 class="text-base sm:text-lg font-black text-[#061838]">
                    <span class="lang-id-only">Kepatuhan &amp; Perlindungan Penuh</span>
                    <span class="lang-en-only">Full Compliance &amp; Care</span>
                </h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    <span class="lang-id-only">Jaminan perlindungan hak pelaut dan kepatuhan penuh terhadap ketentuan ILO Maritime Labour Convention (MLC 2006) dan regulasi ketenagakerjaan maritim.</span>
                    <span class="lang-en-only">Full seafarer rights protection and complete adherence to ILO Maritime Labour Convention (MLC 2006) standards.</span>
                </p>
            </div>
        </div>

    </div>
</section>

@endsection
