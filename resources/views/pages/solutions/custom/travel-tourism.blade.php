@extends('layouts.app')

@section('title', 'Enterprise Travel & Tourism ERP Solution | PSuite')
@section('meta_description', 'Manage ticketing, holiday packages, BSP reconciliation, supplier settlements, corporate travel operations, accounting and reporting from one intelligent platform.')

@section('header_class', 'transparent-header')

@section('content')

<!-- ============================================
     SECTION 01: FULL SCREEN HERO
============================================= -->
<style>
    .travel-premium-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #0f172a;
        background-image: url('{{ asset("images/travel-tourism/travel_beach_hero.png") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
        color: #ffffff;
        padding-top: 100px;
    }
    
    .travel-hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }
    
    .relative-z {
        position: relative;
        z-index: 2;
    }

    .travel-hero-content {
        max-width: 800px;
        padding: 5rem 0;
        text-align: left;
}

    .travel-pill-tag {
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
    }
    
    .travel-pill-tag-icon {
        width: 18px;
        height: 18px;
        color: #1ab2a6;
    }

    .travel-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #ffffff;
        letter-spacing: -0.02em;
    }

    .travel-hero-content h1 .accent-text {
        color: #1ab2a6;
    }

    .travel-hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 2.5rem;
    }
    
    @media (max-width: 768px) {
        .travel-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important; font-size: 3.5rem; }
        .travel-hero-overlay { background: rgba(15, 23, 42, 0.85); }
        .travel-hero-content { padding: 3rem 0; }
    }
</style>

<section class="travel-premium-hero">
    <div class="travel-hero-overlay"></div>
    <div class="container relative-z">
        <div class="travel-hero-content gsap-reveal">
            <div class="travel-pill-tag">
                <svg class="travel-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                </svg>
                EXPLORE. DISCOVER. EXPERIENCE.
            </div>
            <h1>Explore The World.<br><span class="accent-text">Create</span> Memories.</h1>
            <p>Discover breathtaking destinations, handpicked experiences and unforgettable journeys.</p>
            
            <div class="sol-cta-group" style="justify-content: flex-start;">
                <a href="{{ route('book-demo') }}" class="sol-btn sol-btn-primary">Schedule Demo</a>
                <a href="#features" class="sol-btn sol-btn-secondary" style="background: rgba(255,255,255,0.1); color: #ffffff; border: 1px solid rgba(255,255,255,0.3); backdrop-filter: blur(5px);">Watch Product Tour</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 02: CLIENT TRUST BAR
============================================= -->
<section class="sol-marquee-section">
    <div class="sol-marquee-track">
        <!-- Original Set -->
        <div class="sol-marquee-item">50+ Clients</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">6+ Countries</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Millions Of Transactions</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">24/7 Support</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Cloud Ready</div>
        <div class="sol-marquee-item">•</div>
        <!-- Duplicated for Loop -->
        <div class="sol-marquee-item">50+ Clients</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">6+ Countries</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Millions Of Transactions</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">24/7 Support</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Cloud Ready</div>
    </div>
</section>

<!-- ============================================
     SECTION 03: IMMERSIVE STORYTELLING SCROLL
