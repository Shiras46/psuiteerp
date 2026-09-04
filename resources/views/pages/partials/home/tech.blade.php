<style>
    .home-tech-section {
        background-color: #f8fafc;
        padding: 90px 2vw;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    .ht-container {
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 100px;
    }

    /* Eyebrow & Header Styles */
    .ht-header {
        margin-bottom: 36px;
    }

    .ht-eyebrow {
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 1.5px;
        color: #0d9488;
        text-transform: uppercase;
        margin-bottom: 8px;
        display: inline-block;
    }

    .ht-title {
        font-size: 36px;
        font-weight: 800;
        color: #0f172a;
        line-height: 1.25;
        letter-spacing: -0.5px;
        margin-bottom: 12px;
    }

    .ht-title span {
        color: #0d9488;
    }

    .ht-subtitle {
        font-size: 15.5px;
        color: #64748b;
        max-width: 620px;
        line-height: 1.6;
    }

    /* 2-Column Grid Layout */
    .ht-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    /* Image Wrappers with 3D Float Effect */
    .ht-visual-wrap {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ht-visual-img {
        width: 100%;
        max-width: 560px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.08), 0 0 0 1px rgba(226, 232, 240, 0.8);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .ht-visual-wrap:hover .ht-visual-img {
        transform: translateY(-6px);
        box-shadow: 0 25px 50px -12px rgba(13, 148, 136, 0.15);
    }

    /* SECTION 1: TECH STACK GRID */
    .ht-tech-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
    }

    @media (max-width: 768px) {
        .ht-tech-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }
    }

    .ht-tech-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 22px 14px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 6px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .ht-tech-card:hover {
        transform: translateY(-4px);
        border-color: #0d9488;
        box-shadow: 0 12px 24px -6px rgba(13, 148, 136, 0.12);
    }

    .ht-tech-icon {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 4px;
    }

    .ht-tech-icon img,
    .ht-tech-icon svg {
        width: 36px;
        height: 36px;
        object-fit: contain;
    }

    .ht-tech-name {
        font-size: 15px;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    .ht-tech-cat {
        font-size: 12px;
        font-weight: 500;
        color: #94a3b8;
        margin: 0;
    }

    /* SECTION 2: ARCHITECTURE LIST */
    .ht-arch-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .ht-arch-item {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 16px 20px;
        display: flex;
        align-items: center;
        gap: 18px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    .ht-arch-item:hover {
        transform: translateX(6px);
        border-color: #0d9488;
        box-shadow: 0 8px 20px -4px rgba(13, 148, 136, 0.1);
    }

    .ht-arch-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #f0fdfa;
        border: 1px solid #ccfbf1;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0d9488;
        flex-shrink: 0;
    }

    .ht-arch-icon svg {
        width: 22px;
        height: 22px;
        stroke-width: 2;
    }

    .ht-arch-info h4 {
        font-size: 15.5px;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 2px 0;
    }

    .ht-arch-info p {
        font-size: 13px;
        color: #64748b;
        margin: 0;
    }

    /* SECTION 3: SECURITY CARDS & BOTTOM BANNER */
    .ht-sec-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .ht-sec-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 22px 18px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    .ht-sec-card:hover {
        transform: translateY(-4px);
        border-color: #0d9488;
        box-shadow: 0 12px 24px -6px rgba(13, 148, 136, 0.12);
    }

    .ht-sec-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: #f0fdfa;
        border: 1px solid #ccfbf1;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0d9488;
    }

    .ht-sec-icon svg {
        width: 22px;
        height: 22px;
        stroke-width: 2;
    }

    .ht-sec-info h4 {
        font-size: 15.5px;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 4px 0;
    }

    .ht-sec-info p {
        font-size: 12.5px;
        color: #64748b;
        margin: 0;
        line-height: 1.5;
    }

    /* Full-Width Dark Banner at bottom of Section 3 */
    .ht-dark-banner {
        background: linear-gradient(135deg, #091024 0%, #0f172a 100%);
        border: 1px solid rgba(13, 148, 136, 0.3);
        border-radius: 16px;
        padding: 22px 32px;
        display: flex;
        align-items: center;
        gap: 20px;
        color: #ffffff;
        box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.3);
        margin-top: 36px;
    }

    .ht-banner-icon {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(13, 148, 136, 0.2);
        border: 1px solid #0d9488;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2dd4bf;
        flex-shrink: 0;
    }

    .ht-banner-icon svg {
        width: 22px;
        height: 22px;
        stroke-width: 2.5;
    }

    .ht-banner-text h4 {
        font-size: 16px;
        font-weight: 700;
        color: #2dd4bf;
        margin: 0 0 4px 0;
        letter-spacing: -0.2px;
    }

    .ht-banner-text p {
        font-size: 13px;
        color: #94a3b8;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .ht-row {
            grid-template-columns: 1fr;
            gap: 36px;
        }

        .ht-visual-wrap {
            order: -1;
        }
    }

    @media (max-width: 768px) {
        .ht-sec-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .ht-dark-banner {
            flex-direction: column;
            text-align: center;
            padding: 20px 16px;
        }

        .ht-container {
            gap: 60px;
        }
    }

    @media (max-width: 480px) {
        .ht-tech-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .ht-sec-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<section class="home-tech-section home-tech">
    <div class="ht-container">

        <!-- SECTION 1: ENTERPRISE TECHNOLOGY STACK -->
        <div class="ht-section-block gsap-fade-up">
            <div class="ht-header">
                <span class="ht-eyebrow">TECHNOLOGY FOUNDATION</span>
                <h2 class="ht-title">Enterprise <span>Technology</span> Stack</h2>
                <p class="ht-subtitle">Built using modern, industry-leading technologies to deliver high performance,
                    reliability and long-term scalability.</p>
            </div>

            <div class="ht-row">
                <!-- Left: Technology Cards Grid -->
                <div class="ht-tech-grid">
                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <svg viewBox="0 0 250 250" style="color:#DD0031;">
                                <path fill="currentColor" d="M125 0L15.3 39l18 141.5 91.7 51 91.7-51 18-141.5z" />
                                <path fill="#C3002F" d="M125 0v231.5l91.7-51 18-141.5z" />
                                <path fill="#FFF"
                                    d="M125 52.8L53.7 212h31.2l14.4-36h51.4l14.4 36h31.2L125 52.8zm-17.5 98l17.5-44.5 17.5 44.5h-35z" />
                            </svg>
                        </div>
                        <h4 class="ht-tech-name">Angular</h4>
                        <p class="ht-tech-cat">Frontend</p>
                    </div>

                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <svg viewBox="0 0 16 16" style="color:#7952B3;">
                                <path fill="currentColor"
                                    d="M3 0h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3zm8.3 10.8c.8 0 1.5-.2 2-.7.4-.4.7-1 .7-1.6 0-.8-.3-1.4-.9-1.8.6-.3 1-.9 1-1.6 0-.6-.2-1.1-.6-1.5-.4-.4-1-.6-1.8-.6H5.5v8.8h5.8zm-3.6-6.4h1.9c.5 0 .9.1 1.1.3.2.2.4.5.4.8 0 .4-.1.6-.4.8-.2.2-.6.3-1.2.3H7.7v-2.2zm0 3.7h2.2c.6 0 1 .1 1.3.4.3.3.4.6.4 1 0 .4-.1.7-.4 1-.3.3-.8.4-1.4.4H7.7V8.1z" />
                            </svg>
                        </div>
                        <h4 class="ht-tech-name">Bootstrap</h4>
                        <p class="ht-tech-cat">Frontend</p>
                    </div>

                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/dotnetcore/dotnetcore-original.svg"
                                alt=".NET">
                        </div>
                        <h4 class="ht-tech-name">.NET</h4>
                        <p class="ht-tech-cat">Backend</p>
                    </div>

                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/openapi/openapi-original.svg"
                                alt="REST API">
                        </div>
                        <h4 class="ht-tech-name">REST API</h4>
                        <p class="ht-tech-cat">Integration</p>
                    </div>

                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/microsoftsqlserver/microsoftsqlserver-plain.svg"
                                alt="MS SQL Server">
                        </div>
                        <h4 class="ht-tech-name">MS SQL Server</h4>
                        <p class="ht-tech-cat">Database</p>
                    </div>

                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/amazonwebservices/amazonwebservices-original-wordmark.svg"
                                alt="AWS">
                        </div>
                        <h4 class="ht-tech-name">AWS</h4>
                        <p class="ht-tech-cat">Cloud</p>
                    </div>

                    <div class="ht-tech-card">
                        <div class="ht-tech-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h4 class="ht-tech-name">JWT</h4>
                        <p class="ht-tech-cat">Security</p>
                    </div>
                </div>

                <!-- Right: 3D Visual Illustration -->
                <div class="ht-visual-wrap">
                    <img src="{{ asset('images/tech_stack_3d.jpg') }}" alt="Enterprise Technology Stack 3D Illustration"
                        class="ht-visual-img">
                </div>
            </div>
        </div>

        <!-- SECTION 2: ENTERPRISE ARCHITECTURE -->
        <div class="ht-section-block gsap-fade-up">
            <div class="ht-header">
                <span class="ht-eyebrow">SCALABLE BY DESIGN</span>
                <h2 class="ht-title">Enterprise <span>Architecture</span></h2>
                <p class="ht-subtitle">A future-ready architecture that adapts to your business and grows with your
                    success.</p>
            </div>

            <div class="ht-row">
                <!-- Left: 3D Visual Illustration -->
                <div class="ht-visual-wrap">
                    <img src="{{ asset('images/architecture_3d.jpg') }}" alt="Enterprise Architecture 3D Illustration"
                        class="ht-visual-img">
                </div>

                <!-- Right: Architecture Features List -->
                <div class="ht-arch-list">
                    <div class="ht-arch-item">
                        <div class="ht-arch-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L12 7.5l5.571 2.25m-11.142 0L2.25 12l4.179 2.25m11.142-4.5l4.179 2.25-4.179 2.25m0-4.5L12 12l-5.571-2.25M12 16.5l5.571-2.25L12 12l-5.571 2.25L12 16.5z" />
                            </svg>
                        </div>
                        <div class="ht-arch-info">
                            <h4>N-Tier Architecture</h4>
                            <p>Structured for scalability and maintainability</p>
                        </div>
                    </div>

                    <div class="ht-arch-item">
                        <div class="ht-arch-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                        </div>
                        <div class="ht-arch-info">
                            <h4>Modular Design</h4>
                            <p>Flexible modules to fit your business needs</p>
                        </div>
                    </div>

                    <div class="ht-arch-item">
                        <div class="ht-arch-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.149-.894z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ht-arch-info">
                            <h4>Microservices Ready</h4>
                            <p>Independent, agile and flexible services</p>
                        </div>
                    </div>

                    <div class="ht-arch-item">
                        <div class="ht-arch-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>
                        </div>
                        <div class="ht-arch-info">
                            <h4>Load Balanced Environment</h4>
                            <p>High availability with intelligent distribution</p>
                        </div>
                    </div>

                    <div class="ht-arch-item">
                        <div class="ht-arch-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                            </svg>
                        </div>
                        <div class="ht-arch-info">
                            <h4>Scalable Cloud Infrastructure</h4>
                            <p>Elastic, secure and always available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 3: ENTERPRISE SECURITY -->
        <div class="ht-section-block gsap-fade-up">
            <div class="ht-header">
                <span class="ht-eyebrow">SECURITY YOU CAN TRUST</span>
                <h2 class="ht-title">Enterprise <span>Security</span></h2>
                <p class="ht-subtitle">Security is built into every layer of PSuite ERP. We follow industry best
                    practices and are independently VAPT Certified.</p>
            </div>

            <div class="ht-row">
                <!-- Left: Security Features Grid -->
                <div class="ht-sec-grid">
                    <div class="ht-sec-card">
                        <div class="ht-sec-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <div class="ht-sec-info">
                            <h4>JWT Authentication</h4>
                            <p>Secure and token-based authentication</p>
                        </div>
                    </div>

                    <div class="ht-sec-card">
                        <div class="ht-sec-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6 0 3.375 3.375 0 016 0zm6 2.25a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </div>
                        <div class="ht-sec-info">
                            <h4>Role-Based Access</h4>
                            <p>Granular access control for users</p>
                        </div>
                    </div>

                    <div class="ht-sec-card">
                        <div class="ht-sec-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div class="ht-sec-info">
                            <h4>Data Encryption</h4>
                            <p>End-to-end encryption to protect your data</p>
                        </div>
                    </div>

                    <div class="ht-sec-card">
                        <div class="ht-sec-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                            </svg>
                        </div>
                        <div class="ht-sec-info">
                            <h4>VAPT Certified</h4>
                            <p>Independently assessed for vulnerabilities</p>
                        </div>
                    </div>
                </div>

                <!-- Right: 3D Visual Illustration -->
                <div class="ht-visual-wrap">
                    <img src="{{ asset('images/security_3d.jpg') }}" alt="Enterprise Security 3D Illustration"
                        class="ht-visual-img">
                </div>
            </div>

            <!-- Bottom Full-Width Dark Banner -->
            <div class="ht-dark-banner">
                <div class="ht-banner-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ht-banner-text">
                    <h4>Your Data. Our Responsibility. Your Growth. Our Technology.</h4>
                    <p>Built on trust. Designed for enterprises. Ready for the future.</p>
                </div>
            </div>
        </div>

    </div>
</section>