@extends('layouts.app')

@section('title', 'Enterprise Inventory Management ERP Solution | PSuite')
@section('meta_description', 'Gain complete control over inventory, procurement, warehouses, stock movement, suppliers, sales orders, and business analytics through one powerful ERP ecosystem.')

@section('header_class', 'transparent-header')

@section('content')

<!-- ============================================
     SECTION 01: FULL SCREEN HERO (DARK CINEMATIC)
============================================= -->
<style>
    .inv-premium-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #0f172a;
        background-image: url('{{ asset("images/inventory-management/inv_hero_scene_1781979504045.png") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
        color: #ffffff;
        padding-top: 100px;
    }
    
    .inv-hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0) 100%);
        z-index: 1;
    }
    
    .relative-z {
        position: relative;
        z-index: 2;
    }

    .inv-hero-content {
        max-width: 800px;
        padding: 5rem 0;
        text-align: left;
}

    .inv-pill-tag {
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
    
    .inv-pill-tag-icon {
        width: 18px;
        height: 18px;
        color: #1ab2a6;
    }

    .inv-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #ffffff;
        letter-spacing: -0.02em;
    }

    .inv-hero-content h1 .accent-text {
        color: #1ab2a6;
    }

    .inv-hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 2.5rem;
    }
    
    @media (max-width: 768px) {
        .inv-hero-content h1 {
        margin-left: 0 !important;
        text-align: left !important; font-size: 3.5rem; }
        .inv-hero-overlay { background: rgba(15, 23, 42, 0.85); }
        .inv-hero-content { padding: 3rem 0; }
    }
</style>

<section class="inv-premium-hero">
    <div class="inv-hero-overlay"></div>
    <div class="container relative-z">
        <div class="inv-hero-content gsap-reveal">
            <div class="inv-pill-tag">
                <svg class="inv-pill-tag-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                ENTERPRISE INVENTORY SOLUTION
            </div>
            <h1>Intelligent Inventory.<br><span class="accent-text">Optimized</span> Logistics.</h1>
            <p>Gain complete control over inventory, procurement, warehouses, stock movement, suppliers, sales orders, and business analytics through one powerful ERP ecosystem.</p>
            
            <div class="inv-cta-group" style="justify-content: flex-start;">
                <a href="{{ route('book-demo') }}" class="inv-btn inv-btn-primary">Schedule Demo</a>
                <a href="#features" class="inv-btn inv-btn-secondary" style="background: rgba(255,255,255,0.1); color: #ffffff; border: 1px solid rgba(255,255,255,0.3); backdrop-filter: blur(5px);">Watch Product Tour</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 02: CLIENT TRUST BAR
============================================= -->
<section class="inv-marquee-section">
    <div class="inv-marquee-track">
        <!-- Original Set -->
        <div class="inv-marquee-item">50+ Clients</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">1M+ Products Managed</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">99.8% Inventory Accuracy</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">24/7 Support</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">Cloud Ready</div>
        <div class="inv-marquee-item">•</div>
        <!-- Duplicated for Loop -->
        <div class="inv-marquee-item">50+ Clients</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">1M+ Products Managed</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">99.8% Inventory Accuracy</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">24/7 Support</div>
        <div class="inv-marquee-item">•</div>
        <div class="inv-marquee-item">Cloud Ready</div>
    </div>
</section>

<!-- ============================================
     SECTION 03: IMMERSIVE STORYTELLING SCROLL
