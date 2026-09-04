<!-- SECTION: TESTIMONIALS -->
<section class="home-testimonials" style="padding: var(--home-section-padding) 0; background-color: var(--home-bg-white); overflow: hidden;">
    <div class="container">
        <div class="htest-header gsap-fade-up" style="text-align: center; margin-bottom: 4rem;">
            <h2>What Our Partners Say</h2>
            <p>Trusted by industry leaders to deliver exceptional performance and scalability.</p>
        </div>
        
        <div class="swiper testimonials-swiper gsap-fade-up" style="padding-bottom: 4rem;">
            <div class="swiper-wrapper">
                
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="htest-card">
                        <div class="htest-rating">
                            ★★★★★
                        </div>
                        <p class="htest-quote">"The level of customization and security PSuite offers is unmatched. We migrated our entire operation in less than 3 months and the ROI has been incredible."</p>
                        <div class="htest-divider"></div>
                        <div class="htest-author">
                            <div class="htest-photo" style="background: linear-gradient(135deg, var(--home-primary), #0f9b98);">
                                <span>SA</span>
                            </div>
                            <div class="htest-meta">
                                <h4>Sarah Al-Farsi</h4>
                                <span>Operations Director</span>
                                <span class="htest-company">Global Logistics</span>
                                <span class="htest-verified"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verified Enterprise Client</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="htest-card">
                        <div class="htest-rating">
                            ★★★★★
                        </div>
                        <p class="htest-quote">"Having HR, Finance, and CRM perfectly synced in one dashboard eliminated data silos. Our team efficiency improved dramatically within the first quarter."</p>
                        <div class="htest-divider"></div>
                        <div class="htest-author">
                            <div class="htest-photo" style="background: linear-gradient(135deg, #0F172A, #334155);">
                                <span>MR</span>
                            </div>
                            <div class="htest-meta">
                                <h4>Mohammed Rashid</h4>
                                <span>CEO</span>
                                <span class="htest-company">Elite Retail Group</span>
                                <span class="htest-verified"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verified Enterprise Client</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="htest-card">
                        <div class="htest-rating">
                            ★★★★★
                        </div>
                        <p class="htest-quote">"The dedicated support and enterprise-grade architecture gave us the confidence to scale our fleet operations across multiple new regions effortlessly."</p>
                        <div class="htest-divider"></div>
                        <div class="htest-author">
                            <div class="htest-photo" style="background: linear-gradient(135deg, #14B8A6, #0D9488);">
                                <span>FK</span>
                            </div>
                            <div class="htest-meta">
                                <h4>Fatima K.</h4>
                                <span>VP of Technology</span>
                                <span class="htest-company">Oasis Travel</span>
                                <span class="htest-verified"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Verified Enterprise Client</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <style>
        .testimonials-swiper {
            width: 100%;
            overflow: visible;
        }
        .htest-card {
            background: #FFFFFF;
            border: 1px solid var(--home-border);
            border-radius: var(--home-radius);
            padding: 2rem;
            min-height: 340px;
            display: flex;
            flex-direction: column;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }
        .htest-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--home-shadow);
        }
        .htest-rating {
            color: #F59E0B;
            font-size: 1.25rem;
            margin-bottom: 1rem;
            letter-spacing: 4px;
        }
        .htest-quote {
            font-size: 15px;
            color: var(--home-text-heading);
            line-height: 1.6;
            font-weight: 500;
            margin-bottom: 1.5rem;
            flex-grow: 1;
            font-style: italic;
        }
        .htest-divider {
            width: 100%;
            height: 1px;
            background: var(--home-border);
            margin: 1.5rem 0;
        }
        .htest-author {
            display: flex;
            align-items: flex-start;
            gap: 1.25rem;
        }
        .htest-photo {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
            flex-shrink: 0;
        }
        .htest-meta h4 {
            font-size: 18px;
            margin-bottom: 0.25rem;
            color: var(--home-text-heading);
        }
        .htest-meta span {
            display: block;
            font-size: 14px;
            color: var(--home-text-body);
            margin-bottom: 0.1rem;
        }
        .htest-meta .htest-company {
            color: var(--home-text-heading);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .htest-meta .htest-verified {
            display: flex;
            align-items: center;
            gap: 4px;
            color: var(--home-primary);
            font-weight: 600;
            margin-top: 0.25rem;
        }
        .testimonials-swiper .swiper-pagination-bullet {
            background: var(--home-text-body);
            opacity: 0.3;
        }
        .testimonials-swiper .swiper-pagination-bullet-active {
            background: var(--home-primary);
            opacity: 1;
        }
    </style>
    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if(typeof Swiper !== 'undefined') {
                new Swiper('.testimonials-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.testimonials-swiper .swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        }
                    }
                });
            }
        });
    </script>
</section>
