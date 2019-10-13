@php($size = App\Controllers\App::is_mobile() ? 'mobile' : 'large')

@extends('layouts.app')

@section('content')
<div class="interviews-page pages-container">

  @component('components.breadcrums')
  @slot('page')Interviews @endslot
  @slot('text')リノベ、どうでした？@endslot
  @slot('url')@endslot
  @endcomponent

  <section class="interviews-container">
    @component('components.page-section-header')
    @slot('type')horizontal @endslot
    @slot('title')リノベ体験インタビュー@endslot
    @slot('sub')QUMAで住まいつくりのお手伝いをさせて頂いた方々に、QUMAとのリノベーションの感想を包み隠さずお話しして頂きました。参考になる話があるかも！？@endslot
    @slot('img')
    <img class="horizontal" src="@asset('images/interview.jpg')" alt="">
    @endslot
    @endcomponent

    <div class="interviews-list regular-container">
      @while($interviews_posts->have_posts()) @php($interviews_posts->the_post())
      @component('components.interview-list')
      @slot('link'){{ get_permalink() }} @endslot
      @slot('number'){{ the_field('number') }} @endslot
      @slot('subtitle'){{ the_field('subtitle') }}@endslot
      @slot('title'){{ get_the_title() }}@endslot
      @slot('name'){{ the_field('place_name') }} @endslot
      @slot('family'){{ the_field('family') }} @endslot
      @slot('address'){{ the_field('place') }} @endslot
      @slot('img')
      <img class="lazyload" src="{{ get_the_post_thumbnail_url(get_the_ID(), $size) }}" alt="">
      @endslot
      @endcomponent
      @endwhile
    </div>

    <div class="pagenation-container">
      @php($count = $interviews_posts->found_posts)
      @php(App\pagination($count))
    </div>
  </section>

</div>
@endsection