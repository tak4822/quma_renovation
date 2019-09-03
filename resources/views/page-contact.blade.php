@extends('layouts.app')

@section('content')
<div class="contact-page pages-container">

  @component('components.breadcrums')
  @slot('page')Contact @endslot
  @slot('text')暮らしの相談室@endslot
  @slot('url')@endslot
  @endcomponent

  <section class="contact-container">
    @component('components.page-section-header')
    @slot('type')contact @endslot
    @slot('title')お問い合わせフォーム@endslot
    @slot('sub')いくらぐらいかかるの？あの写真みたいにリノベできるの？<br />どんな質問でもお答えします。@endslot
    @slot('img')<img class="horizontal contact" src="@asset('images/contact.jpg')" alt="">@endslot
    @endcomponent

    <div class="contents regular-container">
      <div class="form-container wow fadeInUp">
        @while(have_posts()) @php(the_post())
        @php(the_content())
        @endwhile
      </div>
      <div class="contact-info">
        <a href="tel:0368050696" class="info-container wow fadeIn">
          <div class="deco">
            <img src="@asset('images/ico_tel.svg')" alt="">
          </div>
          <div class="text-wrapper">
            <p class="text">03-6805-0696</p>
            <p>日曜日・祝日定休日</p>
          </div>
        </a>
        <a href="mail:info@quma.co.jp" class="info-container wow fadeIn">
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