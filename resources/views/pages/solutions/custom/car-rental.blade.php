@extends('layouts.app')

@section('title', 'Enterprise Car Rental & Fleet Management ERP Solution | PSuite')
@section('meta_description', 'Manage reservations, fleet assets, maintenance schedules, agreements, invoices, vehicle tracking and profitability through one intelligent platform.')

@section('header_class', 'transparent-header')

@section('content')

<!-- ============================================
     SECTION 01: FULL SCREEN HERO
============================================= -->
<style>
    .fleet-premium-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #0f172a;
        background-image: url('{{ asset("images/car-rental/car_fleet_hero_scene_1781974955447.png") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
        color: #ffffff;
        padding-top: 100px;
    }
    
    .fleet-hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }
    
    .relative-z {
        position: relative;
        z-index: 2;
    }

    .fleet-hero-content {
        max-width: 800px;
        padding: 5rem 0;
        text-align: left;
}

    .fleet-pill-tag {
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
    
    .fleet-pill-tag-icon {
        width: 18px;
        height: 18px;
        color: #1ab2a6;
    }

    .fleet-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #ffffff;
        letter-spacing: -0.02em;
    }

    .fleet-hero-content h1 .accent-text {
        color: #1ab2a6;
    }

    .fleet-hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 2.5rem;
    }
    
    @media (max-width: 768px) {
        .fleet-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important; font-size: 3.5rem; }
        .fleet-hero-overlay { background: rgba(15, 23, 42, 0.85); }
        .fleet-hero-content { padding: 3rem 0; }
    }
</style>

<section class="fleet-premium-hero">
    <div class="fleet-hero-overlay"></div>
    <div class="container relative-z">
        <div class="fleet-hero-content gsap-reveal">
            <div class="fleet-pill-tag">
                <svg class="fleet-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"></path>
                </svg>
                ENTERPRISE FLEET ERP SOLUTION
            </div>
            <h1>Intelligent Fleet.<br><span class="accent-text">Optimized</span> Operations.</h1>
            <p>Manage reservations, fleet assets, maintenance schedules, agreements, invoices, vehicle tracking and profitability through one intelligent platform.</p>
            
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
        <div class="sol-marquee-item">500K+ Rental Transactions</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">99.8% Availability</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">24/7 Support</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">Cloud Ready</div>
        <div class="sol-marquee-item">•</div>
        <!-- Duplicated for Loop -->
        <div class="sol-marquee-item">50+ Clients</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">500K+ Rental Transactions</div>
        <div class="sol-marquee-item">•</div>
        <div class="sol-marquee-item">99.8% Availability</div>
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
            <h2 class="sol-heading gsap-reveal">End-to-End Mobility Intelligence</h2>
        </div>

        <div class="sol-stack-container">
            <!-- Stack Card 1 -->
            <div class="sol-card-stack" id="stack-card-1">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 01</span>
                    <h3>Fleet Asset Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Vehicle Registration</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Asset Tracking</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Ownership Records</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/fleet_operations_center.png') }}" class="sol-stack-image" alt="Fleet Asset Management">
                </div>
            </div>

            <!-- Stack Card 2 -->
            <div class="sol-card-stack" id="stack-card-2" style="top: 18vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 02</span>
                    <h3>Reservation Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Online Bookings</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Rental Scheduling</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Vehicle Allocation</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="sol-stack-image" alt="Reservation Management">
                </div>
            </div>

            <!-- Stack Card 3 -->
            <div class="sol-card-stack" id="stack-card-3" style="top: 21vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 03</span>
                    <h3>Fleet Operations</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Vehicle Transfers</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Fleet Availability</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Usage Tracking</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/fleet_operations_center.png') }}" class="sol-stack-image" alt="Fleet Operations">
                </div>
            </div>
            
            <!-- Stack Card 4 -->
            <div class="sol-card-stack" id="stack-card-4" style="top: 24vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 04</span>
                    <h3>Maintenance Management</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Service Schedules</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Repairs</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Workshop Tracking</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/workshop_dashboard.png') }}" class="sol-stack-image" alt="Maintenance Management">
                </div>
            </div>
            
            <!-- Stack Card 5 -->
            <div class="sol-card-stack" id="stack-card-5" style="top: 27vh;">
                <div class="sol-stack-content">
                    <span class="sol-eyebrow">STEP 05</span>
                    <h3>Fleet Analytics</h3>
                    <ul class="sol-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Revenue Analysis</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Utilization Reports</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Performance Insights</li>
                    </ul>
                </div>
                <div class="sol-stack-visual">
                    <img src="{{ asset('images/mockups/analytics_screen.png') }}" class="sol-stack-image" alt="Fleet Analytics">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 04: WHAT IS FLEET ERP