============================================= -->
<section class="inv-scroll-stack">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <span class="inv-eyebrow-light gsap-reveal">THE OPERATIONAL JOURNEY</span>
            <h2 class="inv-heading gsap-reveal" style="color: var(--inv-text-heading);">End-to-End Warehouse Intelligence</h2>
        </div>

        <div class="inv-stack-container">
            <!-- Stack Card 1 -->
            <div class="inv-card-stack" id="stack-card-1">
                <div class="inv-stack-content">
                    <span class="inv-eyebrow-light">STEP 01</span>
                    <h3>Inventory Tracking</h3>
                    <ul class="inv-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Real-time stock visibility</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Barcode tracking</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Warehouse monitoring</li>
                    </ul>
                </div>
                <div class="inv-stack-visual">
                    <img src="{{ asset('images/mockups/inventory_dashboard.png') }}" class="inv-stack-image" alt="Inventory Tracking">
                </div>
            </div>

            <!-- Stack Card 2 -->
            <div class="inv-card-stack" id="stack-card-2" style="top: 18vh;">
                <div class="inv-stack-content">
                    <span class="inv-eyebrow-light">STEP 02</span>
                    <h3>Procurement Management</h3>
                    <ul class="inv-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Purchase requests</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Supplier approvals</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Automated procurement</li>
                    </ul>
                </div>
                <div class="inv-stack-visual">
                    <img src="{{ asset('images/mockups/finance_dashboard.png') }}" class="inv-stack-image" alt="Procurement Management">
                </div>
            </div>

            <!-- Stack Card 3 -->
            <div class="inv-card-stack" id="stack-card-3" style="top: 21vh;">
                <div class="inv-stack-content">
                    <span class="inv-eyebrow-light">STEP 03</span>
                    <h3>Warehouse Operations</h3>
                    <ul class="inv-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Stock transfers</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Receiving management</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Dispatch control</li>
                    </ul>
                </div>
                <div class="inv-stack-visual">
                    <img src="{{ asset('images/mockups/logistics_dashboard.png') }}" class="inv-stack-image" alt="Warehouse Operations">
                </div>
            </div>
            
            <!-- Stack Card 4 -->
            <div class="inv-card-stack" id="stack-card-4" style="top: 24vh;">
                <div class="inv-stack-content">
                    <span class="inv-eyebrow-light">STEP 04</span>
                    <h3>Sales & Fulfillment</h3>
                    <ul class="inv-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Order processing</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Inventory allocation</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Shipment tracking</li>
                    </ul>
                </div>
                <div class="inv-stack-visual">
                    <img src="{{ asset('images/mockups/crm_dashboard.png') }}" class="inv-stack-image" alt="Sales & Fulfillment">
                </div>
            </div>
            
            <!-- Stack Card 5 -->
            <div class="inv-card-stack" id="stack-card-5" style="top: 27vh;">
                <div class="inv-stack-content">
                    <span class="inv-eyebrow-light">STEP 05</span>
                    <h3>Business Intelligence</h3>
                    <ul class="inv-stack-list">
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Inventory valuation</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Stock aging</li>
                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg> Profitability analytics</li>
                    </ul>
                </div>
                <div class="inv-stack-visual">
                    <img src="{{ asset('images/mockups/analytics_screen.png') }}" class="inv-stack-image" alt="Business Intelligence">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 04: WHAT IS INVENTORY ERP
============================================= -->
<section class="inv-bento-section">
    <div class="container">
        <div class="inv-bento-grid">
            <div class="inv-bento-card inv-bento-large gsap-reveal">
                <h3>What is Inventory<br>Management ERP?</h3>
                <p>PSuite Inventory ERP is a centralized inventory and warehouse management platform designed for distributors, wholesalers, retailers, manufacturers, and logistics businesses.</p>
                <p style="margin-top: 1rem;">It helps organizations manage stock, procurement, suppliers, warehouses, fulfillment, and inventory analytics from one intelligent ecosystem.</p>
            </div>
            
            <div class="inv-bento-card inv-bento-small gsap-reveal" style="animation-delay: 0.1s;">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                <h4>Inventory Visibility</h4>
            </div>
            
            <div class="inv-bento-card inv-bento-small gsap-reveal" style="animation-delay: 0.2s;">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></div>
                <h4>Warehouse Efficiency</h4>
            </div>
            
            <div class="inv-bento-card inv-bento-small gsap-reveal" style="animation-delay: 0.3s;">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg></div>
                <h4>Automated Procurement</h4>
            </div>
            
            <div class="inv-bento-card inv-bento-small gsap-reveal" style="animation-delay: 0.4s;">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
                <h4>Stock Optimization</h4>
            </div>
            
            <div class="inv-bento-card inv-bento-small gsap-reveal" style="animation-delay: 0.5s;">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg></div>
                <h4>Real-Time Reporting</h4>
            </div>
            
            <div class="inv-bento-card inv-bento-small gsap-reveal" style="animation-delay: 0.6s;">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg></div>
                <h4>Scalable Operations</h4>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 05: CORE MODULES
