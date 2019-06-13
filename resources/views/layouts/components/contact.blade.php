<section class="contact-section section section--full" id="kontakt">
  <div class="contact-section__boxes">
    <div class="avatar-section">
      <div class="container">
        <div class="avatar-section__content">
          <div class="avatar-section__boxes"></div>
          <div class="avatar-section__desc">
            <h2 class="section-header card-block__title">
              <span
                class="avatar-section__coltext--primary section-header__sub--left subtitle"
              >
                Biuro sprzedaży
              </span>
            </h2>
            <p class="text card-block__text avatar-section__coltext--dark">
              Osiedle Juno to nowoczesne 13-rodzinne bloki, które osadzone
              zostały w pięknym mazurskim krajobrazie, nad brzegiem jeziora Juno
              w Mrągowie.
            </p>
            <div class="avatar-section__boxes">
              <!-- Avatar -->

              @include('blocks.avatar', ['name'=>'Monika Doe'])
              @include('blocks.avatar', ['name'=>'John Doe'])

              <!--/ Avatar -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-box">
      <img
        class="form-box__bg"
        src="@asset('images/form-section-bg.png')"
        alt="background"
      />
      <!-- form-box__header -->
      <div class="form-box__header">
        @include('components.section-header.left', ['title'=>'Potrzebujesz', 'subtitle'=>'pomocy'])
      </div>
      <!-- form-box__content form -->
      <div class="form-box__content">
        @include('components.form')
      </div>
    </div>
  </div>
</section>
