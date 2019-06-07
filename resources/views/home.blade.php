@extends('layouts.app')

@section('content')
  @php
    $section = get_field('components', 188);
    $hero = $section[0];
  @endphp

  @php 
    $product_cats = get_terms( 'product_cat', ['hide_empty' => true, 'parent ' => 0,] );
  @endphp

  @foreach ( $product_cats as $cat )
    @include('layouts.components.hero', ['cat' => $cat])
  @endforeach

  {!! get_the_posts_navigation() !!}
@endsection
