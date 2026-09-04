@extends('layouts.app')

@section('title', 'Our Solutions - PSuite ERP')

@section('content')
<style>
    .solutions-premium-hero {
        position: relative;
        min-height: 80vh;
        display: flex;
        align-items: center;
        background-color: #0f172a;
        background-image: url('{{ asset("images/hero_graphic.png") }}');
        background-size: cover;
        background-position: center;
        overflow: hidden;
        color: #ffffff;
        margin-top: -100px; /* To pull it up behind the transparent header if needed */
        padding-top: 100px;
    }
    
    .solutions-hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }
    
    .relative-z {
        position: relative;
        z-index: 2;
    }

    .solutions-hero-content {
        max-width: 800px;
        padding: 5rem 0;
    }

    .pill-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 20px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 2rem;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    
    .pill-tag-icon {
        width: 18px;
        height: 18px;
        color: #1ab2a6;
    }

    .solutions-hero-content h1 {
        font-size: 4.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #ffffff;
        letter-spacing: -0.02em;
    }

    .solutions-hero-content h1 .accent-text {
        color: #1ab2a6;
    }

    .solutions-hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 0;
    }
    
    @media (max-width: 768px) {
        .solutions-hero-content h1 { font-size: 3rem; }
        .solutions-hero-overlay { background: rgba(15, 23, 42, 0.85); }
        .solutions-hero-content { padding: 3rem 0; }
    }
</style>

<section class="solutions-premium-hero">
    <div class="solutions-hero-overlay"></div>
    <div class="container relative-z">
        <div class="solutions-hero-content gsap-fade-up">
            <div class="pill-tag">
                <svg class="pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                </svg>
                ENTERPRISE. SCALABLE. POWERFUL.
            </div>
            <h1>Tailored For Your<br><span class="accent-text">Industry.</span></h1>
            <p>Comprehensive modules designed to optimize every facet of your business operations with premium features and powerful integrations.</p>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container">
        @php
        $serviceImages = [
            'travel-tourism'                   => 'images/mockups/services/traveld.webp',
            'car-rental'                        => 'images/mockups/services/rentd.webp',
            'inventory-management'              => 'images/mockups/services/inventoryd.webp',
            'human-resource-management'         => 'images/mockups/services/hrd.webp',
            'finance-accounting'                => 'images/mockups/services/financed.webp',
            'customer-relationship-management'  => 'images/mockups/services/crmd.webp',
            'workshop-management'               => 'images/mockups/services/workshopd.webp',
            'fleet'                             => 'images/mockups/services/fleetd.webp',
        ];
        @endphp
        <div class="premium-grid gsap-stagger-parent">
            @foreach($solutions as $solution)
            @php $mockupImg = $serviceImages[$solution->slug] ?? null; @endphp
            <a href="{{ route('solutions.show', $solution->slug) }}" class="premium-card gsap-fade-up">
                <div class="premium-card-image">
                    @if($mockupImg)
                        <img
                            src="{{ asset($mockupImg) }}"
                            alt="{{ $solution->title }} Dashboard"
                            class="premium-card-mockup"
                            loading="lazy"
                        >
                    @else
                        <div class="premium-card-icon-floating">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"></path>
                            </svg>
                        </div>
                    @endif
                </div>
                <div class="premium-card-content">
                    <h3>{{ $solution->title }}</h3>
                    <p>{{ Str::limit($solution->description, 120) }}</p>
                </div>
            </a>
            @endforeach
            @if($solutions->isEmpty())
                <p>No solutions available.</p>
            @endif
        </div>
    </div>
</section>

<script>
window.addEventListener('load', () => {
    if(typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        const fadeUps = document.querySelectorAll('.gsap-fade-up');
        fadeUps.forEach(el => {
            gsap.fromTo(el, 
                { opacity: 0, y: 30 },
                {
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%',
                    },
                    opacity: 1, y: 0, duration: 0.8, ease: 'power3.out', stagger: 0.1
                }
            );
        });
    }
});
</script>
@endsection
