<header class="global-nav">
  <div class="container">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <a class="logo" href="{{ home_url('/') }}"></a>

    <div class="nav-action">
      {{-- <div class="line btn">
        <img src="@asset('images/ico_line.svg')" alt="" class="ico">
        <p>LINE@相談</p>
      </div> --}}
      <div class="tel btn">
        <img src="@asset('images/ico_tel.svg')" alt="" class="ico">
        <p>03-6805-0696</p>
      </div>
      <div class="mail btn">
        <img src="@asset('images/ico_mail.svg')" alt="" class="ico">
      </div>
    </div>

    <div class="humberger">
      <div></div>
    </div>
  </div>
</header>