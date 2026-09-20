// PT. Bahtera Keselamatan Sentosa - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {
    // 1. Language Toggle (ID / EN)
    const initLanguage = () => {
        const savedLang = localStorage.getItem('pt_bks_lang') || 'id';
        setLanguage(savedLang);

        const langBtns = document.querySelectorAll('.lang-toggle-btn');
        langBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const targetLang = btn.getAttribute('data-set-lang');
                if (targetLang) {
                    setLanguage(targetLang);
                }
            });
        });
    };

    const setLanguage = (lang) => {
        document.documentElement.setAttribute('data-lang', lang);
        localStorage.setItem('pt_bks_lang', lang);

        document.querySelectorAll('.lang-btn-indicator').forEach(el => {
            const btnLang = el.getAttribute('data-lang-val');
            if (btnLang === lang) {
                el.classList.add('bg-amber-500', 'text-slate-950', 'font-bold');
                el.classList.remove('text-slate-300', 'hover:text-amber-400');
            } else {
                el.classList.remove('bg-amber-500', 'text-slate-950', 'font-bold');
                el.classList.add('text-slate-300', 'hover:text-amber-400');
            }
        });
    };

    initLanguage();

    // 2. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    if (mobileMenuClose && mobileMenu) {
        mobileMenuClose.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    }

    // 3. Gallery Lightbox Modal
    const modal = document.getElementById('gallery-lightbox');
    const modalImg = document.getElementById('lightbox-img');
    const modalTitle = document.getElementById('lightbox-title');
    const modalDesc = document.getElementById('lightbox-desc');
    const modalClose = document.getElementById('lightbox-close');

    if (modal) {
        document.querySelectorAll('.gallery-item-trigger').forEach(item => {
            item.addEventListener('click', () => {
                const src = item.getAttribute('data-img-src');
                const title = item.getAttribute('data-img-title') || '';
                const desc = item.getAttribute('data-img-desc') || '';

                if (modalImg) modalImg.src = src;
                if (modalTitle) modalTitle.textContent = title;
                if (modalDesc) modalDesc.textContent = desc;

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        if (modalClose) {
            modalClose.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    }

    // 4. PDF File Upload Handler (For Contact Form)
    const fileInput = document.getElementById('pdf_file');
    const fileDropZone = document.getElementById('pdf_drop_zone');
    const filePreview = document.getElementById('pdf_file_preview');
    const fileNameDisplay = document.getElementById('pdf_file_name');
    const fileSizeDisplay = document.getElementById('pdf_file_size');
    const fileRemoveBtn = document.getElementById('pdf_remove_btn');

    if (fileInput && fileDropZone) {
        ['dragenter', 'dragover'].forEach(eventName => {
            fileDropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                fileDropZone.classList.add('border-amber-400', 'bg-amber-500/10');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            fileDropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
                fileDropZone.classList.remove('border-amber-400', 'bg-amber-500/10');
            }, false);
        });

        fileDropZone.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;
            if (files.length > 0) {
                handleFile(files[0]);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if (fileInput.files.length > 0) {
                handleFile(fileInput.files[0]);
            }
        });

        if (fileRemoveBtn) {
            fileRemoveBtn.addEventListener('click', () => {
                fileInput.value = '';
                if (filePreview) filePreview.classList.add('hidden');
                if (fileDropZone) fileDropZone.classList.remove('hidden');
            });
        }

        function handleFile(file) {
            if (file.type !== 'application/pdf' && !file.name.toLowerCase().endsWith('.pdf')) {
                alert('Hanya file dokumen PDF yang diperbolehkan! / Only PDF files are allowed.');
                fileInput.value = '';
                return;
            }

            if (file.size > 10 * 1024 * 1024) {
                alert('Ukuran file maksimal 10MB! / Maximum file size is 10MB.');
                fileInput.value = '';
                return;
            }

            if (fileNameDisplay) fileNameDisplay.textContent = file.name;
            if (fileSizeDisplay) fileSizeDisplay.textContent = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
            if (filePreview) filePreview.classList.remove('hidden');
            if (fileDropZone) fileDropZone.classList.add('hidden');
        }
    }

    // 5. Scroll Fade-in Animations (IntersectionObserver)
    const fadeObserverOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.12
    };

    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, fadeObserverOptions);

    const animatedElements = document.querySelectorAll('.fade-in-section, .fade-in-left, .fade-in-right, .fade-in-scale');
    animatedElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        // If element is at top of page on initial load (Hero), reveal with smooth intro
        if (rect.top < window.innerHeight * 0.75 && rect.bottom > 0) {
            setTimeout(() => {
                el.classList.add('is-visible');
            }, 120);
        } else {
            fadeObserver.observe(el);
        }
    });
});