============================================= -->
<section class="sol-bento-section">
    <div class="container">
        <div class="sol-bento-grid">
            <div class="sol-bento-card sol-bento-large gsap-reveal">
                <h3>What Is Car Rental &<br>Fleet Management ERP?</h3>
                <p>PSuite Fleet ERP is a centralized mobility and vehicle management platform designed for car rental companies, leasing providers, transportation operators and fleet businesses.</p>
                <p style="margin-top: 1rem;">It centralizes reservations, fleet assets, agreements, maintenance, invoicing, vehicle tracking and analytics into one intelligent ecosystem.</p>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                <h4>Fleet Visibility</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></div>
                <h4>Operational Efficiency</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.3s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg></div>
                <h4>Maintenance Automation</h4>
            </div>
            
            <div class="sol-bento-card sol-bento-small gsap-reveal" style="animation-delay: 0.4s;">
                <div class="sol-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
                <h4>Revenue Optimization</h4>
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
                <h3>Fleet Asset Management</h3>
                <ul>
                    <li>Vehicle Records</li>
                    <li>Asset Tracking</li>
                    <li>Fleet Visibility</li>
                    <li>Lifecycle Management</li>
                </ul>
            </div>
            
            <!-- MODULE 02 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">02</span>
                </div>
                <h3>Reservation Management</h3>
                <ul>
                    <li>Bookings</li>
                    <li>Scheduling</li>
                    <li>Vehicle Allocation</li>
                    <li>Rental Tracking</li>
                </ul>
            </div>
            
            <!-- MODULE 03 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">03</span>
                </div>
                <h3>Rate Management</h3>
                <ul>
                    <li>Dynamic Pricing</li>
                    <li>Rental Packages</li>
                    <li>Promotions</li>
                    <li>Rate Control</li>
                </ul>
            </div>
            
            <!-- MODULE 04 -->
            <div class="sol-hover-card gsap-reveal">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">04</span>
                </div>
                <h3>Fleet Maintenance</h3>
                <ul>
                    <li>Preventive Maintenance</li>
                    <li>Repairs</li>
                    <li>Service History</li>
                    <li>Maintenance Alerts</li>
                </ul>
            </div>
            
            <!-- MODULE 05 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">05</span>
                </div>
                <h3>Fleet Documents</h3>
                <ul>
                    <li>Insurance</li>
                    <li>Registrations</li>
                    <li>Permits</li>
                    <li>Expiry Tracking</li>
                </ul>
            </div>
            
            <!-- MODULE 06 -->
            <div class="sol-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="sol-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">06</span>
                </div>
                <h3>Fleet Analytics</h3>
                <ul>
                    <li>Revenue</li>
                    <li>Utilization</li>
                    <li>Profitability</li>
                    <li>Business Insights</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 06: PSUITE FLEET ERP FEATURES
