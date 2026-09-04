<style>
    .home-trust { 
        background: #fafafa; 
        padding: 80px 2vw 20px 2vw; 
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }
    .ht-grid { 
        display: grid; 
        grid-template-columns: 1.15fr 1fr 340px; 
        max-width: 1400px; 
        margin: 0 auto; 
        gap: 48px; 
        align-items: center; 
    }
    
    /* Left Column */
    .ht-left { 
        display: flex; 
        flex-direction: column; 
        justify-content: center; 
    }
    .ht-tag { 
        color: #14b8a6; 
        text-transform: uppercase; 
        letter-spacing: 1.5px; 
        font-weight: 800; 
        font-size: 12px; 
        margin-bottom: 24px; 
    }
    .ht-left h2 { 
        font-size: 44px; 
        font-weight: 800; 
        color: #0f172a; 
        line-height: 1.15; 
        margin-bottom: 24px; 
        letter-spacing: -0.5px;
    }
    .ht-left h2 span { color: #14b8a6; }
    .ht-left > p { 
        font-size: 15px; 
        color: #475569; 
        line-height: 1.6; 
        margin-bottom: 48px; 
        max-width: 95%; 
    }
    
    .ht-4cards { 
        display: grid; 
        grid-template-columns: repeat(4, 1fr); 
        gap: 16px; 
    }
    .ht-4card { text-align: center; }
    .ht-4c-icon { 
        margin-bottom: 12px; 
        color: #14b8a6; 
        display: flex;
        justify-content: center;
    }
    .ht-4card h5 { 
        font-size: 13px; 
        font-weight: 700; 
        color: #0f172a; 
        margin-bottom: 8px; 
        line-height: 1.3;
    }
    .ht-4card p { 
        font-size: 11px; 
        color: #64748b; 
        line-height: 1.4; 
        margin: 0;
    }

    /* Center Column */
    .ht-center { 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }
    .ht-center img { 
        max-width: 100%; 
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.15); 
    }

    /* Right Column (Enterprise Security Card) */
    .ht-right-card { 
        background: #ffffff; 
        border-radius: 20px; 
        padding: 40px; 
        box-shadow: 0 10px 40px rgba(0,0,0,0.04); 
        border: 1px solid #f1f5f9; 
    }
    .ht-right-card h4 { 
        color: #14b8a6; 
        font-size: 12px; 
        font-weight: 800; 
        text-transform: uppercase; 
        margin-bottom: 32px; 
        letter-spacing: 1.5px; 
    }
    .ht-sec-list { 
        display: flex; 
        flex-direction: column; 
        gap: 28px; 
    }
    .ht-sec-item { 
        display: flex; 
        gap: 16px; 
    }
    .ht-sec-icon { 
        width: 36px; 
        height: 36px; 
        border-radius: 50%; 
        border: 1px solid #e2e8f0; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        color: #14b8a6; 
        flex-shrink: 0; 
    }
    .ht-sec-icon svg { width: 16px; height: 16px; }
    .ht-sec-text h5 { 
        font-size: 14px; 
        font-weight: 700; 
        color: #0f172a; 
        margin: 0 0 4px 0; 
    }
    .ht-sec-text p { 
        font-size: 12px; 
        color: #64748b; 
        line-height: 1.5; 
        margin: 0;
    }

    @media (max-width: 1200px) {
        .ht-grid { grid-template-columns: 1fr 1fr; }
        .ht-center { display: none; }
    }
    @media (max-width: 1024px) {
        .ht-grid { grid-template-columns: 1fr; }
        .ht-right-card { max-width: 500px; margin: 0 auto; }
    }
    @media (max-width: 768px) {
        .ht-left h2 { font-size: 36px; }
        .ht-4cards { grid-template-columns: 1fr 1fr; gap: 24px; }
    }
</style>

<section class="home-trust">
    <div class="ht-grid gsap-fade-up">
        
        <!-- LEFT -->
        <div class="ht-left">
            <div class="ht-tag">BUILT ON TRUST. DESIGNED FOR ENTERPRISES.</div>
            <h2>Engineered for Scale,<br>Secured for Confidence,<br><span>Built for the Future.</span></h2>
            <p>PSuite ERP is built on a modern, secure and scalable architecture to ensure performance, reliability and protection for mission-critical business operations.</p>
            
            <div class="ht-4cards">
                <div class="ht-4card">
                    <div class="ht-4c-icon"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg></div>
                    <h5>Enterprise Grade<br>Security</h5>
                    <p>Protecting your data and business at every layer.</p>
                </div>
                <div class="ht-4card">
                    <div class="ht-4c-icon"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/></svg></div>
                    <h5>High Availability</h5>
                    <p>Built for continuous operations with maximum uptime.</p>
                </div>
                <div class="ht-4card">
                    <div class="ht-4c-icon"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg></div>
                    <h5>Scalable Architecture</h5>
                    <p>Elastic, resilient and ready to grow with your business.</p>
                </div>
                <div class="ht-4card">
                    <div class="ht-4c-icon"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                    <h5>Performance<br>Optimized</h5>
                    <p>Engineered for speed, reliability and efficiency.</p>
                </div>
            </div>
        </div>

        <!-- CENTER -->
        <div class="ht-center">
            <img src="{{ asset('images/why_cloud_servers.png') }}" alt="Cloud Servers 3D Graphic">
        </div>

        <!-- RIGHT -->
        <div class="ht-right-card">
            <h4>Enterprise Security</h4>
            <div class="ht-sec-list">
                
                <div class="ht-sec-item">
                    <div class="ht-sec-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg></div>
                    <div class="ht-sec-text">
                        <h5>Multi-Layer Security</h5>
                        <p>Defense-in-depth security architecture protecting data, applications and infrastructure.</p>
                    </div>
                </div>
                
                <div class="ht-sec-item">
                    <div class="ht-sec-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg></div>
                    <div class="ht-sec-text">
                        <h5>Data Protection</h5>
                        <p>Encryption in transit and at rest with role-based access control.</p>
                    </div>
                </div>
                
                <div class="ht-sec-item">
                    <div class="ht-sec-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg></div>
                    <div class="ht-sec-text">
                        <h5>Identity & Access Management</h5>
                        <p>Secure authentication with JWT and granular permission control.</p>
                    </div>
                </div>
                
                <div class="ht-sec-item">
                    <div class="ht-sec-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg></div>
                    <div class="ht-sec-text">
                        <h5>Audit & Compliance</h5>
                        <p>Comprehensive audit logs and monitoring for complete transparency.</p>
                    </div>
                </div>
                
                <div class="ht-sec-item">
                    <div class="ht-sec-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"/></svg></div>
                    <div class="ht-sec-text">
                        <h5>Backup & Disaster Recovery</h5>
                        <p>Automated backups and DR strategy ensuring business continuity.</p>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</section>