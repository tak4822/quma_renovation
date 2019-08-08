@extends('layouts.app')

@section('content')
<div class="events-inner-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')個別相談セミナー@endslot
  @endcomponent

  <section class="events-inner">
    <div class="events-inner-contents regular-container">
      <div class="left">
        <img src="@asset('images/vision.jpg')" alt="">
      </div>
      <div class="right">
        <p class="title">あなたはリノベーションをするべき？</p>
        <div class="text-container">
          <p>新しい住まいをお考えのあなたのために、まずはリノベーションという選択肢のメリット・デメリットをご紹介します！
            どのようにリノベーションが進むのか、リノベーションの費用感から資金計画まで、リノベーションをする前に知っておいてもらいたいリノベーションの基礎知識をご紹介させていただきます。</p>

          <p>リノベーションについて何も知らな方にも、『リノベーションのことがなんとなく分かった気がする』と思ってもらえるようにご説明します。
            どうぞお気軽にお越しください。</p>
        </div>
        <div class="outline-container">
          <div class="deco">
            <p>Outline</p>
          </div>
          <div class="contents">
            <div class="text-wrapper">
              <p class="item-head">日程</p>
              <p class="item-text">ご希望の日程をお選びください</p>
            </div>
            <div class="text-wrapper">
              <p class="item-head">時間</p>
              <p class="item-text">ご希望の日程をお選びください</p>
            </div>
            <div class="text-wrapper">
              <p class="item-head">場所</p>
              <p class="item-text">恵比寿</p>
            </div>
            <div class="text-wrapper">
              <p class="item-head">参加費</p>
              <p class="item-text">無料</p>
            </div>
          </div>
        </div>
        <div class="action-container">
          @component('components.button')
          @slot('text')申し込む @endslot
          @slot('url')apply @endslot
          @endcomponent
          <div class="comments">
            <p class="red-text">上記ボタンをクリックしても画面が立ち上がらない方はお手数ですがメールよりお申し込みください。</p>
            <p class="text">タイトルにご希望のイベント名、本文に以下の情報を明記の上、下記のメールアドレスにお送りください。①お名前②ご希望の日程③電話番号④物件を持っているかどうか</p>
            <a href="mail:info@quma.co.jp">▶︎info@quma.co.jp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection