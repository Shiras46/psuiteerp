import os

filepath = r'd:\project\psuite\resources\views\pages\home.blade.php'

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

start_idx = content.find('<section class="home-hero">')
end_idx = content.find('<!-- SECTION 01B:', start_idx)

if start_idx != -1 and end_idx != -1:
    original_hero_html = content[start_idx:end_idx].strip()
    
    # Modify original hero html slightly to work properly inside swiper
    original_hero_html = original_hero_html.replace('<section class="home-hero">', '<div class="home-hero" style="width: 100%; height: 100%;">')
    original_hero_html = original_hero_html.replace('</section>', '</div>')
    
    new_carousel_html = f"""
<!-- SECTION 01: NEXT GENERATION HERO CAROUSEL -->
<style>
    .home-hero-swiper {{
        width: 100%;
        height: 100vh;
    }}
    .home-hero-swiper .swiper-pagination-bullet {{
        background: #fff;
        opacity: 0.5;
    }}
    .home-hero-swiper .swiper-pagination-bullet-active {{
        background: var(--home-primary, #1ab2a6);
        opacity: 1;
    }}
    
    /* Travel & Workshop premium hero CSS for home page */
    .travel-premium-hero, .workshop-premium-hero {{
        position: relative;
        min-height: unset;
        height: 100%;
        display: flex;
        align-items: center;
        background-color: #0f172a;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
        color: #ffffff;
        padding-top: 100px;
    }}
    
    .travel-premium-hero {{
        background-image: url('{{{{ asset("images/travel-tourism/travel_beach_hero.png") }}}}');
    }}
    
    .workshop-premium-hero {{
        background-image: url('{{{{ asset("images/workshop/workshop_hero_scene_1781973387945.png") }}}}');
    }}
    
    .travel-hero-overlay, .workshop-hero-overlay {{
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }}
    
    .travel-hero-content, .workshop-hero-content {{
        max-width: 800px;
        padding: 5rem 0;
        text-align: left;
    }}
    
    .travel-pill-tag, .workshop-pill-tag {{
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 20px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 2rem;
        background: transparent;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }}
    
    .travel-pill-tag-icon, .workshop-pill-tag-icon {{
        width: 18px;
        height: 18px;
        color: #1ab2a6;
    }}
    
    .travel-hero-content h1, .workshop-hero-content h1 {{
        margin-left: 0 !important;
        text-align: left !important;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #ffffff;
        letter-spacing: -0.02em;
    }}
    
    .travel-hero-content h1 .accent-text, .workshop-hero-content h1 .accent-text {{
        color: #1ab2a6;
    }}
    
    .travel-hero-content p, .workshop-hero-content p {{
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 2.5rem;
    }}
</style>

<section class="swiper home-hero-swiper">
    <div class="swiper-wrapper">
        
        <!-- Slide 1: Original Home -->
        <div class="swiper-slide">
            {original_hero_html}
        </div>

        <!-- Slide 2: Travel Hero -->
        <div class="swiper-slide">
            <div class="travel-premium-hero">
                <div class="travel-hero-overlay"></div>
                <div class="container relative-z">
                    <div class="travel-hero-content">
                        <div class="travel-pill-tag">
                            <svg class="travel-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                            </svg>
                            EXPLORE. DISCOVER. EXPERIENCE.
                        </div>
                        <h1 style="margin-left: 0 !important; text-align: left !important;">Explore The World.<br><span class="accent-text">Create</span> Memories.</h1>
                        <p>Discover breathtaking destinations, handpicked experiences and unforgettable journeys.</p>
                        
                        <div class="hero-actions" style="justify-content: flex-start; margin-top: 2rem;">
                            <a href="{{{{ route('solutions.show', 'travel-tourism') }}}}" class="btn-home-primary">Explore Module</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Workshop Hero -->
        <div class="swiper-slide">
            <div class="workshop-premium-hero">
                <div class="workshop-hero-overlay"></div>
                <div class="container relative-z">
                    <div class="workshop-hero-content">
                        <div class="workshop-pill-tag">
                            <svg class="workshop-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"></path>
                            </svg>
                            SMARTER WORKSHOP. BETTER PERFORMANCE.
                        </div>
                        <h1 style="margin-left: 0 !important; text-align: left !important;">Streamline Workshops.<br><span class="accent-text">Maximize</span> Performance.</h1>
                        <p>Complete workshop management solution to manage jobs, technicians, parts, and customers efficiently.</p>
                        
                        <div class="hero-actions" style="justify-content: flex-start; margin-top: 2rem;">
                            <a href="{{{{ route('solutions.show', 'workshop-management') }}}}" class="btn-home-primary">Explore Module</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="swiper-pagination"></div>
</section>
"""
    
    # Replace original hero with carousel
    content = content[:start_idx] + new_carousel_html + "\n\n" + content[end_idx:]

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
    
print("Successfully replaced home hero with carousel.")
