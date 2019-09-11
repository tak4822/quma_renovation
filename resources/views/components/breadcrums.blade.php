<div class="breadcrums-container">
  @if($url != "")
  <a id="breadBackButton" href="{{ $url }}" class="back-container">
    <img src="@asset('images/back.svg')" alt="">
  </a>
  @endif
  <div class="page-name wow fadeInLeft">{{ $page }}</div>
  <div class="border wow fadeInLeft"></div>
  <p class="page-exp wow fadeInLeft">{{ $text }}</p>
</div>