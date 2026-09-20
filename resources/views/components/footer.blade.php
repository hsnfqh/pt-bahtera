<footer class="bg-[#FFB800] text-[#061838] border-t-2 border-amber-500 shadow-2xl relative overflow-hidden" style="background-color: #FFB800 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12">
            
            <!-- Column 1: Company Brand & Licenses (5 cols) -->
            <div class="lg:col-span-5 space-y-4">
                <div class="flex items-center space-x-3.5">
                    <div class="w-12 h-12 bg-[#061838] p-2 rounded-2xl shadow-md border border-white/20 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logo-emblem.svg') }}" alt="PT. Bahtera Keselamatan Sentosa" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-black text-[#061838] tracking-tight">
                            PT. BAHTERA <span class="text-red-700">KESELAMATAN</span> SENTOSA
                        </h4>
                        <p class="text-xs text-[#061838] font-extrabold uppercase tracking-wide">Official Crewing &amp; Manning Agency</p>
                    </div>
                </div>

                <p class="text-xs text-[#061838]/90 leading-relaxed max-w-md font-semibold">
                    <span class="lang-id-only">
                        Mitra strategis dan tepercaya penyedia tenaga pelaut Indonesia yang kompeten, berdisiplin tinggi, dan bersertifikasi internasional (STCW &amp; MLC 2006) untuk armada kapal niaga dan perikanan global.
                    </span>
                    <span class="lang-en-only">
                        Your trusted partner in providing highly qualified, reliable, and certified seafarers (STCW &amp; MLC 2006) to the international maritime industry.
                    </span>
                </p>

                <!-- Licenses Badges in Clean White Cards -->
                <div class="pt-2 grid grid-cols-1 sm:grid-cols-2 gap-2.5 max-w-md">
                    <div class="p-3.5 rounded-xl bg-white border border-amber-600/30 shadow-sm flex items-center space-x-2.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 flex-shrink-0 animate-pulse"></span>
                        <div class="text-xs">
                            <span class="text-slate-600 block text-[10px] uppercase font-bold">Lisensi Resmi SIUKAK</span>
                            <span class="font-black text-[#061838] text-[11px]">No. 58.58-R / 2024</span>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white border border-amber-600/30 shadow-sm flex items-center space-x-2.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 flex-shrink-0 animate-pulse"></span>
                        <div class="text-xs">
                            <span class="text-slate-600 block text-[10px] uppercase font-bold">Lisensi Resmi SIUPPAK</span>
                            <span class="font-black text-[#061838] text-[11px]">No. 65.21 / 2016</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links (2 cols) -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-black uppercase tracking-wider text-[#061838] border-b-2 border-red-700 pb-2 mb-3">
                    <span class="lang-id-only">Navigasi</span>
                    <span class="lang-en-only">Quick Links</span>
                </h4>
                <ul class="space-y-2.5 text-xs font-bold text-[#061838]">
                    <li><a href="{{ route('home') }}" class="hover:text-red-700 transition flex items-center gap-1.5">&rarr; <span>Home / Beranda</span></a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-red-700 transition flex items-center gap-1.5">&rarr; <span>Our Services</span></a></li>
                    <li><a href="{{ route('team') }}" class="hover:text-red-700 transition flex items-center gap-1.5">&rarr; <span>Our Team</span></a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-red-700 transition flex items-center gap-1.5">&rarr; <span>Galeri Kegiatan</span></a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-red-700 transition flex items-center gap-1.5">&rarr; <span>Pendaftaran Pelaut</span></a></li>
                </ul>
            </div>

            <!-- Column 3: Vessel Types (2 cols) -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-black uppercase tracking-wider text-[#061838] border-b-2 border-red-700 pb-2 mb-3">
                    <span class="lang-id-only">Jenis Armada</span>
                    <span class="lang-en-only">Vessel Types</span>
                </h4>
                <ul class="space-y-2.5 text-xs font-bold text-[#061838]">
                    <li>&bull; Factory Trawlers</li>
                    <li>&bull; Fishing Trawlers</li>
                    <li>&bull; Longliners (Tuna)</li>
                    <li>&bull; Purse Seiners</li>
                    <li>&bull; Squid Jiggers</li>
                    <li>&bull; Cargo Reefer Vessels</li>
                </ul>
            </div>

            <!-- Column 4: Contact & Office (3 cols) -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-black uppercase tracking-wider text-[#061838] border-b-2 border-red-700 pb-2 mb-3">
                    <span class="lang-id-only">Kontak &amp; Lokasi</span>
                    <span class="lang-en-only">Contact &amp; Office</span>
                </h4>
                <div class="space-y-3.5 text-xs text-[#061838]">
                    <div class="flex items-start space-x-2.5">
                        <svg class="w-4 h-4 text-red-700 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <p class="text-[11px] leading-relaxed font-bold">
                            Jl. Telaga Citra / Perum Telaga Murni, Kec. Cikarang Barat, Kab. Bekasi, Jawa Barat 17530 - Indonesia
                        </p>
                    </div>

                    <div class="flex items-center space-x-2.5">
                        <svg class="w-4 h-4 text-[#061838] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:+6281234567890" class="text-xs font-black hover:text-red-700 transition">+62 812-3456-7890</a>
                    </div>

                    <div class="flex items-center space-x-2.5">
                        <svg class="w-4 h-4 text-[#061838] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:info@bahterakeselamatan.co.id" class="text-xs font-black hover:text-red-700 transition">info@bahterakeselamatan.co.id</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="mt-12 pt-6 border-t border-[#061838]/20 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-[#061838] font-bold">
            <div>
                <span>&copy; {{ date('Y') }} PT. BAHTERA KESELAMATAN SENTOSA. All Rights Reserved.</span>
            </div>
            <div class="flex items-center space-x-4 text-[11px]">
                <span class="text-red-800 font-black">SIUKAK &bull; SIUPPAK Certified</span>
                <span>&bull;</span>
                <span class="text-[#061838] font-black">STCW &amp; MLC 2006 Compliant</span>
            </div>
        </div>
    </div>
</footer>
