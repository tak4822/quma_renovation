@extends('layouts.app')

@section('content')
<div class="about-page pages-container">

  @component('components.breadcrums')
  @slot('page')Service @endslot
  @slot('text')どんな感じに進めるの？@endslot
  @endcomponent

  <section class="vision">
    @component('components.page-section-header')
    @slot('title')プラン計画からのプロセス@endslot
    @slot('sub')物件が決まっている方のリノベーションプロセスをご紹介。<br />一緒にたくさん悩んでお気に入りの空間をつくりましょう！@endslot
    @slot('img')@endslot
    @endcomponent
  </section>

</div>
@endsection