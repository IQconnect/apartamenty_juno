@php
    $title = $data['title'];
	 $icons = $data['icons'];
	 $special = $data['special'];
@endphp

<section class="section">
  <div class="container">
		<div class="titleicon__wrapper @if($special)titleicon__wrapper--right @endif">
			@if ($title)
				<h2 class="titleicon__title headline line line--primary @if($special)line--right @endif">
					{!! $title  !!}
				</h2>
			@endif
			<div class="titleicon__content">
			@if($icons)
				@foreach ($icons as $icon)
					@include('blocks.icon', ['data'=>$icon])
				@endforeach
			@endif
      </div>
    </div>
</section>