============================================= -->
<section class="sol-ecosystem" style="background: var(--sol-bg-white);">
    <div class="container">
        <span class="sol-eyebrow gsap-reveal">ALL FEATURES</span>
        <h2 class="sol-heading gsap-reveal">Comprehensive Toolkit</h2>
        
        <div class="sol-eco-grid gsap-reveal" style="gap: 2rem; display: grid; grid-template-columns: repeat(4, 1fr);">
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Fleet Asset Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Reservation Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Dynamic Fleet Search</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Dynamic Rate Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Lease Agreement Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Vehicle Exchange Tracking</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Internal Usage Tracking</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Fleet Transfer Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Invoice Tracking</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Maintenance Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Traffic Fine Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Fleet Document Management</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Depreciation Calculation</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Revenue Analysis Reports</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Operational Reports</div>
            <div class="sol-bento-card" style="padding: 1.5rem; text-align: center;">Maintenance Reports</div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 07: FLEET OPERATIONS SHOWCASE
============================================= -->
<section class="sol-macbook-track">
    <div class="container sol-macbook-header">
        <span class="sol-eyebrow gsap-reveal">PLATFORM INTERFACE</span>
        <h2 class="sol-heading gsap-reveal">Fleet Operations Showcase</h2>
    </div>
    
    <div class="sol-scroll-wrapper" id="macbook-scroll">
        <div class="sol-mockup-panel">
            <h3>Fleet Dashboard</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/fleet_operations_center.png') }}" alt="Fleet Dashboard"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Reservations</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Reservations"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Vehicle Tracking</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/fleet_operations_center.png') }}" alt="Vehicle Tracking"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Maintenance Module</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/workshop_dashboard.png') }}" alt="Maintenance Module"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Invoice Management</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/finance_dashboard.png') }}" alt="Invoice Management"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Revenue Analytics</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/finance_dashboard.png') }}" alt="Revenue Analytics"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Operational Reports</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Operational Reports"></div>
        </div>
        <div class="sol-mockup-panel">
            <h3>Business Insights</h3>
            <div class="sol-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Business Insights"></div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 08: MOBILITY INTELLIGENCE NETWORK
============================================= -->
<section class="sol-dark-bento">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <span class="sol-eyebrow gsap-reveal" style="background: rgba(255,255,255,0.1); color: var(--sol-bg-white);">GLOBAL NETWORK</span>
            <h2 class="sol-heading gsap-reveal" style="color: var(--sol-bg-white);">Mobility Intelligence Network</h2>
            <p class="sol-subheading gsap-reveal" style="margin: 0 auto; color: rgba(255,255,255,0.7);">Visualize Real-Time Fleet Movement and Smart Fleet Monitoring.</p>
        </div>
        
        <div class="sol-dark-grid">
            <div class="sol-dark-card gsap-reveal">
                <h3>Assets & Service</h3>
                <ul>
                    <li>Vehicles</li>
                    <li>Workshops</li>
                    <li>Service Centers</li>
                </ul>
            </div>
            <div class="sol-dark-card gsap-reveal" style="animation-delay: 0.1s; border-color: var(--sol-primary-light); background: rgba(22,194,191,0.1);">
                <h3 style="color: var(--sol-primary-light);">Operations</h3>
                <ul>
                    <li>Real-Time Fleet Movement</li>
                    <li>Smart Fleet Monitoring</li>
                    <li>Central Dashboard</li>
                </ul>
            </div>
            <div class="sol-dark-card gsap-reveal" style="animation-delay: 0.2s;">
                <h3>People & Locations</h3>
                <ul>
                    <li>Rental Branches</li>
                    <li>Customers</li>
                    <li>Drivers</li>
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
     SECTION 10: WHY CHOOSE PSUITE FLEET ERP
============================================= -->
<section style="background: var(--sol-primary-dark); padding: 8rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <h2 class="sol-heading gsap-reveal" style="color: var(--sol-bg-white);">Why Choose PSuite Fleet ERP</h2>
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
        <h2 class="sol-cta-heading gsap-reveal">Transform Your<br>Fleet Operations</h2>
        <p class="sol-subheading gsap-reveal" style="margin: 0 auto 3rem; color: rgba(255,255,255,0.9);">Manage reservations, fleet assets, maintenance, agreements, invoicing and business reporting through one intelligent ERP platform.</p>
        
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
