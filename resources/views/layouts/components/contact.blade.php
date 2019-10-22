@php
    $title = option('form_title');
    $link = option('form_link');
    $image = option('form_image');
    $office_title = option('office_title');
    $persons = option('office_persons');
@endphp

<section class="section contact-info">
  {!! image($image['ID'], 'full', 'contact-info__image') !!}
  <div class="container container--small container--full-mobile">
    <div class="contact-info__wrapper">
      <div class="contact-info__cell">
        @if ($title)
        <h2 class="contact-info__title headline line">
          {!! $title !!}
        </h2>
        @endif

        @if ($link)
        <a href="{{ $link['url'] }}" class="contact-info__link button hide-md">
          {{ $link['title'] }}
        </a>
        @endif
      </div>
      <div class="contact-info__cell">
        <h3 class="contact-info__subtitle title">
          {{ $office_title }} 
        </h3>
        @if ($persons)
        @foreach ($persons as $person)
        <div class="contact-info__person">
          <h4 class="contact-info__name text">
            {!! $person['name'] !!}
          </h4>
          <p class="contact-info__content text">
            tel: <a class="contact-info__person-link link" href="tel:{{ clear_space($person['tel']) }}">{{ $person['tel'] }}</a><br>
            mail: <a class="contact-info__person-link link" href="mailto:{{ $person['mail'] }}">{{ $person['mail'] }}</a>
          </p>
          @if ($link)
          <a href="{{ $link['url'] }}" class="contact-info__link button show-md">
            {{ $link['title'] }}
          </a>
          @endif
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>
</section>