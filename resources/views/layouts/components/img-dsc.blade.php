@php
    $img = $data['img']['ID'];
    $title = $data['title'];
    $content = $data['content'];
    $link = $data['link'];
@endphp

<section class="section img-dsc">
    <div class="container">
        <div class="img-dsc__wrapper">
            {!! image($img, 'full', 'img-dsc__image') !!}
        
            <article class="img-dsc__content">
                @if ($title)
                <h2 class="img-dsc__title title">
                    {!! $title !!}
                </h2>
                @endif
                @if ($content)
                <p class="img-dsc__description text line line--primary line--top">
                    {!! $content !!}
                </p>
                @endif
                @if ($link)
                <a href="{{ $link['url'] }}" class="img-dsc__link button">
                    {{ $link['title'] }}
                </a>
                @endif
            </article>
        </div>
    </div>
</section>