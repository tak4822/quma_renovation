@extends('layouts.app')

@section('content')

<div class="events-inner-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')リノベカフェに遊びに行く @endslot
  @slot('url')/events @endslot
  @endcomponent

  <section class="events-inner">
    <div class="events-inner-contents regular-container">
      <div class="left wow fadeIn" data-wow-duration="2s">
        <img src="@asset('images/events_showroom.jpg')" alt="">
      </div>
      <div class="right wow fadeInUp">
        <p class="title">コーヒーを飲みながら<br />リノベのプロと気軽に相談</p>
        <div class="text-container">
          @while(have_posts()) @php(the_post())
          @php(the_content())
          @endwhile
        </div>
      </div>
    </div>
  </section>

</div>
@endsection