@php
    $slogan = $data['slogan'];    
    $sign = $data['sign'];    
@endphp

@if ($slogan )
<section class="section section--shade slogan">
    <div class="container">
        <h2 class="slogan__title title main-title title-font">
            {!! $slogan !!}
        </h2>
        @if ($sign)
        <p class="slogan__sign text">
            {!! $sign !!}
        </p>
        @endif
    </div>
</section>
@endif
