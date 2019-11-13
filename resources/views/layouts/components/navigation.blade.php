@php
	   $nav = option('navigation');

@endphp

@if($nav)
    <section class="section section--nobottom">
        <div class="container container--small">
			<div class="navigation">
				@foreach ( $nav as $item)
				<a  class = "navigation__cell text" href="{{  $item['link']['url'] }}" nav-cell>
					{!! $item['text'] !!}
				</a>
				@endforeach
			</div>
        </div>
    </section>
@endif

