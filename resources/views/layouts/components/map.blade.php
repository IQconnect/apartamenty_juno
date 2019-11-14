@php
    $markers = [];
    $nav = option('loc_nav');
    $lat = $data['lat'];
    $lng = $data['lng'];
    $zoom = $data['zoom'];
    $mainIcon = $data['img_active']['url'];

    $myMarkers = $data['localization'];

    if ($myMarkers) {
        foreach ($myMarkers as $marker) {
            $icon = '';
            foreach ($nav as $item) {
                if($item['name'] == $marker['cat']) {
                    $icon = $item['icon']['url'];
                }
            }

            $mark = [
            'name'=> $marker['name'],
            'lat'=> $marker['lat'],
            'lng'=> $marker['lng'],
            'icon'=> $icon,
            'cat'=> $marker['cat'],
        ];

        array_push($markers, $mark);
        }
    }

    $JSON_MARKERS =  json_encode($markers);
@endphp

<section class="section section--no-bottom" id="lokalizacja" data-single-section>
    <div class="container">
        <header class="section__header">
            <h3 class="house-gallery__title title">
                    LOKALIZACJA
            </h3>
        </header>
    </div>
    <div class="location-map">

    <div class="location-map__map" location-map data-lat="{{ $lat }}" data-zoom={{ $zoom }} data-lng="{{ $lng }}" data-markers="{{ $JSON_MARKERS }}" data-icon="{{ $mainIcon }}"></div>
    </div>
</section>
