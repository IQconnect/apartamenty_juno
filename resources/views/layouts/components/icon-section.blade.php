<section class="section icons-section">
  <div class="container">
    <div class="row">
      <!-- Header -->
      @include('components.section-header.default', ['title'=>'Doskonała lokalizacja', 'subtitle'=>'Wysoki standard'])
      <!-- /Header -->

      <!-- Content -->
      <div class="icons-section__content">

        @include('components.icon-loc', ['title'=>'Doskonała <br /> Lokalizacja'])
        @include('components.icon-cam', ['title'=>'Monitorowane i  <br /> ogrodzone osiedle'])
        @include('components.icon-time', ['title'=>'7 minut do centrum  <br /> miasta'])
        @include('components.icon-bike', ['title'=>'Ścieżka rowerowa  <br /> do miasta'])
        @include('components.icon-tree', ['title'=>'W otoczeniu <br /> natury'])
        @include('components.icon-sun', ['title'=>'Prywatna  <br /> plaża'])
        @include('components.icon-car', ['title'=>'Miejsca  <br /> parkingowe'])
        @include('components.icon-bus', ['title'=>'Własny przystanek <br /> autobusowy'])
        @include('components.icon-park', ['title'=>'Teren <br /> rekreacyjny'])
        @include('components.icon-balc', ['title'=>'Duże  <br /> balkony'])

      </div>
      <!-- /Content -->

      <!-- Footer -->
      {{-- <footer class="section__footer">
        <a href="#" class="button button--primary text  main text--thin">
          Dowiedz się więcej
        </a>
      </footer> --}}
      <!-- /Footer -->
    </div>
  </div>
</section>
