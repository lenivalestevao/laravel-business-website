<?php

namespace App\Http\Controllers;

use App\Support\Blog;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $pages = collect(['home', 'about', 'services', 'pricing', 'blog.index', 'contact'])
            ->map(fn (string $name) => ['url' => route($name), 'lastmod' => null]);

        $posts = Blog::all()->map(fn ($post) => [
            'url' => route('blog.show', $post->slug),
            'lastmod' => $post->publishedAt->toDateString(),
        ]);

        return response()
            ->view('sitemap', ['urls' => $pages->concat($posts)])
            ->header('Content-Type', 'application/xml');
    }
}
