@extends('layouts.app')

@section('content')

<div class="contact-container-page pages-container">

  <section class="contact-container">
    @component('components.page-section-header')
    @slot('type')contact @endslot
    @slot('title')各種お問い合わせ@endslot
    @slot('sub')各種フォームからのお問い合わせはこちら。<br />お気軽にお問い合わせ下さい。@endslot
    @slot('img')<img class="horizontal contact" src="@asset('images/contact.jpg')" alt="">@endslot
    @endcomponent

    <div class="contents regular-container">
      <div class="contact-container">
        <section class="contact-section wow fadeInUp">
          <p class="sub-title">住まいのリノベーション</p>
          <div class="deco">
            <div class="sm-crcle pink"></div>
            <div class="sm-crcle pink"></div>
            <div class="sm-crcle pink"></div>
            <div class="sm-crcle pink"></div>
            <div class="sm-crcle pink"></div>
          </div>
          <h3 class="title pink">物件探し・自分の家のリノベーションを考えている</h3>
          <p class="text">リノベーション向き物件を探している方や、物件はすでにお決まり(お持ち)で、リノベーションを検討している方はこちらから。<br />
            予算や工期などのリノベーション知識や、リノベーション向き物件を探すときのポイントが知りたいというリノベーション検討中の方に対するリノベーション講座から、ローン計画などのライフプランのご相談などのご状況に沿ったアドバイスまで、なんでもお気軽にご相談ください。
          </p>
          <a href="/contact-house" class="contact-button pink">
            <p class="button-text">相談する</p>
          </a>
        </section>

        <section class="contact-section">
          <p class="sub-title">空間活用事業</p>
          <div class="deco">
            <div class="sm-crcle green"></div>
            <div class="sm-crcle green"></div>
            <div class="sm-crcle green"></div>
            <div class="sm-crcle green"></div>
            <div class="sm-crcle green"></div>
          </div>
          <h3 class="title green">商業施設や空間活用でリノベーションを考えている</h3>
          <p class="text">店舗やオフィス設計を始め、宿泊やレンタルスペースなど、事業としての空間運用のご相談はこちらから。
            物件の状態やご予算に合わせて、民泊やレンタルスペース、リノベ賃貸などあらゆるソリューションを考慮して、法規チェックから企画、設計、施工、運営パートナーの紹介まで、一連の流れをサポート致します。<br />
          </p>
          <a href="/contact-bussiness" class="contact-button green">
            <p class="button-text">相談する</p>
          </a>
        </section>

        <section class="contact-section">
          <p class="sub-title">資料請求</p>
          <div class="deco">
            <div class="sm-crcle yellow"></div>
            <div class="sm-crcle yellow"></div>
            <div class="sm-crcle yellow"></div>
            <div class="sm-crcle yellow"></div>
            <div class="sm-crcle yellow"></div>
          </div>
          <h3 class="title yellow">資料を請求したい</h3>
          <p class="text">QUMAがこれまでに施工した事例集などをお届けします。<br />
            お得なキャンペーン情報もございます。
          </p>
          <a href="/contact-documents" class="contact-button yellow">
            <p class="button-text">資料請求する</p>
          </a>
        </section>

        <section class="contact-section">
          <p class="sub-title">その他のお問いわせ</p>
          <div class="deco">
            <div class="sm-crcle blue"></div>
            <div class="sm-crcle blue"></div>
            <div class="sm-crcle blue"></div>
            <div class="sm-crcle blue"></div>
            <div class="sm-crcle blue"></div>
          </div>
          <h3 class="title blue">その他のお問い合わせをしたい</h3>
          <p class="text">取材のご依頼やその他のお問い合わせはこちらから。</p>
          <a href="/contact-others" class="contact-button blue">
            <p class="button-text">問い合わせる</p>
          </a>
        </section>
      </div>
      <div class="contact-info cv-tel">
        <a href="tel:0368050696" class="info-container wow fadeIn">
          <div class="deco">
            <img src="@asset('images/ico_tel.svg')" alt="">
          </div>
          <div class="text-wrapper">
            <p class="text">03-6805-0696</p>
            <p>日曜日・祝日定休日</p>
          </div>
        </a>
        <a href="mailto:info@quma.co.jp" class="info-container wow fadeIn cv-mail">
          <div class="deco">
            <img src="@asset('images/ico_mail.svg')" alt="">
          </div>
          <div class="text-wrapper">
            <p class="text">info@quma.co.jp</p>
          </div>
        </a>
      </div>
    </div>
  </section>
</div>
@endsection