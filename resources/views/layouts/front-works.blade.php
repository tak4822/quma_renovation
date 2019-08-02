<section class="front-works">
  @component('components.front-section-title')
  @slot('title')どんなものを作れるの？@endslot
  @slot('sub')これまでの施工事例@endslot
  @slot('exp')十人十色の暮らしを作らせて頂いているリノベーション。QUMAが一緒に作らせて頂いた空間を紹介させてください。@endslot
  @endcomponent

  <div class="picks">
    <div class="pick-container first">
      <div class="circle"></div>
      <div class="thumb">
        <img src="@asset('images/interview_fake.jpg')" alt="">
      </div>
      <div class="contents">
        <h4 class="title">無理のない暮らし方。いつの時代も美しい空間</h4>
        <div class="outline">
          <p class="area">100㎡</p>
          <div class="divider"></div>
          <p class="budget">1200万円</p>
          <div class="divider"></div>
          <p class="type">戸建</p>
          <p class="in">in</p>
          <p class="place">自由が丘</p>
        </div>
      </div>
    </div>
    <div class="pick-container second">
      <div class="circle"></div>
      <div class="thumb">
        <img src="@asset('images/interview_fake.jpg')" alt="">
      </div>
      <div class="contents">
        <h4 class="title">無理のない暮らし方。いつの時代も美しい空間</h4>
        <div class="outline">
          <p class="area">100㎡</p>
          <div class="divider"></div>
          <p class="budget">1200万円</p>
          <div class="divider"></div>
          <p class="type">戸建</p>
          <p class="in">in</p>
          <p class="place">自由が丘</p>
        </div>
      </div>
    </div>

    <div class="slider">
      <div class="slider-wrapper">
        @php
        $works= array (
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        );
        @endphp


        @foreach ($works as $work)
        @component('components.work-card')
        @slot('thumb')<img src="@asset('images/interview_fake.jpg')" alt="">@endslot
        @slot('title'){{ $work['title'] }}@endslot
        @slot('area'){{ $work['area'] }}@endslot
        @slot('budget'){{ $work['budget'] }}@endslot
        @slot('type'){{ $work['type'] }}@endslot
        @slot('place'){{ $work['place'] }}@endslot
        @endcomponent
        @endforeach
      </div>
    </div>
    <div class="action-container">
      @component('components.button')
      @slot('text')施工事例ー記事一覧を見る@endslot
      @slot('url')works @endslot
      @endcomponent
    </div>
  </div>
</section>