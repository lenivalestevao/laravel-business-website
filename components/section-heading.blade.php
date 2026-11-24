@props(['eyebrow' => null, 'title', 'text' => null, 'center' => true])

<div @class(['section-heading', 'center' => $center])>
    @if ($eyebrow)
        <p class="eyebrow">{{ $eyebrow }}</p>
    @endif
    <h2>{{ $title }}</h2>
    @if ($text)
        <p class="lead">{{ $text }}</p>
    @endif
</div>
