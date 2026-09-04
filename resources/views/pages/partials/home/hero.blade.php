<!-- SECTION 01: NEXT GENERATION HERO CAROUSEL -->
<style>
    .home-hero-swiper {
        width: 100%;
        height: 100vh;
        min-height: 700px;
        overflow: hidden !important;
    }

    .home-hero-swiper .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.5;
    }

    .home-hero-swiper .swiper-pagination-bullet-active {
        background: var(--home-primary, #1ab2a6);
        opacity: 1;
    }

    @media (max-width: 1366px) {
        .home-hero-swiper {
            height: auto;
            min-height: 100vh;
            padding-bottom: 3rem;
        }

        .home-hero-swiper .home-hero {
            height: auto !important;
            padding-top: 6rem;
            padding-bottom: 4rem;
        }

        .hero-right-visual {
            margin-top: 2rem;
        }
    }

    /* Travel & Workshop premium hero CSS for home page */
    .travel-premium-hero,
    .workshop-premium-hero,
    .automation-premium-hero,
    .enterprise-premium-hero {
        position: relative;
        min-height: unset;
        height: 100%;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding-top: 100px;
    }

    .automation-premium-hero,
    .enterprise-premium-hero {
        background-color: #0f172a;
        color: #ffffff !important;
    }

    .travel-bg,
    .workshop-bg,
    .automation-bg,
    .enterprise-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .travel-bg {
        background-image: url('{{ asset("images/travel-tourism/travel_beach_hero.png") }}');
    }

    .workshop-bg {
        background-image: url('{{ asset("images/workshop/workshop_hero_scene_1781973387945.png") }}');
    }

    .automation-bg {
        background-image: url('{{ asset("images/mockups/heros/hero sliedr3.webp") }}');
    }

    .enterprise-bg {
        background-image: url('{{ asset("images/mockups/heros/hero slider2.webp") }}');
    }

    .hero-slide-inner-container {
        padding-top: 60px;
    }

    .relative-z {
        position: relative;
        z-index: 2;
    }

    .travel-hero-overlay,
    .workshop-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }

    .automation-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.75) 50%, rgba(15, 23, 42, 0.2) 100%);
        z-index: 1;
    }

    .travel-hero-content,
    .workshop-hero-content,
    .automation-hero-content,
    .enterprise-hero-content {
        max-width: 800px;
        padding: 2.5rem 0;
        text-align: left;
    }

    .travel-pill-tag,
    .workshop-pill-tag,
    .automation-pill-tag,
    .enterprise-pill-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 20px;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 1.25rem;
        background: transparent !important;
        color: #ffffff !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }

    .travel-pill-tag-icon,
    .workshop-pill-tag-icon,
    .automation-pill-tag-icon,
    .enterprise-pill-tag-icon {
        width: 18px;
        height: 18px;
        color: #14B8A6 !important;
    }

    .travel-hero-content h1,
    .workshop-hero-content h1,
    .automation-hero-content h1,
    .enterprise-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important;
        font-size: clamp(2rem, 4vw, 3rem) !important;
        font-weight: 800 !important;
        line-height: 1.1 !important;
        margin-bottom: 1rem !important;
        color: #ffffff !important;
        letter-spacing: -0.02em !important;
    }

    .travel-hero-content h1 .accent-text,
    .workshop-hero-content h1 .accent-text,
    .automation-hero-content h1 .accent-text,
    .enterprise-hero-content h1 .accent-text {
        color: #14B8A6 !important;
    }

    .travel-hero-content p,
    .workshop-hero-content p,
    .automation-hero-content p,
    .enterprise-hero-content p {
        font-size: 1.05rem !important;
        color: rgba(255, 255, 255, 0.9) !important;
        line-height: 1.5 !important;
        max-width: 600px !important;
        margin-bottom: 1.5rem !important;
    }

    .hero-highlights-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.5rem 1.5rem;
        list-style: none;
        padding: 0;
        margin: 1.5rem 0;
        max-width: 600px;
    }

    .hero-highlights-list li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.9);
    }

    .hero-highlights-list li svg {
        color: #14B8A6;
        flex-shrink: 0;
    }

    .hero-right-visual:hover .hero-right-img {
        transform: translateY(-6px) scale(1.02);
    }

    .home-hero-swiper .swiper-button-next,
    .home-hero-swiper .swiper-button-prev {
        color: var(--home-primary, #14B8A6);
        background: rgba(255, 255, 255, 0.1);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .home-hero-swiper .swiper-button-next:after,
    .home-hero-swiper .swiper-button-prev:after {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .home-hero-swiper .swiper-button-next:hover,
    .home-hero-swiper .swiper-button-prev:hover {
        background: rgba(255, 255, 255, 0.25);
        color: #fff;
    }

    @media (max-width: 768px) {
        .home-hero-swiper .home-hero {
            padding-top: 160px !important;
        }

        .home-hero-swiper .swiper-button-next,
        .home-hero-swiper .swiper-button-prev {
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.15);
        }

        .home-hero-swiper .swiper-button-next:after,
        .home-hero-swiper .swiper-button-prev:after {
            font-size: 0.8rem;
        }

        .hero-right-visual {
            display: none !important;
        }

        .hero-mobile-visual {
            display: flex !important;
            margin: 1.5rem 0;
            align-items: center;
            justify-content: center;
        }
    }

    @media (min-width: 769px) {
        .hero-mobile-visual {
            display: none !important;
        }
    }
</style>

@if(isset($heroSlides) && $heroSlides->count() > 0)
    <section class="swiper home-hero-swiper">
        <div class="swiper-wrapper">

            @foreach($heroSlides as $slide)
                <div class="swiper-slide">
                    <div class="home-hero" style="width: 100%; height: 100%;">
                        <div class="home-hero-bg-grid"></div>
                        <div class="home-hero-glow"></div>

                        <div class="home-hero-grid">
                            <div class="hero-left-content gsap-fade-up">
                                @if($slide->eyebrow)
                                    <span class="hero-eyebrow">{{ $slide->eyebrow }}</span>
                                @endif

                                <h1 class="hero-title">{!! $slide->title !!}</h1>

                                <div class="hero-mobile-visual gsap-fade-up"
                                    style="display: none; align-items: center; justify-content: center; position: relative;">
                                    @if($slide->image)
                                        <img src="{{ asset(str_starts_with($slide->image, 'hero_slides/') ? 'storage/' . $slide->image : 'images/' . $slide->image) }}"
                                            alt="Hero Image" class="hero-right-img"
                                            style="width: 100%; max-width: 850px; height: auto; border-radius: 16px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); border: 1px solid rgba(255,255,255,0.08); transition: transform 0.4s ease;">
                                    @endif
                                </div>

                                @if($slide->description)
                                    <p class="hero-desc">{{ $slide->description }}</p>
                                @endif

                                <div class="hero-actions">
                                    @if($slide->primary_button_text)
                                        <a href="{{ $slide->primary_button_link }}"
                                            class="btn-home-primary hero-btn-animate">{!! $slide->primary_button_text !!}</a>
                                    @endif

                                    @if($slide->secondary_button_text)
                                        <a href="{{ $slide->secondary_button_link }}"
                                            class="btn-home-outline hero-btn-animate">{!! $slide->secondary_button_text !!}</a>
                                    @endif
                                </div>

                                @if(!empty($slide->metrics))
                                    <div class="hero-trust">
                                        @foreach($slide->metrics as $metric)
                                            <div class="ht-item">
                                                <span class="ht-val">{{ $metric['value'] }}</span>
                                                <span class="ht-lbl">{{ $metric['label'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @elseif(!empty($slide->features))
                                    <div class="hero-trust"
                                        style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem 1rem; border-top: 1px solid var(--home-border); padding-top: 1.5rem; margin-top: 1.5rem;">
                                        @foreach($slide->features as $feature)
                                            <div class="ht-item"
                                                style="border-right: none; padding-right: 0; align-items: flex-start; gap: 6px; flex-direction: row;">
                                                <svg width="18" height="18" fill="none" stroke="#14B8A6" stroke-width="2.5"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                </svg>
                                                <span class="ht-lbl"
                                                    style="font-weight: 500; font-size: 0.85rem; line-height: 1.2;">{{ $feature['text'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <div class="hero-right-visual gsap-fade-up"
                                style="display: flex; align-items: center; justify-content: center; position: relative;">
                                @if($slide->image)
                                    <img src="{{ asset(str_starts_with($slide->image, 'hero_slides/') ? 'storage/' . $slide->image : 'images/' . $slide->image) }}"
                                        alt="Hero Image" class="hero-right-img"
                                        style="width: 100%; max-width: 850px; height: auto; border-radius: 16px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); border: 1px solid rgba(255,255,255,0.08); transition: transform 0.4s ease;">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
@endif