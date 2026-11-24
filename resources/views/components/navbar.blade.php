<header class="site-header" data-header>
    <div class="container nav">
        <a href="{{ route('home') }}" class="brand" aria-label="{{ config('site.name') }} home">
            <span class="brand-mark" aria-hidden="true">{{ mb_substr(config('site.name'), 0, 1) }}</span>
            <span class="brand-name">{{ config('site.name') }}</span>
        </a>

        <nav id="site-nav" class="nav-links" aria-label="Main">
            @foreach (config('site.nav') as $item)
                @php($active = request()->routeIs($item['match'] ?? $item['route']))
                <a href="{{ route($item['route']) }}" @class(['active' => $active]) @if ($active) aria-current="page" @endif>{{ $item['label'] }}</a>
            @endforeach
            <a class="btn btn-primary btn-sm nav-cta-mobile" href="{{ route('contact') }}">Get a quote</a>
        </nav>

        <div class="nav-actions">
            <button class="icon-btn" type="button" data-theme-toggle aria-label="Toggle dark mode">
                <x-icon name="moon" class="icon-moon" />
                <x-icon name="sun" class="icon-sun" />
            </button>
            <a class="btn btn-primary btn-sm nav-cta" href="{{ route('contact') }}">Get a quote</a>
            <button class="icon-btn nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
                <x-icon name="menu" />
            </button>
        </div>
    </div>
</header>
