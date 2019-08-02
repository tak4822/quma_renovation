<div class="member">
  <div class="bg"></div>
  <div class="member-wrapper regular-container">
    <div class="top">
      <div class="left">
        {{ $picture }}
      </div>
      <div class="right">
        <div class="name-wrapper">
          {{ $nameimage }}
          <p class="name-text">{{ $name }}</p>
        </div>
        <div class="favorite-wrapper">
          <p class="head">一番好きな時間</p>
          <div class="border"></div>
          <p class="text">{{ $favorite }}</p>
        </div>
      </div>
    </div>
    <div class="bottom">
      {{ $text }}
    </div>
  </div>
</div>