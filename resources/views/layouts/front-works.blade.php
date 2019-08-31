<section class="front-works">
  @component('components.front-section-title')
  @slot('title')どんなものを作れるの？@endslot
  @slot('sub')これまでの施工事例@endslot
  @slot('exp')十人十色の暮らしを作らせて頂いているリノベーション。QUMAが一緒に作らせて頂いた空間を紹介させてください。@endslot
  @endcomponent

  <div class="picks">
    @php($count_works_posts_picked = 0)
    @while($works_posts_picked->have_posts()) @php($works_posts_picked->the_post())
    <a href="{{ get_permalink() }}" class="pick-container {{ $count_works_posts_picked === 0 ? "first" : "second"}}">
      <div class="circle"></div>
      <div class="thumb">
        <img class="wow {{ $count_works_posts_picked === 0 ? "slideInRight" : "slideInLeft"}}" src="
          {{ get_the_post_thumbnail_url() }}" alt="">
      </div>
      <div class="contents wow late fadeIn">
        <h4 class="title">{{ get_the_title() }}</h4>
        <div class="outline">
          {{-- <p class="area">{{ the_field('area') }}㎡</p>
          <div class="divider"></div>
          <p class="budget">{{ the_field('budget') }}万円</p>
          <div class="divider"></div> --}}
          <p class="type">{{ the_field('type') }}</p>
          <p class="in">in</p>
          <p class="place">{{ the_field('place') }}</p>
        </div>
      </div>
    </a>
    @php($count_works_posts_picked++)
    @endwhile
  </div>

  <div class="slider">
    <div class="slider-wrapper wow slideInRight" data-wow-duration="2s">
      @php($count_works_posts_not_picked = 0)
      @while($works_posts_not_picked->have_posts() && $count_works_posts_not_picked < 6) @php($works_posts_not_picked->
        the_post())
        @component('components.work-card')
        @slot('thumb')<img src="{{ get_the_post_thumbnail_url() }}" alt="">@endslot
        @slot('link'){{ get_permalink() }}@endslot
        @slot('title'){{ get_the_title() }}@endslot
        @slot('area'){{ the_field('area') }} @endslot
        @slot('budget'){{ the_field('budget') }} @endslot
        @slot('type'){{ the_field('type') }} @endslot
        @slot('place'){{ the_field('place') }} @endslot
        @endcomponent
        @php($count_works_posts_not_picked++)
        @endwhile
    </div>
  </div>
  <div class="action-container">
    @component('components.button')
    @slot('text')施工事例ー記事一覧を見る@endslot
    @slot('url')works @endslot
    @endcomponent
  </div>
</section>