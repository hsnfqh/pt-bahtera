@extends('layouts.app')

@section('title', 'Contact Us & Seafarer Application - PT. BAHTERA KESELAMATAN SENTOSA')

@section('content')

<!-- Top Subpage Header with PT. BKS Logo -->
<x-subpage-banner 
    titleId="Kontak &amp; <span class='text-[#FFB800]'>Pendaftaran Pelaut</span>"
    titleEn="Contact Us &amp; <span class='text-[#FFB800]'>Crew Application</span>"
    subtitleId="Kirim Lamaran Pelaut (Khusus File PDF) atau Konsultasi Kebutuhan Armada Kapal"
    subtitleEn="Submit Seafarer Application (PDF Only) or Inquire for Fleet Crewing Solutions"
    badge="INQUIRY &amp; APPLICATION FORM"
/>

<!-- MAIN CONTACT & APPLICATION SECTION -->
<section class="py-24 lg:py-32 bg-[#F8FAFC] relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Flash Alert if submitted -->
        @if(session('success'))
            <div class="p-6 rounded-3xl bg-emerald-50 border-2 border-emerald-200 shadow-lg flex items-start space-x-4 fade-in-section">
                <div class="w-12 h-12 rounded-2xl bg-emerald-600 flex items-center justify-center text-white flex-shrink-0 mt-0.5 font-black text-xl shadow-md">
                    &check;
                </div>
                <div class="space-y-1.5">
                    <h4 class="text-base font-black text-emerald-900">
                        <span class="lang-id-only">Formulir &amp; Dokumen Berhasil Dikirim!</span>
                        <span class="lang-en-only">Form &amp; Documents Successfully Submitted!</span>
                    </h4>
                    <p class="text-sm text-slate-700 leading-relaxed">
                        <span class="lang-id-only">{{ session('success')['message_id'] }}</span>
                        <span class="lang-en-only">{{ session('success')['message_en'] }}</span>
                    </p>
                    <div class="pt-1 text-xs font-mono text-slate-600">
                        Nomor Referensi Pendaftaran: <strong class="bg-white px-3 py-1 rounded-md border border-emerald-300 text-emerald-800 font-black shadow-2xs">{{ session('success')['ref'] }}</strong>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left: Application Form (EMAIL SECTION IN WIREFRAME) -->
            <div class="lg:col-span-7 space-y-6 fade-in-left">
                
                <div class="p-8 sm:p-10 rounded-3xl bg-white border-2 border-slate-200/80 shadow-xl space-y-6">
                    
                    <div class="space-y-2 pb-4 border-b border-slate-100">
                        <h2 class="text-2xl sm:text-3xl font-black text-[#061838] tracking-tight uppercase">
                            <span class="lang-id-only">Kirim Berkas Lamaran / Pesan</span>
                            <span class="lang-en-only">Submit Application / Inquiry</span>
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            <span class="lang-id-only">Silakan isi formulir di bawah ini dengan lengkap. Lampirkan CV / Dokumen dalam format <strong>PDF</strong> (Maks. 10MB).</span>
                            <span class="lang-en-only">Please fill out the form below. Attach your CV / Seaman Book in <strong>PDF</strong> format (Max 10MB).</span>
                        </p>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf

                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-xs font-black text-[#061838] uppercase tracking-wider mb-1.5">
                                <span class="lang-id-only">Nama Lengkap *</span>
                                <span class="lang-en-only">Full Name *</span>
                            </label>
                            <input type="text" name="name" id="name" required placeholder="Contoh: Muhammad Yusuf / Captain Robert"
                                   class="w-full px-4 py-3.5 rounded-2xl bg-slate-50 border-2 border-slate-200 focus:border-[#FFB800] focus:bg-white text-slate-900 font-semibold text-sm focus:outline-none transition shadow-2xs">
                            @error('name') <span class="text-red-600 text-xs mt-1 block font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-xs font-black text-[#061838] uppercase tracking-wider mb-1.5">
                                <span class="lang-id-only">Alamat Email *</span>
                                <span class="lang-en-only">Email Address *</span>
                            </label>
                            <input type="email" name="email" id="email" required placeholder="email@domain.com"
                                   class="w-full px-4 py-3.5 rounded-2xl bg-slate-50 border-2 border-slate-200 focus:border-[#FFB800] focus:bg-white text-slate-900 font-semibold text-sm focus:outline-none transition shadow-2xs">
                            @error('email') <span class="text-red-600 text-xs mt-1 block font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Contact Number Field -->
                        <div>
                            <label for="phone" class="block text-xs font-black text-[#061838] uppercase tracking-wider mb-1.5">
                                <span class="lang-id-only">Nomor Kontak / WhatsApp *</span>
                                <span class="lang-en-only">Contact Number / WhatsApp *</span>
                            </label>
                            <input type="tel" name="phone" id="phone" required placeholder="+62 812-xxxx-xxxx"
                                   class="w-full px-4 py-3.5 rounded-2xl bg-slate-50 border-2 border-slate-200 focus:border-[#FFB800] focus:bg-white text-slate-900 font-semibold text-sm focus:outline-none transition shadow-2xs">
                            @error('phone') <span class="text-red-600 text-xs mt-1 block font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Category Radio Buttons -->
                        <div>
                            <label class="block text-xs font-black text-[#061838] uppercase tracking-wider mb-1.5">
                                <span class="lang-id-only">Kategori Pelamar / Pemohon *</span>
                                <span class="lang-en-only">Applicant / Inquirer Category *</span>
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <label class="flex items-center space-x-3 p-4 rounded-2xl bg-slate-50 border-2 border-slate-200 hover:border-[#FFB800] cursor-pointer transition">
                                    <input type="radio" name="crew_type" value="Fresh Graduate" checked class="w-4 h-4 text-[#061838] focus:ring-[#FFB800]">
                                    <span class="text-xs font-black text-[#061838]">Fresh Graduate</span>
                                </label>
                                <label class="flex items-center space-x-3 p-4 rounded-2xl bg-slate-50 border-2 border-slate-200 hover:border-[#FFB800] cursor-pointer transition">
                                    <input type="radio" name="crew_type" value="Experienced Crew" class="w-4 h-4 text-[#061838] focus:ring-[#FFB800]">
                                    <span class="text-xs font-black text-[#061838]">Experienced Crew</span>
                                </label>
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div>
                            <label for="address" class="block text-xs font-black text-[#061838] uppercase tracking-wider mb-1.5">
                                <span class="lang-id-only">Alamat Domisili *</span>
                                <span class="lang-en-only">Home Address *</span>
                            </label>
                            <input type="text" name="address" id="address" required placeholder="Kota, Provinsi, Indonesia"
                                   class="w-full px-4 py-3.5 rounded-2xl bg-slate-50 border-2 border-slate-200 focus:border-[#FFB800] focus:bg-white text-slate-900 font-semibold text-sm focus:outline-none transition shadow-2xs">
                            @error('address') <span class="text-red-600 text-xs mt-1 block font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-xs font-black text-[#061838] uppercase tracking-wider mb-1.5">
                                <span class="lang-id-only">Pesan / Rincian Pengalaman Kerja</span>
                                <span class="lang-en-only">Message / Work Experience</span>
                            </label>
                            <textarea name="message" id="message" rows="3" placeholder="Tuliskan posisi yang diminati atau rincian pertanyaan Anda..."
                                      class="w-full px-4 py-3.5 rounded-2xl bg-slate-50 border-2 border-slate-200 focus:border-[#FFB800] focus:bg-white text-slate-900 font-semibold text-sm focus:outline-none transition shadow-2xs"></textarea>
                            @error('message') <span class="text-red-600 text-xs mt-1 block font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- Dedicated PDF Upload Menu ("Ditambah menu upload file khusus PDF") -->
                        <div class="pt-2">
                            <div class="flex items-center justify-between mb-1.5">
                                <label class="block text-xs font-black uppercase tracking-wider text-[#061838] flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-[#FFB800]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                                    <span class="lang-id-only">Upload Dokumen (Khusus File PDF)</span>
                                    <span class="lang-en-only">Upload Documents (PDF Files Only)</span>
                                </label>
                                <span class="px-2.5 py-0.5 rounded-md text-[10px] font-black bg-[#061838] text-[#FFB800]">
                                    Max 10 MB (.PDF)
                                </span>
                            </div>

                            <!-- Drop Zone -->
                            <div id="pdf_drop_zone" class="relative border-2 border-dashed border-slate-300 hover:border-[#FFB800] rounded-3xl p-6 text-center bg-slate-50 hover:bg-[#FFB800]/5 transition cursor-pointer">
                                <input type="file" name="pdf_file" id="pdf_file" accept=".pdf,application/pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <div class="space-y-2">
                                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#061838] text-[#FFB800] flex items-center justify-center font-black text-sm shadow-md">
                                        PDF
                                    </div>
                                    <p class="text-xs sm:text-sm text-slate-800 font-bold">
                                        <span class="lang-id-only">Tarik &amp; Lepas file PDF di sini atau <span class="text-[#061838] underline decoration-[#FFB800] decoration-2">Klik untuk Pilih File</span></span>
                                        <span class="lang-en-only">Drag &amp; drop your PDF file here or <span class="text-[#061838] underline decoration-[#FFB800] decoration-2">Browse File</span></span>
                                    </p>
                                    <p class="text-[11px] text-slate-500">
                                        Format berkas yang diterima: CV / Resume, Buku Pelaut, Paspor, atau Sertifikat STCW (Format .PDF)
                                    </p>
                                </div>
                            </div>

                            <!-- File Selected Preview -->
                            <div id="pdf_file_preview" class="hidden mt-3 p-4 rounded-2xl bg-emerald-50 border-2 border-emerald-200 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span class="px-2.5 py-1 rounded-lg bg-[#061838] text-[#FFB800] font-black text-xs">PDF</span>
                                    <div>
                                        <span id="pdf_file_name" class="text-xs font-black text-slate-900 block truncate max-w-xs"></span>
                                        <span id="pdf_file_size" class="text-[10px] text-slate-500 font-bold"></span>
                                    </div>
                                </div>
                                <button type="button" id="pdf_remove_btn" class="px-3 py-1.5 rounded-xl bg-red-600 hover:bg-red-700 text-white text-xs font-black transition shadow-sm">
                                    Hapus
                                </button>
                            </div>

                            @error('pdf_file') <span class="text-red-600 text-xs mt-1 block font-bold">{{ $message }}</span> @enderror
                        </div>

                        <!-- SUBMIT Button -->
                        <div class="pt-3">
                            <button type="submit" class="w-full py-4 rounded-2xl text-xs sm:text-sm font-black uppercase tracking-wider bg-[#FFB800] hover:bg-[#FFD700] text-[#061838] shadow-xl transition duration-200 transform hover:-translate-y-0.5">
                                <span class="lang-id-only">Kirim Formulir &amp; Berkas PDF &rarr;</span>
                                <span class="lang-en-only">Submit Application &amp; PDF File &rarr;</span>
                            </button>
                        </div>

                    </form>

                </div>

            </div>

            <!-- Right: Office Address & Google Map (ALAMAT SECTION IN WIREFRAME) -->
            <div class="lg:col-span-5 space-y-6 fade-in-right">
                
                <!-- Office Card -->
                <div class="p-8 rounded-3xl bg-white border-2 border-slate-200/80 shadow-xl space-y-6">
                    
                    <div class="space-y-1.5 pb-3 border-b border-slate-100">
                        <h3 class="text-lg sm:text-xl font-black text-[#061838] leading-snug">
                            PT. BAHTERA KESELAMATAN SENTOSA
                        </h3>
                    </div>

                    <div class="space-y-4 text-xs sm:text-sm text-slate-600">
                        <div class="flex items-start space-x-3.5 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="w-9 h-9 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center flex-shrink-0 font-bold">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <strong class="text-[#061838] block font-black text-xs uppercase tracking-wide">Alamat Kantor Pusat:</strong>
                                <p class="text-slate-600 text-xs mt-0.5 leading-relaxed font-medium">
                                    Jl. Telaga Citra / Perum Telaga Murni, Kec. Cikarang Barat, Kab. Bekasi, Jawa Barat 17530 - Indonesia
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3.5 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="w-9 h-9 rounded-xl bg-[#FFB800] text-[#061838] flex items-center justify-center flex-shrink-0 font-bold">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[11px] font-bold uppercase">Telepon / WhatsApp:</span>
                                <strong class="text-[#061838] text-xs sm:text-sm font-black">+62 (021) 8900-1234 / +62 812-3456-7890</strong>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3.5 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="w-9 h-9 rounded-xl bg-[#061838] text-[#FFB800] flex items-center justify-center flex-shrink-0 font-bold">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[11px] font-bold uppercase">Email Resmi:</span>
                                <a href="mailto:info@bahterakeselamatan.co.id" class="text-[#061838] text-xs sm:text-sm font-black hover:text-[#FFB800] transition">info@bahterakeselamatan.co.id</a>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3.5 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="w-9 h-9 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 font-bold">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[11px] font-bold uppercase">Jam Operasional:</span>
                                <strong class="text-[#061838] text-xs font-black">Senin &ndash; Jumat: 08:30 &ndash; 17:00 WIB</strong>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Google Maps Card -->
                <div class="p-6 sm:p-8 rounded-3xl bg-white border-2 border-slate-200/80 shadow-xl space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-black text-[#061838] uppercase tracking-wide">
                            Peta Lokasi Kantor
                        </span>
                        <a href="https://maps.google.com/?q=Perum+Telaga+Murni+Cikarang+Barat" target="_blank" class="text-xs text-[#061838] font-black hover:text-[#FFB800] transition">
                            Buka di Google Maps &rarr;
                        </a>
                    </div>

                    <!-- Interactive Google Map Embed -->
                    <div class="w-full h-64 rounded-2xl overflow-hidden border-2 border-slate-200 shadow-inner">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.636608579625!2d107.1000!3d-6.2625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698544c4c9258b%3A0xb3ff76c4db618e95!2sTelaga%20Murni%2C%20Cikarang%20Barat%2C%20Bekasi%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full">
                        </iframe>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
