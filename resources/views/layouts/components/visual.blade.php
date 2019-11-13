@php
$visual = $data['visual'];
$galleryName = rand(1, 999);

@endphp

@if($visual)
<section class="section">
	<div class="container visual">
		@if ($data['title'])
			<h2 class="visual__title title">
				{!! $data['title'] !!}
			</h2>
		@endif
		
		<div class="visual__wrapper">
			@foreach ($visual as $img)
			<div class="visual__cell">
				<a class="fancybox" data-caption="{{ $img['description'] }}" data-fancybox="visual_cell{{$galleryName}}" href="{{ $img['url'] }}">
					{!! image($img['ID'], 'full','img') !!}
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endif