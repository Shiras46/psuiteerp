@extends('layouts.app')

@section('title', 'Our Clients - PSuite ERP')

@section('content')
    <style>
        /* Premium Hero Banner */
        .clients-hero-premium {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .clients-hero-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 0%, rgba(26, 178, 166, 0.25) 0%, transparent 60%);
        }

        .clients-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .clients-hero-content h1 {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            margin-bottom: 1.5rem;
            color: #ffffff;
        }

        .clients-hero-content p {
            font-size: 1.25rem;
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Grid Section */
        .clients-page-wrap {
            background-color: #f8fafc;
            padding-top: 60px;
            padding-bottom: 100px;
        }

        .clients-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .client-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px;
            height: 160px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            border: 1px solid rgba(0, 0, 0, 0.03);
            position: relative;
            z-index: 1;
        }

        .client-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: rgba(26, 178, 166, 0.15);
            z-index: 2;
        }

        .client-card img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .client-card:hover img {
            transform: scale(1.05);
        }

        /* Premium CTA Banner */
        .cta-banner-premium {
            background: linear-gradient(135deg, #1ab2a6 0%, #13887f 100%);
            border-radius: 24px;
            padding: 60px 40px;
            text-align: center;
            color: #ffffff;
            margin-top: 80px;
            box-shadow: 0 25px 50px -12px rgba(26, 178, 166, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-banner-premium::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
            pointer-events: none;
        }

        .cta-banner-premium h2 {
            color: #ffffff;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .cta-banner-premium p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.15rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-light-glow {
            background: #ffffff;
            color: #13887f;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-light-glow:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            color: #0f6c65;
            background: #f8fafc;
        }

        @media (max-width: 768px) {
            .clients-hero-content h1 {
                font-size: 2.5rem;
            }

            .cta-banner-premium h2 {
                font-size: 2rem;
            }

            .cta-banner-premium {
                padding: 40px 20px;
            }

            .clients-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .client-card {
                padding: 15px;
                height: 100px;
            }
        }
    </style>

    <section class="clients-hero-premium gsap-reveal">
        <div class="clients-hero-content">
            <h1>Trusted by the Best</h1>
            <p>Join hundreds of industry-leading organizations that rely on PSuite ERP to streamline their operations and
                drive exponential growth.</p>
        </div>
    </section>

    <section class="clients-page-wrap section">
        <div class="container">
            <div class="clients-grid gsap-reveal">
                @if(isset($clientImages) && count($clientImages) > 0)
                    @foreach($clientImages as $image)
                        <div class="client-card">
                            <img src="{{ $image }}" alt="Client Logo">
                        </div>
                    @endforeach
                @else
                    <p style="text-align:center; width: 100%;">No clients available.</p>
                @endif
            </div>

            <div class="cta-banner-premium gsap-reveal">
                <h2>Ready to transform your business?</h2>
                <p>Experience the power of an intelligent ERP solution tailored for your specific industry needs.</p>
                <a href="{{ route('book-demo') }}" class="btn-light-glow">Book Your Free Demo</a>
            </div>
        </div>
    </section>
@endsection