@extends('layouts.app')

@section('title', 'Enterprise CRM ERP Solution | PSuite')
@section('meta_description', 'Manage leads, enquiries, sales opportunities, quotations, customer interactions and revenue performance through one intelligent CRM platform.')

@section('header_class', 'transparent-header')

@section('content')

<!-- ============================================
     SECTION 01: FULL SCREEN HERO
============================================= -->
<style>
    .crm-premium-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #0f172a;
        background-image: url('{{ asset("images/customer-relationship-management/crm_hero_scene.png") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
        color: #ffffff;
        padding-top: 100px;
    }
    
    .crm-hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }
    
    .relative-z {
        position: relative;
        z-index: 2;
    }

    .crm-hero-content {
        max-width: 800px;
        padding: 5rem 0;
        text-align: left;
}

    .crm-pill-tag {
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
    
    .crm-pill-tag-icon {
        width: 18px;
        height: 18px;
        color: #1ab2a6;
    }

    .crm-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #ffffff;
        letter-spacing: -0.02em;
    }

    .crm-hero-content h1 .accent-text {
        color: #1ab2a6;
    }

    .crm-hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 2.5rem;
    }
    
    @media (max-width: 768px) {
        .crm-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important; font-size: 3.5rem; }
        .crm-hero-overlay { background: rgba(15, 23, 42, 0.85); }
        .crm-hero-content { padding: 3rem 0; }
    }
</style>

<section class="crm-premium-hero">
    <div class="crm-hero-overlay"></div>
    <div class="container relative-z">
        <div class="crm-hero-content gsap-reveal">
            <div class="crm-pill-tag">
                <svg class="crm-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                </svg>
                ENTERPRISE CRM ERP SOLUTION
            </div>
            <h1>Intelligent Sales.<br><span class="accent-text">Accelerated</span> Growth.</h1>
            <p>Manage leads, enquiries, sales opportunities, quotations, customer interactions and revenue performance through one intelligent CRM platform.</p>
            
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
        <div class="sol-marquee-item">1M+ Customer Records</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">99.8% Accuracy</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">24/7 Support</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Cloud Ready</div>
        <div class="sol-marquee-item">•</div>
        <!-- Duplicated for Loop -->
        <div class="sol-marquee-item">50+ Clients</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">1M+ Customer Records</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">99.8% Accuracy</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">24/7 Support</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Cloud Ready</div>
    </div>
</section>

<!-- ============================================
     SECTION 03: IMMERSIVE CUSTOMER JOURNEY
============================================= -->
<section class="sol-scroll-stack">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <span class="sol-eyebrow gsap-reveal">THE OPERATIONAL JOURNEY</span>
            <h2 class="sol-heading gsap-reveal">Immersive Customer Journey</h2>
        </div>

        <div class="sol-stack-container">
            <!-- Stack Card 1 -->
            <div class="sol-card-stack" id="stack-card-1">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 01</span>
                    <h3>Lead Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Lead Capture</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Lead Assignment</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Pipeline Entry</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="sol-stack-image" alt="Lead Management">
                </div>
            </div>

            <!-- Stack Card 2 -->
            <div class="sol-card-stack" id="stack-card-2" style="top: 18vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 02</span>
                    <h3>Enquiry Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Customer Requests</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Follow Ups</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Task Management</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="sol-stack-image" alt="Enquiry Management">
                </div>
            </div>

            <!-- Stack Card 3 -->
            <div class="sol-card-stack" id="stack-card-3" style="top: 21vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 03</span>
                    <h3>Sales Operations</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Sales Calls & Meetings</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Opportunity Tracking</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Pipeline Visibility</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="sol-stack-image" alt="Sales Operations">
                </div>
            </div>
            
            <!-- Stack Card 4 -->
            <div class="sol-card-stack" id="stack-card-4" style="top: 24vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 04</span>
                    <h3>Quotation Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Proposal Creation</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Quotation Approval</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Deal Progression</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="sol-stack-image" alt="Quotation Management">
                </div>
            </div>
            
            <!-- Stack Card 5 -->
            <div class="sol-card-stack" id="stack-card-5" style="top: 27vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 05</span>
                    <h3>Revenue Intelligence</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Sales Analytics</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Forecasting</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Business Insights</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/analytics_screen.png') }}" class="sol-stack-image" alt="Revenue Intelligence">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 04: REVENUE INTELLIGENCE SHOWCASE
