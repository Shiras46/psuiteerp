@extends('layouts.app')

@section('title', 'PSuite ERP | Enterprise Business Management Software')
@section('meta_description', 'PSuite ERP provides an intelligent business ecosystem for Travel, Finance, CRM, HR, and Inventory. Transform your operations today.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        body {
            background-color: var(--home-bg-white);
        }
    </style>
@endpush

@section('content')


    @include('pages.partials.home.hero')

    @include('pages.partials.home.industry_solutions')

    @include('pages.partials.home.trust_metrics')

    @include('pages.partials.home.integrations')

    @include('pages.partials.home.why')

    @include('pages.partials.home.tech')

    @include('pages.partials.home.cta')

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const swiper = new Swiper('.home-hero-swiper', {
                loop: true,
                parallax: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            gsap.registerPlugin(ScrollTrigger);

            // 1. Basic Fade Ups
            const fadeElements = document.querySelectorAll('.gsap-fade-up');
            fadeElements.forEach((el) => {
                gsap.fromTo(el,
                    { y: 50, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power3.out",
                        scrollTrigger: {
                            trigger: el,
                            start: "top 85%",
                            toggleActions: "play none none none"
                        }
                    }
                );
            });

            // 2. Command Center Floating Animations
            gsap.to('.cmd-glass-1', { y: -20, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1 });
            gsap.to('.cmd-glass-2', { y: 20, duration: 5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 1 });
            gsap.to('.cmd-glass-3', { y: -15, duration: 4.5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.5 });
            gsap.to('.cmd-glass-4', { y: 15, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 1.5 });

            gsap.to('.hbi-c-1', { y: -15, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1 });
            gsap.to('.hbi-c-2', { y: 15, duration: 5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 1 });

            // 3. HORIZONTAL SCROLL STORYTELLING (7 LEVEL MODEL EFFECT)
            const hzWrapper = document.querySelector('#hz-solutions');
            const hzContainer = document.querySelector('.hsh-scroll-track');
            const cards = gsap.utils.toArray('.hsh-card');

            if (hzWrapper && hzContainer && cards.length) {
                let mm = gsap.matchMedia();
                mm.add("(min-width: 769px)", () => {
                    const navHeight = () => parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--home-nav-height')) || 0;
                    const getScrollDistance = () => Math.max(0, hzContainer.scrollWidth - window.innerWidth);
                    const getScrollAmount = () => -getScrollDistance();

                    const scrollTween = gsap.to(hzContainer, {
                        x: getScrollAmount,
                        ease: "none",
                        scrollTrigger: {
                            trigger: hzWrapper,
                            pin: ".hsh-scroll-container",
                            start: () => `top top+=${navHeight()}`,
                            end: () => `+=${getScrollDistance()}`,
                            scrub: 0.45,
                            snap: {
                                snapTo: 1 / (cards.length - 1),
                                duration: { min: 0.08, max: 0.22 },
                                delay: 0.04,
                                ease: "power1.out"
                            },
                            invalidateOnRefresh: true
                        }
                    });

                    cards.forEach((card, index) => {
                        const title = card.querySelector('h3');
                        const bgWord = card.querySelector('.hsh-bg-word');
                        const image = card.querySelector('.hsh-visual');
                        const content = card.querySelector('.hsh-content');

                        gsap.fromTo(title,
                            { x: 260 },
                            {
                                x: -260,
                                ease: "none",
                                scrollTrigger: {
                                    trigger: card,
                                    containerAnimation: scrollTween,
                                    start: "left right",
                                    end: "right left",
                                    scrub: 1,
                                    invalidateOnRefresh: true
                                }
                            }
                        );

                        gsap.fromTo(bgWord,
                            { xPercent: -7 },
                            {
                                xPercent: 7,
                                ease: "none",
                                scrollTrigger: {
                                    trigger: card,
                                    containerAnimation: scrollTween,
                                    start: "left right",
                                    end: "right left",
                                    scrub: 1
                                }
                            }
                        );

                        gsap.fromTo(image,
                            { y: 70, rotate: -2, scale: 0.94 },
                            {
                                y: -30,
                                rotate: 2,
                                scale: 1,
                                ease: "none",
                                scrollTrigger: {
                                    trigger: card,
                                    containerAnimation: scrollTween,
                                    start: "left right",
                                    end: "right left",
                                    scrub: 1
                                }
                            }
                        );

                        gsap.fromTo(content,
                            { opacity: 0.35, y: 45 },
                            {
                                opacity: 1,
                                y: 0,
                                ease: "power2.out",
                                scrollTrigger: {
                                    trigger: card,
                                    containerAnimation: scrollTween,
                                    start: "left 70%",
                                    end: "left 35%",
                                    scrub: 1
                                }
                            }
                        );
                    });
                });
            }

            // 4.5 Why PSuite Grid Animation
            if (document.querySelector('.home-why')) {
                let whyTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '.home-why',
                        start: 'top 75%',
                        once: true
                    }
                });
                whyTl.fromTo('.home-why .gsap-why-anim > *',
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, stagger: 0.15, ease: "power2.out" }
                )
                    .fromTo('.home-why .gsap-why-card',
                        { opacity: 0, y: 40 },
                        { opacity: 1, y: 0, duration: 0.7, stagger: 0.1, ease: "power3.out" },
                        "-=0.4"
                    );
            }

            // Ensure perfect calculations after all assets load
            window.addEventListener("load", () => {
                ScrollTrigger.refresh();
            });

            // 5. Tech Stack Grid Animation
            if (document.querySelector('.home-tech')) {
                let techTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '.home-tech',
                        start: 'top 75%',
                        once: true
                    }
                });
                techTl.fromTo('.home-tech .gsap-tech-anim > *',
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, stagger: 0.15, ease: "power2.out" }
                )
                    .fromTo('.home-tech .gsap-tech-card',
                        { opacity: 0, y: 30, scale: 0.95 },
                        { opacity: 1, y: 0, scale: 1, duration: 0.6, stagger: 0.05, ease: "back.out(1.2)" },
                        "-=0.4"
                    );
            }

            // 6. Premium Apple Minimal Trust Section Animations
            const trustSection = document.querySelector('.home-trust-minimal');
            if (trustSection) {
                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: trustSection,
                        start: "top 75%",
                    }
                });

                // Reveal label
                tl.fromTo('.htm-label',
                    { y: 30, opacity: 0 },
                    { y: 0, opacity: 1, duration: 0.8, ease: "power3.out" }
                );

                // Reveal entire title from bottom mask
                tl.fromTo('.htm-title',
                    { yPercent: 110 },
                    { yPercent: 0, duration: 1.2, ease: "power4.out" },
                    "-=0.5"
                );

                // Stagger reveal numbers
                tl.fromTo('.htm-val',
                    { yPercent: 110 },
                    { yPercent: 0, duration: 1, stagger: 0.1, ease: "power4.out" },
                    "-=0.7"
                );

                // Stagger reveal stat labels
                tl.fromTo('.htm-lbl',
                    { yPercent: 110, opacity: 0 },
                    { yPercent: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out" },
                    "-=0.8"
                );
            }

            // 7. Trust Metrics Counter Animation
            const counters = document.querySelectorAll('.tm-val');
            if (counters.length) {
                counters.forEach(counter => {
                    let target = parseFloat(counter.getAttribute('data-target'));
                    let suffix = counter.getAttribute('data-suffix') || '';
                    let decimals = counter.getAttribute('data-decimals') ? parseInt(counter.getAttribute('data-decimals')) : 0;

                    if (target) {
                        gsap.to(counter, {
                            scrollTrigger: {
                                trigger: counter,
                                start: "top 90%",
                                once: true
                            },
                            innerHTML: target,
                            duration: 2.5,
                            ease: "power3.out",
                            snap: { innerHTML: Math.pow(10, -decimals) },
                            onUpdate: function () {
                                let current = parseFloat(this.targets()[0].innerHTML).toFixed(decimals);
                                this.targets()[0].innerHTML = current + suffix;
                            }
                        });
                    }
                });
            }

            // 7.5 Business Intelligence Stagger Animation
            if (document.querySelector('.home-bi')) {
                let biTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '.home-bi',
                        start: 'top 75%',
                        once: true
                    }
                });
                biTl.fromTo('.home-bi .gsap-bi-anim',
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, stagger: 0.15, ease: "power2.out" }
                )
                    .fromTo('.home-bi .gsap-bi-kpi',
                        { opacity: 0, scale: 0.9 },
                        { opacity: 1, scale: 1, duration: 0.6, stagger: 0.15, ease: "back.out(1.2)" },
                        "-=0.4"
                    )
                    .fromTo('.home-bi .gsap-bi-stats .hbi-impact-card',
                        { opacity: 0, y: 20 },
                        { opacity: 1, y: 0, duration: 0.6, stagger: 0.1, ease: "power2.out" },
                        "-=0.2"
                    );
            }

            // 8. Horizontal Scroll KPI Animation (Intersection Observer)
            const hsCounters = document.querySelectorAll('.hsh-count');
            if (hsCounters.length && window.IntersectionObserver) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            let counter = entry.target;
                            let target = parseFloat(counter.getAttribute('data-target'));
                            let suffix = counter.getAttribute('data-suffix') || '';
                            let prefix = counter.getAttribute('data-prefix') || '';
                            let decimals = counter.getAttribute('data-decimals') ? parseInt(counter.getAttribute('data-decimals')) : 0;

                            if (target && !counter.classList.contains('animated')) {
                                counter.classList.add('animated');
                                gsap.to(counter, {
                                    innerHTML: target,
                                    duration: 2,
                                    ease: "power3.out",
                                    snap: { innerHTML: Math.pow(10, -decimals) },
                                    onUpdate: function () {
                                        let current = parseFloat(this.targets()[0].innerHTML).toFixed(decimals);
                                        this.targets()[0].innerHTML = prefix + current + suffix;
                                    }
                                });
                            }
                        }
                    });
                }, { threshold: 0.5 });

                hsCounters.forEach(c => observer.observe(c));
            }

            const hsCards = document.querySelectorAll('.hsh-card-inner');
            if (hsCards.length && window.IntersectionObserver) {
                const cardObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                            entry.target.classList.add('animated');

                            // Monitor moves up & fades in
                            gsap.fromTo(entry.target.querySelector('.hsh-visual img'),
                                { y: 15, opacity: 0 },
                                { y: 0, opacity: 1, duration: 1, ease: "power3.out" }
                            );

                            // KPI cards animate
                            gsap.fromTo(entry.target.querySelectorAll('.hsh-m-item'),
                                { y: 30, opacity: 0 },
                                { y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "power3.out", delay: 0.3 }
                            );
                        }
                    });
                }, { threshold: 0.4 });
                hsCards.forEach(c => cardObserver.observe(c));
            }
        });
    </script>
@endpush
