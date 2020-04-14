<header id="header" class="global-nav">
  <div class="nav-top-container">
    <a id="headerLogo" class="logo" href="{{ home_url('/') }}"></a>
    <div class="right">
      {{-- <div class="nav-secondary">
        <a href="/busssiness">事業者様用リノベーション</a>
      </div> --}}
      <div id="headerActions" class="nav-action">
        {{-- <div class="line btn">
              <img src="@asset('images/ico_line.svg')" alt="" class="ico">
              <p>LINE@相談</p>
            </div> --}}
        <a href="tel:0368050696" class="tel btn cv-header">
          <img src="@asset('images/ico_tel.svg')" alt="" class="ico">
          <p>03-6805-0696</p>
        </a>
        <a href="/contact" class="mail btn cv-header">
          <img src="@asset('images/ico_mail.svg')" alt="" class="ico">
          <p>お問い合わせ</p>
        </a>
        <a href="/contact-documents" class="documents btn cv-header">
          <img src="@asset('images/ico_documents.svg')" alt="" class="ico">
          <p>資料を請求する</p>
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
  </div>
  <div class="nav-bottom-container">
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
    <div class="sns">
      <a class="sns-icon" href="https://www.facebook.com/quma51/" target="_blank">
        <img src="@asset('images/facebook-logo.svg')" alt="">
      </a>
      <a class="sns-icon" href="https://www.instagram.com/quma_renovation/" target="_blank">
        <img src="@asset('images/instagram-logo.svg')" alt="">
      </a>
    </div>
  </div>
</header>