@props([
    'title' => 'Ready to start your project?',
    'text' => 'Tell us about your idea and we will reply within one business day.',
    'button' => 'Contact us',
])

<section class="section section-tight">
    <div class="container">
        <div class="cta-banner reveal">
            <div>
                <h2>{{ $title }}</h2>
                <p>{{ $text }}</p>
            </div>
            <a class="btn btn-light btn-lg" href="{{ route('contact') }}">{{ $button }} <x-icon name="arrow" /></a>
        </div>
    </div>
</section>
