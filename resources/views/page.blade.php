{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @php $sections = get_field('components') @endphp
  
  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp
    @endforeach
  @endif

  @include('layouts.components.hero')
  @include('layouts.components.text-section')
  @include('layouts.components.info-section')

@endsection