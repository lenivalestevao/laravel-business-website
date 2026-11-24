<?php

namespace Tests\Feature;

use App\Support\Blog;
use Tests\TestCase;

class BlogTest extends TestCase
{
    public function test_index_lists_posts(): void
    {
        $response = $this->get(route('blog.index'))->assertOk();

        foreach (Blog::all() as $post) {
            $response->assertSee($post->title);
        }
    }

    public function test_post_page_shows_the_article(): void
    {
        $post = Blog::all()->first();

        $this->get(route('blog.show', $post->slug))
            ->assertOk()
            ->assertSee($post->title)
            ->assertSee($post->category);
    }

    public function test_unknown_slug_returns_404(): void
    {
        $this->get(route('blog.show', 'no-such-post'))->assertNotFound();
    }

    public function test_posts_are_sorted_newest_first(): void
    {
        $dates = Blog::all()->map(fn ($post) => $post->publishedAt->timestamp)->all();

        $sorted = $dates;
        rsort($sorted);

        $this->assertSame($sorted, $dates);
    }
}
