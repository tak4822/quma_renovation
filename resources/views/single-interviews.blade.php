@extends('layouts.app')

@section('content')
<div class="interviews-single pages-container">
  @component('components.breadcrums')
  @slot('page')Interviews @endslot
  @slot('text')アウトドア好きでアクティブな人の部屋って？@endslot
  @endcomponent

  <section class="interview-head">
    <div class="head-texts">
      <div class="head">
        <div class="number">001</div>
        <div class="text-wrapper">
          <p class="title">ひろびろ収納と無垢フローリングの落ち着く部屋づくり</p>
          <div class="outline">
            <p class="name">F様邸</p>
            <div class="slash"></div>
            <p class="family">SINGLE</p>
            <div class="slash"></div>
            <p class="address">吉祥寺</p>
          </div>
        </div>
      </div>

      <div class="lead-container">
        <p>ローカルとシティの要素がほどよく混ざり合い、都心へのアクセスも抜群な三軒茶屋駅からほど近いエリアに佇むマンションの一角です。</p>
        <p> 白を基調とした日当たりの良い部屋に、アウトドア好きならではのこだわりポイントを散りばめた、落ち着きのある爽やかな部屋が完成。さてどのような暮らしをしているのか覗いてみましょう。</p>
      </div>
    </div>
    <div class="pic">
      <img src="@asset('images/interview_fake.jpg')" alt="">
    </div>
  </section>
  <section class="interview-contents">
    <article class="article section-1">
      <div class="illust-area">
        <img src="@asset('images/interview_section_2.png')" alt="">
      </div>
      <div class="contents">
        <div class="title-container">
          <div class="number">1.</div>
          <div class="title-wrapper">
            <p class="title">アウトドア好きでアクティブな人の部屋づくりって？</p>
          </div>
        </div>
        <p>
          関西から就職と同時に上京した頃から、三軒茶屋の1Kの賃貸でひとり暮らしをしていたFさんは、都内のIT企業の商品開発部で働かれています。「ごましおくん」という一匹のハリネズミと一緒に暮らしながら、休みの日は仕事の仲間たちと趣味のアウトドアに出かけられるそう。取材当日にも「今日はこれからベトナム旅行に行きます！」と言うように、海外旅行にも頻繁に出かけるアクティブな方です。
        </p>

        <p>ちょっと歩けば老舗の魚屋さんなどもある三軒茶屋。渋谷や都内へのアクセスも抜群で生活や交通に不便することはありません。Fさんは「近くに友人も住んでいて、雰囲気も好きだから愛着ありますね」と語ります。</p>
        <img src="@asset('images/interview_fake.jpg')" alt="">
        <p>
          関西から就職と同時に上京した頃から、三軒茶屋の1Kの賃貸でひとり暮らしをしていたFさんは、都内のIT企業の商品開発部で働かれています。「ごましおくん」という一匹のハリネズミと一緒に暮らしながら、休みの日は仕事の仲間たちと趣味のアウトドアに出かけられるそう。取材当日にも「今日はこれからベトナム旅行に行きます！」と言うように、海外旅行にも頻繁に出かけるアクティブな方です。
        </p>

        <p>ちょっと歩けば老舗の魚屋さんなどもある三軒茶屋。渋谷や都内へのアクセスも抜群で生活や交通に不便することはありません。Fさんは「近くに友人も住んでいて、雰囲気も好きだから愛着ありますね」と語ります。</p>
      </div>
    </article>
  </section>
  <section class="next regular-container">
    @component('components.interview-list')
    @slot('number')002 @endslot
    @slot('subtitle')アウトドア好きでアクティブな人の部屋って？@endslot
    @slot('title')ひろびろ収納と無垢フローリングの落ち着く部屋づくり@endslot
    @slot('name')F様邸 @endslot
    @slot('family')SINGLE @endslot
    @slot('address')吉祥寺 @endslot
    @slot('img')
    <img src="@asset('images/top_fake.jpg')" alt="">
    @endslot
    @endcomponent

    <div class="button-wrapper">
      @component('components.button')
      @slot('text')インタビュー記事一覧に戻る@endslot
      @slot('url')interviews @endslot
      @endcomponent
    </div>
  </section>
</div>
@endsection