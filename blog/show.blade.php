<x-layout :title="$post->title" :description="$post->excerpt">
    <article class="section">
        <div class="container narrow">
            <a class="link-arrow back" href="{{ route('blog.index') }}"><x-icon name="arrow" size="18" class="flip" /> Back to blog</a>

            <header class="article-head">
                <p class="post-meta">
                    <span class="pill pill-soft">{{ $post->category }}</span>
                    <span>{{ $post->publishedAt->format('F j, Y') }}</span>
                    <span>{{ $post->readMinutes }} min read</span>
                </p>
                <h1>{{ $post->title }}</h1>
                <p class="lead">{{ $post->excerpt }}</p>
            </header>

            <div class="prose">
                @foreach ($post->body as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </article>

    @if (count($related))
        <section class="section section-soft">
            <div class="container">
                <x-section-heading title="Keep reading" />
                <div class="grid grid-2">
                    @foreach ($related as $item)
                        @include('blog.partials.card', ['post' => $item])
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <x-cta />
</x-layout>
