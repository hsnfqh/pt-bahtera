<!DOCTYPE html>
<html lang="id" data-lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'PT. BAHTERA ANUGERAH SENTOSA - Professional Crewing & Manning Services')</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="PT. BAHTERA ANUGERAH SENTOSA - Professional Crewing & Manning Services with SIUKAK No. 58.58-R/2024 & SIUPPAK No. 65.21/2016. Your trusted international maritime partner.">
    <meta name="keywords" content="PT Bahtera Anugerah Sentosa, Crewing Agency Indonesia, Manning Agency, Pelaut Indonesia, SIUKAK, SIUPPAK, Fishing Trawler Crew, Seafarers">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo-emblem.svg') }}">

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
    </style>
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
            <button id="lightbox-close" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-red-600 hover:bg-red-700 text-white flex items-center justify-center transition shadow-lg focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="max-h-[70vh] overflow-hidden flex items-center justify-center bg-slate-950">
                <img id="lightbox-img" src="" alt="Gallery Preview" class="max-h-[70vh] w-auto object-contain">
            </div>
            <div class="p-6 bg-white border-t border-slate-100">
                <h3 id="lightbox-title" class="text-lg font-bold text-slate-900 mb-1"></h3>
                <p id="lightbox-desc" class="text-slate-600 text-sm font-medium"></p>
            </div>
        </div>
    </div>

    <!-- Floating Quick Action Buttons (Bottom Right) -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end space-y-3">
        <!-- WhatsApp Chat Button -->
        <a href="https://wa.me/6280000000000?text=Halo%20PT.%20Bahtera%20Anugerah%20Sentosa,%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20crewing." target="_blank" class="w-13 h-13 bg-emerald-600 hover:bg-emerald-700 text-white rounded-full shadow-xl flex items-center justify-center p-3.5 transition duration-200 transform hover:scale-110 group relative" title="Hubungi Kami via WhatsApp">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            <span class="absolute right-16 bg-slate-900 text-white text-xs font-semibold py-1.5 px-3 rounded-lg shadow-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition pointer-events-none">Konsultasi WhatsApp</span>
        </a>

        <!-- Help / Contact Button -->
        <a href="{{ route('contact') }}" class="w-13 h-13 bg-white hover:bg-slate-50 text-slate-800 rounded-full shadow-xl border border-slate-200 flex items-center justify-center p-3.5 transition duration-200 transform hover:scale-110 group relative" title="Pusat Informasi & Bantuan">
            <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span class="absolute right-16 bg-slate-900 text-white text-xs font-semibold py-1.5 px-3 rounded-lg shadow-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition pointer-events-none">Bantuan &amp; Kontak</span>
        </a>
    </div>

</body>
</html>
