@php
$title = $data['title'];
$content = $data['content'];
@endphp

<section class="section section--text-content">
		<div class="container container--small">
			<div class="textcontent__wrapper">
				@if($title)
				<h2 class="textcontent__title title">
					{!! $title  !!}
				</h2>
				@endif
				<div class="textcontent__content text">
					{!! $content !!}
				</div>
			</div>
		</div>
	</section>
