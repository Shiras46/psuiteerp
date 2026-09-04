<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSlide;

class HeroSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = [
            [
                'id' => 1,
                'eyebrow' => 'ENTERPRISE ERP PLATFORM',
                'title' => 'Enterprise Solutions.<br><span class="gradient-text">Tailored for Every Industry.</span>',
                'description' => 'PSuite delivers ERP solutions designed for Travel & Tourism, Fleet Management, Retail, Trading, Inventory, and Workshop Management, with seamless integration to Finance, HR & Payroll, and CRM—helping businesses automate operations, improve decision-making, and scale with confidence.',
                'primary_button_text' => 'Request Demo',
                'primary_button_link' => '/book-demo',
                'secondary_button_text' => 'Explore Solutions',
                'secondary_button_link' => '/solutions',
                'image' => 'mockups/heros/hero slider1.webp',
                'metrics' => [
                    ["value" => "50+", "label" => "Clients"],
                    ["value" => "6+", "label" => "Countries"],
                    ["value" => "99.9%", "label" => "Uptime"],
                    ["value" => "24/7", "label" => "Support"]
                ],
                'features' => null,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'id' => 2,
                'eyebrow' => 'INTELLIGENT AUTOMATION',
                'title' => 'Automate More.<br><span class="gradient-text">Manage Less. Grow Faster.</span>',
                'description' => 'Reduce manual work and streamline business processes with intelligent automation. From approvals and financial workflows to operational tasks and reporting, PSuite helps your team work smarter and faster.',
                'primary_button_text' => 'See How It Works →',
                'primary_button_link' => '/solutions',
                'secondary_button_text' => null,
                'secondary_button_link' => null,
                'image' => 'hero_slides/ail79hPuZPaxb4Y9qQZhSpannLroKK-metaaGVybyBzbGllZHIzLndlYnA=-.webp',
                'metrics' => [],
                'features' => [
                    ["text" => "Business Process Automation"],
                    ["text" => "Intelligent Approval Management"],
                    ["text" => "Workflow Routing & Escalation"],
                    ["text" => "Automated Notifications"],
                    ["text" => "Real-Time Operational Insights"],
                    ["text" => "Exception & Compliance Monitoring"]
                ],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'id' => 3,
                'eyebrow' => 'ENTERPRISE READY',
                'title' => 'Built for Growth.<br><span class="gradient-text">Designed for Enterprises.</span>',
                'description' => "Whether you're a growing business or a large enterprise, PSuite provides the flexibility, security, and scalability to support your digital transformation while adapting to your unique operational requirements.",
                'primary_button_text' => 'Book a Live Demo →',
                'primary_button_link' => '/book-demo',
                'secondary_button_text' => null,
                'secondary_button_link' => null,
                'image' => 'hero_slides/VbA61nDn3otDoQrbdnMkFrRsyBCCWD-metaaGVybyBzbGlkZXIyLndlYnA=-.webp',
                'metrics' => [],
                'features' => null,
                'order' => 3,
                'is_active' => true,
            ]
        ];

        foreach ($slides as $slide) {
            HeroSlide::updateOrCreate(
                ['id' => $slide['id']],
                $slide
            );
        }
    }
}
