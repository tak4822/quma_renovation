<a href="{{ $link }}" class="work-card">
  <div class="thumb">{{ $thumb }}</div>
  <div class="contents">
    <h5 class="title">{{ $title }}</h5>
    <div class="outline">
      {{-- <p class="area">{{ $area }}㎡</p>
      <div class="divider"></div>
      <p class="budget">{{ $budget }}万円</p>
      <div class="divider"></div> --}}
      <div class="place-container">
        <p class="type">{{ $type }}</p>
        <p class="place"><span class="in">in</span> {{ $place }}</p>
      </div>
    </div>
  </div>
</a>