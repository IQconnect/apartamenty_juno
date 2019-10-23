@php
    $img = $data['img']['ID'];
    $title = $data['title'];
@endphp

<section class="small-hero">
    {!! image($img, 'full', 'small-hero__image') !!}

    <div class="container container--small">
        <h1 class="small-hero__title headline line">
            {!! $title or get_the_title() !!}
        </h1>
    </div>
</section>