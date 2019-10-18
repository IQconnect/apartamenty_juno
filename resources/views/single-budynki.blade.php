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

    @include('layouts.components.table', ['flats'=>$flats])
@endsection
