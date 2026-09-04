<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Solution;

class SolutionSeeder extends Seeder
{
    public function run()
    {
        Solution::truncate();

        $solutions = [
            [
                'title' => 'Travel & Tourism',
                'slug' => 'travel-tourism',
                'description' => 'Designed for Travel Agencies, Tour Operators, Destination Management Companies, and Ticketing Businesses.',
                'overview' => '<h3>Empowering Travel Operators in the Digital Age</h3><p>PSuite ERP for Travel & Tourism replaces scattered spreadsheets and legacy booking systems with a unified cloud engine. Coordinate your bookings, suppliers, channels, and finances in real-time.</p>',
                'statistics' => [
                    ['stat' => '✓ Cloud Booking Engine'],
                    ['stat' => '✓ Multi-Currency Support'],
                    ['stat' => '✓ Real-Time Itinerary Builder']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-globe-alt', 'title' => 'GDS Integration', 'description' => 'Connect seamlessly with Global Distribution Systems.'],
                    ['icon' => 'heroicon-o-ticket', 'title' => 'Amadeus, Sabre & Galileo Ready', 'description' => 'Built-in support for major flight reservation networks.'],
                    ['icon' => 'heroicon-o-paper-airplane', 'title' => 'IATA NDC Compliance', 'description' => 'Direct distribution capability for modern airline retailing.'],
                    ['icon' => 'heroicon-o-desktop-computer', 'title' => 'Online Booking Engine (B2B & B2C)', 'description' => 'Deploy search and booking engines directly on your website.'],
                    ['icon' => 'heroicon-o-cash', 'title' => 'Ticket Sales & Void Management', 'description' => 'Handle complex ticketing lifecycles efficiently.'],
                    ['icon' => 'heroicon-o-map', 'title' => 'Dynamic Holiday Packages', 'description' => 'Construct multi-day travel schedules effortlessly.'],
                    ['icon' => 'heroicon-o-document-text', 'title' => 'Visa Processing', 'description' => 'Track and manage tourist visa applications.'],
                    ['icon' => 'heroicon-o-briefcase', 'title' => 'Corporate Travel Management', 'description' => 'Dedicated portals for corporate clients.'],
                    ['icon' => 'heroicon-o-office-building', 'title' => 'Hotel Booking & Vouchers', 'description' => 'Manage room blocks and auto-generate vouchers.'],
                    ['icon' => 'heroicon-o-truck', 'title' => 'Transport & Transfer Management', 'description' => 'Coordinate fleet and driver dispatch for tours.'],
                    ['icon' => 'heroicon-o-calculator', 'title' => 'IATA BSP Reconciliation', 'description' => 'Automate your IATA billing and settlement processes.'],
                    ['icon' => 'heroicon-o-credit-card', 'title' => 'Supplier Payment Tracking', 'description' => 'Manage payables and vendor commissions easily.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our Travel Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ],
            [
                'title' => 'Car Rental',
                'slug' => 'car-rental',
                'description' => 'A complete fleet management ecosystem for vehicle rental businesses.',
                'overview' => '<h3>Complete Control Over Your Fleet</h3><p>PSuite ERP for Car Rental offers operations-focused management for airport transfers, self-drive rentals, corporate leasing, and chauffeur-driven bookings.</p>',
                'statistics' => [
                    ['stat' => '✓ GPS Fleet Tracking'],
                    ['stat' => '✓ Digital Rental Agreements'],
                    ['stat' => '✓ Automated Alerts']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-calendar', 'title' => 'Vehicle Reservation & Dispatch', 'description' => 'Visual drag-and-drop calendar for reservations.'],
                    ['icon' => 'heroicon-o-document-text', 'title' => 'Digital Rental Agreements', 'description' => 'Paperless contracts with digital signatures.'],
                    ['icon' => 'heroicon-o-shield-check', 'title' => 'Insurance Tracking', 'description' => 'Monitor policy expirations and claims.'],
                    ['icon' => 'heroicon-o-cash', 'title' => 'Toll (Salik) Integration', 'description' => 'Auto-sync toll charges to customer invoices.'],
                    ['icon' => 'heroicon-o-exclamation-circle', 'title' => 'Traffic Fine Management', 'description' => 'Automatically assign fines to the responsible renter.'],
                    ['icon' => 'heroicon-o-wrench', 'title' => 'Preventive Maintenance', 'description' => 'Schedule services based on odometer readings.'],
                    ['icon' => 'heroicon-o-user', 'title' => 'Driver & Chauffeur Allocation', 'description' => 'Manage driver shifts and assignments.'],
                    ['icon' => 'heroicon-o-office-building', 'title' => 'Corporate Leasing Modules', 'description' => 'Handle long-term corporate vehicle leases.'],
                    ['icon' => 'heroicon-o-chart-bar', 'title' => 'Fleet Utilization Analytics', 'description' => 'Maximize ROI with real-time utilization metrics.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our Fleet Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ],
            [
                'title' => 'Inventory',
                'slug' => 'inventory-management',
                'description' => 'Smart inventory control for distributors, warehouses, wholesalers, and retailers.',
                'overview' => '<h3>End-to-End Stock Control</h3><p>PSuite ERP for Inventory Management prevents stockouts and overstocking by automatically forecasting requirements and tracking batches.</p>',
                'statistics' => [
                    ['stat' => '✓ Multi-Warehouse Sync'],
                    ['stat' => '✓ Barcode Tracking'],
                    ['stat' => '✓ Auto-Reordering']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-database', 'title' => 'Real-Time Inventory Tracking', 'description' => 'Track stock movements across all locations.'],
                    ['icon' => 'heroicon-o-qrcode', 'title' => 'Barcode Management', 'description' => 'Equip warehouse crews with barcode scanning.'],
                    ['icon' => 'heroicon-o-truck', 'title' => 'Supplier Management', 'description' => 'Maintain supplier profiles and performance.'],
                    ['icon' => 'heroicon-o-refresh', 'title' => 'Auto-Reordering', 'description' => 'Calculate dynamic min-max levels.'],
                    ['icon' => 'heroicon-o-shopping-bag', 'title' => 'Sales Management', 'description' => 'Streamline the entire sales lifecycle.'],
                    ['icon' => 'heroicon-o-check-circle', 'title' => 'Order Fulfillment', 'description' => 'Optimize warehouse paths and pick schedules.'],
                    ['icon' => 'heroicon-o-desktop-computer', 'title' => 'POS Integration', 'description' => 'Seamlessly connect with retail Point of Sale systems.'],
                    ['icon' => 'heroicon-o-collection', 'title' => 'Multi-Warehouse Control', 'description' => 'Manage multiple storage facilities centrally.'],
                    ['icon' => 'heroicon-o-cube', 'title' => 'Batch & Expiry Tracking', 'description' => 'Trace defective products and manage perishables.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our Supply Chain Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ],
            [
                'title' => 'HR Management',
                'slug' => 'human-resource-management',
                'description' => 'Digitize employee management and HR operations.',
                'overview' => '<h3>A Digital Core for Your Workforce</h3><p>PSuite ERP for Human Resources simplifies employee management, automating payroll, attendance, and compliance.</p>',
                'statistics' => [
                    ['stat' => '✓ Employee Self-Service'],
                    ['stat' => '✓ Auto-Calculated Payroll'],
                    ['stat' => '✓ Biometric Sync']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-users', 'title' => 'Employee Profiles', 'description' => 'Centralized directory for all staff records.'],
                    ['icon' => 'heroicon-o-finger-print', 'title' => 'Biometric Device Integration', 'description' => 'Sync directly with hardware attendance systems.'],
                    ['icon' => 'heroicon-o-clock', 'title' => 'Time & Attendance Tracking', 'description' => 'Monitor shifts, tardiness, and overtime.'],
                    ['icon' => 'heroicon-o-calendar', 'title' => 'Leave Management', 'description' => 'Digital workflows for leave requests and approvals.'],
                    ['icon' => 'heroicon-o-calculator', 'title' => 'Automated Payroll Processing', 'description' => 'Generate compliant payslips with zero errors.'],
                    ['icon' => 'heroicon-o-document-text', 'title' => 'WPS Compliance', 'description' => 'Ensure adherence to the Wage Protection System.'],
                    ['icon' => 'heroicon-o-document', 'title' => 'Visa & Document Expiry Alerts', 'description' => 'Proactive notifications for renewing credentials.'],
                    ['icon' => 'heroicon-o-cash', 'title' => 'End of Service Calculations', 'description' => 'Automate complex gratuity and final settlement maths.'],
                    ['icon' => 'heroicon-o-user-add', 'title' => 'Recruitment & Onboarding', 'description' => 'Streamline candidate tracking and new hire flows.'],
                    ['icon' => 'heroicon-o-star', 'title' => 'Performance Appraisals', 'description' => 'Track KPIs and manage employee reviews.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our HR Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ],
            [
                'title' => 'Finance & Accounting',
                'slug' => 'finance-accounting',
                'description' => 'Comprehensive financial management for growing enterprises.',
                'overview' => '<h3>Total Financial Visibility</h3><p>PSuite ERP for Finance provides clear visibility into financial status, meeting international accounting standards.</p>',
                'statistics' => [
                    ['stat' => '✓ Double-Entry Ledger'],
                    ['stat' => '✓ Automated Tax'],
                    ['stat' => '✓ Bank Feeds']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-book-open', 'title' => 'General Ledger', 'description' => 'Real-time double-entry engine.'],
                    ['icon' => 'heroicon-o-arrow-circle-right', 'title' => 'Accounts Payable (AP)', 'description' => 'Manage vendor invoices and outgoing payments.'],
                    ['icon' => 'heroicon-o-arrow-circle-left', 'title' => 'Accounts Receivable (AR)', 'description' => 'Track customer invoices and incoming revenue.'],
                    ['icon' => 'heroicon-o-receipt-tax', 'title' => 'VAT & Tax Compliance', 'description' => 'Automated tax calculations for GCC regions.'],
                    ['icon' => 'heroicon-o-cash', 'title' => 'Petty Cash Management', 'description' => 'Control and audit daily minor expenses.'],
                    ['icon' => 'heroicon-o-shield-check', 'title' => 'Bank Reconciliation', 'description' => 'Match bank statements with internal ledgers.'],
                    ['icon' => 'heroicon-o-currency-dollar', 'title' => 'Multi-Currency Support', 'description' => 'Handle international transactions seamlessly.'],
                    ['icon' => 'heroicon-o-chart-pie', 'title' => 'Financial Reporting', 'description' => 'Generate dynamic P&L, Balance Sheets, and more.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our Finance Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ],
            [
                'title' => 'CRM Solution',
                'slug' => 'customer-relationship-management',
                'description' => 'Manage leads, sales, and customer engagement effectively.',
                'overview' => '<h3>Build Stronger Customer Relationships</h3><p>PSuite CRM empowers your sales and support teams to track leads, manage pipelines, and resolve customer issues efficiently.</p>',
                'statistics' => [
                    ['stat' => '✓ Pipeline Tracking'],
                    ['stat' => '✓ Email Integration'],
                    ['stat' => '✓ Sales Analytics']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-user-group', 'title' => 'Lead Management', 'description' => 'Capture and qualify prospective customers.'],
                    ['icon' => 'heroicon-o-trending-up', 'title' => 'Sales Pipeline', 'description' => 'Visual boards to track deal stages.'],
                    ['icon' => 'heroicon-o-eye', 'title' => 'Opportunity Tracking', 'description' => 'Monitor high-value deals and forecast revenue.'],
                    ['icon' => 'heroicon-o-support', 'title' => 'Customer Support Ticketing', 'description' => 'Resolve issues via an integrated helpdesk.'],
                    ['icon' => 'heroicon-o-mail', 'title' => 'Email Marketing Integration', 'description' => 'Send campaigns and track engagement.'],
                    ['icon' => 'heroicon-o-document-text', 'title' => 'Quotation & Invoicing', 'description' => 'Generate professional estimates instantly.'],
                    ['icon' => 'heroicon-o-chart-bar', 'title' => 'Performance Analytics', 'description' => 'Measure sales team KPIs and conversion rates.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our CRM Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ],
            [
                'title' => 'Workshop Management',
                'slug' => 'workshop-management',
                'description' => 'Comprehensive management system for automotive and repair workshops.',
                'overview' => '<h3>Streamline Your Workshop Operations</h3><p>PSuite ERP for Workshop Management optimizes your service center by digitizing job cards, parts inventory, and mechanic allocations.</p>',
                'statistics' => [
                    ['stat' => '✓ Digital Job Cards'],
                    ['stat' => '✓ Parts Inventory'],
                    ['stat' => '✓ Mechanic Tracking']
                ],
                'features' => [
                    ['icon' => 'heroicon-o-wrench', 'title' => 'Job Card Management', 'description' => 'Create and track digital repair orders.'],
                    ['icon' => 'heroicon-o-cog', 'title' => 'Spare Parts Inventory', 'description' => 'Manage OEM and aftermarket parts stock.'],
                    ['icon' => 'heroicon-o-users', 'title' => 'Mechanic Allocation', 'description' => 'Assign jobs and track labor efficiency.'],
                    ['icon' => 'heroicon-o-document-text', 'title' => 'Estimates & Invoicing', 'description' => 'Generate quick quotes and final bills.'],
                    ['icon' => 'heroicon-o-calendar', 'title' => 'Service Appointments', 'description' => 'Schedule customer vehicle drop-offs.'],
                    ['icon' => 'heroicon-o-clipboard-check', 'title' => 'Quality Control', 'description' => 'Checklists for final inspection before delivery.']
                ],
                'demo_cta' => [
                    'button_text' => 'Book Free Demo'
                ],
                'contact_cta' => [
                    'headline' => 'Need More Information?',
                    'description' => 'Talk With Our Automotive Experts',
                    'phone' => '+968 99107588',
                    'whatsapp' => '+968 99107588',
                    'email' => 'sales@premier-techs.com'
                ]
            ]
        ];

        foreach ($solutions as $sol) {
            Solution::create($sol);
        }
    }
}
