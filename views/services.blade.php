<x-layout title="Services" description="Web design, development, e-commerce, SEO, branding and ongoing support for growing businesses.">
    <section class="page-hero">
        <div class="container narrow center">
            <p class="eyebrow">Services</p>
            <h1>Everything you need to succeed online</h1>
            <p class="lead">Pick a single service or work with us end to end. Every project starts with a short conversation about your goals.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="grid grid-3">
                @foreach (config('site.services') as $service)
                    <article class="card service reveal">
                        <span class="icon-badge"><x-icon :name="$service['icon']" /></span>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['text'] }}</p>
                        <ul class="checklist">
                            @foreach ($service['items'] as $item)
                                <li><x-icon name="check" size="18" /> {{ $item }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container">
            <x-section-heading eyebrow="How we work" title="A simple process in four steps" />

            <ol class="steps">
                @foreach (config('site.process') as $step)
                    <li class="step reveal">
                        <span class="step-number">{{ $loop->iteration }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <x-cta title="Not sure what you need?" text="Describe your goal and we will recommend a simple plan, with no obligation." button="Ask us" />
</x-layout>
