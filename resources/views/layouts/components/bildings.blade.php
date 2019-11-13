@php
    $args = array(
    'posts_per_page'   => 999,
    'offset'           => 0,
    'orderby' => 'date',
    'order'    => 'ASC',
    'post_type'        => 'budynki',
    'post_status'      => 'publish',
    'suppress_filters' => true,
  );

  $bildings = get_posts( $args );

  $flats = [];
@endphp

@if ($_GET['bilding'])
    @php
        $names = explode(",",$_GET['bilding']);
    @endphp
    @foreach ($bildings as $bilding)
        @if (in_array($bilding->post_title, $names))
        @php
            $ID = $bilding->ID;
            $thisFlats = get_field('flats', $ID);
            $flats = array_merge($flats, $thisFlats);
        @endphp

        @elseif($_GET['bilding'] == 'all')
        @php
            $ID = $bilding->ID;
            $thisFlats = get_field('flats', $ID);
            $flats = array_merge($flats, $thisFlats);
        @endphp
        @endif
    @endforeach

    @include('layouts.components.table', ['flats'=>$flats])
@else
<section class="section bildings-map">
    <div class="container container--small container--full-mobile">
        <h2 class="house-gallery__title title">
            Wybierz budynek
        </h2>
        {!! do_shortcode( '[budynki]' ) !!}
        {{-- <div class="bildings">
            @if($bildings)
                @foreach ($bildings as $bilding)
                <article class="bildings__col" >
                    @include('blocks.bilding', ['data'=>$bilding])
                </article>
                @endforeach
            @endif
        </div> --}}
        @if ($bildings )
        @foreach ($bildings as $bilding)
        @php
            $ID = $bilding->ID;
            $ID = $bilding->ID;
            $img_map = get_field('img_map', $ID)
        @endphp
        <img class="bildings-map__image bildings-map__image--part" src="{{ $img_map['url'] }}" alt="{{ $bilding->post_title }}">
        @endforeach     
        @endif
    </div>
</section>
@endif

@php
    $arrayBild = [];

    foreach ($bildings as $bilding) {
        $id = $bilding->ID;
        $flats = get_field('flats', $id);
    
        $name = $bilding->post_title;
        $free = 0;
        $sold = 0;
        $taken = 0;
    
        $size = $flats[0]['area'];
    
        foreach ($flats as $flat) {
            if($flat['status'] == 'wolne') $free++;
            if($flat['status'] == 'zajęte') $taken++;
            if($flat['status'] == 'sprzedane') $sold++;
    
            if($flat['area'] < $size) $size = $flat['area'];
        };

        // $a = array(
        //     'name'=> $name,
        //     'free'=> $free,
        //     'sold'=> $sold,
        //     'taken'=> $taken,
        //     'size'=> $size
        // )

        $a = array(
            'name'=> $name,
            'free'=> $free,
            'sold'=> $sold,
            'taken'=> $taken,
            'size'=> $size
        );

        array_push($arrayBild,$a);
    }

    $arrayBild = json_encode($arrayBild);
    echo '<script>var bilding = '.$arrayBild.'</script>'
@endphp

<script>

    console.log(bilding[0].name);

    const tooltipThame =  (name, free, sold, taken, size)  => {
        return `
        <h2>${name}</h2>
        <p class="text text--light text--thin">
            <b> Wolnych mieszkań: </b> ${free}
            <br>
            <b> Sprzedanych mieszkań: </b> ${sold}
            <br>
            <b> Zarezerwowanych mieszkań: </b> ${taken}
            <br>
            <b> Mieszkania od: </b> ${size} m²
        </p>
        `
    }

    setTimeout(()=>{
        var tooltip = $('.imp-tooltip .imp-tooltip-plain-text');

        tooltip.each(function(index) {
            console.log('test', index);
            $(this).html(tooltipThame(bilding[index].name, bilding[index].free, bilding[index].sold, bilding[index].taken, bilding[index].size));
        });

        var bildingImages = $('.bildings-map__image--part');

        // $('.imp-shape-container').append(bildingImages);

        console.log('mp-shape', $('.imp-shape'));

        $('.imp-shape').each(function( index ) {
            $( this ).after(bildingImages[index])
            console.log( index + ": " + $( this ) );
        });
    }, 1000);

</script>