<article class="card post-card reveal">
    <div class="post-cover" aria-hidden="true"></div>
    <div class="post-body">
        <p class="post-meta">
            <span class="pill pill-soft">{{ $post->category }}</span>
            <span>{{ $post->publishedAt->format('M j, Y') }}</span>
            <span>{{ $post->readMinutes }} min read</span>
        </p>
        <h3><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
        <p>{{ $post->excerpt }}</p>
        <a class="link-arrow" href="{{ route('blog.show', $post->slug) }}">Read article <x-icon name="arrow" size="18" /></a>
    </div>
</article>
