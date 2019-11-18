@extends('layouts.app')

@php
    $heroData = [
        'title'=> $post->post_title,
        'img'=> get_field('img')
    ];



    $flats = get_field('flats');

    if($_GET['back'] == 'true')
    $flats_gallery = get_field('img_map_single', 272);

    else
    $flats_gallery = get_field('img_map_single');

    $json_flats = json_encode( $flats );

    global $post;
    $post_slug = $post->post_name;
@endphp

@section('content')
    @include('layouts.components.small-hero', ['data'=>$heroData])
    @include('layouts.components.navigation')

    @if($_GET['mieszkanie'])
    @foreach ($flats as $flat)
        @if ($flat['nr'] == $_GET['mieszkanie'])
            @include('layouts.components.navigation')
            @include('layouts.components.house_gallery', ['flat'=>$flat])
        @endif
    @endforeach

    @else
        <section class="section bildings-map" data-flats="{{$json_flats}}">
            <div class="container container--small container--full-mobile">
                <h2 class="house-gallery__title title">
                    Wybierz Mieszkanie
                </h2>
                @if ($_GET['back'])
                {!! do_shortcode( '['.$post_slug.'-rev]') !!}
                @else
                {!! do_shortcode( '['.$post_slug.']' ) !!}
                @endif
                @if ($flats_gallery)
                @foreach ($flats_gallery as $img)
                    <img class="bildings-map__image bildings-map__image--part" src="{{ $img['url'] }}" alt="{{ $bilding->post_title }}"  data-nr={{$img['title']}}>
                @endforeach
                @endif
            </div>
        </section>

        @include('layouts.components.table', ['flats'=>$flats])
    @endif

@endsection


<script>

    var tooltipThame =  (name, state, size, taras)  => {
        return `
        <h2>Mieszkanie ${name || ''}</h2>
        <p class="text text--light text--thin znajdz-mieszkanie">
            <b> Status: </b><span class="${state}"> ${state || '-'}</span>
            <br>
            <b> Powierzchnia: </b> ${size || '-'} m²
            <br>
            <b> Taras / balkon: </b> ${taras || '-'} m²
        </p>
        `
    }

    setTimeout(()=>{

        function getFlatByName(arr, value) {
            var result = [];
            arr.forEach(function(o){if (o.nr == value) result.push(o);} );
            return result? result[0] : null; // or undefined
        }

        function getImageByName(arr, value) {
            var result;
            $(arr).each(function(e) {
                if($( this ).data('nr') == value) {
                    result = $(this);
                }
            })
            return result? result[0] : null; // or undefined
        }

        var tooltips = [];
        var flats = $('[data-flats]').data('flats');
        var bildingImages = $('.bildings-map__image--part');
        var tooltip = $('.imp-tooltip .imp-tooltip-plain-text');

        $('.imp-shape').each(function( index ) {
            var flat = getFlatByName(flats, $( this ).data('shape-title'));

            if(flat) {
                $( this ).after(getImageByName(bildingImages,$( this ).data('shape-title')))
                var singleTooltip = tooltipThame(flat.nr, flat.status, flat.area, flat.tarace);
                tooltips.push(singleTooltip);
            }
        });

        tooltip.each(function(index) {
            $(this).html(tooltips[index]);
        });

    }, 1500);

</script>
