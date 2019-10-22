@php
    $title = $data['title'];
    $diary = $data['diary'];
@endphp
<section class="diary section">
    <div class="container">
        <header class="diary__header">
            <h2 class="diary__title title aos-init" data-aos="fade-up">{{$title}}</h2>
            <div class="diary__marker diary__marker--first"></div>
        </header>
        @if ($diary)
        <ul class="diary">

            @foreach ($diary as $item)
            @php
            $galleryName = rand(1, 999);
            @endphp
                @if (1)

                <li class="diary__part
                @if($loop->index % 2 == 1) diary__part--right  @endif
                aos-init"
                data-aos="fade-up">
                <div class="diary__marker"></div>
                        <div class="diary__content">

                        <p class="diary__subtitle large-text">
                            {{$item['content']['subtitle']}}
                        </p>
                        <p class="diary__year subtitle">
                            {{ $item['content']['year'] }}
                    </p>

                        <p class="diary__text text">
                            {{$item['content']['text']}}
                        </p>
                        @if ($item['gallery'])
                        <div class="diary__gallery">

                            @foreach ($item['gallery'] as $image)
                            @php
                            $zdjecie=$loop->index;
                            @endphp

                                <a class="fancybox"
                                    data-caption="{{ $image['description'] }}"
                                    data-fancybox="diary_gallery{{$galleryName}}"
                                    href="{{ $image['url'] }}"
                                    @if($zdjecie>2) hidden @endif
                                >
                                    {!! image($image['ID'],'full','img') !!}
                                </a>
                            @endforeach
                        </div>
                        @endif
                    </div>

                </li>


                @else
                <li class="diary__part diary__part--special @if($loop->last) diary__part--last  @endif aos-init" data-aos="fade-up">
                    <div class="diary__marker diary__marker--special @if($loop->last) diary__marker--last  @endif"></div>
                    <div class="diary__content @if($loop->last) diary__content--last  @endif ">
                        <h3 class="diary__subtitle">{{$item['subtitle']}}</h3>
                    </div>
                    <div class="diary__content diary__content--special">
                    <h3 class="diary__subtitle diary__subtitle--red">{{$item['subtitle2']}}</h3>
                    </div>
                </li>
                @endif
            @endforeach
        </ul>
        @endif
    </div>
</section>
