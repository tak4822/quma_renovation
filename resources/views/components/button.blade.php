@php( $link = $url == '' ? '' : get_site_url() . '/' . $url)
<a class="btn" href="{{ $link }}">
  <div class="border-wrapper">
    <div class="border">
      <img class="arrow-edge" src="@asset('images/button_arrow_edge.svg')" alt="">
    </div>
  </div>
  <p class="text">{{ $text }}</p>
</a>