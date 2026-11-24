<?php

namespace App\Support;

use Illuminate\Support\Carbon;

final class Post
{
    /**
     * @param  list<string>  $body
     */
    public function __construct(
        public readonly string $slug,
        public readonly string $title,
        public readonly string $excerpt,
        public readonly string $category,
        public readonly int $readMinutes,
        public readonly Carbon $publishedAt,
        public readonly array $body,
    ) {
    }
}
