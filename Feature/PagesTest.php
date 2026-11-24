<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_public_pages_load(): void
    {
        foreach (['home', 'about', 'services', 'pricing', 'blog.index', 'contact'] as $name) {
            $this->get(route($name))->assertOk();
        }
    }

    public function test_home_shows_site_name_and_navigation(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(config('site.name'))
            ->assertSee('Skip to content')
            ->assertSee(route('pricing'), false);
    }

    public function test_pricing_lists_every_plan(): void
    {
        $response = $this->get(route('pricing'))->assertOk();

        foreach (config('site.plans') as $plan) {
            $response->assertSee($plan['name']);
        }
    }

    public function test_unknown_page_renders_custom_404(): void
    {
        $this->get('/this-page-does-not-exist')
            ->assertNotFound()
            ->assertSee('We could not find that page');
    }
}
