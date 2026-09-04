<!-- SECTION 01B: TRUST & CREDIBILITY -->
<section class="home-trust-updated" style="padding: 3.5rem 0; background-color: var(--home-bg-white);">
    <div class="container"
        style="max-width: var(--home-container-width); margin: 0 auto; padding: 0 2rem; text-align: center;">
        <h2 style="font-size: 2.25rem; font-weight: 800; color: var(--home-text-heading); margin-bottom: 0.75rem;">
            Trusted by Growing Businesses Across 6 Countries
        </h2>
        <p
            style="font-size: 1.05rem; color: var(--home-text-body); max-width: 700px; margin: 0 auto; margin-bottom: 1.25rem; line-height: 1.6;">
            Helping enterprises automate finance, HR, travel, fleet, inventory and workshop operations across the GCC
            and beyond.
        </p>
    </div>

    <!-- Logo Slider -->
    <div class="trust-logo-slider"
        style="overflow: hidden; white-space: nowrap; margin-bottom: 2.5rem; position: relative; width: 100vw; margin-left: calc(-50vw + 50%); background: transparent; padding: 1rem 0;">
        <div class="trust-track"
            style="display: flex; gap: 3.5rem; animation: scroll-logos 80s linear infinite; align-items: center; justify-content: center; width: max-content;">
            @php
                $clientLogos = glob(public_path('images/client/*.webp'));
                if ($clientLogos) {
                    $clientLogos = array_map(function ($path) {
                        return 'images/client/' . basename($path);
                    }, $clientLogos);
                } else {
                    $clientLogos = [];
                }
                $allLogos = array_merge($clientLogos, $clientLogos); // Duplicate for infinite scroll
            @endphp

            @foreach($allLogos as $logo)
                <img src="{{ asset($logo) }}" alt="Client Logo" class="tl-img"
                    style="height: 85px; width: auto; object-fit: contain; flex-shrink: 0; transition: all 0.3s ease;">
            @endforeach
        </div>
        <style>
            @keyframes scroll-logos {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .tl-img:hover {
                transform: scale(1.08);
            }

            .trust-logo-slider::before,
            .trust-logo-slider::after {
                content: '';
                position: absolute;
                top: 0;
                width: 150px;
                height: 100%;
                z-index: 2;
            }

            .trust-logo-slider::before {
                left: 0;
                background: linear-gradient(to right, var(--home-bg-white) 0%, transparent 100%);
            }

            .trust-logo-slider::after {
                right: 0;
                background: linear-gradient(to left, var(--home-bg-white) 0%, transparent 100%);
            }
        </style>
    </div>

    <div class="container"
        style="max-width: var(--home-container-width); margin: 0 auto; padding: 0 2rem; text-align: center;">
        <!-- Metrics Grid -->
        <div class="trust-metrics-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">

            <div class="trust-metric-card"
                style="background: var(--home-bg-white); border: 1px solid var(--home-border); border-radius: 16px; padding: 1.5rem 1rem; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; cursor: pointer;">
                <div class="tm-icon"
                    style="width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--home-primary); margin-bottom: 0.75rem; transition: transform 0.3s ease;">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        style="width: 36px; height: 36px;">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <div class="tm-val" data-target="50" data-suffix="+"
                    style="font-size: 1.75rem; font-weight: 900; color: var(--home-text-heading); margin-bottom: 0.25rem;">
                    0+</div>
                <div class="tm-lbl" style="font-size: 0.95rem; color: var(--home-text-body); font-weight: 600;">Clients
                </div>
            </div>

            <div class="trust-metric-card"
                style="background: var(--home-bg-white); border: 1px solid var(--home-border); border-radius: 16px; padding: 1.5rem 1rem; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; cursor: pointer;">
                <div class="tm-icon"
                    style="width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--home-primary); margin-bottom: 0.75rem; transition: transform 0.3s ease;">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        style="width: 36px; height: 36px;">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                    </svg>
                </div>
                <div class="tm-val" data-target="4" data-suffix="M+"
                    style="font-size: 1.75rem; font-weight: 900; color: var(--home-text-heading); margin-bottom: 0.25rem;">
                    0M+</div>
                <div class="tm-lbl" style="font-size: 0.95rem; color: var(--home-text-body); font-weight: 600;">
                    Transactions</div>
            </div>

            <div class="trust-metric-card"
                style="background: var(--home-bg-white); border: 1px solid var(--home-border); border-radius: 16px; padding: 1.5rem 1rem; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; cursor: pointer;">
                <div class="tm-icon"
                    style="width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--home-primary); margin-bottom: 0.75rem; transition: transform 0.3s ease;">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        style="width: 36px; height: 36px;">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="tm-val" data-target="99.8" data-suffix="%" data-decimals="1"
                    style="font-size: 1.75rem; font-weight: 900; color: var(--home-text-heading); margin-bottom: 0.25rem;">
                    0%</div>
                <div class="tm-lbl" style="font-size: 0.95rem; color: var(--home-text-body); font-weight: 600;">
                    Reliability</div>
            </div>

            <div class="trust-metric-card"
                style="background: var(--home-bg-white); border: 1px solid var(--home-border); border-radius: 16px; padding: 1.5rem 1rem; transition: all 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; cursor: pointer;">
                <div class="tm-icon"
                    style="width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--home-primary); margin-bottom: 0.75rem; transition: transform 0.3s ease;">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        style="width: 36px; height: 36px;">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.08 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                </div>
                <!-- Animating a 24/7 is tricky, GSAP counting to 24 then appending /7 -->
                <div class="tm-val" data-target="24" data-suffix="/7"
                    style="font-size: 1.75rem; font-weight: 900; color: var(--home-text-heading); margin-bottom: 0.25rem;">
                    0/7</div>
                <div class="tm-lbl" style="font-size: 0.95rem; color: var(--home-text-body); font-weight: 600;">Support
                </div>
            </div>

        </div>
        <style>
            .trust-metric-card:hover {
                transform: translateY(-6px) !important;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
                border-color: var(--home-primary) !important;
            }

            .trust-metric-card:hover .tm-icon {
                transform: scale(1.08);
            }

            @media (max-width: 991px) {
                .trust-metrics-grid {
                    grid-template-columns: repeat(2, 1fr) !important;
                }
            }

            @media (max-width: 575px) {
                .trust-metrics-grid {
                    grid-template-columns: repeat(2, 1fr) !important;
                    gap: 1rem;
                }
            }
        </style>
    </div>
</section>