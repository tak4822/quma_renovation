@extends('layouts.app')

@section('content')
@component('components.modal')
@slot('id')eventForm @endslot
@slot('contents')
<div class="form-container popup">
  @while(have_posts()) @php(the_post())
  @php(the_content())
  @endwhile
</div>
@endslot
@endcomponent

@component('components.modal')
@slot('id')formSent @endslot
@slot('contents')
<div class="text-wrapper">
  <p clas="text">お問い合わせありがとうございます！<br />内容を確認した後、こちらからご連絡致します。</p>
</div>
@endslot
@endcomponent
<div class="events-inner-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')個別相談セミナー@endslot
  @slot('url')/events @endslot
  @endcomponent

  <section class="events-inner">
    <div class="events-inner-contents regular-container">
      <div class="left wow fadeIn" data-wow-duration="2s">
        <img src="@asset('images/events_seminar.jpg')" alt="">
      </div>
      <div class="right wow fadeInUp">
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
              <p class="item-text">毎月第２土曜日</p>
            </div>
            <div class="text-wrapper">
              <p class="item-head">時間</p>
              <p class="item-text">ご希望の日程をお選びください</p>
            </div>
            <div class="text-wrapper">
              <p class="item-head">場所</p>
              <p class="item-text">恵比寿・大塚</p>
            </div>
            <div class="text-wrapper">
              <p class="item-head">参加費</p>
              <p class="item-text">無料</p>
            </div>
          </div>
        </div>
        <div class="action-container">
          <div class="btn cv-open-form">
            <div class="border-wrapper">
              <div class="border">
                <img class="arrow-edge" src="@asset('images/button_arrow_edge.svg')" alt="">
              </div>
            </div>
            <p class="text">申し込む</p>
          </div>
          <div class="comments">
            <p class="red-text">上記ボタンをクリックしても画面が立ち上がらない方はお手数ですがメールよりお申し込みください。</p>
            <p class="text">タイトルにご希望のイベント名、本文に以下の情報を明記の上、下記のメールアドレスにお送りください。①お名前②ご希望の日程③電話番号④物件を持っているかどうか</p>
            <a href="mailto:info@quma.co.jp" class="cv-mail">▶︎info@quma.co.jp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection