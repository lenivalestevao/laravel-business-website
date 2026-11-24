<x-layout title="Blog" description="Practical articles about web design, performance, SEO and growing your business online.">
    <section class="page-hero">
        <div class="container narrow center">
            <p class="eyebrow">Blog</p>
            <h1>Notes on building better websites</h1>
            <p class="lead">Short, practical articles from our team.</p>
        </div>
    </section>

    <section class="section section-flush">
        <div class="container">
            <div class="grid grid-3">
                @foreach ($posts as $post)
                    @include('blog.partials.card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </section>

    <x-cta />
</x-layout>