============================================= -->
<section class="crm-revenue-showcase">
    <div class="container">
        <div style="text-align: center; margin-bottom: 2rem;">
            <span class="sol-eyebrow gsap-reveal">EXECUTIVE REPORTING</span>
            <h2 class="sol-heading gsap-reveal">Revenue Intelligence</h2>
            <p class="sol-subheading gsap-reveal" style="margin: 0 auto;">Pipeline Analytics • Forecasting Charts • Conversion Metrics</p>
        </div>
        <div class="crm-revenue-visual gsap-reveal">
            <img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Full Revenue Intelligence Dashboard">
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 05: WHAT IS CRM ERP
============================================= -->
<section class="sol-bento-section">
    <div class="container">
        <div class="sol-bento-grid">
            <div class="sol-bento-card sol-bento-large gsap-reveal">
                <h3>What Is Customer<br>Relationship Management ERP?</h3>
                <p>PSuite CRM ERP is a centralized customer relationship platform designed to manage leads, enquiries, opportunities, quotations, customer interactions and sales performance through one intelligent ecosystem.</p>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                <h4>Customer Visibility</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></div>
                <h4>Sales Automation</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.3s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg></div>
                <h4>Lead Conversion</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.4s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
                <h4>Revenue Growth</h4>
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
     SECTION 06: CORE CRM MODULES
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
                <h3>Lead Management</h3>
                <ul>
                    <li>Lead Capture</li>
                    <li>Lead Assignment</li>
                    <li>Lead Qualification</li>
                    <li>Lead Tracking</li>
                </ul>
            </div>
            
            <!-- MODULE 02 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">02</span>
                </div>
                <h3>Enquiry Management</h3>
                <ul>
                    <li>Customer Enquiries</li>
                    <li>Follow Ups</li>
                    <li>Task Scheduling</li>
                    <li>Communication History</li>
                </ul>
            </div>
            
            <!-- MODULE 03 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">03</span>
                </div>
                <h3>Sales Call Tracking</h3>
                <ul>
                    <li>Calls & Meetings</li>
                    <li>Opportunity Tracking</li>
                    <li>Pipeline Management</li>
                </ul>
            </div>
            
            <!-- MODULE 04 -->
            <div class="sol-hover-card gsap-reveal">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">04</span>
                </div>
                <h3>Quotation Management</h3>
                <ul>
                    <li>Quotation Creation</li>
                    <li>Approvals</li>
                    <li>Proposal Tracking</li>
                    <li>Price Management</li>
                </ul>
            </div>
            
            <!-- MODULE 05 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">05</span>
                </div>
                <h3>Customer Management</h3>
                <ul>
                    <li>Customer Profiles</li>
                    <li>Interaction History</li>
                    <li>Relationship Tracking</li>
                    <li>Account Management</li>
                </ul>
            </div>
            
            <!-- MODULE 06 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">06</span>
                </div>
                <h3>CRM Analytics</h3>
                <ul>
                    <li>KPI Dashboards</li>
                    <li>Sales Performance</li>
                    <li>Revenue Analytics</li>
                    <li>Forecasting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 07: PSUITE CRM FEATURES
