<?php

namespace Tests\Feature;

use App\Support\Blog;
use Tests\TestCase;

class SeoTest extends TestCase
{
    public function test_pages_have_title_description_and_canonical(): void
    {
        $this->get(route('about'))
            ->assertOk()
            ->assertSee('<title>About | '.config('site.name').'</title>', false)
            ->assertSee('<meta name="description"', false)
            ->assertSee('<link rel="canonical"', false);
    }

    public function test_sitemap_lists_pages_and_posts(): void
    {
        $response = $this->get(route('sitemap'))
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee(route('pricing'), false);

        foreach (Blog::all() as $post) {
            $response->assertSee(route('blog.show', $post->slug), false);
        }
    }

    public function test_robots_file_points_to_the_sitemap(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('Sitemap:', $robots);
    }
}
