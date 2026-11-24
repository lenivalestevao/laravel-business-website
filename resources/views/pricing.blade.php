<x-layout title="Pricing" description="Simple, transparent pricing for websites that grow with your business. Choose monthly or yearly billing.">
    <section class="page-hero">
        <div class="container narrow center">
            <p class="eyebrow">Pricing</p>
            <h1>Simple plans, no surprises</h1>
            <p class="lead">Choose the plan that fits today and upgrade whenever your business grows.</p>

            <div class="billing" role="group" aria-label="Billing period">
                <button type="button" class="active" data-billing="monthly" aria-pressed="true">Monthly</button>
                <button type="button" data-billing="yearly" aria-pressed="false">Yearly <span class="badge">Save 15%</span></button>
            </div>
        </div>
    </section>

    <section class="section section-flush">
        <div class="container">
            <div class="plans">
                @foreach (config('site.plans') as $plan)
                    <article @class(['plan', 'card', 'featured' => $plan['featured']])>
                        @if ($plan['featured'])
                            <span class="plan-badge">Most popular</span>
                        @endif

                        <h2 class="plan-name">{{ $plan['name'] }}</h2>
                        <p class="muted">{{ $plan['description'] }}</p>

                        <p class="price">
                            <span class="currency">$</span><span class="amount" data-monthly="{{ $plan['monthly'] }}" data-yearly="{{ $plan['yearly'] }}">{{ $plan['monthly'] }}</span><span class="per">/month</span>
                        </p>
                        <p class="billed muted" data-billed>Billed monthly</p>

                        <ul class="checklist">
                            @foreach ($plan['features'] as $feature)
                                <li><x-icon name="check" size="18" /> {{ $feature }}</li>
                            @endforeach
                        </ul>

                        <a @class(['btn', 'btn-block', 'btn-primary' => $plan['featured'], 'btn-ghost' => ! $plan['featured']]) href="{{ route('contact') }}">Choose {{ $plan['name'] }}</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container narrow">
            <x-section-heading eyebrow="FAQ" title="Questions we hear often" />

            <div class="faq">
                @foreach (config('site.faqs') as $faq)
                    <details class="faq-item">
                        <summary>{{ $faq['q'] }}</summary>
                        <p>{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <x-cta title="Need something custom?" text="We build tailored solutions too. Tell us what you have in mind." button="Request a quote" />
</x-layout>
