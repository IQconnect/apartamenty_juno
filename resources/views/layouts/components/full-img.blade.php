@php
    $img = $data['img']['ID'];
@endphp

<section class="full-img">
    {!! image($img, 'full', 'full-img__bg') !!}
    <img class="full-img__bg" src="@asset("images/wiz-mwo-01.png")" alt="background">
</section>