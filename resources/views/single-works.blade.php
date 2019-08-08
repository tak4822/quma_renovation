@extends('layouts.app')

@section('content')
<div class="works-single pages-container">
  @component('components.breadcrums')
  @slot('page')Works @endslot
  @slot('text'){{ the_title() }}@endslot
  @endcomponent

  <section class="work-container">
    <div class="top">
      <img src="{{ the_post_thumbnail_url( 'full' ) }}" alt="">
    </div>
    <article class="outline">
      <div class="title-container">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Outline</p>
        </div>
      </div>
      <div class="regular-container work-contents">
        <div class="outline-list">
          <div class="left">
            <div class="list-wrapper">
              <p class="title">タイプ</p>
              <p class="text">{{ the_field('type') }}</p>
            </div>
            <div class="list-wrapper">
              <p class="title">広さ</p>
              <p class="text">{{ the_field('area') }}㎡</p>
            </div>
            <div class="list-wrapper">
              <p class="title">場所</p>
              <p class="text">{{ the_field('place') }}</p>
            </div>
            <div class="list-wrapper">
              <p class="title">家族構成</p>
              <p class="text">{{ the_field('family') }}</p>
            </div>
          </div>
          <div class="right">
            <div class="list-wrapper">
              <p class="title">築年数</p>
              <p class="text">{{ the_field('years') }}年</p>
            </div>
            <div class="list-wrapper">
              <p class="title">工事費用</p>
              <p class="text">{{ the_field('budget') }}万</p>
            </div>
            <div class="list-wrapper">
              <p class="title">間取り</p>
              <p class="text">{{ the_field('structure') }}</p>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="highlight">
      <div class="title-container">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">こだわり①</p>
        </div>
      </div>
      <div class="regular-container work-contents">
        <h3 class="title">{{ the_field('highlight_1_title') }}</h3>
        <div class="exp-container">
          <div class="left">
            <p>{{ the_field('highlight_1_text_left') }}</p>
          </div>
          <div class="right">
            <p>{{ the_field('highlight_1_text_right') }}</p>
          </div>
        </div>
      </div>
      <div class="pics regular-container">
        <img src="{{ the_field('highlight_1_img_1') }}" alt="">
        <img src="{{ the_field('highlight_1_img_2') }}" alt="">
      </div>
    </article>

    <article class="highlight">
      <div class="title-container">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">こだわり2</p>
        </div>
      </div>
      <div class="regular-container work-contents">
        <h3 class="title">{{ the_field('highlight_2_title') }}</h3>
        <div class="exp-container">
          <div class="left">
            <p>{{ the_field('highlight_2_text_left') }}</p>
          </div>
          <div class="right">
            <p>{{ the_field('highlight_2_text_right') }}</p>
          </div>
        </div>
      </div>
      <div class="pics regular-container">
        <img src="{{ the_field('highlight_2_img_1') }}" alt="">
        <img src="{{ the_field('highlight_2_img_2') }}" alt="">
      </div>
    </article>

    <article class="pictures">
      <div class="title-container">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Pictures</p>
        </div>
      </div>
      <div class="regular-container pictures-wrapper">
        <img src="{{ the_field('other_img_1') }}" alt="">
        <img src="{{ the_field('other_img_2') }}" alt="">
        <img src="{{ the_field('other_img_3') }}" alt="">
        <img src="{{ the_field('other_img_4') }}" alt="">
        <img src="{{ the_field('other_img_5') }}" alt="">
        <img src="{{ the_field('other_img_6') }}" alt="">
      </div>
    </article>

    <article class="recommend">
      <div class="title-container">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">オススメ</p>
        </div>
      </div>
      <div class="regular-container">
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
    </article>

    <div class="button-wrapper">
      @component('components.button')
      @slot('text')施工事例記事一覧に戻る@endslot
      @slot('url')works @endslot
      @endcomponent
    </div>
  </section>
</div>
@endsection