@php
    $placeholder = new Placeholder;

    $image = get_field('bg_image', 'term_'.  $cat_id )['ID'];
    $header = get_field('header', 'term_'.  $cat_id );
    
    $products = get_field('products', 'term_'.  $cat_id );
@endphp



<section class="hero">
    <div class="container">
        <div class="hero__info -is-active" slide>
            @include('blocks.info-block', ['title'=>'Twoja bezpieczna <br> przystań 1'])
        </div>
        <div class="hero__info" slide>
                @include('blocks.info-block', ['title'=>'Twoja bezpieczna <br> przystań 2'])
        </div>
    </div>
    @if($image) 
        {!! image($image, 'full', 'hero__image') !!}
    @else 
        <img class="hero__image -is-active" slide-img src="@asset($placeholder->image())" alt="placeholder"> 

        <img class="hero__image" slide-img src="@asset('images/wiz-mwo-01.png')" alt="placeholder"> 
    @endif
</section>