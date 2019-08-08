@extends('layouts.app')

@section('content')
<div class="contact-page pages-container">

  @component('components.breadcrums')
  @slot('page')Contact @endslot
  @slot('text')暮らしの相談室@endslot
  @endcomponent

  <section class="contact-container">
    @component('components.page-section-header')
    @slot('title')お問い合わせフォーム@endslot
    @slot('sub')いくらぐらいかかるの？<br />あの写真みたいにリノベできるの？どんな質問でもお答えします。@endslot
    @slot('img')@endslot
    @endcomponent

    <div class="contents regular-container">
      <div class="form-container">

      </div>
      <div class="contact-info">
        <div class="tel-container">

        </div>
        <div class="mail-container"></div>
      </div>
    </div>
  </section>
</div>
@endsection