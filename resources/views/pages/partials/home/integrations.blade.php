<!-- SECTION: INTEGRATIONS -->
<style>
    .home-integrations {
        padding: 100px 2vw;
        background: #ffffff;
        background-image: radial-gradient(circle at right, rgba(20, 184, 166, 0.03), transparent 50%),
            radial-gradient(circle at left, rgba(15, 23, 42, 0.02), transparent 50%);
    }

    .hint-container {
        display: grid;
        grid-template-columns: 1fr 1.1fr;
        gap: 48px;
        max-width: 1400px;
        margin: 0 auto;
        align-items: stretch;
    }

    .hint-left {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .hint-tag {
        color: #14B8A6;
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        margin-bottom: 1rem;
        display: inline-block;
    }

    .hint-left h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 1.25rem;
        color: #0F172A;
        line-height: 1.15;
        letter-spacing: -0.5px;
    }

    .hint-left>p {
        color: #475569;
        font-size: 16.5px;
        line-height: 1.65;
        margin-bottom: 2rem;
        max-width: 95%;
    }

    .hint-feature-cards {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-top: auto;
    }

    .hint-fcard {
        background: #ffffff;
        border: 1px solid #E5E7EB;
        padding: 20px;
        border-radius: 16px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: flex-start;
        gap: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .hint-fcard:hover {
        transform: translateY(-4px);
        border-color: #14B8A6;
        box-shadow: 0 12px 24px -8px rgba(20, 184, 166, 0.15);
    }

    .hint-fcard-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #F0FDFA;
        color: #14B8A6;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .hint-fcard-icon svg {
        width: 22px;
        height: 22px;
    }

    .hint-fcard-content h4 {
        font-size: 16px;
        color: #0F172A;
        margin: 0 0 4px 0;
        font-weight: 700;
    }

    .hint-fcard-content p {
        font-size: 13.5px;
        color: #64748B;
        line-height: 1.5;
        margin: 0;
    }

    .hint-right {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
    }

    .hint-image-wrapper {
        position: relative;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        z-index: 2;
        transition: transform 0.4s ease;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .hint-image-wrapper:hover {
        transform: scale(1.02);
    }

    .hint-image-wrapper::before {
        content: '';
        position: absolute;
        inset: -30px;
        background: radial-gradient(circle at center, rgba(20, 184, 166, 0.15), transparent 60%);
        z-index: -1;
        border-radius: 50%;
        filter: blur(25px);
    }

    .hint-main-img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border-radius: 20px;
        border: 1px solid #E2E8F0;
        display: block;
        object-fit: contain;
    }

    .fb-badge {
        position: absolute;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        border-radius: 30px;
        padding: 8px 16px;
        font-size: 12.5px;
        font-weight: 700;
        color: #0F172A;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 1);
        z-index: 10;
        animation: float-anim 4s ease-in-out infinite;
    }

    .fb-badge svg {
        width: 16px;
        height: 16px;
        color: #14B8A6;
    }

    .fb-1 {
        top: 12%;
        right: -25px;
        animation-delay: 0s;
    }

    .fb-2 {
        bottom: 25%;
        left: -35px;
        animation-delay: 1.2s;
    }

    .fb-3 {
        bottom: -20px;
        right: 20%;
        animation-delay: 0.6s;
    }

    @keyframes float-anim {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .hint-extended-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        max-width: 1320px;
        margin: 32px auto 0 auto;
    }

    .hint-wide-card {
        background: #ffffff;
        border: 1px solid #E5E7EB;
        border-radius: 16px;
        padding: 20px;
        transition: all 0.3s ease;
        display: flex;
        align-items: flex-start;
        gap: 16px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .hint-wide-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px -8px rgba(20, 184, 166, 0.15);
        border-color: #14B8A6;
    }

    .hint-wide-card .icon-wrap {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #F0FDFA;
        color: #14B8A6;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .hint-wide-card .icon-wrap svg {
        width: 22px;
        height: 22px;
    }

    .hint-wide-card-content h4 {
        font-size: 16px;
        font-weight: 700;
        color: #0F172A;
        margin: 0 0 4px 0;
    }

    .hint-wide-card-content p {
        font-size: 13.5px;
        color: #64748B;
        line-height: 1.5;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .hint-container {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hint-left {
            align-items: center;
        }

        .hint-left>p {
            text-align: center;
        }

        .hint-extended-row {
            grid-template-columns: repeat(2, 1fr);
        }

        .hint-feature-cards {
            text-align: left;
        }
    }

    @media (max-width: 768px) {
        .hint-left h2 {
            font-size: 34px;
        }

        .hint-feature-cards {
            grid-template-columns: 1fr;
            width: 100%;
        }

        .hint-extended-row {
            grid-template-columns: 1fr;
        }

        .fb-badge {
            display: none;
        }
    }
</style>

<section class="home-integrations">
    <div class="hint-container">
        <!-- Left Column -->
        <div class="hint-left">
            <div class="hint-tag gsap-fade-up">SEAMLESS INTEGRATIONS</div>
            <h2 class="gsap-fade-up">Seamlessly Connect with<br>Your Business Ecosystem</h2>
            <p class="gsap-fade-up">PSuite ERP integrates effortlessly with the platforms and services your business
                depends on, enabling secure data exchange, intelligent automation, and real-time synchronization.</p>

            <div class="hint-feature-cards gsap-fade-up">

                <!-- SAP Integration -->
                <div class="hint-fcard">
                    <div class="hint-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <div class="hint-fcard-content">
                        <h4>SAP Integration</h4>
                        <p>Bi-directional enterprise integration for synchronized financial, procurement, and operations
                            data.</p>
                    </div>
                </div>

                <!-- GDS Integration -->
                <div class="hint-fcard">
                    <div class="hint-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <div class="hint-fcard-content">
                        <h4>GDS Integration</h4>
                        <p>Connect seamlessly with Amadeus, Sabre, Galileo, and NDC for automated travel workflows.</p>
                    </div>
                </div>

                <!-- Banking Integration -->
                <div class="hint-fcard">
                    <div class="hint-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                        </svg>
                    </div>
                    <div class="hint-fcard-content">
                        <h4>Banking Integration</h4>
                        <p>Automate bank reconciliation, payment processing, and financial transaction management.</p>
                    </div>
                </div>

                <!-- E-Invoicing -->
                <div class="hint-fcard">
                    <div class="hint-fcard-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                    </div>
                    <div class="hint-fcard-content">
                        <h4>E-Invoicing & Tax</h4>
                        <p>Simplify compliance through automated invoice generation, validation, and government
                            reporting.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right Column (Image Section) -->
        <div class="hint-right gsap-fade-up">
            <div class="hint-image-wrapper">
                <img src="{{ asset('images/SEAMLESS INTEGRATIONS.webp') }}" alt="Integrations Architecture"
                    class="hint-main-img">

                <div class="fb-badge fb-1">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    API Connected
                </div>
                <div class="fb-badge fb-2">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    Real-Time Sync
                </div>
                <div class="fb-badge fb-3">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                    Automated Data
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Extended Row (Replacing Impact Stats) -->
    <div class="hint-extended-row gsap-fade-up">

        <!-- API Connectivity -->
        <div class="hint-wide-card">
            <div class="icon-wrap">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                </svg>
            </div>
            <div class="hint-wide-card-content">
                <h4>API Connectivity</h4>
                <p>Build secure integrations with external applications through modern REST APIs and webhook-based
                    communication.</p>
            </div>
        </div>

        <!-- Booking Engines -->
        <div class="hint-wide-card">
            <div class="icon-wrap">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </div>
            <div class="hint-wide-card-content">
                <h4>Booking Engines / E-Commerce</h4>
                <p>Integrate booking engines and e-commerce solutions to automate reservations, pricing, inventory, and
                    customer orders.</p>
            </div>
        </div>

        <!-- Biometric Devices -->
        <div class="hint-wide-card">
            <div class="icon-wrap">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                </svg>
            </div>
            <div class="hint-wide-card-content">
                <h4>Biometric Devices</h4>
                <p>Synchronize attendance records directly with HR, payroll, and workforce management modules for
                    complete automation.</p>
            </div>
        </div>

    </div>
</section>