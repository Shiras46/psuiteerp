<!-- SECTION: ERP MODULES -->
<section class="home-erp-modules" style="padding: var(--home-section-padding) 0; background-color: var(--home-bg-soft);">
    <div class="container">
        <div class="hem-header gsap-fade-up" style="text-align: center; margin-bottom: 4rem;">
            <h2>Core ERP Modules</h2>
            <p>Everything you need to run your enterprise on a single, unified platform.</p>
        </div>
        
        <div class="hem-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <!-- Finance -->
            <div class="hem-card gsap-fade-up">
                <div class="hem-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3>Finance & Accounting</h3>
                <p>Automate AP/AR, general ledger, and get real-time cash flow visibility.</p>
            </div>
            
            <!-- HR -->
            <div class="hem-card gsap-fade-up" style="transition-delay: 0.1s;">
                <div class="hem-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <h3>Human Resources</h3>
                <p>Manage payroll, recruitment, attendance, and employee performance seamlessly.</p>
            </div>
            
            <!-- Inventory -->
            <div class="hem-card gsap-fade-up" style="transition-delay: 0.2s;">
                <div class="hem-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                </div>
                <h3>Inventory & Stock</h3>
                <p>Track multi-warehouse inventory levels, procurement, and supplier metrics.</p>
            </div>
            
            <!-- CRM -->
            <div class="hem-card gsap-fade-up" style="transition-delay: 0.3s;">
                <div class="hem-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                    </svg>
                </div>
                <h3>CRM & Sales</h3>
                <p>Capture leads, streamline sales pipelines, and boost customer retention.</p>
            </div>
        </div>
    </div>
    <style>
        .hem-card {
            background: var(--home-bg-white);
            border-radius: var(--home-radius);
            padding: 2.5rem;
            border: 1px solid var(--home-border);
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            position: relative;
            overflow: hidden;
        }
        .hem-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--home-shadow);
            border-color: var(--home-primary);
        }
        .hem-icon {
            width: 64px;
            height: 64px;
            border-radius: 14px;
            background: rgba(20, 184, 166, 0.1);
            color: var(--home-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
        }
        .hem-icon svg {
            width: 32px;
            height: 32px;
        }
        .hem-card:hover .hem-icon {
            background: var(--home-primary);
            color: white;
            transform: scale(1.1) rotate(5deg);
        }
        .hem-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .hem-card p {
            color: var(--home-text-body);
            line-height: 1.6;
        }
    </style>
</section>
