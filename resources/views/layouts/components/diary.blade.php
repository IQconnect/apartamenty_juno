@php
    $title = $data['title'];
    $diary = $data['diary'];
@endphp
<section class="diary">
    <div class="container">
        <header class="diary__header title">
            <h2 class="diary__title aos-init" data-aos="fade-up">{{$title}}</h2>

        </header>
        <div class="diary__marker diary__marker--first"></div>
        @if ($diary)
        <ul class="diary">
            @foreach ($diary as $item)

                @if ($item['add_text'])

                <li class="diary__part
                @if($loop->index % 2 == 1) diary__part--right  @endif
                aos-init"
                data-aos="fade-up">
                <div class="diary__marker"></div>
                        <div class="diary__content">
                                <h3 class="diary__year subtitle">
                                        {{ $item['year'] }}
                                </h3>
                        <h3 class="diary__subtitle large-text">
                            {{$item['subtitle']}}
                        </h3>


                        <p class="diary__text text">
                            {{$item['text']}}
                        </p>
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
