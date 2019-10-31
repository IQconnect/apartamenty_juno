@php
    $img = $data['img']['ID'];
@endphp

<section class="full-img">
    <div class="container">
        {!! image($img, 'full', 'full-img__bg') !!}
    </div>
</section>
