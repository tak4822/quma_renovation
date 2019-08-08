@extends('layouts.app')

@section('content')
<div class="interviews-single pages-container">
  @component('components.breadcrums')
  @slot('page')Interviews @endslot
  @slot('text'){{ the_field('subtitle') }}@endslot
  @endcomponent

  <section class="interview-head">
    <div class="head-texts">
      <div class="head">
        <div class="number">{{ the_field('number') }}</div>
        <div class="text-wrapper">
          <p class="title">{{ the_title() }}</p>
          <div class="outline">
            <p class="name">{{ the_field('place_name') }}</p>
            <div class="slash"></div>
            <p class="family">{{ the_field('family') }}</p>
            <div class="slash"></div>
            <p class="address">{{ the_field('place') }}</p>
          </div>
        </div>
      </div>

      <div class="lead-container">
        <p>{{ the_field('lead') }}</p>
      </div>
    </div>
    <div class="pic">
      <img src="{{ the_post_thumbnail_url( 'full' ) }}" alt="">
    </div>
  </section>
  <section class="interview-contents">
    <article class="article section-1">
      <div class="illust-area">
        <img src="@asset('images/interview_section_2.png')" alt="">
      </div>
      <div class="contents">
        <div class="title-container">
          <div class="number">1.</div>
          <div class="title-wrapper">
            <p class="title">{{ the_field('section_1_title') }}</p>
          </div>
        </div>
        {{ the_field('section_1_contents') }}
      </div>
    </article>
    <article class="article section-2">
      <div class="illust-area">
        <img src="@asset('images/interview_section_2.png')" alt="">
      </div>
      <div class="contents">
        <div class="title-container">
          <div class="number">2.</div>
          <div class="title-wrapper">
            <p class="title">{{ the_field('section_2_title') }}</p>
          </div>
        </div>
        {{ the_field('section_2_contents') }}
      </div>
    </article>
    <article class="article section-3">
      <div class="illust-area">
        <img src="@asset('images/interview_section_2.png')" alt="">
      </div>
      <div class="contents">
        <div class="title-container">
          <div class="number">3.</div>
          <div class="title-wrapper">
            <p class="title">{{ the_field('section_3_title') }}</p>
          </div>
        </div>
        {{ the_field('section_3_contents') }}
      </div>
    </article>
    <article class="article section-4">
      <div class="illust-area">
        <img src="@asset('images/interview_section_2.png')" alt="">
      </div>
      <div class="contents">
        <div class="title-container">
          <div class="number">4.</div>
          <div class="title-wrapper">
            <p class="title">{{ the_field('section_4_title') }}</p>
          </div>
        </div>
        {{ the_field('section_4_contents') }}
      </div>
    </article>
  </section>
  <section class="next regular-container">
    @component('components.interview-list')
    @slot('number')002 @endslot
    @slot('subtitle')アウトドア好きでアクティブな人の部屋って？@endslot
    @slot('title')ひろびろ収納と無垢フローリングの落ち着く部屋づくり@endslot
    @slot('name')F様邸 @endslot
    @slot('family')SINGLE @endslot
    @slot('address')吉祥寺 @endslot
    @slot('img')
    <img src="@asset('images/top_fake.jpg')" alt="">
    @endslot
    @endcomponent

    <div class="button-wrapper">
      @component('components.button')
      @slot('text')インタビュー記事一覧に戻る@endslot
      @slot('url')interviews @endslot
      @endcomponent
    </div>
  </section>
</div>
@endsection