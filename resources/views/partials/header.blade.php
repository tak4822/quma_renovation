<header class="global-nav">
  <div class="container">

    <div class="nav-wrapper">
      <a class="logo" href="{{ home_url('/') }}"></a>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>

    <div class="nav-action">
      <div class="line btn">
        <img src="@asset('images/ico_line.svg')" alt="" class="ico">
        <p>LINE@相談</p>
      </div>
      <div class="tel btn">
        <img src="@asset('images/ico_tel.svg')" alt="" class="ico">
        <p>03-6805-0696</p>
      </div>
    </div>
  </div>
</header>