<!-- SECTION 04: BUSINESS INTELLIGENCE EXPERIENCE -->
<style>
    .home-bi {
        padding: 60px 2vw;
        background: #ffffff;
        background-image: radial-gradient(circle at top, rgba(20,184,166,0.02), transparent 70%);
        text-align: center;
        overflow: hidden;
    }
    .hbi-container {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 40px;
        max-width: 1320px;
        margin: 0 auto;
        align-items: center;
        text-align: left;
    }
    .hbi-left {
        display: flex;
        flex-direction: column;
    }
    .hbi-tag {
        color: #14B8A6;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 1rem;
    }
    .hbi-left h2 {
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #0F172A;
        line-height: 1.15;
    }
    .hbi-left > p {
        color: #64748B;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    .hbi-feature-cards {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem;
    }
    .hbi-fcard {
        background: #ffffff;
        border: 1px solid #E5E7EB;
        padding: 18px 20px;
        border-radius: 16px;
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }
    .hbi-fcard:hover {
        transform: translateY(-4px);
        border-color: #14B8A6;
        box-shadow: 0 10px 25px rgba(20, 184, 166, 0.08);
    }
    .hbi-fcard-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: rgba(20, 184, 166, 0.05);
        border: 1px solid rgba(20, 184, 166, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #14B8A6;
        flex-shrink: 0;
    }
    .hbi-fcard-icon svg {
        width: 22px;
        height: 22px;
    }
    .hbi-fcard-content h4 {
        font-size: 15px;
        color: #0F172A;
        margin: 0 0 4px 0;
        font-weight: 700;
    }
    .hbi-fcard-content p {
        font-size: 13px;
        color: #64748B;
        line-height: 1.4;
        margin: 0;
    }
    
    .hbi-right {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .hbi-main-img {
        width: 100%;
        max-width: 600px;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.06);
        border: 1px solid #E2E8F0;
        transition: transform 0.4s ease;
    }
    .hbi-right:hover .hbi-main-img {
        transform: translateY(-4px) scale(1.01);
    }
    
    /* Bottom Impact Stats Row */
    .hbi-impact-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        max-width: 1320px;
        margin: 48px auto 0 auto;
        border-top: 1px solid #E2E8F0;
        padding-top: 32px;
        text-align: left;
    }
    .hbi-impact-card {
        background: #ffffff;
        border: 1px solid #E5E7EB;
        border-radius: 16px;
        padding: 20px;
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .hbi-impact-card:hover {
        transform: translateY(-4px);
        border-color: #14B8A6;
        box-shadow: 0 10px 25px rgba(20, 184, 166, 0.06);
    }
    .hbi-impact-card .label {
        font-size: 14px;
        font-weight: 700;
        color: #475569;
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }
    .hbi-impact-card .num {
        font-size: 36px;
        font-weight: 800;
        color: #14B8A6;
        line-height: 1.1;
        margin-bottom: 6px;
    }
    .hbi-impact-card .desc {
        font-size: 13px;
        color: #64748B;
        line-height: 1.4;
    }
    
    @media (max-width: 1024px) {
        .hbi-container {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .hbi-impact-row {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 768px) {
        .hbi-left h2 { font-size: 32px; }
        .hbi-feature-cards {
            grid-template-columns: 1fr;
        }
    }
    @media (max-width: 480px) {
        .hbi-impact-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="home-bi">
    <div class="hbi-container">
        <!-- Left Column -->
        <div class="hbi-left">
            <div class="hbi-tag gsap-bi-anim">BUSINESS INTELLIGENCE</div>
            <h2 class="gsap-bi-anim">Turn Operational Data Into<br>Strategic Business Decisions</h2>
            <p class="gsap-bi-anim">Transform data from finance, HR, CRM, inventory and operations into real-time executive dashboards.</p>
            
            <div class="hbi-feature-cards gsap-bi-anim">
                
                <div class="hbi-fcard">
                    <div class="hbi-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg>
                    </div>
                    <div class="hbi-fcard-content">
                        <h4>Revenue Intelligence</h4>
                        <p>Track revenue trends using live financial data.</p>
                    </div>
                </div>
                
                <div class="hbi-fcard">
                    <div class="hbi-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <div class="hbi-fcard-content">
                        <h4>Sales Forecasting</h4>
                        <p>Predict opportunities before they happen.</p>
                    </div>
                </div>
                
                <div class="hbi-fcard">
                    <div class="hbi-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6-1.5h3M3.75 7.5L12 3.75 20.25 7.5M12 3.75v16.5"/></svg>
                    </div>
                    <div class="hbi-fcard-content">
                        <h4>Inventory Analytics</h4>
                        <p>Optimize warehouse performance.</p>
                    </div>
                </div>
                
                <div class="hbi-fcard">
                    <div class="hbi-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.109A11.386 11.386 0 0110.089 21c-2.213 0-4.284-.63-6.04-1.724v-.235a4.125 4.125 0 017.53-2.493c.501.91.786 1.957.786 3.07v.003m-3-10.999a3 3 0 11-6 0 3 3 0 016 0zm11.25 0a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div class="hbi-fcard-content">
                        <h4>Workforce Analytics</h4>
                        <p>Measure productivity across departments.</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Right Column -->
        <div class="hbi-right gsap-bi-anim">
            <img src="{{ asset('images/mockups/analytics_screen.webp') }}" alt="BI Dashboard Analytics" class="hbi-main-img">
        </div>
    </div>
    
    <!-- Bottom Impact Stats -->
    <div class="hbi-impact-row gsap-bi-stats">
        
        <div class="hbi-impact-card">
            <div class="label"><span style="margin-right: 8px;">📈</span> Forecast Accuracy</div>
            <div class="num"><span class="hsh-count" data-target="98" data-suffix="%">0</span></div>
            <div class="desc">Real-time predictive analytics.</div>
        </div>
        
        <div class="hbi-impact-card">
            <div class="label"><span style="margin-right: 8px;">👁</span> Data Visibility</div>
            <div class="num"><span class="hsh-count" data-target="94" data-suffix="%">0</span></div>
            <div class="desc">Unified reporting.</div>
        </div>
        
        <div class="hbi-impact-card">
            <div class="label"><span style="margin-right: 8px;">⚡</span> Reporting Speed</div>
            <div class="num"><span class="hsh-count" data-target="15" data-suffix="×">0</span></div>
            <div class="desc">Executive dashboards.</div>
        </div>
        
        <div class="hbi-impact-card">
            <div class="label"><span style="margin-right: 8px;">🚀</span> Efficiency Gain</div>
            <div class="num"><span class="hsh-count" data-target="87" data-suffix="%">0</span></div>
            <div class="desc">Business optimization.</div>
        </div>
        
    </div>
</section>