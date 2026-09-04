@extends('layouts.app')

@section('title', $solution->seo_title ?? ($solution->title . ' | PSuite ERP'))
@section('meta_description', $solution->seo_description ?? $solution->description)
@section('meta_keywords', $solution->seo_keywords ?? 'ERP, enterprise, software')
@section('canonical_url', $solution->seo_canonical ?? url()->current())

@if($solution->seo_og_image)
    @section('og_image', Storage::disk('public')->url($solution->seo_og_image))
@elseif($solution->image_path)
    @section('og_image', Storage::disk('public')->url($solution->image_path))
@endif

@if($solution->seo_schema)
    @section('schema_markup')
        <script type="application/ld+json">
            {!! $solution->seo_schema !!}
        </script>
    @endsection
@endif

@section('content')

<!-- 1. HERO SECTION -->
<section class="hero-sec" style="padding-top: 10rem; padding-bottom: 6rem; background: var(--bg-color);">
    <div class="container hero-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div class="hero-content gsap-reveal">
            <span class="section-tag">Enterprise Solution</span>
            <h1 class="hero-title" style="text-align: left; margin: 0 0 1.5rem 0;">{{ $solution->title }}</h1>
            <p class="hero-desc">{{ $solution->description }}</p>
            <div class="hero-ctas" style="display: flex; gap: 1rem; margin-top: 2rem;">
                <a href="{{ route('book-demo') }}?solution={{ $solution->slug }}" class="btn btn-primary">
                    {{ $solution->demo_cta['button_text'] ?? 'Book Free Demo' }}
                </a>
                <a href="#overview" class="btn btn-secondary">Learn More</a>
            </div>
            
            @if($solution->statistics && count($solution->statistics) > 0)
                <div class="hero-stats" style="display: flex; gap: 2rem; margin-top: 3rem; flex-wrap: wrap;">
                    @foreach($solution->statistics as $stat)
                        <div class="hero-stat-item" style="display: flex; align-items: center; gap: 0.5rem; font-weight: 500; color: var(--text-primary);">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; color: var(--accent-primary);">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                            </svg>
                            <span>{{ $stat['stat'] }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        
        <div class="hero-image-wrapper gsap-reveal">
            @if($solution->image_path)
                <img src="{{ Storage::disk('public')->url($solution->image_path) }}" alt="{{ $solution->title }} mockup" class="hero-mockup" style="width: 100%; border-radius: var(--radius-lg); box-shadow: 0 20px 40px rgba(30, 41, 59, 0.1);">
            @else
                <!-- Elegant Solid Dashboard Mockup -->
                <div class="hero-mockup bento-card" style="padding: 2rem;">
                    <div style="display: flex; gap: 0.5rem; margin-bottom: 2rem;">
                        <span style="width: 12px; height: 12px; border-radius: 50%; background: #EF4444;"></span>
                        <span style="width: 12px; height: 12px; border-radius: 50%; background: #F59E0B;"></span>
                        <span style="width: 12px; height: 12px; border-radius: 50%; background: #10B981;"></span>
                    </div>
                    <div style="background: var(--bg-color); padding: 2rem; border-radius: var(--radius-md); border: 1px solid var(--card-border); margin-bottom: 1.5rem;">
                        <h4 style="color: var(--text-primary); margin-bottom: 0.5rem; font-size: 1.25rem;">{{ $solution->title }} Dashboard</h4>
                        <div style="height: 2px; background: var(--card-border); border-radius: 2px; width: 40%; margin-bottom: 2rem;"></div>
                        
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
                            @foreach(array_slice($solution->statistics ?? [['stat'=>'Optimization'], ['stat'=>'Integration'], ['stat'=>'Automation']], 0, 3) as $stat)
                                <div style="background: #FFFFFF; padding: 1.5rem 1rem; border-radius: var(--radius-md); border: 1px solid var(--card-border); text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--text-primary); margin-bottom: 0.25rem;">99.8%</div>
                                    <div style="font-size: 0.85rem; color: var(--text-secondary); font-weight: 500;">{{ str_replace('✓ ', '', $stat['stat']) }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div style="background: rgba(21, 154, 156, 0.05); border: 1px solid rgba(21, 154, 156, 0.15); padding: 1.25rem; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: space-between;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 8px; height: 8px; border-radius: 50%; background: var(--accent-primary); box-shadow: 0 0 8px var(--accent-primary);"></div>
                            <span style="font-size: 0.9rem; font-weight: 600; color: var(--text-primary);">System Online & Synchronized</span>
                        </div>
                        <span style="font-size: 0.85rem; color: var(--text-secondary); font-weight: 500;">v4.2.1-stable</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- 2. SOLUTION OVERVIEW -->
<section id="overview" class="overview-sec section-padding">
    <div class="container">
        <div class="bento-card overview-box gsap-reveal" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <div class="overview-title-wrap">
                <span class="section-tag">Overview</span>
                <h2 style="margin-bottom: 2rem;">What is {{ $solution->title }}?</h2>
            </div>
            <div class="overview-content" style="font-size: 1.125rem; color: var(--text-secondary); line-height: 1.8;">
                {!! $solution->overview !!}
            </div>
        </div>
    </div>
</section>

<!-- 3. KEY CHALLENGES -->
@if($solution->challenges && count($solution->challenges) > 0)
<section class="section-padding" style="background: rgba(30, 41, 59, 0.02);">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Obstacles</span>
            <h2>Common Business Challenges</h2>
            <p>Every enterprise faces critical roadblocks that hinder growth. Here is how operational inefficiencies manifest without specialized workflows.</p>
        </div>
        
        <div class="bento-grid gsap-stagger-parent">
            @foreach($solution->challenges as $index => $challenge)
                <div class="bento-card challenge-card gsap-reveal">
                    <span style="font-family: var(--font-heading); font-size: 2.5rem; color: var(--accent-secondary); margin-bottom: 1rem; display: block; line-height: 1;">0{{ $index + 1 }}</span>
                    <h3>{{ $challenge['title'] }}</h3>
                    <p>{{ $challenge['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- 4. FEATURES SECTION -->
@if($solution->features && count($solution->features) > 0)
<section class="section-padding">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Capabilities</span>
            <h2>Powerful Features</h2>
            <p>Deeply integrated modules designed to solve workflows from basic data entry to complex ledger accounting.</p>
        </div>
        
        <div class="bento-grid gsap-stagger-parent">
            @foreach($solution->features as $feature)
                <div class="bento-card gsap-reveal">
                    <div class="card-icon">
                        @if(Str::startsWith($feature['icon'] ?? '', 'heroicon-'))
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        @else
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        @endif
                    </div>
                    <h3 class="feature-title">{{ $feature['title'] }}</h3>
                    <p class="feature-desc">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- 5. BENEFITS SECTION -->
@if($solution->benefits && count($solution->benefits) > 0)
<section class="section-padding" style="background: rgba(30, 41, 59, 0.02);">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Value Proposition</span>
            <h2>Why Choose PSuite ERP?</h2>
            <p>Deploy custom ERP technology built for speed, transparency, and bulletproof security.</p>
        </div>
        
        <div class="bento-grid gsap-stagger-parent">
            @foreach($solution->benefits as $benefit)
                <div class="bento-card gsap-reveal">
                    <div class="card-icon" style="background: rgba(244, 180, 0, 0.1); color: var(--accent-warning); border-color: rgba(244, 180, 0, 0.2);">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">{{ $benefit['title'] }}</h3>
                    <p class="feature-desc">{{ $benefit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- 6. HOW IT WORKS -->
@if($solution->how_it_works && count($solution->how_it_works) > 0)
<section class="section-padding">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Process Flow</span>
            <h2>How It Works</h2>
            <p>From initial configuration to running live synchronized operations daily.</p>
        </div>
        
        <div class="timeline-container">
            @foreach($solution->how_it_works as $index => $step)
                <div class="timeline-item gsap-reveal">
                    <div class="timeline-dot"></div>
                    <span class="timeline-step">{{ $step['step_number'] ?? ('Phase 0' . ($index + 1)) }}</span>
                    <h3 class="timeline-item-title">{{ $step['title'] }}</h3>
                    <p class="timeline-item-desc">{{ $step['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- 7. SCREENSHOTS / GALLERY -->
<section class="section-padding" style="background: rgba(30, 41, 59, 0.02);">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Interface Showcase</span>
            <h2>Product Screenshots & Gallery</h2>
            <p>Take an inside look at the reports, accounting balances, and operational dashboard views.</p>
        </div>
        
        <div class="bento-grid gsap-stagger-parent">
            @if($solution->gallery && count($solution->gallery) > 0)
                @foreach($solution->gallery as $image)
                    <div class="gallery-item gsap-reveal" style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--card-border);">
                        <img src="{{ Storage::disk('public')->url($image) }}" alt="PSuite ERP Screenshot" style="width: 100%; display: block;">
                    </div>
                @endforeach
            @else
                <!-- Solid CSS Mock Panels as fallback gallery -->
                <div class="bento-card gallery-placeholder gsap-reveal" style="display: flex; align-items: center; justify-content: center; text-align: center; min-height: 300px;">
                    <div>
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 48px; height: 48px; color: var(--accent-primary); margin: 0 auto 1rem;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                        </svg>
                        <h4 style="font-size: 1.25rem; font-family: var(--font-heading);">Analytics Dashboard</h4>
                        <p style="font-size: 0.95rem; margin-top: 0.5rem; margin-bottom: 0;">Real-time charts & balances</p>
                    </div>
                </div>
                <div class="bento-card gallery-placeholder gsap-reveal" style="display: flex; align-items: center; justify-content: center; text-align: center; min-height: 300px;">
                    <div>
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 48px; height: 48px; color: var(--accent-primary); margin: 0 auto 1rem;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"></path>
                        </svg>
                        <h4 style="font-size: 1.25rem; font-family: var(--font-heading);">Document Ledger</h4>
                        <p style="font-size: 0.95rem; margin-top: 0.5rem; margin-bottom: 0;">Automated receipts & POs</p>
                    </div>
                </div>
                <div class="bento-card gallery-placeholder gsap-reveal" style="display: flex; align-items: center; justify-content: center; text-align: center; min-height: 300px;">
                    <div>
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 48px; height: 48px; color: var(--accent-primary); margin: 0 auto 1rem;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                        </svg>
                        <h4 style="font-size: 1.25rem; font-family: var(--font-heading);">Configuration Hub</h4>
                        <p style="font-size: 0.95rem; margin-top: 0.5rem; margin-bottom: 0;">Custom workflows & B2B margins</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- 8. INDUSTRIES USING THIS SOLUTION -->
@if($solution->industries && count($solution->industries) > 0)
<section class="section-padding">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Target Markets</span>
            <h2>Industries Using This Solution</h2>
            <p>PSuite ERP adapts easily to meet distinct sector and multi-regional requirements.</p>
        </div>
        
        <div class="bento-grid gsap-stagger-parent">
            @foreach($solution->industries as $industry)
                <div class="bento-card industry-card gsap-reveal">
                    <div class="card-icon" style="background: rgba(30, 41, 59, 0.05); color: var(--text-primary); border-color: rgba(30, 41, 59, 0.1);">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-.778.099-1.533.284-2.253m0 0L21 12"></path>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem;">{{ $industry['title'] }}</h3>
                    <p style="font-size: 1rem;">{{ $industry['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- 9. FAQ SECTION -->
@if($solution->faq && count($solution->faq) > 0)
<section class="section-padding" style="background: rgba(30, 41, 59, 0.02);">
    <div class="container">
        <div class="section-header gsap-reveal">
            <span class="section-tag">Help Desk</span>
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions about deployment, modules, and customization capacities.</p>
        </div>
        
        <div class="faq-accordion gsap-reveal">
            @foreach($solution->faq as $item)
                <details class="faq-item">
                    <summary class="faq-trigger">
                        <span>{{ $item['question'] }}</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                        </svg>
                    </summary>
                    <div class="faq-content">
                        <p style="margin-bottom: 0;">{{ $item['answer'] }}</p>
                    </div>
                </details>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- 10 & 11. CTA & CONTACT -->
<section class="section-padding">
    <div class="container">
        <div class="contact-banner gsap-reveal">
            <h3>{{ $solution->contact_cta['headline'] ?? 'Ready to transform your business?' }}</h3>
            <p>{{ $solution->contact_cta['description'] ?? 'Talk with our experts to discover how PSuite ERP scales with you.' }}</p>
            
            <div style="margin: 3rem 0;">
                <a href="{{ route('book-demo') }}?solution={{ $solution->slug }}" class="btn btn-primary" style="background: #FFFFFF; color: var(--accent-dark); font-weight: 600; padding: 1rem 2.5rem; font-size: 1.125rem;">
                    {{ $solution->demo_cta['button_text'] ?? 'Book Free Demo' }}
                </a>
            </div>
            
            <div class="contact-links">
                <a href="tel:{{ $solution->contact_cta['phone'] ?? '+1234567890' }}" class="contact-link-item">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.802-5.184-4.162-7-7l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                    </svg>
                    <span>Call: {{ $solution->contact_cta['phone'] ?? '+1 234 567 890' }}</span>
                </a>
                
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $solution->contact_cta['whatsapp'] ?? '1234567890') }}" target="_blank" class="contact-link-item">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.42 9.863-9.864.001-2.637-1.03-5.114-2.905-6.99C16.657 1.875 14.181 1.04 11.547 1.04 6.114 1.04 1.69 5.462 1.688 10.899c-.001 1.674.452 3.3 1.311 4.757L1.925 20.24l4.722-1.238z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>
                
                <a href="mailto:{{ $solution->contact_cta['email'] ?? 'experts@psuite-erp.com' }}" class="contact-link-item">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                    </svg>
                    <span>Email Us</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
