@extends('layouts.app')

@section('content')
<div class="service-page pages-container">

  @component('components.breadcrums')
  @slot('page')Service @endslot
  @slot('text')どんな感じに進めるの？@endslot
  @endcomponent

  <section class="service-plan">
    @component('components.page-section-header')
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
        <div class="left flow-exp">
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
        <div class="right flow-exp">
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
        <div class="left flow-exp">
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
        <div class="right flow-exp">
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
        <div class="left flow-exp">
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

</div>
@endsection