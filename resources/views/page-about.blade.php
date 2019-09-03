@php($members = App\Controllers\AboutPage::get_members_data())

@extends('layouts.app')

@section('content')
<div class="about-page pages-container">

  @component('components.breadcrums')
  @slot('page')About @endslot
  @slot('text')わたしたちについて@endslot
  @slot('url')@endslot
  @endcomponent

  <section class="vision">
    @component('components.page-section-header')
    @slot('type')@endslot
    @slot('title')大切にしていること@endslot
    @slot('sub')「あなたらしい暮らし」ってなんだろう。<br />そんなことを一緒に考える会社です。@endslot
    @slot('img')@endslot
    @endcomponent

    <div class="contents regular-container">
      <div class="illust wow fadeIn" data-wow-duration="2s">
        <img src="@asset('images/vision.jpg')" alt="">
      </div>
      <div class="text wow fadeInUp">
        <p>QUMAはあなたの暮らしを一緒に考えるパートナーです。</p>
        <p>何をしている時に楽しいと感じて、何をしている時に物足りなさを感じるのか。どんな時に感動して、誰と一緒にいる時間を幸せを感じるのか。あなたのことを知って、それを空間に落とし込む。</p>
        <p>家族構成も、働き方も、大切にしていることも人によって様々。私たちでもあの人でもない、あなたにぴったりな住まいがある。自分の毎日の暮らしがさらに好きになるように。</p>
        <p>「自分と暮らす」</p>
        <p>あなたの暮らしにずっと寄り添え会えるパートナーを目指しています。</p>
      </div>
    </div>
  </section>

  <section class="strength">
    @component('components.page-section-header')
    @slot('type')@endslot
    @slot('title')QUMAリノベーション3ヶ条@endslot
    @slot('sub')数あるリノベーション会社の中でなぜQUMAを選ぶのか。<br />QUMAが提供したい価値を3つご紹介します！@endslot
    @slot('img')@endslot
    @endcomponent

    @component('components.about-strength')
    @slot('number')
    1
    @endslot
    @slot('head')はじめましてから、<br />ずっと相談できるパートナー
    @endslot
    @slot('text')
    <p>お金の話しから、街探し・物件探し、リノベーションの設計・プランニング、施工まで、ずっと同じ担当者があなたのリノベーションを責任を持ってサポートいたします。</p>
    <p>リノベーションが終わった後も、アフターフォローはもちろんのこと、元気に暮らしているか、どのように暮らしているか、些細なことでも教えていただけるような関係を目指しています。</p>
    @endslot
    @slot('img')<img src="@asset('images/strength_1.jpg')" alt="">@endslot
    @endcomponent

    @component('components.about-strength')
    @slot('number')
    2
    @endslot
    @slot('head')個性を持った設計士パートナー<br />あなたにぴったりな設計士さん
    @endslot
    @slot('text')
    <p>
      弊社では、自社での設計士とは別に独立された設計士さんの方々とパートナーとして協力しております。もちろん設計士さんはそれぞれ得意分野があり、個性も様々です。案件担当者がお客様と打ち合わせをする中で、お客様のご要望を叶えられるよう設計士さんをアサインさせていただきます。
    </p>
    <p>たくさんの設計士さんと繋がりを持っているので、型にはまることない空間設計をご提供可能です。</p>
    @endslot
    @slot('img')<img src="@asset('images/strength_2.jpg')" alt="">@endslot
    @endcomponent

    @component('components.about-strength')
    @slot('number')
    3
    @endslot
    @slot('head')お客様と、とことん向き合う<br />あなたにとって本当に良いものを。
    @endslot
    @slot('text')
    <p>
      現状の生活での不満や将来のライフスタイル展望、趣味や理想の空間像など、友達に話すように聞かせていただければ最適な空間設計を行います。
    </p>
    <p>
      あなたやご家族が過ごす大切な時間・空間であるからこそお客様が納得されるまでサポートをさせていただきます。そのため打合せの回数には制限を設けず、電話やメール、LINEやメッセンジャー等を利用し、コミュニケーションを円滑に取るようにいたします。<br />そして本当に満足のいくものをあなたに届けて、あなたがあなたらしく暮らせるように空間づくりをめざしております。
    </p>
    @endslot
    @slot('img')<img src="@asset('images/strength_3.jpg')" alt="">@endslot
    @endcomponent
  </section>

  <section class="members">
    @component('components.page-section-header')
    @slot('type')@endslot
    @slot('title')こんな人達とリノベーション@endslot
    @slot('sub')個性豊かなQUMAのメンバーをご紹介します。<br />誠実に、そして楽しく働いています！@endslot
    @slot('img')@endslot
    @endcomponent
    <img class="all-members wow fadeIn" src="@asset('images/quma.jpg')" alt="quma" data-wow-duration="2s">
    <div class="member-container">
      @foreach($members as $member)
      @component('components.about-member')
      @slot('picture')<img class="picture" src="{{ $member['image'] }}" alt="">@endslot
      @slot('nameimage')<img class="name-img" src="{{ $member['name_img'] }}" alt="">@endslot
      @slot('name'){{ $member['name'] }}@endslot
      @slot('favorite'){{ $member['favorite_time'] }}@endslot
      @slot('text'){!! $member['text'] !!}@endslot
      @endcomponent
      @endforeach
    </div>
  </section>

  <section class="company-info">
    @component('components.page-section-header')
    @slot('type')@endslot
    @slot('title')会社概要@endslot
    @slot('sub')会社の基本情報です。<br />詳しく知りたい方はお気軽にご連絡ください:)@endslot
    @slot('img')@endslot
    @endcomponent

    <div class="info-list wow fadeInUp">
      <div class="left">
        <div class="info">
          <div class="header">会社名</div>
          <div class="text">株式会社クーマ（Quma)</div>
        </div>
        <div class="info">
          <div class="header">所在地</div>
          <div class="text">
            〒150-0011<br />
            東京都渋谷区東3-6-18 プライムハウス102<br />
            <a class="map-link" href="https://goo.gl/maps/igyhxYdCMSjkMBjJ8">地図を見る</a>
          </div>
        </div>
        <div class="info">
          <div class="header">連絡先</div>
          <div class="text">
            <a href="tel:03-6805-0696">TEL: 03-6805-0696</a><br />
            FAX: 03-6805-0697
          </div>
        </div>
      </div>
      <div class="border"></div>
      <div class="right">
        <div class="info">
          <div class="header">設立</div>
          <div class="text">2015年7月10日</div>
        </div>
        <div class="info">
          <div class="header">代表者</div>
          <div class="text">
            代表取締役 村田 紘一
          </div>
        </div>
        <div class="info">
          <div class="header">事業内容</div>
          <div class="text">
            住宅リノベーション<br />
            店舗・商業施設のリノベーション<br />
            不動産の企画、設計、施工、運営受託<br />
            建築設計、インテリアデザイン<br />
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection