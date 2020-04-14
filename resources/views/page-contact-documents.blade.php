@extends('layouts.app')

@section('content')
@component('components.modal')
@slot('id')formSent @endslot
@slot('contents')
<div class="text-wrapper">
  <p clas="text">お問い合わせありがとうございます！<br />内容を確認した後、こちらからご連絡致します。</p>
</div>
@endslot
@endcomponent
<div class="contact-page pages-container">
  {{--
  @component('components.breadcrums')
  @slot('page')Contact @endslot
  @slot('text')暮らしの相談室@endslot
  @slot('url')@endslot
  @endcomponent --}}

  <section class="contact-container">
    @component('components.page-section-header')
    @slot('type') @endslot
    @slot('title')資料請求のお問い合わせ @endslot
    @slot('sub')QUMAがこれまでに施工した事例集などをお届けします。<br />
    今だけのお得なキャンペーン情報もございます。@endslot
    @slot('img')@endslot
    @endcomponent


    {{-- いくらぐらいかかるの？あの写真みたいにリノベできるの？<br />どんな質問でもお答えします。 --}}
    <div class="contents regular-container">
      <div class="form-container wow fadeInUp">
        @while(have_posts()) @php(the_post())
        @php(the_content())
        @endwhile
      </div>
    </div>
  </section>
</div>
@endsection