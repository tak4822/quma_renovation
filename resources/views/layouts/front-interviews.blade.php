<section class="front-interviews">
  <div class="bg-gray"></div>
  @component('components.front-section-title')
  @slot('title')リノベーションしてみて<br />どうだった？@endslot
  @slot('sub')先輩に聞くリノベインタビュー@endslot
  @slot('exp')@endslot
  @endcomponent

  <div class="interviews-wrapper">
    <div class="slider-container">
      <div class="controller">
        <div class="exp">
          <p class="number">#002</p>
          <div class="border"></div>
          <p class="subtitle">アウトドア好きでアクティブな人の部屋って？</p>
        </div>
        <div class="paging">
          <div class="arrows">
            <img src="@asset('images/arrow-right.png')" alt="">
          </div>
          <div class="border"></div>
          <div class="arrows">
            <img src="@asset('images/arrow-left.png')" alt="">
          </div>
        </div>
        <div class="mic-wrapper">
          <img src="@asset('images/mic.jpg')" alt="">
        </div>
      </div>
      <div class="slider">
        <div class="slider-warpper">
          @component('components.interview-card')
          @slot('thumb')<img src="@asset('images/interview_fake.jpg')" alt="">@endslot
          @slot('title')ひろびろ収納と無垢フローリングの落ち着く部屋づくり@endslot
          @slot('lead')ローカルとシティの要素がほどよく混ざり合い、都心へのアクセスも抜群な三軒茶屋駅からほど近いエリアに佇むマンションの一角です。白を基調とした日当たりの良い部屋に、アウトドア好きならではのこだわり…@endslot
          @endcomponent
          @component('components.interview-card')
          @slot('thumb')<img src="@asset('images/interview_fake.jpg')" alt="">@endslot
          @slot('title')ひろびろ収納と無垢フローリングの落ち着く部屋づくり@endslot
          @slot('lead')ローカルとシティの要素がほどよく混ざり合い、都心へのアクセスも抜群な三軒茶屋駅からほど近いエリアに佇むマンションの一角です。白を基調とした日当たりの良い部屋に、アウトドア好きならではのこだわり…@endslot
          @endcomponent
        </div>
      </div>
    </div>
    <div class="action-container">
      @component('components.button')
      @slot('text')インタビュー記事一覧を見る@endslot
      @slot('url')interviews @endslot
      @endcomponent
    </div>
  </div>
</section>