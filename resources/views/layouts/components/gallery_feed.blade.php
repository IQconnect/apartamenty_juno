@php
    $gallery = $data['gallery_feed'];
@endphp

@if($gallery)
<section class="gallery-feed">
    @foreach ($gallery as $img)
    <a class="gallery-feed__cell" href="{{ $img['url'] }}" data-fancybox="gallery_feed">
        {!! image($img['ID'], 'full','gallery-feed__image') !!}
    </a>
    @endforeach
</section>
@endif