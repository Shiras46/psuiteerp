@extends('layouts.app')

@section('title', 'Contact Us - PSuite ERP')

@section('content')
    <!-- MINIMAL PREMIUM HERO BANNER -->
    <section class="contact-hero">
        <div class="contact-hero-bg"></div>
        <div class="container">
            <div class="contact-hero-content">
                <span class="contact-eyebrow gsap-fade-up">GET IN TOUCH</span>
                <h1 class="gsap-title-reveal">Let's start a<br>conversation.</h1>
                <p class="gsap-fade-up">Reach out to our team of ERP specialists. We are here to help you transform your
                    business operations.</p>
            </div>
        </div>
    </section>


    <!-- SECTION 03: CONTACT FORM SECTION -->
    <section id="contact-form" class="contact-form-section">
        <div class="container">
            <div class="cfs-grid">
                <div class="cfs-info gsap-fade-up">
                    <h2>Direct Contact</h2>
                    <p>Prefer to reach out directly? Use the details below.</p>

                    <div class="cfs-details">
                        <div class="cfs-detail-item">
                            <div class="cfs-detail-icon">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.802-5.184-4.162-7-7l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                                </svg>
                            </div>
                            <div class="cfs-detail-content">
                                <h4>Phone</h4>
                                <p>00968 99107588</p>
                            </div>
                        </div>

                        <div class="cfs-detail-item">
                            <div class="cfs-detail-icon">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                                </svg>
                            </div>
                            <div class="cfs-detail-content">
                                <h4>Email</h4>
                                <a href="mailto:sales@premier-techs.com">sales@premier-techs.com</a>
                            </div>
                        </div>

                        <div class="cfs-detail-item">
                            <div class="cfs-detail-icon">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                                </svg>
                            </div>
                            <div class="cfs-detail-content">
                                <h4>Headquarters</h4>
                                <p>Premeir Business Investment LLC<br>Building 586, Office 14, Opposite Centara
                                    Hotel<br>Ghal Heights , Muscat, Sultante of Oman</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cfs-form-wrapper gsap-fade-up" style="transition-delay: 0.2s;">
                    @if(session('success'))
                        <div class="alert alert-success"
                            style="background: rgba(37, 211, 102, 0.1); color: #128C7E; border: 1px solid #25D366; padding: 1rem; border-radius: 8px; margin-bottom: 2rem;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST" class="premium-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="John Doe"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Work Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="john@company.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="+971 50 000 0000">
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" name="company" id="company" class="form-control" placeholder="ACME Corp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="solution">Solution Interested In</label>
                            <select name="solution" id="solution" class="form-control">
                                <option value="">Select a solution...</option>
                                <option value="Finance & Accounting">Finance & Accounting</option>
                                <option value="HR Management">HR Management</option>
                                <option value="CRM">Customer Relationship Management</option>
                                <option value="Inventory Management">Inventory Management</option>
                                <option value="Fleet Management">Fleet Management</option>
                                <option value="Travel & Tourism">Travel & Tourism</option>
                                <option value="Workshop Management">Workshop Management</option>
                                <option value="Full ERP Suite">Full ERP Suite</option>
                                <option value="Support">Technical Support</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="How can we help you?"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn-submit-premium">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 04: GLOBAL PRESENCE (MINIMAL VERSION) -->
    <section class="contact-global">
        <div class="container">
            <div class="section-heading-center">
                <h2 class="gsap-fade-up">Global Reach</h2>
                <p class="gsap-fade-up" style="margin-top: 1rem;">Operating across the Middle East and Asia with localized
                    support.</p>
            </div>

            <div class="minimal-locations gsap-fade-up">
                <div class="min-loc">UAE</div>
                <div class="min-loc">Oman</div>
                <div class="min-loc">Bahrain</div>
                <div class="min-loc">Qatar</div>
                <div class="min-loc">India</div>
                <div class="min-loc">Sri Lanka</div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            gsap.registerPlugin(ScrollTrigger);

            // Minimal Hero Animation
            const tl = gsap.timeline();

            tl.fromTo(".contact-eyebrow",
                { y: 20, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.8, ease: "power3.out" }
            )
                .fromTo(".gsap-title-reveal",
                    { y: 40, opacity: 0 },
                    { y: 0, opacity: 1, duration: 1, ease: "power3.out" },
                    "-=0.6"
                )
                .fromTo(".contact-hero p",
                    { y: 20, opacity: 0 },
                    { y: 0, opacity: 1, duration: 0.8, ease: "power3.out" },
                    "-=0.6"
                );

            // Scroll reveals
            const revealElements = document.querySelectorAll('.gsap-fade-up:not(.contact-eyebrow):not(.contact-hero p)');
            revealElements.forEach((el) => {
                gsap.fromTo(el,
                    { y: 40, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power3.out",
                        scrollTrigger: {
                            trigger: el,
                            start: "top 85%",
                            toggleActions: "play none none none"
                        }
                    }
                );
            });
        });
    </script>
@endpush