============================================= -->
<section class="sol-scroll-stack">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <span class="sol-eyebrow gsap-reveal">THE OPERATIONAL JOURNEY</span>
            <h2 class="sol-heading gsap-reveal">End-to-End Travel Intelligence</h2>
        </div>

        <div class="sol-stack-container">
            <!-- Stack Card 1 -->
            <div class="sol-card-stack" id="stack-card-1">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 01</span>
                    <h3>GDS Integration</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Amadeus</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Sabre</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Galileo</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Real-Time Connectivity</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="sol-stack-image" alt="GDS Integration">
                </div>
            </div>

            <!-- Stack Card 2 -->
            <div class="sol-card-stack" id="stack-card-2" style="top: 18vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 02</span>
                    <h3>Ticket Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Booking</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Issuance</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Refunds</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Cancellations</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/travel_operations_center.png') }}" class="sol-stack-image" alt="Ticket Management">
                </div>
            </div>

            <!-- Stack Card 3 -->
            <div class="sol-card-stack" id="stack-card-3" style="top: 21vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 03</span>
                    <h3>Holiday Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Packages</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Hotels</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Transfers</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Tours</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/inventory_dashboard.png') }}" class="sol-stack-image" alt="Holiday Management">
                </div>
            </div>
            
            <!-- Stack Card 4 -->
            <div class="sol-card-stack" id="stack-card-4" style="top: 24vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 04</span>
                    <h3>BSP Reconciliation</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Supplier Settlements</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Accounting Integration</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Financial Controls</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/finance_dashboard.png') }}" class="sol-stack-image" alt="BSP Reconciliation">
                </div>
            </div>
            
            <!-- Stack Card 5 -->
            <div class="sol-card-stack" id="stack-card-5" style="top: 27vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 05</span>
                    <h3>Business Intelligence</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Revenue Analytics</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> MIS Reports</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Operational KPIs</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/analytics_screen.png') }}" class="sol-stack-image" alt="Business Intelligence">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 04: WHAT IS TRAVEL ERP
============================================= -->
<section class="sol-bento-section">
    <div class="container">
        <div class="sol-bento-grid">
            <div class="sol-bento-card sol-bento-large gsap-reveal">
                <h3>What Is Travel &<br>Tourism ERP?</h3>
                <p>PSuite Travel ERP is an integrated business management platform built for travel agencies, tour operators, DMCs, airline consolidators and corporate travel providers.</p>
                <p style="margin-top: 1rem;">It centralizes ticketing, holiday management, supplier reconciliation, BSP processing, customer management and reporting into one intelligent ecosystem.</p>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                <h4>Travel Visibility</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></div>
                <h4>Operational Efficiency</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.3s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg></div>
                <h4>Supplier Automation</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.4s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
                <h4>Financial Control</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.5s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg></div>
                <h4>Real-Time Reporting</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.6s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg></div>
                <h4>Scalable Operations</h4>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 05: CORE MODULES
============================================= -->
<section id="features" class="sol-feature-grid">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <span class="sol-eyebrow gsap-reveal">PLATFORM MODULES</span>
            <h2 class="sol-heading gsap-reveal">Core Capabilities</h2>
        </div>
        
        <div class="sol-grid-container">
            <!-- MODULE 01 -->
            <div class="sol-hover-card gsap-reveal">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">01</span>
                </div>
                <h3>GDS Integration</h3>
                <ul>
                    <li>Amadeus</li>
                    <li>Sabre</li>
                    <li>Galileo</li>
                    <li>NDC Ready</li>
                </ul>
            </div>
            
            <!-- MODULE 02 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">02</span>
                </div>
                <h3>Ticket Management</h3>
                <ul>
                    <li>Bookings</li>
                    <li>Ticketing</li>
                    <li>Refunds</li>
                    <li>Reissues</li>
                </ul>
            </div>
            
            <!-- MODULE 03 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">03</span>
                </div>
                <h3>Holiday Packages</h3>
                <ul>
                    <li>Package Creation</li>
                    <li>Hotel Booking</li>
                    <li>Transfers</li>
                    <li>Tours</li>
                </ul>
            </div>
            
            <!-- MODULE 04 -->
            <div class="sol-hover-card gsap-reveal">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">04</span>
                </div>
                <h3>Supplier Management</h3>
                <ul>
                    <li>Contracts</li>
                    <li>Settlements</li>
                    <li>Payments</li>
                    <li>Tracking</li>
                </ul>
            </div>
            
            <!-- MODULE 05 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">05</span>
                </div>
                <h3>Corporate Travel</h3>
                <ul>
                    <li>Travel Requests</li>
                    <li>Approvals</li>
                    <li>Cost Control</li>
                    <li>Policy Compliance</li>
                </ul>
            </div>
            
            <!-- MODULE 06 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">06</span>
                </div>
                <h3>Travel Analytics</h3>
                <ul>
                    <li>Revenue</li>
                    <li>Profitability</li>
                    <li>MIS Reports</li>
                    <li>KPIs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 06: PSUITE TRAVEL ERP FEATURES
