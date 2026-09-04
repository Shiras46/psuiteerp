<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel - The All-In-One Solution</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
        <style>
            :root {
                --primary-red: #EF3B2D;
                --primary-red-hover: #d12e22;
                --bg-dark: #111827;
                --bg-darker: #0b0f19;
                --text-light: #f3f4f6;
                --text-gray: #9ca3af;
                --glass-bg: rgba(255, 255, 255, 0.03);
                --glass-border: rgba(255, 255, 255, 0.08);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Nunito', sans-serif;
                background-color: var(--bg-dark);
                color: var(--text-light);
                line-height: 1.6;
                overflow-x: hidden;
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            /* Utilities */
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            .glass-card {
                background: var(--glass-bg);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid var(--glass-border);
                border-radius: 24px;
                padding: 2rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            }

            .btn {
                display: inline-block;
                padding: 0.75rem 1.5rem;
                border-radius: 50px;
                font-weight: 700;
                font-size: 0.9rem;
                cursor: pointer;
                transition: all 0.3s ease;
                border: none;
            }

            .btn-primary {
                background-color: var(--primary-red);
                color: white;
                box-shadow: 0 4px 14px 0 rgba(239, 59, 45, 0.39);
            }

            .btn-primary:hover {
                background-color: var(--primary-red-hover);
                box-shadow: 0 6px 20px rgba(239, 59, 45, 0.23);
                transform: translateY(-2px);
            }

            .btn-outline {
                background: transparent;
                border: 1px solid var(--glass-border);
                color: var(--text-gray);
            }

            .btn-outline:hover {
                border-color: var(--primary-red);
                color: white;
            }

            .text-gradient {
                background: linear-gradient(135deg, #fff 0%, #ffb4b0 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            /* Navbar */
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1.5rem 0;
                position: relative;
                z-index: 100;
            }

            .logo-container {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                font-size: 1.5rem;
                font-weight: 800;
            }

            .logo-svg {
                width: 32px;
                height: 32px;
                color: var(--primary-red);
            }

            .nav-links {
                display: flex;
                gap: 2rem;
                align-items: center;
            }

            .nav-links a {
                font-size: 0.9rem;
                font-weight: 600;
                color: var(--text-gray);
                transition: color 0.3s;
            }

            .nav-links a:hover {
                color: white;
            }

            .nav-auth {
                display: flex;
                gap: 1rem;
                align-items: center;
            }

            .hamburger {
                display: none;
                background: transparent;
                border: 1px solid var(--glass-border);
                color: white;
                padding: 0.5rem;
                border-radius: 8px;
                cursor: pointer;
            }

            .hamburger svg {
                width: 24px;
                height: 24px;
            }

            /* Hero Section */
            .hero {
                text-align: center;
                padding: 4rem 0 2rem;
                position: relative;
            }

            .hero-bg-glow {
                position: absolute;
                top: -20%;
                left: 50%;
                transform: translateX(-50%);
                width: 800px;
                height: 800px;
                background: radial-gradient(circle, rgba(239, 59, 45, 0.15) 0%, rgba(17, 24, 39, 0) 70%);
                z-index: -1;
                pointer-events: none;
            }

            .hero-gradient-box {
                background: linear-gradient(135deg, rgba(239, 59, 45, 0.2) 0%, rgba(17, 24, 39, 0) 100%);
                border-radius: 32px;
                padding: 5rem 2rem 8rem;
                position: relative;
                border: 1px solid var(--glass-border);
                overflow: visible;
                margin-bottom: -6rem;
            }

            .hero h1 {
                font-size: 3.5rem;
                font-weight: 800;
                line-height: 1.2;
                margin-bottom: 1.5rem;
            }

            .hero p {
                font-size: 1.1rem;
                color: var(--text-gray);
                max-width: 600px;
                margin: 0 auto 2rem;
            }

            .hero-image-container {
                position: relative;
                z-index: 10;
                max-width: 900px;
                margin: 0 auto;
                perspective: 1000px;
            }

            .hero-image {
                width: 100%;
                border-radius: 24px;
                box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.6);
                transition: transform 0.5s ease;
            }

            .hero-image-container:hover .hero-image {
                transform: translateY(-10px) rotateX(2deg);
            }

            /* Features Section */
            .section {
                padding: 8rem 0 4rem;
            }

            .section-header {
                text-align: center;
                margin-bottom: 4rem;
            }

            .section-header h2 {
                font-size: 2.5rem;
                font-weight: 800;
                margin-bottom: 1rem;
            }

            .features-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
            }

            .features-text h3 {
                font-size: 2rem;
                font-weight: 700;
                margin-bottom: 1.5rem;
            }

            .features-text p {
                color: var(--text-gray);
                font-size: 1.1rem;
                margin-bottom: 2rem;
            }

            .tags-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                margin-top: 3rem;
            }

            .feature-image-wrapper {
                position: relative;
            }

            .feature-image {
                width: 100%;
                border-radius: 24px;
                animation: float 6s ease-in-out infinite;
            }

            .reverse .features-text {
                order: 2;
            }
            .reverse .feature-image-wrapper {
                order: 1;
            }

            .highlight-box {
                background: linear-gradient(135deg, rgba(239, 59, 45, 0.15) 0%, rgba(17, 24, 39, 0) 100%);
                border-left: 4px solid var(--primary-red);
                padding: 1.5rem;
                border-radius: 0 16px 16px 0;
                margin-bottom: 2rem;
            }

            .highlight-box strong {
                color: white;
            }

            /* Animations */
            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
                100% { transform: translateY(0px); }
            }

            .floating-slow {
                animation: float 8s ease-in-out infinite;
                animation-delay: 1s;
            }

            .fade-up {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            }

            .fade-up.visible {
                opacity: 1;
                transform: translateY(0);
            }

            /* Mobile Menu Overlay */
            .mobile-menu {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: var(--bg-darker);
                z-index: 1000;
                padding: 2rem;
                display: flex;
                flex-direction: column;
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
            }

            .mobile-menu.active {
                transform: translateX(0);
            }

            .mobile-menu-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 3rem;
            }

            .close-menu {
                background: transparent;
                border: none;
                color: white;
                cursor: pointer;
            }

            .close-menu svg {
                width: 32px;
                height: 32px;
            }

            .mobile-nav-links {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
                font-size: 1.25rem;
                font-weight: 600;
            }

            /* Responsive */
            @media (max-width: 992px) {
                .features-grid {
                    grid-template-columns: 1fr;
                    gap: 3rem;
                }
                .reverse .features-text {
                    order: 1;
                }
                .reverse .feature-image-wrapper {
                    order: 2;
                }
                .hero h1 {
                    font-size: 2.8rem;
                }
            }

            @media (max-width: 768px) {
                .nav-links, .nav-auth {
                    display: none;
                }
                .hamburger {
                    display: block;
                }
                .hero h1 {
                    font-size: 2.2rem;
                }
                .hero-gradient-box {
                    padding: 3rem 1.5rem 6rem;
                    margin-bottom: -4rem;
                }
            }
        </style>
    </head>
    <body>
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="mobile-menu-header">
                <div class="logo-container">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
                        <g fill="currentColor">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                    Laravel
                </div>
                <button class="close-menu" id="closeMenuBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mobile-nav-links">
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">Customers</a>
                <a href="#">Service</a>
                <a href="#">Learn</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary" style="text-align: center;">Start Your Free Trial</a>
            </div>
        </div>

        <div class="container">
            <!-- Navbar -->
            <nav class="navbar fade-up">
                <div class="logo-container">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
                        <g fill="currentColor">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                    Laravel
                </div>

                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Products</a>
                    <a href="#">Customers</a>
                    <a href="#">Service</a>
                    <a href="#">Learn</a>
                </div>

                <div class="nav-auth">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-outline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-white">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Start Your Free Trial</a>
                            @endif
                        @endauth
                    @endif
                </div>

                <button class="hamburger" id="hamburgerBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </nav>

            <!-- Hero Section -->
            <header class="hero fade-up">
                <div class="hero-bg-glow"></div>
                <div class="hero-gradient-box glass-card">
                    <h1>The All-In-One Solution<br><span class="text-gradient">For Data Access And Management</span></h1>
                    <p>Laravel helps you easily and securely manage your data. No matter where it is stored. Build modern, robust applications with elegance.</p>
                    <a href="#" class="btn btn-primary">Start Your Free Trial</a>
                </div>
                
                <div class="hero-image-container fade-up">
                    <img src="/images/hero_graphic.png" alt="Hero 3D Dashboard" class="hero-image floating">
                </div>
            </header>

            <!-- Features 1 -->
            <section class="section">
                <div class="section-header fade-up">
                    <h2>Centralized Data Access<br>And Management</h2>
                </div>
                <div class="features-grid">
                    <div class="features-text fade-up">
                        <p>Laravel provides a single interface for accessing and managing data from a variety of sources, including on-premises servers, cloud storage, and databases. This makes it easy to find and use the data you need to power your applications.</p>
                        <a href="#" class="btn btn-primary">See More</a>
                        <div class="tags-grid">
                            <span class="btn btn-outline">Improved Productivity</span>
                            <span class="btn btn-outline">Reduced Costs</span>
                            <span class="btn btn-outline">Improved Data Security</span>
                            <span class="btn btn-outline">Improved Data Compliance</span>
                        </div>
                    </div>
                    <div class="feature-image-wrapper fade-up">
                        <img src="/images/dashboard_graphic.png" alt="Dashboard Illustration" class="feature-image glass-card p-0" style="padding:0">
                    </div>
                </div>
            </section>

            <!-- Features 2 -->
            <section class="section reverse">
                <div class="section-header fade-up">
                    <h2>Secure Data Sharing</h2>
                </div>
                <div class="features-grid">
                    <div class="features-text fade-up">
                        <div class="highlight-box glass-card">
                            <p><strong>Peace Of Mind:</strong> You can be confident your data is safe and secure when you share it using Laravel's built-in robust security features.</p>
                        </div>
                        <p>With data privacy and security regulations such as GDPR and CCPA, it's more important than ever to have a reliable way to share data securely.</p>
                        <a href="#" class="btn btn-primary" style="margin-top: 1rem;">See More</a>
                        <div class="tags-grid">
                            <span class="btn btn-outline">Reduced Costs</span>
                            <span class="btn btn-outline">Improved Productivity</span>
                            <span class="btn btn-outline">Improved Data Security</span>
                            <span class="btn btn-outline">Improved Data Compliance</span>
                        </div>
                    </div>
                    <div class="feature-image-wrapper fade-up">
                        <img src="/images/cloud_graphic.png" alt="Cloud CPU Illustration" class="feature-image floating-slow glass-card p-0" style="padding:0">
                    </div>
                </div>
            </section>
        </div>

        <script>
            // Mobile Menu Toggle
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');

            hamburgerBtn.addEventListener('click', () => {
                mobileMenu.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            closeMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            });

            // Scroll Animation Observer
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-up').forEach((el) => {
                observer.observe(el);
            });
            
            // Trigger visible on load for elements already in viewport
            setTimeout(() => {
                document.querySelectorAll('.fade-up').forEach((el) => {
                    const rect = el.getBoundingClientRect();
                    if(rect.top < window.innerHeight) {
                        el.classList.add('visible');
                    }
                });
            }, 100);
        </script>
    </body>
</html>
