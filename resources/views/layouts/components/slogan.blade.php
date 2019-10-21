@php
    $slogan = $data['slogan'];    
    $sign = $data['sign'];    
@endphp

<section class="section section--shade slogan">
    <div class="container">
        <h2 class="slogan__title title main-title">
            {!! $slogan !!}
        </h2>
        <p class="slogan__sign text">
            {!! $sign !!}
        </p>
    </div>
</section>