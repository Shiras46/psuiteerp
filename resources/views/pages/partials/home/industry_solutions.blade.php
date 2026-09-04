<!-- SECTION 02: INDUSTRY SOLUTIONS STORYTELLING (FULL SCREEN HORIZONTAL SCROLL) -->
<style>
    .hsh-card {
        --card-accent: var(--home-primary);
        --card-accent-dark: #0f9b98;
    }

    .hsh-bg-word {
        opacity: 0.04 !important;
    }

    /* Fix image sizing so vertical photos get rounded corners and don't stretch */
    .hsh-visual img {
        width: auto !important;
        height: 100% !important;
        max-width: 100% !important;
        object-fit: contain !important;
        border-radius: 20px !important;
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.4) !important;
    }

    .hs-tag-container { display: none !important;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.85rem;
    }

    .hs-tag-level {
        padding: 4px 12px;
        border-radius: 4px;
        background-color: var(--solution-accent, var(--card-accent));
        color: #fff;
        font-size: 0.8rem;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .hs-tag {
        margin-bottom: 0 !important;
        color: var(--card-accent) !important;
        font-size: 0.8rem;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .hsh-content h3 {
        font-size: clamp(2.2rem, 3.5vw, 3.5rem) !important;
        font-weight: 800 !important;
        color: #fff !important;
        margin-bottom: 1rem !important;
        line-height: 1.15 !important;
        letter-spacing: -0.01em !important;
    }

    .module-desc {
        font-size: 1.05rem !important;
        line-height: 1.5 !important;
        color: rgba(255, 255, 255, 0.75) !important;
        margin-bottom: 1rem !important;
        max-width: 520px !important;
    }

    .module-feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.5rem 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        font-size: 0.95rem;
    }

    .module-feature-list li {
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    .hs-check {
        color: var(--card-accent);
        width: 1rem;
        height: 1rem;
        flex-shrink: 0;
    }

    /* CTA Button */
    .hsh-card .btn-home-outline {
        display: none !important;
        align-items: center !important;
        gap: 0.5rem !important;
        padding: 0.8rem 1.6rem !important;
        background-color: var(--card-accent) !important;
        color: #fff !important;
        border: none !important;
        border-radius: 8px !important;
        font-size: 1rem !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        transition: all 0.3s ease !important;
        width: fit-content !important;
    }

    .hsh-card .btn-home-outline:hover {
        background-color: var(--card-accent-dark) !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3) !important;
    }

    /* Image hover */
    .hsh-visual img {
        transition: transform 0.5s ease;
    }

    .hsh-card-inner:hover .hsh-visual img {
        transform: scale(1.03);
    }

    @media (max-width: 768px) {
        .module-feature-list {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="home-solutions-hz" id="hz-solutions">
    <div class="hsh-scroll-container">
        <div class="hsh-scroll-track" id="hz-track">

            <!-- LEVEL 01 — Travel & Tourism ERP -->
            <div class="hsh-card hsh-card-travel">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">TRAVEL</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 01</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Travel &amp; Tourism Management</h3>
                        <p class="module-desc">PSuite Travel ERP streamlines travel back-office operations by
                            integrating with GDS, LCC websites, NDCs, and booking engines to automate billing,
                            accounting, and reconciliation.</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>GDS & LCC Website Integration</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Ready to Integrate with NDCs & Booking Engine</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Automated BSP & Non-BSP Reconciliation</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Holiday Packages & Ancillary Services Billing</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Passenger Database Management & Smart Alerts</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time Analytics & Executive Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'travel-tourism') }}" class="btn-home-outline">Explore
                            Travel ERP <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/travel.webp') }}" alt="Travel ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

            <!-- LEVEL 02 — Car Rental & Fleet ERP -->
            <div class="hsh-card hsh-card-fleet">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">FLEET</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 02</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Car Rental &amp; Fleet Management</h3>
                        <p class="module-desc">Manage your entire fleet with confidence. PSuite Fleet ERP automates
                            rental operations, vehicle maintenance, customer management, billing, and business analytics
                            through a single cloud platform.</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Reservation & Booking Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Rental Agreements & Fleet Operations</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Service & Preventive Maintenance</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Customer Profile Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Vehicle Availability & Utilization</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time Analytics & Executive Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'car-rental') }}" class="btn-home-outline">Explore Fleet ERP
                            <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/car rental.webp') }}" alt="Fleet ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

            <!-- LEVEL 03 — Inventory Management ERP -->
            <div class="hsh-card hsh-card-inventory">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">STOCK</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 03</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Inventory Management</h3>
                        <p class="module-desc">PSuite Inventory Management provides end-to-end control over purchasing,
                            sales, inventory, warehouses, and stock movements through a single cloud-based platform with
                            real-time visibility and analytics.</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Procurement & Purchase Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Sales & POS Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Inventory & Stock Control</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Multi-Warehouse Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Stock Transfers & Adjustments</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time Inventory Analytics & Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'inventory-management') }}" class="btn-home-outline">Explore
                            Inventory ERP <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/inventory.webp') }}" alt="Inventory ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

            <!-- LEVEL 04 — Human Resource ERP -->
            <div class="hsh-card hsh-card-hr">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">PEOPLE</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 04</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Human Resource Management</h3>
                        <p class="module-desc">PSuite HR & Payroll is a cloud-based solution that streamlines the entire
                            employee lifecycle, from recruitment and onboarding to payroll, attendance, leave
                            management, and employee self-service, with real-time insights and compliance.</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Recruitment & Candidate Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Employee Onboarding & Offboarding</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Employee Database & Document Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Payroll & Salary Processing</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Employee Self-Service (ESS) Portal</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Leave, Attendance & Holiday Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time HR Analytics & Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'human-resource-management') }}"
                            class="btn-home-outline">Explore HR ERP <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/hr.webp') }}" alt="HR ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

            <!-- LEVEL 05 — Finance & Accounting ERP -->
            <div class="hsh-card hsh-card-finance">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">FINANCE</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 05</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Finance &amp; Accounting Management</h3>
                        <p class="module-desc">Gain complete control over your financial operations with PSuite Finance
                            ERP. From accounting and banking to receivables, payables, and financial reporting,
                            everything is managed through a single intelligent platform.</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Dynamic Chart of Accounts</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Automatic Bank & POS Reconciliation</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Accounts Receivable & Payable Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Dynamic Aging Analysis</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Fixed Asset Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Prepaid Expense Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time Financial Reports & Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'finance-accounting') }}" class="btn-home-outline">Explore
                            Finance ERP <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/finance.webp') }}" alt="Finance ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

            <!-- LEVEL 06 — CRM ERP -->
            <div class="hsh-card hsh-card-crm">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">REVENUE</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 06</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Customer Relationship Management</h3>
                        <p class="module-desc">Build stronger customer relationships with PSuite CRM. Manage leads,
                            enquiries, quotations, follow-ups, and sales activities from a single platform to improve
                            conversions and customer engagement.</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Lead management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Customer Database Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Quotation & Proposal Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Follow-Up & Activity Management</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'customer-relationship-management') }}"
                            class="btn-home-outline">Explore CRM ERP <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/crm.webp') }}" alt="CRM ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

            <!-- LEVEL 07 — Workshop Management ERP -->
            <div class="hsh-card hsh-card-workshop">
                <div class="hsh-card-inner">
                    <div class="hsh-bg-word">GARAGE</div>
                    <div class="hsh-content">
                        <div class="hs-tag-container">

                            <span class="hs-tag-level">LEVEL 07</span>
                            <span class="hs-tag">INDUSTRY SOLUTION</span>
                        </div>
                        <h3>Automotive Workshop Management</h3>
                        <p class="module-desc">Digital Job Cards & Workflow Automation
                            Vehicle Inspection & Service Tracking,Spare Parts & Inventory Control,Technician Assignment
                            & Timesheets,Customer & Dealer Service Contracts,Real-Time Performance & Profitability
                            Dashboards</p>
                        <ul class="module-feature-list">
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Digital Job Cards & Workflow Automation</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Vehicle Inspection & Service Tracking</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Spare Parts & Inventory Control</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Technician Assignment & Timesheets</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Customer & Dealer Service Contracts</li>
                            <li><svg class="hs-check" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>Real-Time Performance & Profitability Dashboards</li>
                        </ul>
                        <a href="{{ route('solutions.show', 'workshop-management') }}" class="btn-home-outline">Explore
                            Workshop ERP <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="hsh-visual">
                        <img src="{{ asset('images/mockups/services/workshop.webp') }}" alt="Workshop ERP Dashboard"
                            class="hsh-screen-mock">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
