@props([
    'titleId' => '',
    'titleEn' => '',
    'subtitleId' => 'PT. BAHTERA ANUGERAH SENTOSA • Crewing & Manning Services',
    'subtitleEn' => 'PT. BAHTERA ANUGERAH SENTOSA • Crewing & Manning Services',
    'badge' => 'MARITIME CREWING SOLUTIONS'
])

<section class="relative min-h-[42vh] sm:min-h-[48vh] lg:min-h-[52vh] flex items-center py-20 sm:py-28 lg:py-36 text-white overflow-hidden border-b-2 border-[#FFB800]/30 shadow-2xl">
    <!-- Real Ship Photo Background with Home Hero Blue Transparency Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-banner.jpg') }}" alt="Armada Kapal PT. Bahtera Anugerah Sentosa" class="w-full h-full object-cover object-center scale-105 filter saturate-110">
        <div class="absolute inset-0 bg-gradient-to-b from-[#061838]/65 via-[#061838]/55 to-[#061838]/75"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            
            <!-- Left Header Content -->
            <div class="space-y-4 text-center md:text-left fade-in-left">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black tracking-tight text-white leading-tight drop-shadow-md">
                    <span class="lang-id-only">{!! $titleId !!}</span>
                    <span class="lang-en-only">{!! $titleEn !!}</span>
                </h1>

                <p class="text-sm sm:text-base md:text-lg text-slate-100 max-w-2xl font-medium leading-relaxed drop-shadow-sm">
                    <span class="lang-id-only">{!! $subtitleId !!}</span>
                    <span class="lang-en-only">{!! $subtitleEn !!}</span>
                </p>
            </div>

            <!-- Right: Corporate Emblem Badge -->
            <div class="flex-shrink-0 flex items-center space-x-4 bg-[#061838]/85 backdrop-blur-md px-6 py-5 rounded-2xl shadow-2xl border-2 border-[#FFB800]/50 fade-in-right">
                <div class="w-14 h-14 flex-shrink-0">
                    <img src="{{ asset('images/logo-emblem.svg') }}" alt="Emblem PT. Bahtera Anugerah Sentosa" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col text-left">
                    <span class="text-xs sm:text-sm font-black text-white tracking-wide">PT. BAHTERA ANUGERAH SENTOSA</span>
                    <span class="text-[10px] sm:text-xs text-[#FFB800] font-extrabold uppercase tracking-wider">Official Crewing Agency</span>
                </div>
            </div>

        </div>
    </div>
</section>