============================================= -->
<section id="features" class="inv-feature-grid">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <span class="inv-eyebrow-light gsap-reveal">PLATFORM MODULES</span>
            <h2 class="inv-heading gsap-reveal" style="color: var(--inv-text-heading);">Core Capabilities</h2>
        </div>
        
        <div class="inv-grid-container">
            <!-- MODULE 01 -->
            <div class="inv-hover-card gsap-reveal">
                <div class="inv-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">01</span>
                </div>
                <h3>Inventory Control</h3>
                <ul>
                    <li>Stock Tracking</li>
                    <li>Barcode Management</li>
                    <li>Inventory Movement</li>
                    <li>Stock Visibility</li>
                </ul>
            </div>
            
            <!-- MODULE 02 -->
            <div class="inv-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="inv-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">02</span>
                </div>
                <h3>Warehouse Management</h3>
                <ul>
                    <li>Multi-Warehouse Support</li>
                    <li>Transfers</li>
                    <li>Receiving</li>
                    <li>Dispatch Management</li>
                </ul>
            </div>
            
            <!-- MODULE 03 -->
            <div class="inv-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="inv-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">03</span>
                </div>
                <h3>Procurement Management</h3>
                <ul>
                    <li>Purchase Requests</li>
                    <li>Purchase Orders</li>
                    <li>Vendor Approvals</li>
                    <li>Supplier Evaluation</li>
                </ul>
            </div>
            
            <!-- MODULE 04 -->
            <div class="inv-hover-card gsap-reveal">
                <div class="inv-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">04</span>
                </div>
                <h3>Supplier Management</h3>
                <ul>
                    <li>Vendor Database</li>
                    <li>Performance Tracking</li>
                    <li>Supplier Analytics</li>
                    <li>Contract Management</li>
                </ul>
            </div>
            
            <!-- MODULE 05 -->
            <div class="inv-hover-card gsap-reveal" style="animation-delay: 0.1s;">
                <div class="inv-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">05</span>
                </div>
                <h3>Sales & Distribution</h3>
                <ul>
                    <li>Sales Orders</li>
                    <li>Order Fulfillment</li>
                    <li>Inventory Allocation</li>
                    <li>Shipment Tracking</li>
                </ul>
            </div>
            
            <!-- MODULE 06 -->
            <div class="inv-hover-card gsap-reveal" style="animation-delay: 0.2s;">
                <div class="inv-hc-icon">
                    <span style="font-weight:800; font-size:1.5rem;">06</span>
                </div>
                <h3>Inventory Analytics</h3>
                <ul>
                    <li>Inventory Valuation</li>
                    <li>Stock Aging</li>
                    <li>Demand Forecasting</li>
                    <li>Business Insights</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 06: PSUITE INVENTORY ERP FEATURES
============================================= -->
<section class="inv-ecosystem" style="background: var(--inv-bg-white);">
    <div class="container">
        <span class="inv-eyebrow-light gsap-reveal">ALL FEATURES</span>
        <h2 class="inv-heading gsap-reveal" style="color: var(--inv-text-heading);">Comprehensive Toolkit</h2>
        
        <div class="inv-eco-grid gsap-reveal" style="gap: 2rem; display: grid; grid-template-columns: repeat(4, 1fr);">
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Inventory Tracking</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Multi-Warehouse Operations</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Barcode Management</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Stock Monitoring</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Product Categorization</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Purchase Order Management</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Supplier Management</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Reorder Point Automation</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Vendor Evaluation</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Sales Order Processing</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">POS Integration</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Inventory Valuation</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Sales Profitability Analysis</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Warehouse Performance Reports</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Inventory Reporting</div>
            <div class="inv-bento-card" style="padding: 1.5rem; text-align: center;">Business Dashboards</div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 07: WAREHOUSE OPERATIONS SHOWCASE
============================================= -->
<section class="inv-macbook-track">
    <div class="container inv-macbook-header">
        <span class="inv-eyebrow-light gsap-reveal">PLATFORM INTERFACE</span>
        <h2 class="inv-heading gsap-reveal" style="color: var(--inv-text-heading);">Warehouse Operations Showcase</h2>
    </div>
    
    <div class="inv-scroll-wrapper" id="macbook-scroll">
        <div class="inv-mockup-panel">
            <h3>Inventory Dashboard</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/inventory_dashboard.png') }}" alt="Inventory Dashboard"></div>
        </div>
        <div class="inv-mockup-panel">
            <h3>Warehouse Management</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/logistics_dashboard.png') }}" alt="Warehouse Management"></div>
        </div>
        <div class="inv-mockup-panel">
            <h3>Purchase Orders</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/finance_dashboard.png') }}" alt="Purchase Orders"></div>
        </div>
        <div class="inv-mockup-panel">
            <h3>Supplier Management</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Supplier Management"></div>
        </div>
        <div class="inv-mockup-panel">
            <h3>Sales Orders</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/crm_dashboard.png') }}" alt="Sales Orders"></div>
        </div>
        <div class="inv-mockup-panel">
            <h3>Inventory Reports</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Inventory Reports"></div>
        </div>
        <div class="inv-mockup-panel">
            <h3>Business Analytics</h3>
            <div class="inv-macbook-frame"><img src="{{ asset('images/mockups/analytics_screen.png') }}" alt="Business Analytics"></div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 08: SUPPLY CHAIN INTELLIGENCE
