@extends('layouts.app')

@section('content')
<div class="events-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')見て、聞いて、楽しもう！@endslot
  @endcomponent

  <section class="events-container">
    @component('components.page-section-header')
    @slot('type')@endslot
    @slot('title')イベント開催中@endslot
    @slot('sub')家族・友人にリノベーションのプロがいる！と思っていただけるような、なんでも話せる相談相手を目指しています。どのイベントもお気軽にお申し込みください。@endslot
    @slot('img')@endslot
    @endcomponent

    <div class="contents regular-container">
      <div class="bg-gray"></div>
      <div class="event-cards">
        <div class="wrapper wow fadeInUp">
          @component('components.event-card')
          @slot('link')/events/showroom @endslot
          @slot('img')
          <img src="@asset('images/event_card_showroom.jpg')" alt="">
          @endslot
          @slot('text')見る@endslot
          @endcomponent
        </div>
        <div class="wrapper wow bit-late fadeInUp">
          @component('components.event-card')
          @slot('link')/events/seminar @endslot
          @slot('img')
          <img src="@asset('images/event_card_seminar.jpg')" alt="">
          @endslot
          @slot('text')話す@endslot
          @endcomponent
        </div>
        <div class="wrapper wow late fadeInUp">
          @component('components.event-card')
          @slot('link')/events/offkai　@endslot
          @slot('img')
          <img src="@asset('images/event_card_offkai.jpg')" alt="">
          @endslot
          @slot('text')楽しむ@endslot
          @endcomponent
        </div>
      </div>
    </div>
  </section>
</div>
@endsection