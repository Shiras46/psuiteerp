<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PSuite ERP - Modern Enterprise Solutions')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/webp">
    <link rel="shortcut icon" href="{{ asset('images/logo.webp') }}" type="image/webp">

    <!-- SEO Optimization -->
    <meta name="description"
        content="@yield('meta_description', 'PSuite ERP provides modern, scalable, and secure enterprise resource planning solutions.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'ERP, enterprise resource planning, SaaS, business automation')">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('canonical_url', url()->current())">
    <meta property="og:title" content="@yield('title', 'PSuite ERP - Modern Enterprise Solutions')">
    <meta property="og:description"
        content="@yield('meta_description', 'PSuite ERP provides modern, scalable, and secure enterprise resource planning solutions.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('canonical_url', url()->current())">
    <meta property="twitter:title" content="@yield('title', 'PSuite ERP - Modern Enterprise Solutions')">
    <meta property="twitter:description"
        content="@yield('meta_description', 'PSuite ERP provides modern, scalable, and secure enterprise resource planning solutions.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/og-default.png'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Vite Styles/Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <style>
        /* Base GSAP Hidden State for items we want to animate */
        .gsap-reveal {
            opacity: 0;
            transform: translateY(30px);
        }

        @media (min-width: 769px) {
            .footer-grid {
                grid-template-columns: 2fr 1fr 1fr !important;
            }
        }
    </style>

    <!-- Schema Markup Injection -->
    @yield('schema_markup')
</head>

