@php
    $placeholder = new Placeholder;

    $hero = get_field('hero', 'options');
    $hero_slogan = get_field('hero_slogan', 'options');
    $hero_link = get_field('hero_link', 'options');
@endphp


@if ($hero)
<section class="hero">
    @if ($hero_slogan)
    <div class="hero__container container container--small">
        <h1 class="hero__title headline line">
            {!! $hero_slogan !!}
        </h1>
        @if ($hero_link)
        <a href="{{ $hero_link['url'] }}" class="button button--primary">
            {!! $hero_link['title'] !!}
        </a>
        @endif
    </div>
    @endif
    <div class="hero__carousel">
    @foreach ( $hero as $elem)
        <div class="hero__cell">
            {!! image($elem['ID'], 'full', 'hero__image') !!}
        </div>
        @endforeach
    </div>
</section>
@endif
