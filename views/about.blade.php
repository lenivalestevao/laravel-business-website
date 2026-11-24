<x-layout title="About" :description="'Meet the small team behind '.config('site.name').': how we work, what we believe and who you will talk to.'">
    <section class="page-hero">
        <div class="container narrow center">
            <p class="eyebrow">About us</p>
            <h1>A small team that cares about your result</h1>
            <p class="lead">We started {{ config('site.name') }} because good websites should not be complicated or expensive. Today we help growing businesses look professional online and get found by the right customers.</p>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div class="reveal">
                <p class="eyebrow">Our story</p>
                <h2>Built on clear communication</h2>
                <p>We worked in large agencies for years and noticed the same problem again and again: clients were left waiting, confused by jargon and surprised by the final invoice.</p>
                <p>So we built a studio where you talk directly to the people doing the work, see progress every week and always know what comes next.</p>
                <p>That approach has kept most of our clients with us for years, and it is how we plan to keep working.</p>
            </div>

            <div class="grid grid-2 values reveal">
                @foreach (config('site.values') as $value)
                    <article class="card">
                        <span class="icon-badge"><x-icon :name="$value['icon']" /></span>
                        <h3>{{ $value['title'] }}</h3>
                        <p>{{ $value['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container">
            <x-section-heading eyebrow="The team" title="People you will actually work with" />

            <div class="grid grid-4">
                @foreach (config('site.team') as $member)
                    <article class="card member reveal">
                        <span class="avatar avatar-lg" aria-hidden="true">{{ mb_substr($member['name'], 0, 1) }}</span>
                        <h3>{{ $member['name'] }}</h3>
                        <p class="muted">{{ $member['role'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <x-cta title="Let's talk about your website" text="Share a few details and we will suggest the best way to get started." button="Get in touch" />
</x-layout>
