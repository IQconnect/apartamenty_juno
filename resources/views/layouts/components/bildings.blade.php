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
<section class="section">
    <div class="container">
        <div class="bildings">
            @if($bildings)
                @foreach ($bildings as $bilding)
                <article class="bildings__col" >
                    @include('blocks.bilding', ['data'=>$bilding])
                </article>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endif

