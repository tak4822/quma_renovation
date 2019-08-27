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
        <img src="@asset('images/interview_article_1.jpg')" alt="">
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
        <img src="@asset('images/interview_article_2.jpg')" alt="">
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
        <img src="@asset('images/interview_article_3.jpg')" alt="">
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
        <img src="@asset('images/interview_article_4.jpg')" alt="">
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
    @php
    $next_post = get_next_post();
    if( empty( $next_post ) ) {
    $next_post = get_previous_post();
    }
    @endphp
    @component('components.interview-list')
    @slot('number') @endslot
    @slot('link'){{ get_permalink($next_post->ID) }} @endslot
    @slot('subtitle'){{ get_post_meta($next_post->ID, 'text', true) }}@endslot
    @slot('title'){{ get_the_title($next_post->ID) }}@endslot
    @slot('name'){{ get_post_meta($next_post->ID, 'place_name', true) }}@endslot
    @slot('family'){{ get_post_meta($next_post->ID, 'family', true) }} @endslot
    @slot('address'){{ get_post_meta($next_post->ID, 'address', true) }} @endslot
    @slot('img')
    <img src="{{ get_the_post_thumbnail_url($next_post->ID) }}" alt="">
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