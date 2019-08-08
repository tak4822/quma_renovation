@extends('layouts.app')

@section('content')
<div class="events-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')見て、聞いて、楽しもう！@endslot
  @endcomponent

  <section class="events-container">
    @component('components.page-section-header')
    @slot('title')イベント開催中@endslot
    @slot('sub')家族・友人にリノベーションのプロがいる！と思っていただけるような、なんでも話せる相談相手を目指しています。どのイベントもお気軽にお申し込みください。@endslot
    @slot('img')@endslot
    @endcomponent

    <div class="contents regular-container">
      <div class="bg-gray"></div>
      @component('layouts.event-cards')@endcomponent
    </div>
  </section>
</div>
@endsection