============================================= -->
<section class="sol-ecosystem" style="background: var(--sol-bg-white);">
    <div class="container">
        <span class="sol-eyebrow gsap-reveal">ALL FEATURES</span>
        <h2 class="sol-heading gsap-reveal">Comprehensive Toolkit</h2>
        
        <div class="sol-eco-grid gsap-reveal" style="gap: 2rem; display: grid; grid-template-columns: repeat(4, 1fr);">
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">GDS Integration</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">IATA NDC Integration</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Ticket Sales Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Holiday Sales Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">BSP Reconciliation</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Supplier Reconciliation</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Receivable Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Payable Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Corporate Travel Portal</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">MIS Reports</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Business Dashboards</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Mobile Responsive Access</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Multi-Level User Access</div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 07: TRAVEL OPERATIONS SHOWCASE
============================================= -->
<section class="sol-macbook-track">
    <div class="container sol-macbook-header">
        <span class="sol-eyebrow gsap-reveal">PLATFORM INTERFACE</span>
        <h2 class="sol-heading gsap-reveal">Travel Operations Showcase</h2>
    </div>
    
    <div class="sol-scroll-wrapper" id="macbook-scroll">
        <div class="sol-mockup-panel">
            <h3>Travel Dashboard</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/travel_operations_center.png') }}" alt="Travel Dashboard"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Ticketing Module</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Ticketing Module"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Holiday Management</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/inventory_dashboard.png') }}" alt="Holiday Management"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Supplier Portal</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/inventory_dashboard.png') }}" alt="Supplier Portal"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>BSP Reconciliation</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/finance_dashboard.png') }}" alt="BSP Reconciliation"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Finance Dashboard</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/finance_dashboard.png') }}" alt="Finance Dashboard"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>MIS Reports</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="MIS Reports"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Analytics</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Analytics"></div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 08: TRAVEL ECOSYSTEM INTELLIGENCE
============================================= -->
<section class="sol-dark-bento">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <span class="sol-eyebrow gsap-reveal" style="background: rgba(255,255,255,0.1); color: var(--sol-bg-white);">GLOBAL NETWORK</span>
            <h2 class="sol-heading gsap-reveal" style="color: var(--sol-bg-white);">Travel Ecosystem Intelligence</h2>
            <p class="sol-subheading gsap-reveal" style="margin: 0 auto; color: rgba(255,255,255,0.7);">Visualize Real-Time Booking Flow and Smart Travel Monitoring.</p>
        </div>
        
        <div class="sol-dark-grid">
            <div class="sol-dark-card gsap-reveal">
                <h3>Airlines & Suppliers</h3>
                <ul>
                    <li>Airlines</li>
                    <li>Hotels</li>
                    <li>Tour Operators</li>
                    <li>Suppliers</li>
                </ul>
            </div>
            <div class="sol-dark-card gsap-reveal" style="animation-delay: 0.1s; border-color: var(--sol-primary-light); background: rgba(22,194,191,0.1);">
                <h3 style="color: var(--sol-primary-light);">Travel Agencies</h3>
                <ul>
                    <li>Real-Time Booking Flow</li>
                    <li>Smart Travel Monitoring</li>
                    <li>Central Dashboard</li>
                </ul>
            </div>
            <div class="sol-dark-card gsap-reveal" style="animation-delay: 0.2s;">
                <h3>Clients</h3>
                <ul>
                    <li>Corporate Clients</li>
                    <li>B2C Retail Travelers</li>
                    <li>Sub-Agents Network</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 09: ADVANCED ERP CAPABILITIES
