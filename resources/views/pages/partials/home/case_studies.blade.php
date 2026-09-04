<!-- SECTION: CASE STUDIES -->
<section class="home-case-studies" style="padding: var(--home-section-padding) 0; background: linear-gradient(180deg, #F8FAFC, #FFFFFF);">
    <div class="container">
        <div class="hw-header gsap-fade-up" style="text-align: center; margin-bottom: 4rem;">
            <h2>Enterprise Case Studies</h2>
            <p>See how industry leaders scale their operations with PSuite ERP.</p>
        </div>
        
        <div class="hss-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem; margin-bottom: 3rem;">
            
            <!-- Case Study 1 -->
            <div class="hcs-card gsap-fade-up">
                <div class="hcs-badge">Fleet ERP</div>
                <h3 class="hcs-title">Global Logistics Optimization</h3>
                <p class="hcs-desc">By migrating from legacy systems to PSuite's unified fleet and finance modules, this enterprise gained real-time visibility into their supply chain.</p>
                <div class="hcs-divider"></div>
                <div class="hcs-results">
                    <div class="hcs-result-val">67%</div>
                    <div class="hcs-result-lbl">Reduced Manual Work</div>
                </div>
                <a href="#" class="hcs-link">View Case Study &rarr;</a>
            </div>
            
            <!-- Case Study 2 -->
            <div class="hcs-card gsap-fade-up" style="transition-delay: 0.1s;">
                <div class="hcs-badge">Inventory ERP</div>
                <h3 class="hcs-title">Automating Multi-Warehouse Retail</h3>
                <p class="hcs-desc">Consolidated 12 separate warehouses into a single inventory management ecosystem, virtually eliminating stockouts and dead stock.</p>
                <div class="hcs-divider"></div>
                <div class="hcs-results">
                    <div class="hcs-result-val">95%</div>
                    <div class="hcs-result-lbl">Automation Rate</div>
                </div>
                <a href="#" class="hcs-link">View Case Study &rarr;</a>
            </div>
            
            <!-- Case Study 3 -->
            <div class="hcs-card gsap-fade-up" style="transition-delay: 0.2s;">
                <div class="hcs-badge">Travel ERP</div>
                <h3 class="hcs-title">Transforming Travel Operations</h3>
                <p class="hcs-desc">Automated BSP billing, supplier payments, and B2B bookings, allowing the team to scale operations across 3 new countries effortlessly.</p>
                <div class="hcs-divider"></div>
                <div class="hcs-results">
                    <div class="hcs-result-val">300%</div>
                    <div class="hcs-result-lbl">Increase in ROI</div>
                </div>
                <a href="#" class="hcs-link">View Case Study &rarr;</a>
            </div>
        </div>
        
        <div class="hcs-footer gsap-fade-up" style="text-align: center; margin-bottom: 3rem;">
            <a href="{{ route('solutions.index') }}" class="hcs-explore-link">Explore Success Stories &rarr;</a>
        </div>
        
        <!-- Trust Numbers -->
        <div class="hcs-trust-numbers gsap-fade-up">
            <div class="hcs-trust-divider"></div>
            <div class="hcs-trust-grid">
                <div class="hcs-trust-item">
                    <span class="hcs-trust-val">500+</span>
                    <span class="hcs-trust-lbl">Projects Delivered</span>
                </div>
                <div class="hcs-trust-item">
                    <span class="hcs-trust-val">98%</span>
                    <span class="hcs-trust-lbl">Retention</span>
                </div>
                <div class="hcs-trust-item">
                    <span class="hcs-trust-val">50+</span>
                    <span class="hcs-trust-lbl">Enterprise Clients</span>
                </div>
            </div>
            <div class="hcs-trust-divider"></div>
        </div>

    </div>

    <style>
        .hcs-card {
            background: #FFFFFF;
            border: 1px solid var(--home-border);
            border-radius: var(--home-radius);
            padding: 2rem;
            min-height: 440px;
            display: flex;
            flex-direction: column;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
        }
        .hcs-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--home-shadow);
            border-color: var(--home-primary);
        }
        .hcs-badge {
            display: inline-block;
            padding: 6px 12px;
            background: rgba(20, 184, 166, 0.1);
            color: var(--home-primary);
            font-size: 13px;
            font-weight: 700;
            border-radius: 99px;
            margin-bottom: 1.5rem;
            width: fit-content;
        }
        .hcs-logo {
            margin-bottom: 1.5rem;
        }
        .hcs-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--home-text-heading);
            line-height: 1.2;
        }
        .hcs-desc {
            color: var(--home-text-body);
            line-height: 1.5;
            font-size: 15px;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        .hcs-divider {
            width: 100%;
            height: 1px;
            background: var(--home-border);
            margin: 1.5rem 0;
        }
        .hcs-result-val {
            font-size: 42px;
            font-weight: 800;
            color: var(--home-primary);
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.25rem;
            line-height: 1;
        }
        .hcs-result-lbl {
            font-size: 14px;
            font-weight: 600;
            color: var(--home-text-heading);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .hcs-link {
            display: inline-flex;
            align-items: center;
            color: var(--home-text-heading);
            font-weight: 600;
            text-decoration: none;
            margin-top: 2rem;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        .hcs-link:hover {
            color: var(--home-primary);
        }
        .hcs-explore-link {
            display: inline-flex;
            align-items: center;
            color: var(--home-primary);
            font-weight: 700;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        .hcs-explore-link:hover {
            color: var(--home-primary-dark);
            transform: translateX(4px);
        }
        
        .hcs-trust-numbers {
            margin-top: 2rem;
        }
        .hcs-trust-divider {
            height: 1px;
            background: var(--home-border);
            width: 100%;
        }
        .hcs-trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: center;
            padding: 1.5rem 0;
        }
        .hcs-trust-val {
            display: block;
            font-size: 32px;
            font-weight: 800;
            color: var(--home-text-heading);
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.5rem;
        }
        .hcs-trust-lbl {
            font-size: 16px;
            color: var(--home-text-body);
            font-weight: 500;
        }
        @media (max-width: 768px) {
            .hcs-trust-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</section>