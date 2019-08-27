@extends('layouts.app')

@section('content')
@component('components.modal')
@slot('contents')
<div class="form-container popup">
  @while(have_posts()) @php(the_post())
  @php(the_content())
  @endwhile
</div>
@endslot
@endcomponent
<div class="events-inner-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')ショールーム見学会 @endslot
  @endcomponent

  <section class="events-inner">
    <div class="events-inner-contents regular-container">
      <div class="left">
        <img src="@asset('images/events_showroom.jpg')" alt="">
      </div>
      <div class="right">
        <p class="title">リノベーションって何？</p>
        <div class="text-container">
          <p>家を買うなら新築だよね、と思っていたけど。最近流行っているリノベーションって何なの？というあなたへ。</p>
          <p>QUMAが実際に作ったリノベーション空間をご覧いただけます。<br />
            また、リノベーションっていくらぐらいかかるの？どんなことができるの？という基本的なリノベーションの情報をお伝えいたします。
            もしイメージをお持ちであれば、あなたの好みをお聞きしてこんなリノベーションはどうでしょうかと施工事例を見ながらリノベーションのアイディアなどもご提案させていただきます。</p>
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
          @slot('url')@endslot
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