<body>

    <header class="site-header @yield('header_class')">
        <div class="container header-container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.webp') }}" alt="PSuite ERP" class="header-logo-img">
                </a>
            </div>
            <nav class="nav-menu">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <div class="nav-item-dropdown" style="display: none !important;">
                    <a href="{{ route('solutions.index') }}"
                        class="nav-link {{ request()->routeIs('solutions.*') ? 'active' : '' }}"
                        style="display: flex; align-items: center; gap: 4px;">
                        Solutions
                        <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div class="nav-dropdown-content">
                        @foreach($headerSolutions as $solution)
                            <a href="{{ route('solutions.show', $solution->slug) }}"
                                class="dropdown-item {{ request()->is('solutions/' . $solution->slug) ? 'active' : '' }}">
                                <span class="radio-circle"></span>
                                {{ $solution->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('clients') }}"
                    class="nav-link {{ request()->routeIs('clients') ? 'active' : '' }}">Clients</a>
                <a href="{{ route('contact') }}"
                    class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="https://www.psuiteerp.com/login" class="btn"
                    style="background-color: #4dd0e1; color: white; border-color: #4dd0e1; margin-left: auto;">Login</a>
                <a href="{{ route('book-demo') }}" class="btn btn-primary"
                    style="margin-left: 1rem; background-color: #4dd0e1; border-color: #4dd0e1; color: white;">Book
                    Demo</a>
            </nav>

            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle mobile menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

            <div class="mobile-dropdown" id="mobileDropdown">
                <div class="md-inner">
                    <a href="{{ route('home') }}"
                        class="md-link {{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                    <a href="{{ route('solutions.index') }}"
                        class="md-link {{ request()->routeIs('solutions.*') ? 'active' : '' }}"
                        style="display: none !important;">SOLUTIONS</a>
                    <a href="{{ route('clients') }}"
                        class="md-link {{ request()->routeIs('clients') ? 'active' : '' }}">CLIENTS</a>
                    <a href="{{ route('contact') }}"
                        class="md-link {{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
                    <a href="https://www.psuiteerp.com/login" class="md-link md-btn"
                        style="background-color: #4dd0e1; color: white; border: none; margin-top: 0.5rem;">LOGIN</a>
                    <a href="{{ route('book-demo') }}" class="md-link md-btn"
                        style="background-color: #4dd0e1; color: white; border: none;">BOOK DEMO</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="{{ asset('images/logo.webp') }}" alt="PSuite ERP"
                        style="height: 80px; width: auto; margin-bottom: 1rem; display: block;">
                    <p>Building for founders whose work already speaks. Modern, enterprise-grade cloud systems designed
                        to scale seamlessly.</p>
                </div>
                <div class="footer-col" style="display: none !important;">
                    <h3>Solutions</h3>
                    <a href="{{ route('solutions.show', 'travel-tourism') }}">Travel & Tourism BO</a>
                    <a href="{{ route('solutions.show', 'car-rental') }}">Fleet & Rent A Car Management</a>
                    <a href="{{ route('solutions.show', 'inventory-management') }}">Inventory Management</a>
                    <a href="{{ route('solutions.show', 'workshop-management') }}">Workshop Management</a>
                    <a href="{{ route('solutions.show', 'human-resource-management') }}">HR & Payroll Management</a>
                    <a href="{{ route('solutions.show', 'finance-accounting') }}">Finance & Accounting Management</a>
                    <a href="{{ route('solutions.show', 'customer-relationship-management') }}">CRM</a>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('solutions.index') }}" style="display: none !important;">All Solutions</a>
                    <a href="{{ route('clients') }}">Clients</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                    <a href="https://www.psuiteerp.com/login"
                        style="display: inline-block; background-color: #4dd0e1; color: white; padding: 8px 24px; border-radius: 30px; font-weight: 600; margin-top: 10px; width: fit-content;">Login</a>
                </div>
                <div class="footer-col">
                    <h3>Global Hub</h3>
                    <p>Premeir Business Investment LLC<br>Building 586, Opposite Centara Hotel<br>Ghala Heights ,
                        Muscat, Sultante of Oman<br><br>sales@premier-techs.com<br>00968 99107588</p>
                </div>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} PSuite ERP. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- GSAP & Lenis Smooth Scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>

    <script>
        // Initialize Lenis
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1,
            touchMultiplier: 2,
            infinite: false,
        });

        lenis.on('scroll', ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        gsap.ticker.lagSmoothing(0);

        // Initialize GSAP ScrollTrigger reveals
        gsap.registerPlugin(ScrollTrigger);

        document.addEventListener('DOMContentLoaded', () => {
            // Header scroll hide/show logic
            const siteHeader = document.querySelector('.site-header');
            if (siteHeader) {
                const toggleHeader = () => {
                    if (window.scrollY > 150) {
                        siteHeader.classList.add('header-scrolled');
                    } else {
                        siteHeader.classList.remove('header-scrolled');
                    }
                };

                window.addEventListener('scroll', toggleHeader);
                // Also hook into Lenis if available
                if (typeof lenis !== 'undefined') {
                    lenis.on('scroll', toggleHeader);
                }

                // Initial check
                toggleHeader();
            }

            // GSAP Reveal animations for columns and cards
            const reveals = document.querySelectorAll('.gsap-reveal');
            reveals.forEach((element) => {
                gsap.fromTo(element,
                    { opacity: 0, y: 30 },
                    {
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 90%',
                            toggleActions: 'play none none none'
                        },
                        opacity: 1,
                        y: 0,
                        duration: 1.0,
                        ease: 'power4.out'
                    }
                );
            });

            // Specific stagger animations
            const staggers = document.querySelectorAll('.gsap-stagger-parent');
            staggers.forEach((parent) => {
                const children = parent.children;
                gsap.fromTo(children,
                    { opacity: 0, y: 30 },
                    {
                        scrollTrigger: {
                            trigger: parent,
                            start: 'top 85%',
                        },
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        stagger: 0.15,
                        ease: 'power3.out'
                    }
                );
            });

            // Card glow effect on mouse move
            document.querySelectorAll('.solution-card, .feature-card, .premium-card, .glass-card').forEach(card => {
                card.addEventListener('mousemove', e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });

            // Counter Animation
            const counters = document.querySelectorAll('.counter-anim');
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const duration = 2; // seconds

                gsap.to(counter, {
                    scrollTrigger: {
                        trigger: counter,
                        start: 'top 90%',
                    },
                    innerHTML: target,
                    duration: duration,
                    snap: { innerHTML: target % 1 === 0 ? 1 : 0.1 },
                    ease: "power2.out",
                    onUpdate: function () {
                        if (target % 1 !== 0) {
                            counter.innerHTML = Number(this.targets()[0].innerHTML).toFixed(1);
                        }
                    }
                });
            });

            // Parallax Images
            gsap.utils.toArray('.parallax-img').forEach(img => {
                gsap.to(img, {
                    yPercent: 20,
                    ease: "none",
                    scrollTrigger: {
                        trigger: img.parentElement,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    }
                });
            });

            // Sticky Product Showcase (Pinning)
            const stickyContainer = document.querySelector('.sticky-showcase-container');
            if (stickyContainer) {
                const panels = gsap.utils.toArray('.sticky-panel');
                const images = gsap.utils.toArray('.sticky-image');

                // Pin the right side images
                ScrollTrigger.create({
                    trigger: stickyContainer,
                    start: "top 100px",
                    end: "bottom bottom",
                    pin: ".sticky-right",
                });

                // Fade images based on active panel
                panels.forEach((panel, i) => {
                    ScrollTrigger.create({
                        trigger: panel,
                        start: "top center",
                        end: "bottom center",
                        onEnter: () => activateImage(i),
                        onEnterBack: () => activateImage(i)
                    });
                });

                function activateImage(index) {
                    images.forEach((img, i) => {
                        if (i === index) {
                            gsap.to(img, { opacity: 1, duration: 0.5, zIndex: 2 });
                        } else {
                            gsap.to(img, { opacity: 0, duration: 0.5, zIndex: 1 });
                        }
                    });
                }
            }

            // Magnetic Buttons
            const magneticBtns = document.querySelectorAll('.magnetic-btn');
            magneticBtns.forEach(btn => {
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    gsap.to(btn, {
                        x: x * 0.3,
                        y: y * 0.3,
                        duration: 0.4,
                        ease: "power2.out"
                    });
                });

                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        x: 0,
                        y: 0,
                        duration: 0.7,
                        ease: "elastic.out(1, 0.3)"
                    });
                });
            });
            // Interactive Scroll Timeline Component
            const timelineContainer = document.querySelector('.scroll-timeline-container');
            if (timelineContainer) {
                const rows = gsap.utils.toArray('.timeline-row');
                const circleProgress = document.querySelector('.progress-ring__circle');
                const currentStepEl = document.querySelector('.current-step');
                const circleTitleEl = document.querySelector('.circle-title');

                const circumference = 2 * Math.PI * 140; // 879.64
                circleProgress.style.strokeDashoffset = circumference; // init

                rows.forEach((row, i) => {
                    // Click to scroll feature
                    const header = row.querySelector('.tr-header');
                    if (header) {
                        header.addEventListener('click', () => {
                            // Scroll row to the active zone (-30vh roughly centers it based on top 65% trigger)
                            lenis.scrollTo(row, { offset: -window.innerHeight * 0.3, duration: 1.2 });
                        });
                    }

                    ScrollTrigger.create({
                        trigger: row,
                        start: "top 65%",
                        end: "bottom 35%",
                        onToggle: self => {
                            if (self.isActive) {
                                // Deactivate all
                                rows.forEach(r => {
                                    if (r !== row) {
                                        r.classList.remove('active');
                                        gsap.to(r.querySelector('.tr-content-card'), { height: 0, duration: 0.4, ease: "power2.inOut" });
                                    }
                                });
                                // Activate current
                                row.classList.add('active');
                                const card = row.querySelector('.tr-content-card');
                                const cardInner = row.querySelector('.tr-card-inner');
                                const mt = parseFloat(window.getComputedStyle(cardInner).marginTop) || 0;
                                const totalHeight = cardInner.offsetHeight + mt;
                                gsap.to(card, { height: totalHeight, duration: 0.6, ease: "power3.out" });

                                // Update Circle Text with premium fade
                                const index = row.getAttribute('data-index');
                                const title = row.getAttribute('data-title');
                                currentStepEl.innerText = index;

                                gsap.to(circleTitleEl, {
                                    opacity: 0,
                                    y: -10,
                                    duration: 0.2,
                                    onComplete: () => {
                                        circleTitleEl.innerText = title;
                                        gsap.to(circleTitleEl, { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" });
                                    }
                                });
                            }
                        }
                    });
                });

                // Overall progress for the circle mapped flawlessly
                gsap.to(circleProgress, {
                    strokeDashoffset: 0,
                    ease: "none",
                    scrollTrigger: {
                        trigger: '.scroll-timeline-items',
                        start: "top 50%",
                        end: "bottom 50%",
                        scrub: 1 // Buttery smooth lag
                    }
                });
            }

            // Mobile Menu Toggle
            const mobileBtn = document.getElementById('mobileMenuBtn');
            const mobileDropdown = document.getElementById('mobileDropdown');
            if (mobileBtn && mobileDropdown) {
                mobileBtn.addEventListener('click', () => {
                    mobileDropdown.classList.toggle('active');
                });
            }
        });
    </script>
    @stack('scripts')
</body>

</html>