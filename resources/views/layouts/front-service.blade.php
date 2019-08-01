<section class="front-service regular-container">
  <div class="section-title-wrapper">
    @component('components.front-section-title')
    @slot('title')何から始めれば良いの？@endslot
    @slot('sub')QUMAのリノベーションのタイプ@endslot
    @slot('exp')@endslot
    @endcomponent
  </div>
  <div class="contents">
    <div class="question-container">
      <div class="quote">
        <span class="border left"></span>
        <span class="text">Question!</span>
        <span class="border right"></span>
      </div>
      <div class="question-text">物件から探す？</div>
    </div>
    <div class="desktop-if-then">
      <div class="top">
        <div class="border"></div>
      </div>
      <div class="middle">
        <div class="yes">Yes</div>
        <div class="no">No</div>
      </div>
      <div class="bottom">
        <div class="border"></div>
        <div class="border"></div>
      </div>
    </div>
    <div class="answer">
      <div class="house">
        <div class="answer-circle-mobile">
          <p class="text">YES</p>
        </div>
        <div class="title">街探し・物件探しからの<br />リノベーション</div>
        <div class="illust">
          <img src="@asset('images/vision.jpg')" alt="">
        </div>
        <div class="exp">ご予算の中で、どんな街でどんな暮らしがしたいのかを考えて、「自分と暮らす」ためのベースとなる街と物件を一緒に探しましょう！</div>
        @component('components.button')
        @slot('text')物件探しからのプロセスを知る@endslot
        @endcomponent
      </div>
      <div class="plan">
        <div class="answer-circle-mobile">
          <p class="text">NO</p>
        </div>
        <div class="title">プラン計画からの<br />リノベーション</div>
        <div class="illust">
          <img src="@asset('images/vision.jpg')" alt="">
        </div>
        <div class="exp">物件がすでに決まっている方。もうあとはつくるだけ！あなたがどんな人なのかをたっぷりとお教えていただいて、“あなた”を空間に落とし込んでいきましょう！</div>
        @component('components.button')
        @slot('text')プラン計画からのプロセスを知る@endslot
        @endcomponent
      </div>
    </div>
  </div>
</section>