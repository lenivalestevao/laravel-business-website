<x-layout>
    {{-- Hero --}}
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-copy reveal">
                <span class="pill"><span class="dot"></span> Booking new projects</span>
                <h1>Websites that turn <span class="gradient-text">visitors into customers</span></h1>
                <p class="lead">{{ config('site.description') }}</p>

                <div class="btn-row">
                    <a class="btn btn-primary btn-lg" href="{{ route('contact') }}">Start a project <x-icon name="arrow" /></a>
                    <a class="btn btn-ghost btn-lg" href="{{ route('pricing') }}">See pricing</a>
                </div>

                <ul class="trust">
                    <li><x-icon name="check" size="18" /> Fixed prices</li>
                    <li><x-icon name="check" size="18" /> Launch in weeks</li>
                    <li><x-icon name="check" size="18" /> Support included</li>
                </ul>
            </div>

            {{-- Decorative browser mockup, built with plain HTML and CSS --}}
            <div class="hero-visual reveal" aria-hidden="true">
                <div class="mock">
                    <div class="mock-bar"><span></span><span></span><span></span><i>{{ strtolower(str_replace(' ', '', config('site.name'))) }}.com</i></div>
                    <div class="mock-body">
                        <div class="mock-hero">
                            <b></b><b class="short"></b><u></u>
                        </div>
                        <div class="mock-cards">
                            <div><x-icon name="bolt" size="18" /><i></i><i class="short"></i></div>
                            <div><x-icon name="shield" size="18" /><i></i><i class="short"></i></div>
                            <div><x-icon name="chart" size="18" /><i></i><i class="short"></i></div>
                        </div>
                        <div class="mock-chart">
                            <span style="--h: 38%"></span><span style="--h: 58%"></span><span style="--h: 46%"></span>
                            <span style="--h: 76%"></span><span style="--h: 64%"></span><span style="--h: 92%"></span>
                        </div>
                    </div>
                </div>
                <div class="float-card float-card-a"><x-icon name="chart" size="18" /> +128% leads</div>
                <div class="float-card float-card-b"><x-icon name="bolt" size="18" /> 0.9s load</div>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="stats-band">
        <div class="container stats">
            @foreach (config('site.stats') as $stat)
                <div class="stat reveal">
                    <strong>{{ $stat['value'] }}</strong>
                    <span>{{ $stat['label'] }}</span>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Features --}}
    <section class="section">
        <div class="container">
            <x-section-heading
                eyebrow="Why choose us"
                title="Everything a modern website needs"
                text="A solid base from day one, so you can focus on your business instead of on technical details." />

            <div class="grid grid-3">
                @foreach (config('site.features') as $feature)
                    <article class="card feature reveal">
                        <span class="icon-badge"><x-icon :name="$feature['icon']" /></span>
                        <h3>{{ $feature['title'] }}</h3>
                        <p>{{ $feature['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services preview --}}
    <section class="section section-soft">
        <div class="container">
            <x-section-heading
                eyebrow="What we do"
                title="Services built around your goals"
                text="From the first sketch to the launch day and beyond." />

            <div class="grid grid-3">
                @foreach (array_slice(config('site.services'), 0, 3) as $service)
                    <article class="card service reveal">
                        <span class="icon-badge"><x-icon :name="$service['icon']" /></span>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['text'] }}</p>
                    </article>
                @endforeach
            </div>

            <p class="center more">
                <a class="link-arrow" href="{{ route('services') }}">Explore all services <x-icon name="arrow" size="18" /></a>
            </p>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="section">
        <div class="container">
            <x-section-heading eyebrow="Kind words" title="What our clients say" />

            <div class="grid grid-3">
                @foreach (config('site.testimonials') as $testimonial)
                    <figure class="card testimonial reveal">
                        <div class="stars" aria-label="5 out of 5 stars">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icon name="star" size="16" />
                            @endfor
                        </div>
                        <blockquote>&ldquo;{{ $testimonial['quote'] }}&rdquo;</blockquote>
                        <figcaption>
                            <span class="avatar" aria-hidden="true">{{ mb_substr($testimonial['name'], 0, 1) }}</span>
                            <span><strong>{{ $testimonial['name'] }}</strong><small>{{ $testimonial['role'] }}</small></span>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Latest posts --}}
    <section class="section section-soft">
        <div class="container">
            <x-section-heading eyebrow="From the blog" title="Ideas to grow your website" />

            <div class="grid grid-3">
                @foreach (\App\Support\Blog::latest(3) as $post)
                    @include('blog.partials.card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </section>

    <x-cta />
</x-layout>