============================================= -->
<section class="sol-ecosystem">
    <div class="container">
        <span class="sol-eyebrow gsap-reveal">NATIVE INTEGRATION</span>
        <h2 class="sol-heading gsap-reveal">Advanced ERP Capabilities</h2>
        
        <div class="sol-eco-grid gsap-reveal" style="align-items: flex-start; text-align: left;">
            <div class="sol-bento-card">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">Finance Integration</h3>
                <ul>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Accounts Payable</li>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Accounts Receivable</li>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">General Ledger</li>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Cost Centres</li>
                    <li style="color: var(--sol-text-body);">Financial Reporting</li>
                </ul>
            </div>
            
            <div class="sol-bento-card">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">HR Integration</h3>
                <ul>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Attendance</li>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Payroll</li>
                    <li style="color: var(--sol-text-body);">Employee Management</li>
                </ul>
            </div>
            
            <div class="sol-bento-card">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">CRM Integration</h3>
                <ul>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Lead Management</li>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Sales Opportunities</li>
                    <li style="margin-bottom: 0.5rem; color: var(--sol-text-body);">Quotation Management</li>
                    <li style="color: var(--sol-text-body);">Customer Analytics</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 10: WHY CHOOSE PSUITE TRAVEL ERP
============================================= -->
<section style="background: var(--sol-primary-dark); padding: 8rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <h2 class="sol-heading gsap-reveal" style="color: var(--sol-bg-white);">Why Choose PSuite Travel ERP</h2>
        </div>
        
        <div class="sol-bento-grid">
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9);">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Trusted Expertise</h4>
                <p style="color: var(--sol-text-body);">50+ Happy Customers</p>
            </div>
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9); animation-delay: 0.1s;">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Continuous Innovation</h4>
                <p style="color: var(--sol-text-body);">Scalable Platform</p>
            </div>
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9); animation-delay: 0.2s;">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Real-Time Visibility</h4>
                <p style="color: var(--sol-text-body);">Data Driven Decisions</p>
            </div>
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9); animation-delay: 0.3s;">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Dedicated Support</h4>
                <p style="color: var(--sol-text-body);">Enterprise Security (Cloud & On-Premise)</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 11: FINAL CTA
============================================= -->
<section class="sol-cta-section">
    <div class="container">
        <h2 class="sol-cta-heading gsap-reveal">Transform Your<br>Travel Operations</h2>
        <p class="sol-subheading gsap-reveal" style="margin: 0 auto 3rem; color: rgba(255,255,255,0.9);">Manage bookings, ticketing, holiday packages, supplier settlements, BSP reconciliation and business reporting through one intelligent ERP platform.</p>
        
        <div class="sol-cta-group gsap-reveal" style="justify-content: center;">
            <a href="{{ route('book-demo') }}" class="sol-btn sol-btn-primary">Schedule Demo</a>
            <a href="{{ route('contact') }}" class="sol-btn sol-btn-secondary">Talk To Expert</a>
        </div>
    </div>
</section>

<!-- ============================================
     GSAP ANIMATION SCRIPT
============================================= -->
<script>
window.addEventListener('load', () => {
    if(typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // 1. Reveal Animations
        document.querySelectorAll('.gsap-reveal').forEach((el) => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out'
            });
        });

        // 2. Horizontal MacBook Scroll
        const macbookTrack = document.querySelector('.sol-macbook-track');
        const scrollWrapper = document.getElementById('macbook-scroll');
        
        if (macbookTrack && scrollWrapper) {
            let getToValue = () => -(scrollWrapper.scrollWidth - window.innerWidth);
            
            gsap.to(scrollWrapper, {
                x: getToValue,
                ease: "none",
                scrollTrigger: {
                    trigger: macbookTrack,
                    start: "top top",
                    end: () => "+=" + (scrollWrapper.scrollWidth - window.innerWidth),
                    pin: true,
                    scrub: 1,
                    invalidateOnRefresh: true
                }
            });
        }
    }
});
</script>

@endsection
