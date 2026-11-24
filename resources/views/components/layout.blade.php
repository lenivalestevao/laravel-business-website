@props(['title' => null, 'description' => null])
@php
    $siteName = config('site.name');
    $pageTitle = $title ? $title.' | '.$siteName : $siteName.' | '.config('site.tagline');
    $pageDescription = $description ?: config('site.description');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta name="theme-color" content="#4f46e5">

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    {{-- Set the saved theme before the page paints, so there is no flash. --}}
    <script>
        (function () {
            try {
                var saved = localStorage.getItem('theme');
                var dark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.setAttribute('data-theme', saved || (dark ? 'dark' : 'light'));
            } catch (e) {}
        })();
    </script>

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    {{ $head ?? '' }}
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <x-navbar />

    <main id="main">
        {{ $slot }}
    </main>

    <x-footer />

    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
