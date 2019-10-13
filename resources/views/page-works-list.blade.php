@php($size = App\Controllers\App::is_mobile() ? 'mobile' : 'large')

@extends('layouts.app')

@section('content')
<div class="works-page pages-container">

  {{-- @component('components.breadcrums')
  @slot('page')Works @endslot
  @slot('text')どんなものをつくれるの？@endslot
  @slot('url')@endslot
  @endcomponent --}}

  <section class="works-container">
    @component('components.page-section-header')
    @slot('type')horizontal @endslot
    @slot('title')今までの施工事例@endslot
    @slot('sub')十人十色の暮らしを作らせて頂いているリノベーション。QUMAが一緒に作らせて頂いた空間を紹介させてください。@endslot
    @slot('img')<img class="horizontal" src="@asset('images/works.jpg')" alt="">@endslot
    @endcomponent

    <div class="works-list-container regular-container">
      <div class="picked-container">
        @while($works_posts_picked->have_posts()) @php($works_posts_picked->the_post())
        @component('components.work-card')
        @slot('thumb')<img class="lazyload" src="{{ get_the_post_thumbnail_url(get_the_ID(), $size) }}" alt="">@endslot
        @slot('link'){{ get_permalink() }}@endslot
        @slot('title'){{ get_the_title() }}@endslot
        @slot('area'){{ the_field('area') }} @endslot
        @slot('budget'){{ the_field('budget') }} @endslot
        @slot('type'){{ the_field('type') }} @endslot
        @slot('place'){{ the_field('place') }} @endslot
        @endcomponent
        @endwhile
      </div>

      <div class="new-container">
        @while($works_posts_not_picked->have_posts()) @php($works_posts_not_picked->the_post())
        @component('components.work-card')
        @slot('thumb')<img class="lazyload" src="{{ get_the_post_thumbnail_url(get_the_ID(), 'small_thumb') }}"
          alt="">@endslot
        @slot('link'){{ get_permalink() }}@endslot
        @slot('title'){{ get_the_title() }}@endslot
        @slot('area'){{ the_field('area') }} @endslot
        @slot('budget'){{ the_field('budget') }} @endslot
        @slot('type'){{ the_field('type') }} @endslot
        @slot('place'){{ the_field('place') }} @endslot
        @endcomponent
        @endwhile
      </div>
    </div>
    <div class="pagenation-container">
      @php($count = $works_posts_not_picked->found_posts)
      @php(App\pagination($count))
    </div>
  </section>
</div>
@endsection