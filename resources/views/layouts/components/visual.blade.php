@php
	$visual = $data['visual'];
	$galleryName = rand(1, 999);

@endphp

@if($visual)
<section class="visual">
	@foreach ($visual as $img)

    <div class="visual__cell">

			<a class="fancybox"
			data-caption="{{ $img['description'] }}"
			data-fancybox="visual_cell{{$galleryName}}"
			href="{{ $img['url'] }}"
		>
		{!! image($img['ID'], 'full','img') !!}
	</a>
</div>
    @endforeach
</section>
@endif
