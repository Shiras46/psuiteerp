<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Solution;

class SolutionTest extends TestCase
{
    /**
     * Test solutions index page.
     *
     * @return void
     */
    public function test_solutions_index_page_loads_successfully()
    {
        $response = $this->get('/solutions');
        $response->assertStatus(200);
        $response->assertSee('Enterprise Solutions');
    }

    /**
     * Test all 7 individual solution pages load successfully.
     *
     * @return void
     */
    public function test_individual_solution_pages_load_successfully()
    {
        $slugs = [
            'travel-tourism',
            'car-rental',
            'inventory-management',
            'human-resource-management',
            'finance-accounting',
            'workshop-management',
            'customer-relationship-management'
        ];

        foreach ($slugs as $slug) {
            $response = $this->get("/solutions/{$slug}");
            $response->assertStatus(200);
            
            // Verify solution model was seeded and is rendering
            $solution = Solution::where('slug', $slug)->first();
            $this->assertNotNull($solution);
            $response->assertSee($solution->title);
            
            // Verify SEO configuration details
            $response->assertSee($solution->seo_title);
            
            // Verify CTA content
            $response->assertSee($solution->demo_cta['button_text'] ?? 'Book Free Demo');
        }
    }
}
