@php
    $placeholder = new Placeholder;

    $image = get_field('bg_image', 'term_'.  $cat_id )['ID'];
    $header = get_field('header', 'term_'.  $cat_id );
    
    $products = get_field('products', 'term_'.  $cat_id );
@endphp



<section class="hero">
    <div class="container">
        <header class="hero__header">
            <h2 class="headline bold">
                {!! $header ? $header : $placeholder->title() !!}
            </h2>
        </header>
    </div>
    @if($image) 
        {!! image($image, 'full', 'hero__image') !!}
    @else 
        <img class="hero__image" src="@asset($placeholder->image())" alt="placeholder"> 
    @endif

    <button class="hero__icon mouse">
        <span class="mouse__dot"></span>
    </button>
</section>