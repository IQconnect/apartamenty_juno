{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @php $sections = get_field('components') @endphp
  
  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp
        @include('layouts.components.' . $sectionName, ['data'=>$section])
      {{ $sectionName }}
    @endforeach
  @endif

  @include('layouts.components.text-section')
  @include('layouts.components.full-img')
  @include('layouts.components.icon-section')
  @include('layouts.components.info-section')
  @include('layouts.components.gallery')
  @include('layouts.components.contact')

@endsection