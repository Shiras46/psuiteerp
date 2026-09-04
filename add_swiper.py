import os
import re

filepath = r'd:\project\psuite\resources\views\pages\home.blade.php'

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Inject Swiper CSS
if 'swiper-bundle.min.css' not in content:
    content = content.replace("@push('styles')", "@push('styles')\n    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\" />")

# 2. Inject Swiper JS and initialization
if 'swiper-bundle.min.js' not in content:
    js_init = """
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const swiper = new Swiper('.home-hero-swiper', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });
    });
</script>
"""
    content = content.replace("@push('scripts')", "@push('scripts')" + js_init)

# 3. Wrap original home hero and add new slides
if 'home-hero-swiper' not in content:
    
    # We need to extract the exact home-hero section block.
    # It starts with <section class="home-hero"> and ends with </section>
    # Since regex can be tricky with nested tags, we'll do it manually.
    
    start_idx = content.find('<section class="home-hero">')
    # Find the closing </section> of home-hero. The next section is <section class="home-trust-minimal">
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
    /* Ensure content is positioned correctly under the header */
    .travel-premium-hero, .workshop-premium-hero {{
        height: 100%;
        min-height: unset;
        margin-top: 0;
        padding-top: 0;
    }}
    .hero-slide-inner-container {{
        padding-top: 120px; 
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
                <div class="container relative-z hero-slide-inner-container">
                    <div class="travel-hero-content">
                        <div class="travel-pill-tag">
                            <svg class="travel-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                            </svg>
                            EXPLORE. DISCOVER. EXPERIENCE.
                        </div>
                        <h1 style="margin-left: 0 !important; text-align: left !important;">Explore The World.<br><span class="accent-text">Create</span> Memories.</h1>
                        <p>Discover breathtaking destinations, handpicked experiences and unforgettable journeys.</p>
                        
                        <div class="sol-cta-group" style="justify-content: flex-start;">
                            <a href="{{{{ route('solutions.show', 'travel-tourism') }}}}" class="sol-btn sol-btn-primary">Explore Module</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Workshop Hero -->
        <div class="swiper-slide">
            <div class="workshop-premium-hero">
                <div class="workshop-hero-overlay"></div>
                <div class="container relative-z hero-slide-inner-container">
                    <div class="workshop-hero-content">
                        <div class="workshop-pill-tag">
                            <svg class="workshop-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"></path>
                            </svg>
                            SMARTER WORKSHOP. BETTER PERFORMANCE.
                        </div>
                        <h1 style="margin-left: 0 !important; text-align: left !important;">Streamline Workshops.<br><span class="accent-text">Maximize</span> Performance.</h1>
                        <p>Complete workshop management solution to manage jobs, technicians, parts, and customers efficiently.</p>
                        
                        <div class="sol-cta-group" style="justify-content: flex-start;">
                            <a href="{{{{ route('solutions.show', 'workshop-management') }}}}" class="sol-btn sol-btn-primary">Explore Module</a>
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
    
print("Successfully added Swiper carousel to home.blade.php")
