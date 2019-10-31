@extends('layouts.app')

@php
    $heroData = [
        'title'=> $post->post_title,
        'img'=> get_field('img')
    ];



    $flats = get_field('flats');



@endphp

@section('content')
    @include('layouts.components.small-hero', ['data'=>$heroData])

    @if($_GET['mieszkanie'])
    @foreach ($flats as $flat)
        @if ($flat['nr'] == $_GET['mieszkanie'])
        @include('layouts.components.navigation')
        @include('layouts.components.house_gallery', ['flat'=>$flat])
        @endif
    @endforeach

    @else
        @include('layouts.components.table', ['flats'=>$flats])
    @endif

@endsection
