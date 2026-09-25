@extends('layouts.app')

@section('title', 'Activity Gallery - PT BAHTERA ANUGERAH SENTOSA')

@section('content')

<!-- Top Subpage Header with PT. BKS Logo -->
<x-subpage-banner 
    titleId="Galeri <span class='text-[#FFB800]'>Aktivitas</span>"
    titleEn="Activity <span class='text-[#FFB800]'>Gallery</span>"
    subtitleId="Dokumentasi Pelatihan, Penempatan, dan Operasional Pelaut PT. Bahtera Anugerah Sentosa"
    subtitleEn="Documentation of Training, Deployment, and Seafarer Operations"
    badge="ACTIVITY &amp; FLEET GALLERY"
/>

<!-- ACTIVITY GALLERY SECTION -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="text-center max-w-3xl mx-auto fade-in-section">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#061838] tracking-tight uppercase">
                <span class="lang-id-only">Galeri Kegiatan</span>
                <span class="lang-en-only">Activity Gallery</span>
            </h2>
        </div>

        <!-- Gallery Grid with Lightbox Triggers -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Item 1: Proses Recruitment -->
            <div class="gallery-item-trigger group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl cursor-pointer transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-100"
                 data-img-src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&q=80&fit=crop">
                
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80&fit=crop" alt="Proses Recruitment" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/85 via-transparent to-transparent"></div>
                    <span class="absolute top-4 left-4 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-md">
                        <span class="lang-id-only">Rekrutmen</span>
                        <span class="lang-en-only">Recruitment</span>
                    </span>
                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Seleksi &amp; Uji Kompetensi</span>
                            <span class="lang-en-only">Screening &amp; Assessment</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            <span class="lang-id-only">Lihat Foto &rarr;</span>
                            <span class="lang-en-only">View Photo &rarr;</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">1. Proses Recruitment</span>
                        <span class="lang-en-only">1. Recruitment Process</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Seleksi administrasi ketat, verifikasi dokumen pelaut kapal ikan, wawancara kompetensi teknis penangkapan, dan medical check-up menyeluruh bagi calon ABK.</span>
                        <span class="lang-en-only">Rigorous administrative screening, fishing vessel seafarer document verification, technical fishing competency interviews, and full medical check-ups for crew candidates.</span>
                    </p>
                </div>
            </div>

            <!-- Item 2: Kegiatan di Kapal (Slideshow) -->
            <div class="shipboard-card group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-200" style="overflow: visible;">

                <!-- Slideshow + Outer Buttons Wrapper -->
                <div class="relative" id="shipboard-slideshow">

                    <!-- Image clipping wrapper with slides inside -->
                    <div class="h-64 overflow-hidden relative" style="border-radius: 1.5rem 1.5rem 0 0;">

                        <!-- Slides wrapper -->
                        <div class="flex h-full transition-transform duration-500 ease-in-out" id="shipboard-slides-inner" style="width:400%; transform:translateX(0%)">

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:25%"
                                 data-img-src="{{ asset('images/shipboard-coldstore.jpg') }}">
                                <img src="{{ asset('images/shipboard-coldstore.jpg') }}" alt="Shipboard Cold Store" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:25%"
                                 data-img-src="{{ asset('images/shipboard-deck-catch.jpg') }}">
                                <img src="{{ asset('images/shipboard-deck-catch.jpg') }}" alt="Shipboard Deck Catch" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:25%"
                                 data-img-src="{{ asset('images/shipboard-processing.jpg') }}">
                                <img src="{{ asset('images/shipboard-processing.jpg') }}" alt="Shipboard Fish Processing" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:25%"
                                 data-img-src="{{ asset('images/shipboard-tuna.jpg') }}">
                                <img src="{{ asset('images/shipboard-tuna.jpg') }}" alt="Shipboard Tuna Handling" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                        </div>

                        <!-- Badge -->
                        <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#061838] text-[#FFB800] border border-[#FFB800]/40 shadow-md pointer-events-none">
                            <span class="lang-id-only">Kapal Ikan</span>
                            <span class="lang-en-only">Fishing Ops</span>
                        </span>

                        <!-- Slide Counter -->
                        <span class="shipboard-counter absolute top-4 right-4 z-10 px-2.5 py-1 rounded-lg text-xs font-bold bg-[#061838]/70 text-white pointer-events-none">1 / 4</span>

                        <!-- Dots -->
                        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 z-10 flex gap-1.5 pointer-events-none" id="shipboard-dots">
                            <span class="shipboard-dot w-2 h-2 rounded-full bg-white" style="opacity:1"></span>
                            <span class="shipboard-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                            <span class="shipboard-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                            <span class="shipboard-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                        </div>

                    </div>

                    <!-- Prev Button — di tepi kiri luar kartu -->
                    <button class="shipboard-prev absolute -left-5 top-32 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-[#061838] hover:bg-[#FFB800] text-white hover:text-[#061838] flex items-center justify-center transition-all duration-200 shadow-xl border-2 border-white" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    </button>

                    <!-- Next Button — di tepi kanan luar kartu -->
                    <button class="shipboard-next absolute -right-5 top-32 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-[#061838] hover:bg-[#FFB800] text-white hover:text-[#061838] flex items-center justify-center transition-all duration-200 shadow-xl border-2 border-white" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </button>

                </div>

                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Operasional Kapal Ikan</span>
                            <span class="lang-en-only">Fishing Vessel Operations</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black">
                            <span class="lang-id-only">4 Foto</span>
                            <span class="lang-en-only">4 Photos</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">2. Kegiatan di Kapal</span>
                        <span class="lang-en-only">2. Shipboard Activities</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Operasional penangkapan ikan di fishing ground, penurunan &amp; penarikan alat tangkap (setting &amp; hauling), penyortiran hasil laut, pembekuan di cold storage, dan pemeliharaan alat tangkap.</span>
                        <span class="lang-en-only">Fishing operations at sea fishing grounds, gear setting &amp; hauling, catch sorting, blast-freezing in cold storage holds, and maintenance of fishing equipment.</span>
                    </p>
                </div>
            </div>

            <!-- Item 3: Proses Keberangkatan (Slideshow) -->
            <div class="departure-card group rounded-3xl overflow-hidden bg-white border-2 border-slate-200/80 hover:border-[#FFB800] shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 fade-in-section delay-300" style="overflow: visible;">
                
                <!-- Slideshow + Outer Buttons Wrapper -->
                <div class="relative" id="departure-slideshow">

                    <!-- Image clipping wrapper with slides inside -->
                    <div class="h-64 overflow-hidden relative" style="border-radius: 1.5rem 1.5rem 0 0;">

                        <!-- Slides wrapper -->
                        <div class="flex h-full transition-transform duration-500 ease-in-out" id="departure-slides-inner" style="width:500%; transform:translateX(0%)">

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:20%"
                                 data-img-src="{{ asset('images/20260621_221340.jpg') }}">
                                <img src="{{ asset('images/20260621_221340.jpg') }}" alt="Keberangkatan 1" class="w-full h-full object-cover object-top">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:20%"
                                 data-img-src="{{ asset('images/20260602_121558.jpg') }}">
                                <img src="{{ asset('images/20260602_121558.jpg') }}" alt="Keberangkatan 2" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:20%"
                                 data-img-src="{{ asset('images/20260602_143046(0).jpg') }}">
                                <img src="{{ asset('images/20260602_143046(0).jpg') }}" alt="Keberangkatan 3" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:20%"
                                 data-img-src="{{ asset('images/20260727_173745.jpg') }}">
                                <img src="{{ asset('images/20260727_173745.jpg') }}" alt="Keberangkatan 4" class="w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                            <div class="h-full relative gallery-item-trigger cursor-pointer" style="min-width:20%"
                                 data-img-src="{{ asset('images/20260909_181328.jpg') }}">
                                <img src="{{ asset('images/20260909_181328.jpg') }}" alt="Keberangkatan 5" class="w-full h-full object-cover object-top">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#061838]/70 via-transparent to-transparent"></div>
                            </div>

                        </div>

                        <!-- Badge -->
                        <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-lg text-xs font-black uppercase tracking-wider bg-[#FFB800] text-[#061838] shadow-md pointer-events-none">
                            <span class="lang-id-only">Keberangkatan</span>
                            <span class="lang-en-only">Deployment</span>
                        </span>

                        <!-- Slide Counter -->
                        <span class="departure-counter absolute top-4 right-4 z-10 px-2.5 py-1 rounded-lg text-xs font-bold bg-[#061838]/70 text-white pointer-events-none">1 / 5</span>

                        <!-- Dots -->
                        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 z-10 flex gap-1.5 pointer-events-none" id="departure-dots">
                            <span class="departure-dot w-2 h-2 rounded-full bg-white" style="opacity:1"></span>
                            <span class="departure-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                            <span class="departure-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                            <span class="departure-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                            <span class="departure-dot w-2 h-2 rounded-full bg-white" style="opacity:0.4"></span>
                        </div>

                    </div>

                    <!-- Prev Button — di tepi kiri luar kartu -->
                    <button class="departure-prev absolute -left-5 top-32 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-[#061838] hover:bg-[#FFB800] text-white hover:text-[#061838] flex items-center justify-center transition-all duration-200 shadow-xl border-2 border-white" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    </button>

                    <!-- Next Button — di tepi kanan luar kartu -->
                    <button class="departure-next absolute -right-5 top-32 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-[#061838] hover:bg-[#FFB800] text-white hover:text-[#061838] flex items-center justify-center transition-all duration-200 shadow-xl border-2 border-white" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </button>

                </div>
                
                <div class="p-7 bg-white space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="px-2.5 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                            <span class="lang-id-only">Mobilisasi &amp; Sign-On</span>
                            <span class="lang-en-only">Mobilization &amp; Sign-On</span>
                        </span>
                        <span class="text-xs text-[#FFB800] font-black">
                            <span class="lang-id-only">5 Foto</span>
                            <span class="lang-en-only">5 Photos</span>
                        </span>
                    </div>
                    <h3 class="text-lg font-black text-[#061838] group-hover:text-[#FFB800] transition-colors leading-tight">
                        <span class="lang-id-only">3. Proses Keberangkatan</span>
                        <span class="lang-en-only">3. Departure Process</span>
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <span class="lang-id-only">Pengurusan visa maritim &amp; paspor pelaut, tiket penerbangan, briefing PKLA kapal ikan, pengantaran bandara, hingga koordinasi sign-on di pelabuhan armada internasional.</span>
                        <span class="lang-en-only">Processing maritime visas &amp; seaman books, international flight tickets, fishing crew PKLA briefings, airport escort, and port sign-on coordination with international fishing fleets.</span>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
(function() {

    // ─── Departure photos data ───────────────────────────────────────────────
    var departurePhotos = [];

    function buildDeparturePhotos() {
        var slides = document.querySelectorAll('#departure-slides-inner .gallery-item-trigger');
        departurePhotos = [];
        slides.forEach(function(slide) {
            departurePhotos.push({
                src:   slide.getAttribute('data-img-src'),
                title: slide.getAttribute('data-img-title') || '',
                desc:  slide.getAttribute('data-img-desc') || ''
            });
        });
    }

    // ─── Lightbox helpers ────────────────────────────────────────────────────
    var lbModal   = document.getElementById('gallery-lightbox');
    var lbImg     = document.getElementById('lightbox-img');
    var lbTitle   = document.getElementById('lightbox-title');
    var lbDesc    = document.getElementById('lightbox-desc');
    var lbClose   = document.getElementById('lightbox-close');
    var lbPrev    = document.getElementById('lightbox-prev');
    var lbNext    = document.getElementById('lightbox-next');
    var lbCounter = document.getElementById('lightbox-counter');

    var lbPhotos  = [];   // current photo set shown in lightbox
    var lbIndex   = 0;    // current index in lbPhotos

    function openLightbox(photos, index) {
        lbPhotos = photos;
        showLbPhoto(index);
        if (lbModal) { lbModal.classList.remove('hidden'); lbModal.classList.add('flex'); }
    }

    function closeLightbox() {
        if (lbModal) { lbModal.classList.add('hidden'); lbModal.classList.remove('flex'); }
        lbPhotos = []; lbIndex = 0;
    }

    function showLbPhoto(idx) {
        lbIndex = ((idx % lbPhotos.length) + lbPhotos.length) % lbPhotos.length;
        var p = lbPhotos[lbIndex];
        if (lbImg)   { lbImg.style.opacity = '0'; setTimeout(function() { lbImg.src = p.src; lbImg.style.opacity = '1'; }, 150); }
        if (lbTitle) {
            lbTitle.innerHTML = p.title;
            if (lbTitle.parentElement) {
                lbTitle.parentElement.style.display = (!p.title && !p.desc) ? 'none' : '';
            }
        }
        if (lbDesc) lbDesc.innerHTML = p.desc;

        // Show/hide nav buttons & counter
        var multi = lbPhotos.length > 1;
        if (lbPrev)    { lbPrev.classList.toggle('hidden', !multi); lbPrev.classList.toggle('flex', multi); }
        if (lbNext)    { lbNext.classList.toggle('hidden', !multi); lbNext.classList.toggle('flex', multi); }
        if (lbCounter) {
            lbCounter.classList.toggle('hidden', !multi);
            lbCounter.textContent = (lbIndex + 1) + ' / ' + lbPhotos.length;
        }
    }

    if (lbClose) lbClose.addEventListener('click', closeLightbox);
    if (lbPrev)  lbPrev.addEventListener('click',  function(e) { e.stopPropagation(); showLbPhoto(lbIndex - 1); });
    if (lbNext)  lbNext.addEventListener('click',  function(e) { e.stopPropagation(); showLbPhoto(lbIndex + 1); });
    if (lbModal) lbModal.addEventListener('click', function(e) { if (e.target === lbModal) closeLightbox(); });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lbModal || lbModal.classList.contains('hidden')) return;
        if (e.key === 'ArrowLeft')  showLbPhoto(lbIndex - 1);
        if (e.key === 'ArrowRight') showLbPhoto(lbIndex + 1);
        if (e.key === 'Escape')     closeLightbox();
    });

    // Touch swipe in lightbox
    var lbTouchX = 0;
    if (lbModal) {
        lbModal.addEventListener('touchstart', function(e) { lbTouchX = e.touches[0].clientX; }, { passive: true });
        lbModal.addEventListener('touchend', function(e) {
            var diff = lbTouchX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) showLbPhoto(diff > 0 ? lbIndex + 1 : lbIndex - 1);
        }, { passive: true });
    }

    // ─── Regular gallery items (non-slideshow) ───────────────────────────────
    document.querySelectorAll('.gallery-item-trigger').forEach(function(item) {
        // Exclude slideshow slides — handled separately below
        if (item.closest('#departure-slideshow')) return;
        if (item.closest('#shipboard-slideshow')) return;
        item.addEventListener('click', function() {
            openLightbox([{
                src:   item.getAttribute('data-img-src'),
                title: item.getAttribute('data-img-title') || '',
                desc:  item.getAttribute('data-img-desc') || ''
            }], 0);
        });
    });

    // ─── Departure slideshow ─────────────────────────────────────────────────
    function initDepartureSlideshow() {
        var wrapper = document.getElementById('departure-slideshow');
        if (!wrapper) return;

        buildDeparturePhotos();

        var inner   = document.getElementById('departure-slides-inner');
        var dots    = wrapper.querySelectorAll('.departure-dot');
        var counter = wrapper.querySelector('.departure-counter');
        var prevBtn = wrapper.querySelector('.departure-prev');
        var nextBtn = wrapper.querySelector('.departure-next');
        var total   = departurePhotos.length || 5;
        var current = 0;
        var timer   = null;

        function goTo(idx) {
            current = ((idx % total) + total) % total;
            var step = 100 / total;
            inner.style.transform = 'translateX(-' + (current * step) + '%)';
            dots.forEach(function(d, i) { d.style.opacity = i === current ? '1' : '0.4'; });
            if (counter) counter.textContent = (current + 1) + ' / ' + total;
        }

        function start() { timer = setInterval(function() { goTo(current + 1); }, 3500); }
        function stop()  { clearInterval(timer); }
        function reset() { stop(); start(); }

        if (prevBtn) prevBtn.addEventListener('click', function(e) { e.stopPropagation(); goTo(current - 1); reset(); });
        if (nextBtn) nextBtn.addEventListener('click', function(e) { e.stopPropagation(); goTo(current + 1); reset(); });

        wrapper.addEventListener('mouseenter', stop);
        wrapper.addEventListener('mouseleave', start);

        // Touch swipe on card
        var tx = 0;
        wrapper.addEventListener('touchstart', function(e) { tx = e.touches[0].clientX; }, { passive: true });
        wrapper.addEventListener('touchend', function(e) {
            var diff = tx - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 40) { goTo(diff > 0 ? current + 1 : current - 1); reset(); }
        }, { passive: true });

        // Click on a slide → open lightbox at that index, with full departure photos array
        var slides = wrapper.querySelectorAll('.gallery-item-trigger');
        slides.forEach(function(slide, idx) {
            slide.addEventListener('click', function(e) {
                e.stopPropagation();
                openLightbox(departurePhotos, idx);
            });
        });

        start();
    }


    // ─── Shipboard slideshow ──────────────────────────────────────────────────
    function initShipboardSlideshow() {
        var wrapper = document.getElementById('shipboard-slideshow');
        if (!wrapper) return;

        // Build photos array from slide data attributes
        var shipboardPhotos = [];
        wrapper.querySelectorAll('.gallery-item-trigger').forEach(function(slide) {
            shipboardPhotos.push({
                src:   slide.getAttribute('data-img-src'),
                title: slide.getAttribute('data-img-title') || '',
                desc:  slide.getAttribute('data-img-desc') || ''
            });
        });

        var inner   = document.getElementById('shipboard-slides-inner');
        var dots    = wrapper.querySelectorAll('.shipboard-dot');
        var counter = wrapper.querySelector('.shipboard-counter');
        var prevBtn = wrapper.querySelector('.shipboard-prev');
        var nextBtn = wrapper.querySelector('.shipboard-next');
        var total   = shipboardPhotos.length || 5;
        var current = 0;
        var timer   = null;

        function goTo(idx) {
            current = ((idx % total) + total) % total;
            var step = 100 / total;
            inner.style.transform = 'translateX(-' + (current * step) + '%)';
            dots.forEach(function(d, i) { d.style.opacity = i === current ? '1' : '0.4'; });
            if (counter) counter.textContent = (current + 1) + ' / ' + total;
        }

        function start() { timer = setInterval(function() { goTo(current + 1); }, 4000); }
        function stop()  { clearInterval(timer); }
        function reset() { stop(); start(); }

        if (prevBtn) prevBtn.addEventListener('click', function(e) { e.stopPropagation(); goTo(current - 1); reset(); });
        if (nextBtn) nextBtn.addEventListener('click', function(e) { e.stopPropagation(); goTo(current + 1); reset(); });

        wrapper.addEventListener('mouseenter', stop);
        wrapper.addEventListener('mouseleave', start);

        // Touch swipe
        var tx = 0;
        wrapper.addEventListener('touchstart', function(e) { tx = e.touches[0].clientX; }, { passive: true });
        wrapper.addEventListener('touchend', function(e) {
            var diff = tx - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 40) { goTo(diff > 0 ? current + 1 : current - 1); reset(); }
        }, { passive: true });

        // Click on slide → open lightbox
        var slides = wrapper.querySelectorAll('.gallery-item-trigger');
        slides.forEach(function(slide, idx) {
            slide.addEventListener('click', function(e) {
                e.stopPropagation();
                openLightbox(shipboardPhotos, idx);
            });
        });

        start();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initDepartureSlideshow();
            initShipboardSlideshow();
        });
    } else {
        initDepartureSlideshow();
        initShipboardSlideshow();
    }

})();
</script>
@endpush


