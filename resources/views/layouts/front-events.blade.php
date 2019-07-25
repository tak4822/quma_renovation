<section class="front-events">
  <div class="section-title-wrapper">
    @component('components.front-section-title')
    @slot('title')どうやってQUMAを知るの？@endslot
    @slot('sub')QUMAを知れる<br />スペシャルイベント開催中！@endslot
    @slot('exp')QUMAのリノベーションを身近に感じて頂けるよう、様々な機会を設けております。肩肘張らないメンバーばかりなので、お気軽に遊びに来てください！@endslot
    @endcomponent
  </div>
  <div class="contents regular-container">
    <div class="bg-gray"></div>
    <a class="event-card showroom">
      <div class="shadow"></div>
      <img src="@asset('images/showroom.jpg')" alt="">
      <div class="point">
        <p class="text">見る</p>
      </div>
    </a>
    <a class="event-card seminar">
      <div class="shadow"></div>
      <img src="@asset('images/seminar.jpg')" alt="">
      <div class="point">
        <p class="text">話す</p>
      </div>
    </a>
    <a class="event-card offkai">
      <div class="shadow"></div>
      <img src="@asset('images/offkai.jpg')" alt="">
      <div class="point">
        <p class="text">楽しむ</p>
      </div>
    </a>
  </div>
</section>