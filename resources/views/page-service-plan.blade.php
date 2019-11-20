@extends('layouts.app')

@section('content')
<div class="service-page pages-container">

  {{-- @component('components.breadcrums')
  @slot('page')Service @endslot
  @slot('text')どんな感じに進めるの？@endslot
  @slot('url') @endslot
  @endcomponent --}}

  <section class="service-plan">
    @component('components.page-section-header')
    @slot('type')vertical @endslot
    @slot('title')プラン計画からのプロセス@endslot
    @slot('sub')物件が決まっている方のリノベーションプロセスをご紹介。<br />一緒にたくさん悩んでお気に入りの空間をつくりましょう！@endslot
    @slot('img')
    <img src="@asset('images/service_plan.jpg')" alt="">
    @endslot
    @endcomponent

    <div class="flow-container regular-container">
      <div class="vertivcal-dotted-line"></div>
      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')01 @endslot
        @slot('title')個別相談@endslot
        @endcomponent
        <div class="left flow-exp wow fadeInUp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_hearing.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">ヒアリング</p>
          @endslot
          @slot('text')
          「自分と暮らす」リノベーションは、ヒアリングからスタートします。
          最初は空間イメージがなかなか出来ない方がほとんどです。<br />
          家族・友人にリノベーションのプロがいる！を目指して、お好みや希望を引き出していきます。<br />
          リノベーションって何ができるの？どれくらいのお金がかかる？などリノベの基礎知識もご説明します！
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')02 @endslot
        @slot('title')プランニング@endslot
        @endcomponent
        <div class="right flow-exp wow fadeInUp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_plan_1.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">初期プランニング</p>
          <p class="title">リノベーション契約</p>
          @endslot
          @slot('text')
          初期プランニングでは、プラン案をいくつかお出しすることで、空間構成にどんな可能性があるかを把握していただきながら、大きな方向性を整理していきます。<br />
          進め方や方向性にご納得いただけたら、この段階で弊社とリノベーションのご契約をしていただきます。
          @endslot
          @endcomponent
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_plan_2.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">プラン詳細打ち合わせ</p>
          @endslot
          @slot('text')
          プランの検討と修正を繰り返し、住宅設備や建材、インテリア選びなど、具体的な住まいのイメージを作り上げていきます。<br />
          QUMAではお施主さまのイメージやご希望を引き出すことを最も大切にしていますので、元の案に立ち戻ったり、横道にそれたりすることは大歓迎です！お施主さまのご希望に合う進め方を考えて生きます。<br />
          家の隅から隅までこだわって、「自分と暮らす」空間を一緒につくりましょう！
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')03 @endslot
        @slot('title')リノベーション工事@endslot
        @endcomponent
        <div class="left flow-exp wow fadeInUp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_const.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">リノベーション工事</p>
          @endslot
          @slot('text')
          いよいよ工事開始！現場を知り尽くした職人、一緒にプランを作り上げたデザイナー、案件担当者のチーム体制で責任を持って、理想の暮らしを実現できる空間をつくり上げます。工事が始まったら工事の様子も見学して頂けます。考えてきたプランが実際に形になっていく過程も楽しみましょう！
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')04 @endslot
        @slot('title')お引き渡し@endslot
        @endcomponent
        <div class="right flow-exp wow fadeInUp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_key.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">お引き渡し</p>
          @endslot
          @slot('text')
          しっかりと事前検査をしたうえで、お施主さまに完了検査をしていただきます。完了検査が終わればついにお引き渡し！「自分と暮らす」日々が始まります！
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')05 @endslot
        @slot('title')アフターサービス@endslot
        @endcomponent
        <div class="left flow-exp wow fadeInUp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_after.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">リノベーション後のお付き合い</p>
          @endslot
          @slot('text')
          アフター保証サービスはもちろん、棚を付けたり絵を掛けたり、暮らしながら気付いた、ちょっと追加したいことも対応させていただきます。お引き渡し後も暮らしの相談相手として長くお付き合いさせてください。
          @endslot
          @endcomponent
        </div>
      </div>

    </div>
  </section>
  <section class="regular-container single-cta-container">
    <div class="sigle-event">
      <div class="wrapper wow fadeInUp">
        @component('components.event-card')
        @slot('link')/showroom @endslot
        @slot('img')
        <img class="lazyload" src="@asset('images/event_card_showroom.jpg')" alt="">
        @endslot
        @slot('text')見る@endslot
        @endcomponent
      </div>
      <div class="wrapper wow bit-late fadeInUp">
        @component('components.event-card')
        @slot('link')/seminar @endslot
        @slot('img')
        <img class="lazyload" src="@asset('images/event_card_seminar.jpg')" alt="">
        @endslot
        @slot('text')話す@endslot
        @endcomponent
      </div>
      <div class="wrapper wow late fadeInUp">
        @component('components.event-card')
        @slot('link')/offkai @endslot
        @slot('img')
        <img class="lazyload" src="@asset('images/event_card_offkai.jpg')" alt="">
        @endslot
        @slot('text')楽しむ@endslot
        @endcomponent
      </div>
    </div>

    <a href="/contact" class="single-cta-color-button yellow wow fadeInUp cv-single-page">
      <div class="header">
        <p class="head-text">MAIL FORM</p>
      </div>
      <p class="text">メールでリノベーションの情報が欲しいという方はコチラ</p>
      <div class="icon-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.814 15.332" class="icon">
          <g id="noun_Mail_2073672" transform="translate(0.25 0.25)">
            <g id="グループ化_39" data-name="グループ化 39" transform="translate(0 0)">
              <path id="パス_76" data-name="パス 76"
                d="M26.314,19.19a.5.5,0,0,0-.026-.16c0-.007-.007-.012-.01-.019a.5.5,0,0,0-.027-.051.507.507,0,0,0-.068-.1.5.5,0,0,0-.044-.043.718.718,0,0,0-.152-.094.5.5,0,0,0-.179-.036H5.507a.5.5,0,0,0-.179.036.471.471,0,0,0-.051.026.491.491,0,0,0-.1.068.474.474,0,0,0-.044.043.493.493,0,0,0-.068.1.467.467,0,0,0-.027.052c0,.007-.008.012-.01.019A.5.5,0,0,0,5,19.19V33.011a.506.506,0,0,0,.507.507h20.3a.507.507,0,0,0,.507-.507V19.19ZM6.013,32.5V20.217l9.336,7.134a.507.507,0,0,0,.615,0L25.3,20.217V32.505H6.013Zm9.644-6.194L7,19.7H24.31Z"
                transform="translate(-5 -18.686)" stroke-width="0.8px" stroke="#fff" ; />
            </g>
          </g>
        </svg>
      </div>
      <div class="cta-wrapper">
        <div class="single-btn">
          <p class="btn-text">メールフォームへ</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.197 17.264" class="single-btn-arrow">
            <path id="パス_18193" data-name="パス 18193" d="M5227.041,23432.553l8.89,7.322-8.89,7.646"
              transform="translate(-5226.063 -23431.395)" stroke-width="3" />
          </svg>
        </div>
      </div>
    </a>

    <a href="tel:0368050696" class="single-cta-color-button red wow fadeInUp cv-tel cv-single-page">
      <div class="header">
        <p class="head-text">TELEPHONE</p>
      </div>
      <p class="text">『時間がない！』という方は直接お電話ください。</p>
      <div class="icon-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 17.68 17.68">
          <g id="Layer_2" data-name="Layer 2">
            <g id="Layer_1-2" data-name="Layer 1">
              <g id="noun_call_1956589" data-name="noun call 1956589">
                <g id="パス_77" data-name="パス 77">
                  <path class="cls-1"
                    d="M12.13,10.84l-1.29,2a.4.4,0,0,1-.55.14A16.37,16.37,0,0,1,4.67,7.38a.39.39,0,0,1,.13-.55l2-1.29L4.65,1.18,1.12,2.59a17.44,17.44,0,0,0,14,14L16.5,13ZM7.71,10a15.16,15.16,0,0,0,2.66,2.13l1.27-2a.41.41,0,0,1,.53-.15l5,2.52a.4.4,0,0,1,.2.51l-1.68,4.2a.4.4,0,0,1-.45.25,18.25,18.25,0,0,1-15-15A.39.39,0,0,1,.51,2L4.71.28a.4.4,0,0,1,.51.2l2.52,5A.4.4,0,0,1,7.59,6l-2,1.27A15.54,15.54,0,0,0,7.72,10Z" />
                  <path class="cls-1"
                    d="M15.34,17.68h-.11A18.5,18.5,0,0,1,0,2.45a.68.68,0,0,1,.4-.73L4.61.05a.66.66,0,0,1,.84.32L8,5.4a.64.64,0,0,1-.23.85L5.93,7.39a15.07,15.07,0,0,0,2,2.4h0a15.56,15.56,0,0,0,2.4,2L11.43,10a.64.64,0,0,1,.85-.23l5,2.51a.66.66,0,0,1,.32.84L16,17.27A.68.68,0,0,1,15.34,17.68ZM4.86.5H4.8L.6,2.19a.16.16,0,0,0-.1.17A18,18,0,0,0,15.32,17.18a.17.17,0,0,0,.17-.1l1.68-4.2a.15.15,0,0,0-.08-.2l-5-2.52a.15.15,0,0,0-.2.06l-1.41,2.22-.21-.13a16.05,16.05,0,0,1-2.7-2.17h0A14.73,14.73,0,0,1,5.38,7.44l-.14-.21,2.22-1.4a.17.17,0,0,0,.06-.21L5,.59A.15.15,0,0,0,4.86.5ZM15.24,16.84l-.2,0A17.79,17.79,0,0,1,.87,2.63l0-.2L4.77.86,7.16,5.63,4.93,7a.17.17,0,0,0,0,.22,16.29,16.29,0,0,0,5.54,5.53.16.16,0,0,0,.21,0L12,10.51l4.78,2.39ZM1.4,2.75A17.28,17.28,0,0,0,14.93,16.27l1.25-3.13-4-2L11.05,13a.66.66,0,0,1-.89.21A16.69,16.69,0,0,1,4.45,7.51a.65.65,0,0,1,.22-.89L6.51,5.45l-2-4Z" />
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div class="cta-wrapper">
        <p class="tel-text">03-6805-0696</p>
      </div>
    </a>
  </section>

</div>
@endsection