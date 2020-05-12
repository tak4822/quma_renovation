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
  @slot('text')おうちでリノベーション相談会@endslot
  @slot('url')/events @endslot
  @endcomponent

  <section class="events-inner">
    <div class="events-inner-contents regular-container">
      <div class="left wow fadeIn" data-wow-duration="2s">
        <img src="@asset('images/online-seminar.jpg')" alt="">
      </div>
      <div class="right wow fadeInUp">
        <p class="title">リノベーションの計画を立てましょう！</p>
        <div class="text-container">
          <p>在宅ワークなどが増えてきたこともあり、『部屋を心地の良い空間にしたい』という声を多くいただいています。そんな中で、自分の好きなように空間をカスタマイズできるリノベーションにとても人気が集まっています。
          </p>

          <p>
            リノベーションに興味を持ってくださる方が増えている中で、『でも、リノベーションってどうすれば良いの？安い買い物ではないし、<b>しっかり計画を立てたいけど、何についての情報を集めれば良いの？</b>』という方も多い様子。
          </p>
          <p>
            このリノベーションオンライン相談会では、これからリノベーションも視野に入れた住宅購入やご自宅のリノベーションを考えている方に対して、</p>
          <ul class="merit-list">
            <li>・どのような流れで進むのか</li>
            <li>・どれくらいの予算を考えれば良いのか</li>
            <li>・どのような物件を探すべきか</li>
            <li>・どのような選択肢があって、どのような情報を集めて、どのような好みを考えていけば良いのか</li>
          </ul>
          <p>あなた自身でリノベーションの地図をしっかり描けるようにアドバイスさせていただきます。</p>
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
              <p class="item-text">どこでも大丈夫です。</p>
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
            <p class="text">聞いてみる</p>
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