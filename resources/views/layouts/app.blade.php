<!DOCTYPE html>
<html lang="id" data-lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'PT BAHTERA ANUGERAH SENTOSA - Professional Crewing & Manning Services')</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="PT BAHTERA ANUGERAH SENTOSA - Professional Crewing & Manning Services with SIUKAK No. 58.58-R/2024 & SIUPPAK No. 65.21/2016. Your trusted international maritime partner.">
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo-emblem.svg') }}?v=2">
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('images/logo-emblem.svg') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-emblem.svg') }}?v=2">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #F8FAFC;
            color: #1E293B;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', sans-serif;
        }

        /* Clean Consistent Justified Typography */
        .text-justify {
            text-align: justify !important;
            text-justify: inter-word !important;
        }

        /* 100% Reliable Language Switching Rules */
        html[data-lang="id"] .lang-en-only {
            display: none !important;
        }
        html[data-lang="en"] .lang-id-only {
            display: none !important;
        }

        /* Active Language Flag Pill Buttons */
        .lang-flag-btn.lang-active {
            background-color: #FFB800 !important;
            color: #061838 !important;
            font-weight: 900 !important;
            box-shadow: 0 1px 4px rgba(0,0,0,0.25) !important;
        }
        .lang-flag-btn:not(.lang-active) {
            color: #FFFFFF !important;
            background-color: transparent !important;
            opacity: 0.85;
        }
        .lang-flag-btn:not(.lang-active):hover {
            opacity: 1;
            background-color: rgba(255,255,255,0.1) !important;
        }
    </style>

    <script>
        // Global Instant Language Switcher
        window.setLanguage = function(lang) {
            if (lang !== 'id' && lang !== 'en') lang = 'id';
            
            document.documentElement.setAttribute('data-lang', lang);
            document.documentElement.setAttribute('lang', lang);
            
            try {
                localStorage.setItem('pt_bas_lang', lang);
            } catch (e) {}

            document.querySelectorAll('[data-set-lang]').forEach(function(el) {
                var btnLang = el.getAttribute('data-set-lang');
                if (btnLang === lang) {
                    el.classList.add('lang-active');
                } else {
                    el.classList.remove('lang-active');
                }
            });
        };

        // Initialize immediately
        (function() {
            var initialLang = 'id';
            try {
                initialLang = localStorage.getItem('pt_bas_lang') || 'id';
            } catch (e) {}
            document.documentElement.setAttribute('data-lang', initialLang);
            document.documentElement.setAttribute('lang', initialLang);
        })();

        document.addEventListener('DOMContentLoaded', function() {
            var currentLang = document.documentElement.getAttribute('data-lang') || 'id';
            window.setLanguage(currentLang);
        });
    </script>
    @stack('styles')
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased min-h-screen flex flex-col selection:bg-amber-400 selection:text-slate-950">

    <!-- Main Navigation Header (Clean Corporate Navbar with Slim Topbar) -->
    @include('components.navbar')

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Footer (Corporate Dark Navy) -->
    @include('components.footer')

    <!-- Gallery Lightbox Modal -->
    <div id="gallery-lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/85 backdrop-blur-sm p-4 transition-all duration-300">
        <div class="relative max-w-4xl w-full bg-white rounded-2xl overflow-hidden shadow-2xl border border-slate-200">
            <!-- Close -->
            <button id="lightbox-close" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-red-600 hover:bg-red-700 text-white flex items-center justify-center transition shadow-lg focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <!-- Prev -->
            <button id="lightbox-prev" class="hidden absolute left-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/50 hover:bg-[#FFB800] text-white hover:text-[#061838] flex items-center justify-center transition-all duration-200 shadow-lg focus:outline-none" aria-label="Previous photo">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <!-- Next -->
            <button id="lightbox-next" class="hidden absolute right-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/50 hover:bg-[#FFB800] text-white hover:text-[#061838] flex items-center justify-center transition-all duration-200 shadow-lg focus:outline-none" aria-label="Next photo">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>
            <!-- Counter -->
            <span id="lightbox-counter" class="hidden absolute bottom-20 right-4 z-20 px-3 py-1 rounded-lg text-xs font-bold bg-black/60 text-white pointer-events-none"></span>
            <!-- Image -->
            <div class="max-h-[70vh] overflow-hidden flex items-center justify-center bg-slate-950">
                <img id="lightbox-img" src="" alt="Gallery Preview" class="max-h-[70vh] w-auto object-contain transition-opacity duration-300">
            </div>
            <div class="p-6 bg-white border-t border-slate-100">
                <h3 id="lightbox-title" class="text-lg font-bold text-slate-900 mb-1"></h3>
                <p id="lightbox-desc" class="text-slate-600 text-sm font-medium"></p>
            </div>
        </div>
    </div>


    <!-- Floating Quick Action Buttons (Bottom Right) -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end space-y-3">
        <!-- Help / Contact Button -->
        <a href="{{ route('contact') }}" class="w-13 h-13 bg-white hover:bg-slate-50 text-slate-800 rounded-full shadow-xl border border-slate-200 flex items-center justify-center p-3.5 transition duration-200 transform hover:scale-110 group relative" title="Pusat Informasi & Bantuan">
            <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span class="absolute right-16 bg-slate-900 text-white text-xs font-semibold py-1.5 px-3 rounded-lg shadow-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition pointer-events-none">Bantuan &amp; Kontak</span>
        </a>
    </div>

    @stack('scripts')
</body>
</html>
