<?php

namespace App\Support;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * Reads the posts from config/blog.php. Swap this class for an Eloquent
 * model when you want to manage posts in a database.
 */
final class Blog
{
    /**
     * All posts, newest first.
     *
     * @return Collection<int, Post>
     */
    public static function all(): Collection
    {
        return collect(config('blog.posts', []))
            ->map(fn (array $post) => new Post(
                slug: $post['slug'],
                title: $post['title'],
                excerpt: $post['excerpt'],
                category: $post['category'],
                readMinutes: (int) $post['read_minutes'],
                publishedAt: Carbon::parse($post['published_at']),
                body: $post['body'],
            ))
            ->sortByDesc(fn (Post $post) => $post->publishedAt->timestamp)
            ->values();
    }

    public static function find(string $slug): ?Post
    {
        return self::all()->firstWhere('slug', $slug);
    }

    /**
     * @return Collection<int, Post>
     */
    public static function latest(int $limit = 3): Collection
    {
        return self::all()->take($limit)->values();
    }

    /**
     * Other posts to suggest below an article.
     *
     * @return Collection<int, Post>
     */
    public static function related(Post $post, int $limit = 2): Collection
    {
        return self::all()
            ->reject(fn (Post $other) => $other->slug === $post->slug)
            ->take($limit)
            ->values();
    }
}