============================================= -->
<section class="inv-dark-section">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <span class="inv-eyebrow gsap-reveal">GLOBAL NETWORK</span>
            <h2 class="inv-heading gsap-reveal">Supply Chain Intelligence</h2>
            <p class="inv-subheading gsap-reveal" style="margin: 0 auto;">Visualize real-time inventory movement and smart supply chain monitoring.</p>
        </div>
        
        <div class="inv-dark-grid">
            <div class="inv-dark-card gsap-reveal">
                <h3>Nodes & Locations</h3>
                <ul>
                    <li>Warehouses</li>
                    <li>Distribution Centers</li>
                    <li>Retail Stores</li>
                </ul>
            </div>
            <div class="inv-dark-card gsap-reveal" style="animation-delay: 0.1s; border-color: var(--inv-accent); background: rgba(20,184,166,0.1);">
                <h3 style="color: var(--inv-accent-light);">Operations</h3>
                <ul>
                    <li>Real-Time Inventory Movement</li>
                    <li>Smart Supply Chain Monitoring</li>
                    <li>Central Tracking</li>
                </ul>
            </div>
            <div class="inv-dark-card gsap-reveal" style="animation-delay: 0.2s;">
                <h3>Partners</h3>
                <ul>
                    <li>Suppliers</li>
                    <li>Customers</li>
                    <li>Vendors</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 09: ADVANCED ERP CAPABILITIES
============================================= -->
<section class="inv-ecosystem">
    <div class="container">
        <span class="inv-eyebrow-light gsap-reveal">NATIVE INTEGRATION</span>
        <h2 class="inv-heading gsap-reveal" style="color: var(--inv-text-heading);">Advanced ERP Capabilities</h2>
        
        <div class="inv-eco-grid gsap-reveal" style="align-items: flex-start; text-align: left;">
            <div class="inv-bento-card">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">Finance Integration</h3>
                <ul>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Accounts Payable & Receivable</li>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">General Ledger</li>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Cost Centers</li>
                    <li style="color: var(--inv-text-body);">Financial Reporting</li>
                </ul>
            </div>
            
            <div class="inv-bento-card">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">HR Integration</h3>
                <ul>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Attendance & Payroll</li>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Employee Management</li>
                    <li style="color: var(--inv-text-body);">Workforce Analytics</li>
                </ul>
            </div>
            
            <div class="inv-bento-card">
                <div class="inv-bento-icon"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">CRM Integration</h3>
                <ul>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Lead Management</li>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Sales Opportunities</li>
                    <li style="margin-bottom: 0.5rem; color: var(--inv-text-body);">Quotation Management</li>
                    <li style="color: var(--inv-text-body);">Customer Analytics</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 10: WHY CHOOSE PSUITE INVENTORY ERP
============================================= -->
<section style="background: var(--inv-secondary); padding: 8rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 5rem;">
            <h2 class="inv-heading gsap-reveal" style="color: var(--inv-bg-white);">Why Choose PSuite Inventory ERP</h2>
        </div>
        
        <div class="inv-bento-grid">
            <div class="inv-bento-card gsap-reveal" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
                <h4 style="color: var(--inv-bg-white); font-weight: 700; margin-bottom: 0.5rem;">Trusted Expertise</h4>
                <p style="color: rgba(255,255,255,0.7);">50+ Happy Customers</p>
            </div>
            <div class="inv-bento-card gsap-reveal" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); animation-delay: 0.1s;">
                <h4 style="color: var(--inv-bg-white); font-weight: 700; margin-bottom: 0.5rem;">Inventory Accuracy</h4>
                <p style="color: rgba(255,255,255,0.7);">Continuous Innovation</p>
            </div>
            <div class="inv-bento-card gsap-reveal" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); animation-delay: 0.2s;">
                <h4 style="color: var(--inv-bg-white); font-weight: 700; margin-bottom: 0.5rem;">Real-Time Visibility</h4>
                <p style="color: rgba(255,255,255,0.7);">Data-Driven Decisions</p>
            </div>
            <div class="inv-bento-card gsap-reveal" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); animation-delay: 0.3s;">
                <h4 style="color: var(--inv-bg-white); font-weight: 700; margin-bottom: 0.5rem;">Dedicated Support</h4>
                <p style="color: rgba(255,255,255,0.7);">Enterprise Security & Scalability</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     SECTION 11: FINAL CTA
============================================= -->
<section class="inv-cta-section">
    <div class="inv-hero-bg-effects" style="opacity: 0.5;"></div>
    <div class="container">
        <h2 class="inv-cta-heading gsap-reveal">Take Full Control Of<br>Your Inventory Operations</h2>
        <p class="inv-subheading gsap-reveal" style="margin: 0 auto 3rem; color: rgba(255,255,255,0.9);">Optimize inventory, automate procurement, improve warehouse efficiency, reduce stock losses, and make data-driven decisions with PSuite Inventory ERP.</p>
        
        <div class="inv-cta-group gsap-reveal" style="justify-content: center;">
            <a href="{{ route('book-demo') }}" class="inv-btn inv-btn-primary">Schedule Demo</a>
            <a href="{{ route('contact') }}" class="inv-btn inv-btn-secondary">Talk To Expert</a>
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
        const macbookTrack = document.querySelector('.inv-macbook-track');
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
