<section class="front-about">
  <div class="section-title-wrapper">
    @component('components.front-section-title')
    @slot('title')QUMAって？@endslot
    @slot('sub')QUMAが大切にしていること@endslot
    @slot('exp')@endslot
    @endcomponent
  </div>
  <div class="contents">
    <div class="vision">
      <div class="illust wow fadeInUp" data-wow-duration="2s">
        <img src="@asset('images/vision.jpg')" alt="">
      </div>
      <div class="text-container wow fadeIn">
        <p>QUMAはあなたの暮らしを一緒に考えるパートナーです。</p>
        <p>何をしている時に楽しいと感じて、何をしている時に物足りなさを感じるのか。どんな時に感動して、誰と一緒にいる時間を幸せを感じるのか。あなたのことを知って、それを空間に落とし込む。</p>
        <p>家族構成も、働き方も、大切にしていることも人によって様々。私たちでもあの人でもない、あなたにぴったりな住まいがある。自分の毎日の暮らしがさらに好きになるように。</p>
        <p>「自分と暮らす」</p>
        <p>あなたの暮らしにずっと寄り添えるパートナーを目指しています。</p>
      </div>
    </div>
    <div class="pic wow fadeIn"></div>
  </div>
  <div class="action-container regular-container">
    @component('components.button')
    @slot('text')QUMAをもっと知る@endslot
    @slot('url')about @endslot
    @endcomponent
  </div>
</section>