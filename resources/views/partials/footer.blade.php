<footer class="footer">
  <img class="footer__bg" src="@asset('images/footer.png')" alt="background" />
  <div class="container">
    <div class="footer__content">
      <div class="footer__left">
        <img
          src="{{ get_field('logo-white', 'options')['url'] }}"
          alt="Apartamenty Juno"
          class="footer__logo"
        />
        <nav class="footer__nav-wrapper" data-nav>
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'header__menu']) !!}
            @endif
        </nav>
      </div>
      <a href="http://iqconnect.pl/">
        <img class="footer__by" src="@asset('images/iq.png')" alt="logo" />
      </a>
    </div>
  </div>
</footer>
