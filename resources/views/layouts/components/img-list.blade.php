@php
    $img = $data['img']['ID'];
    $title = $data['title'];
    $direction = $data['direction'];
    $directionRev = $data['direction'] == 'left' ? 'right' : 'left';
    $list = $data['elem'];
@endphp

@if ($list)
<section class="section section--full-img img-list img-list--{{ $direction }}">
    {!! image($img, 'full', 'img-list__image') !!}
    <div class="container container--small container--full-mobile">
        <div class="img-list__wrapper">
            @if ($title)
            <h2 class="img-list__title title">
                {!! $title  !!}
            </h2>
            @endif

            <ul class="img-list__list">
            @foreach ($list as $elem)
                <li 
                    class="
                        img-list__elem text line line--primary 
                        @if($loop->index % 2 == 0) 
                            img-list__elem--{{ $direction }} line--{{ $direction }} 
                        @else
                            img-list__elem--{{ $directionRev }}  line--{{ $directionRev }}
                        @endif
                    "
                >
                    {!! $elem['content'] !!}
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</section>
@endif
