<section class="section">
        <div class="container">
            @if($flats)
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            NR
                        </th>
                        <th>
                            Powierzchnia
                        </th>
                        <th>
                            Taras / Balkon
                        </th>
                        <th>
                            Piętro
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Cena
                        </th>
                        <th>
                            Zobacz mieszkanie
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $empty = 1;
                    @endphp
                    @foreach ($flats as $flat)
                    @php
                        $show = true;
                        if($_GET['bilding']) {
                            $areaFrom = preg_replace('/\D/', '', $_GET['area_from']);
                            $areaTo = preg_replace('/\D/', '', $_GET['area_to']);;

                            if($flat['area'] < $areaFrom  || $flat['area'] > $areaTo) {
                                $show = false;
                            }

                            $floorFrom = preg_replace('/\D/', '', $_GET['floor_from']);
                            $floorTo = preg_replace('/\D/', '', $_GET['floor_to']);;

                            if($flat['floor'] < $floorFrom  || $flat['floor'] > $floorTo) {
                                $show = false;
                            }
                        }
                    @endphp

                    @if ($show)
                    @php $empty = 0; @endphp
                    <tr>
                            <td>
                                {{ $flat['nr'] }}
                            </td>
                            <td>
                                {{ $flat['area'] }} m²
                            </td>
                            <td>
                                @if( $flat['tarace'])
                                    {{ $flat['tarace'] }}
                                @else
                                    X
                                @endif
                            </td>
                            <td>
                                @if( $flat['floor'] == '0')
                                    Parter
                                @else
                                    {{ $flat['floor'] }}
                                @endif
                            </td>
                            <td>
                                <span class="{{$flat['status']}}">
                                    {{ $flat['status'] }}
                                </span>
                            </td>
                            <td>
                                @if($flat['price']['promo'])

                                <span class="price price--promo">
                                    {{ $flat['price']['promo'] }}
                                </span>
                                <span class="price price--del">
                                    {{ $flat['price']['regular'] }}
                                </span>

                                @if ($flat['price']['promo_text'])
                                <span class="price price--message">
                                    {{ $flat['price']['promo_text'] }}
                                </span>
                                @endif

                                @elseif( $flat['price']['regular'])
                                    {{ $flat['price']['regular'] }}
                                @else
                                    <a href="{{ home_url('/kontakt') }}"> Zapytaj o cenę</a>
                                @endif
                            </td>
                            <td class="table__plan">
                                @if( $flat['plan'])
                                <div class="table__plan">
                                    <a class="table__plan--space" href="./?mieszkanie={{ $flat['nr'] }}">
                                        Zobacz<img src="@asset('images/3d.png')" alt="Plan mieszkania...">
                                    </a>
                                    <a class="table__plan--space" href="{{ $flat['plan']['url'] }}">
                                        Pobierz <img src="@asset('images/load.png')" alt="Plan mieszkania...">
                                    </a>
                                </div>
                                @else
                                    X
                                @endif
                            </td>
                        </tr>
                    @endif

                    @endforeach
                </tbody>
            </table>
            @if ($empty)
            <p class="text" style="margin-top: 40px">
                Brak dostępnych mieszkań w takiej konfiguracji
            </p>
            @endif
            @else
            <p class="text">
                Brak informacji o budynku
            </p>
            @endif
        </div>
    </section>
