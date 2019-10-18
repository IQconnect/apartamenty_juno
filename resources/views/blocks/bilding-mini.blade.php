@php
    $title = $data->post_title;
    $id = $data->ID;

    $permalink = get_permalink($id);
    $subtitle = get_field('subtitle', $id);
    $img = get_field('img', $id);

    $flats = get_field('flats', $id);

    $free = 0;
    $sold = 0;
    $taken = 0;

    $size = $flats[0]['area'];

    foreach ($flats as $flat) {
        if($flat['status'] == 'wolne') $free++;
        if($flat['status'] == 'zajęte') $taken++;
        if($flat['status'] == 'sprzedane') $sold++;

        if($flat['area'] < $size) $size = $flat['area'];
    }
@endphp

@if ($free)
<button class="bilding-button" data-bilding-button="{{ $title }}">
    <h3 class="bilding-button__title large-text">
        {{ $title }}
    </h3>
    {!! image( $img['id'], 'full', 'bilding-button__image' ) !!}
</button>
@endif
