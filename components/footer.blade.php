<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-about">
            <a href="{{ route('home') }}" class="brand">
                <span class="brand-mark" aria-hidden="true">{{ mb_substr(config('site.name'), 0, 1) }}</span>
                <span class="brand-name">{{ config('site.name') }}</span>
            </a>
            <p class="muted">{{ config('site.tagline') }}. Strategy, design and development in one friendly team.</p>
        </div>

        <div>
            <h2 class="footer-title">Company</h2>
            <ul class="footer-links">
                @foreach (config('site.nav') as $item)
                    <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h2 class="footer-title">Contact</h2>
            <ul class="footer-links">
                <li><a href="mailto:{{ config('site.contact_email') }}">{{ config('site.contact_email') }}</a></li>
                <li>{{ config('site.phone') }}</li>
                <li>{{ config('site.address') }}</li>
                <li>{{ config('site.hours') }}</li>
            </ul>
        </div>

        <div>
            <h2 class="footer-title">Follow</h2>
            <ul class="footer-links">
                @foreach (config('site.social') as $label => $url)
                    <li><a href="{{ $url }}" rel="noopener" target="_blank">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</p>
        <p><a href="{{ route('sitemap') }}">Sitemap</a></p>
    </div>
</footer>
