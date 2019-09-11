<header id="header" class="global-nav">
  <div class="container">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!!
      wp_nav_menu(
      array (
      'menu' => 'main-menu',
      'theme_location' => 'primary_navigation',
      'container' => FALSE,
      'container_id' => FALSE,
      'menu_class' => 'nav',
      'menu_id' => FALSE,
      'depth' => 1,
      'walker' => new Description_Walker
      )
      );
      !!}
      @endif
    </nav>

    <a id="headerLogo" class="logo" href="{{ home_url('/') }}"></a>

    <div id="headerActions" class="nav-action">
      {{-- <div class="line btn">
        <img src="@asset('images/ico_line.svg')" alt="" class="ico">
        <p>LINE@相談</p>
      </div> --}}
      <a href="tel:0368050696" class="tel btn">
        <img src="@asset('images/ico_tel.svg')" alt="" class="ico">
        <p>03-6805-0696</p>
      </a>
      <a href="mail:info@quma.co.jp" class="mail btn">
        <img src="@asset('images/ico_mail.svg')" alt="" class="ico">
      </a>
    </div>

    <div id="headerHamburder" class="hamburger-wrapper">
      <div class="hamburger">
        　　<span></span>
        　　<span></span>
        　　<span></span>
      </div>
    </div>
  </div>
</header>