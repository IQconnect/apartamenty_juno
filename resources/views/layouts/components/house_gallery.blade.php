@php
$gallery = $flat['gallery']
@endphp
@if($gallery)
<section class="section">
    <div class="container container--small">
        <h2 class="house-gallery__title title">
            Mieszkanie {{ $_GET['mieszkanie'] }}
        </h2>
        <div class="house-gallery__carousel">
            @foreach ($gallery as $elem)
            <div class="house-gallery__cell">
                {!! image($elem['ID'], 'full', 'house-gallery__image') !!}
            </div>
            @endforeach
        </div>
        <div class="house-gallery__link">
            <a href="../../kontakt?message=Jestem zainteresowany kupnem mieszkania {{ $_GET['mieszkanie'] }}" class="button">
                Zapytaj o mieszkanie
            </a>
        </div>
    </div>
    </div>
</section>
@endif