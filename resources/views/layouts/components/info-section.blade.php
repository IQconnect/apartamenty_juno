<section class="info-section">
  <img class="info-section__bg" src="@asset('images/info-section-bg.jpg')" alt="background">

  <div class="info-section__content container">
    <div class="info-section__boxes">
      <!-- Icon Box -->
      @include('blocks.icon-box', ['title'=> 'Rodzinnie i komfortowo', 'subtitle'=>'Rodzina, komfort, bezpieczeństwo', 'content'=>'Nasze apartamenty na Osiedlu Juno są doskonałą propozycją dla rodzin, turystów marzących o mieszkaniu na Mazurach, a także dla ludzi, którzy cenią sobie komfort.'])
      @include('blocks.icon-box', ['title'=> 'Doskonałe położenie', 'subtitle'=>'Rodzina, komfort, bezpieczeństwo', 'content'=>'Osiedle położone jest w północnej części Mrągowa, w cichej i malowniczej okolicy, tuż nad brzegiem jeziora Juno.'])
      @include('blocks.icon-box', ['title'=> 'Spokój i bezpieczeństwo', 'subtitle'=>'Rodzina, komfort, bezpieczeństwo', 'content'=>'Monitoring i ogrodzenie osiedla to gwarancja bezpieczeństwa dla jego mieszkańców. Rozwiązania, które zastosowaliśmy z pewnością wpłyną na poczucie bezpieczeństwa mieszkańców i gości.'])
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