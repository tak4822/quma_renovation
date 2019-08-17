@extends('layouts.app')

@section('content')
<div class="service-page pages-container">

  @component('components.breadcrums')
  @slot('page')Service @endslot
  @slot('text')どんな感じに進めるの？@endslot
  @endcomponent

  <section class="service-house">
    @component('components.page-section-header')
    @slot('title')街探し・物件探しからの進め方@endslot
    @slot('sub')ご予算の中で、どんな街でどんな暮らしがしたいのかを考えて、「自分と暮らす」ためのベースとなる街と物件を一緒に探しましょう！@endslot
    @slot('img')
    <img src="@asset('images/service_houses.jpg')" alt="">
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
          「自分と暮らす」リノベーションは、ヒアリングからスタートします。<br />
          最初はリノベーションのイメージがなかなか出来ない方がほとんどです。<br />
          「家族・友人にリノベーションのプロがいる！」を目指して、お好みやご希望、イメージを引き出していきます。どれくらいのお金がかかる？など、リノベーションの基礎知識もご説明します！どんなご相談でもOK!
          @endslot
          @endcomponent
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_budget.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">ご予算の整理</p>
          @endslot
          @slot('text')
          築浅物件＋部分リノベーション、中古物件＋フルリノベーション、色々な選択肢がある中で、これからのライフプランを整理しながら、最適な住まいづくりのご予算を決めましょう。
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')02 @endslot
        @slot('title')物件探し@endslot
        @endcomponent
        <div class="right flow-exp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_house_1.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">街探し</p>
          @endslot
          @slot('text')
          生活の利便性やアクセス性に加えて、街にはそれぞれ空気感があります。<br />
          これから街を決めていく方は、どの街を歩いた時に暮らしのイメージが湧いてくるかを整理をして街を決めましょう！
          @endslot
          @endcomponent
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_house_2.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">物件探し</p>
          @endslot
          @slot('text')
          街の候補が決まったら、次は物件探し。部屋の大きさ、駅からのアクセス、日当たりや風通しに加えて、理想のリノベーションができるかどうかも一緒に内覧して、リノベーションのプロの視点からアドバイスします！<br />
          マンションの場合、共用部の管理状態や長期修繕計画なども大切なポイントとしてチェックします。<br />
          家の隅から隅までこだわって、「自分と暮らす」空間を一緒につくりましょう！
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')03 @endslot
        @slot('title')物件検討・契約@endslot
        @endcomponent
        <div class="left flow-exp">
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_contract_1.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">リノベーションのラフプラン</p>
          <p class="title">概算見積り</p>
          @endslot
          @slot('text')
          ワクワクする物件が見つかったら、リノベーションのラフプランとおおよそのお見積りを先行して作成します。物件購入前に、希望の住まいが実現出来るか、や総予算を把握できることは物件探し＋リノベーションでご相談頂く大きなメリットです！
          @endslot
          @endcomponent
          @component('components.service-flow-exp')
          @slot('img')<img src="@asset('images/service_contract_2.jpg')" alt=""> @endslot
          @slot('title')
          <p class="title">物件購入・物件契約</p>
          @endslot
          @slot('text')
          物件価格、リノベーションのプランと概算見積りから、あなたの暮らしが実現出来ると思われたら、いよいよ物件のご購入、ご契約です！
          @endslot
          @endcomponent
        </div>
      </div>

      <div class="step-container">
        @component('components.service-flow-number')
        @slot('number')04 @endslot
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
        @slot('number')05 @endslot
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
        @slot('number')06 @endslot
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
        @slot('number')07 @endslot
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