============================================= -->
<section class="sol-ecosystem" style="background: var(--sol-bg-white);">
    <div class="container">
        <span class="sol-eyebrow gsap-reveal">ALL FEATURES</span>
        <h2 class="sol-heading gsap-reveal">Comprehensive Toolkit</h2>
        
        <div class="sol-eco-grid gsap-reveal" style="gap: 2rem; display: grid; grid-template-columns: repeat(4, 1fr);">
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Lead Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Enquiry Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Sales Call Tracking</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Quotation Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">KPI Dashboard</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">MIS Reports</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Customer Analytics</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Sales Pipeline Monitoring</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Performance Tracking</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Executive Dashboards</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Revenue Reporting</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Business Intelligence</div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 08: SALES OPERATIONS SHOWCASE
============================================= -->
<section class="sol-macbook-track">
    <div class="container sol-macbook-header">
        <span class="sol-eyebrow gsap-reveal">PLATFORM INTERFACE</span>
        <h2 class="sol-heading gsap-reveal">Sales Operations Showcase</h2>
    </div>
    
    <div class="sol-scroll-wrapper" id="macbook-scroll">
        <div class="sol-mockup-panel">
            <h3>CRM Dashboard</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="CRM Dashboard"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Lead Management</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Lead Management"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Enquiry Tracking</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Enquiry Tracking"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Sales Pipeline</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Sales Pipeline"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Quotation Management</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/finance_dashboard.png') }}" alt="Quotation Management"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Revenue Analytics</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Revenue Analytics"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>KPI Dashboard</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="KPI Dashboard"></div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 09: CUSTOMER INTELLIGENCE NETWORK
============================================= -->
<section class="sol-dark-bento">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <span class="sol-eyebrow gsap-reveal" style="background: rgba(255,255,255,0.1); color: var(--sol-bg-white);">GLOBAL NETWORK</span>
            <h2 class="sol-heading gsap-reveal" style="color: var(--sol-bg-white);">Customer Intelligence Network</h2>
            <p class="sol-subheading gsap-reveal" style="margin: 0 auto; color: rgba(255,255,255,0.7);">Visualize Real-Time Customer Flow and Connected Revenue Intelligence.</p>
        </div>
        
        <div class="sol-dark-grid">
            <div class="sol-dark-card gsap-reveal">
                <h3>Entities</h3>
                <ul>
                    <li>Leads</li>
                    <li>Customers</li>
                    <li>Branches</li>
                </ul>
            </div>
            <div class="sol-dark-card gsap-reveal" style="animation-delay: 0.1s; border-color: var(--sol-primary-light); background: rgba(22,194,191,0.1);">
                <h3 style="color: var(--sol-primary-light);">Intelligence</h3>
                <ul>
                    <li>Real-Time Customer Flow</li>
                    <li>Connected Revenue Intelligence</li>
                    <li>Smart Relationship Monitoring</li>
                </ul>
            </div>
            <div class="sol-dark-card gsap-reveal" style="animation-delay: 0.2s;">
                <h3>People & Teams</h3>
                <ul>
                    <li>Sales Teams</li>
                    <li>Managers & Executives</li>
                    <li>Marketing Teams</li>
                    <li>Support Teams</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 10: WHY CHOOSE PSUITE CRM ERP
============================================= -->
<section style="background: var(--sol-primary-dark); padding: 8rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <h2 class="sol-heading gsap-reveal" style="color: var(--sol-bg-white);">Why Choose PSuite CRM ERP</h2>
        </div>
        
        <div class="sol-bento-grid">
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9);">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Trusted Expertise</h4>
                <p style="color: var(--sol-text-body);">50+ Happy Customers</p>
            </div>
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9); animation-delay: 0.1s;">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Sales Intelligence</h4>
                <p style="color: var(--sol-text-body);">Continuous Innovation</p>
            </div>
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9); animation-delay: 0.2s;">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Dedicated Support</h4>
                <p style="color: var(--sol-text-body);">Scalable Architecture</p>
            </div>
            <div class="sol-bento-card gsap-reveal" style="background: rgba(255,255,255,0.9); animation-delay: 0.3s;">
                <h4 style="color: var(--sol-primary-dark); font-weight: 700; margin-bottom: 0.5rem;">Enterprise Security</h4>
                <p style="color: var(--sol-text-body);">Data Driven Decisions</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 11: FINAL CTA
============================================= -->
<section class="sol-cta-section">
    <div class="container">
        <h2 class="sol-cta-heading gsap-reveal">Transform Your<br>Customer Relationships</h2>
        <p class="sol-subheading gsap-reveal" style="margin: 0 auto 3rem; color: rgba(255,255,255,0.9);">Manage leads, enquiries, sales opportunities, quotations and customer interactions through one intelligent CRM platform built for modern businesses.</p>
        
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
