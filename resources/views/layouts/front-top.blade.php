@php($data_arr = App\Controllers\FrontPage::get_front_top())
<section class="front-top">
  <div id="fronttopVision" class="vision">
    <div class="vision-wraper">
      <div class="illustration">
        <img src="@asset('images/vision.jpg')" alt="">
      </div>
      <div class="logo-container">
        <img src="@asset('images/quma_logo.svg')" alt="">
        <h1 class="intro">東京で暮らしをつくるリノベーション</h1>
      </div>
    </div>
  </div>
  <div id="fronttopSlider" class="slider-container inactive">
    <div class="slider-wrapper">
      <a id="fronttopSlider-link" href="{{ $data_arr[0]['link'] }}" class="fronttop-slider">
        @foreach ($data_arr as $key => $slide)
        <div class="slide slide-{{ $key }} {{ $key === 0 ? "active" : "" }}">
          <div class="slide__bg" style="background-image: url('{{ $slide['image'] }}')"></div>
        </div>
        @endforeach
      </a>
    </div>

    <div class="exp-shadow"></div>
    <div class="exp">
      <div class="exp-left">
        <p id="fronttopSlider-page-subtitle" class="section-title">{{ $data_arr[0]['page-subtitle'] }}</p>
        <p id="fronttopSlider-page-title" class="section">{{ $data_arr[0]['page-title'] }}</p>
        <div class="paging">
          <div id="fronttopSliderPrevButton" class="arrows left">
            <img src="@asset('images/triangle-left.svg')" alt="">
          </div>
          <div class="numbers">
            <p id="fronttopSlider-number" class="now">{{ $data_arr[0]['number'] }}</p>
            <div class="divider"></div>
            <p class="total">{{ count($data_arr) }}</p>
          </div>
          <div id="fronttopSliderNextButton" class="arrows right">
            <img src="@asset('images/triangle-right.svg')" alt="">
          </div>
        </div>
      </div>
      <div class="border"></div>
      <div class="exp-right">
        <p id="fronttopSlider-subtitle" class="sub-title">{{ $data_arr[0]['subtitle'] }}</p>
        <p id="fronttopSlider-title" class="title">{{ $data_arr[0]['title'] }}</p>
      </div>
    </div>

  </div>
</section>