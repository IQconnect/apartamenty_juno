<section class="info-section">
  <img class="info-section__bg" src="@asset('images/info-section-bg.jpg')" alt="background">

  <div class="info-section__content container">
    <div class="info-section__boxes">
      <!-- Icon Box -->
      @include('blocks.icon-box')
      @include('blocks.icon-box')
      @include('blocks.icon-box')
      <!--/ Icon Box -->
    </div>
    <div class="info-section__desc">
      <div class="card-block">
        @include('components.section-header.left', ['title'=>'Dlaczego warto', 'subtitle'=>'tu zamieszkać?'])
        
        <p class="text card-block__text">
          Osiedle Juno to nowoczesne 13-rodzinne bloki, które osadzone zostały w pięknym mazurskim krajobrazie, nad brzegiem jeziora Juno w Mrągowie.
        </p>

        <a href="#" class="button button--secondary text  main text--thin">
          Znajdź swoje mieszkanie
        </a>
      </div>
    </div>
  </div>
</section>