@extends('layouts.app')

@section('content')
<div class="works-page pages-container">

  @component('components.breadcrums')
  @slot('page')Works @endslot
  @slot('text')どんなものをつくれるの？@endslot
  @endcomponent

  <section class="works-container">
    @component('components.page-section-header')
    @slot('title')今までの施工事例@endslot
    @slot('sub')十人十色の暮らしを作らせて頂いているリノベーション。QUMAが一緒に作らせて頂いた空間を紹介させてください。@endslot
    @slot('img')@endslot
    @endcomponent

    <div class="works-list-container regular-container">
      <div class="picked-container">
        @component('components.work-card')
        @slot('thumb')<img src="@asset('images/interview_fake.jpg')" alt="">@endslot
        @slot('title')ずっと自然体で。楽に過ごせる新婚生活ずっと自然体で。@endslot
        @slot('area')70 @endslot
        @slot('budget')1200 @endslot
        @slot('type')中古マンション@endslot
        @slot('place')恵比寿@endslot
        @endcomponent

        @component('components.work-card')
        @slot('thumb')<img src="@asset('images/interview_fake.jpg')" alt="">@endslot
        @slot('title')ずっと自然体で。楽に過ごせる新婚生活ずっと自然体で。@endslot
        @slot('area')70 @endslot
        @slot('budget')1200 @endslot
        @slot('type')中古マンション@endslot
        @slot('place')恵比寿@endslot
        @endcomponent
      </div>

      <div class="new-container">
        @php
        $works= array (
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        array (
        'title' => '毎日がクリエイティブになれますように',
        "area" => '100',
        "budget" => '1200',
        "type" => '戸建',
        "place" => '自由が丘',
        ),
        );
        @endphp


        @foreach ($works as $work)
        @component('components.work-card')
        @slot('thumb')<img src="@asset('images/interview_fake.jpg')" alt="">@endslot
        @slot('title'){{ $work['title'] }}@endslot
        @slot('area'){{ $work['area'] }}@endslot
        @slot('budget'){{ $work['budget'] }}@endslot
        @slot('type'){{ $work['type'] }}@endslot
        @slot('place'){{ $work['place'] }}@endslot
        @endcomponent
        @endforeach
      </div>
    </div>
    @component('components.pagenation')@endcomponent
  </section>


</div>
@endsection