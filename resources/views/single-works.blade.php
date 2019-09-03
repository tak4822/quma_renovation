@extends('layouts.app')

@section('content')
<div class="works-single pages-container">
  @component('components.breadcrums')
  @slot('page')Works @endslot
  @slot('text'){{ the_title() }}@endslot
  @slot('url')/works @endslot
  @endcomponent

  <section class="work-container">
    <div class="top wow fadeIn" data-wow-duration="2s">
      <img src="{{ the_post_thumbnail_url( 'full' ) }}" alt="">
    </div>
    <article class="outline">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Outline</p>
        </div>
      </div>
      <div class="regular-container work-contents">
        <div class="outline-list wow fadeInUp">
          <div class="left">
            <div class="list-wrapper">
              <p class="title">タイプ</p>
              <p class="text">{{ the_field('type') }}</p>
            </div>
            <div class="list-wrapper">
              <p class="title">広さ</p>
              <p class="text">{{ the_field('area') }}{{ !empty(get_field('area')) ? '㎡' : '-' }}</p>
            </div>
            <div class="list-wrapper">
              <p class="title">家族構成</p>
              <p class="text">{{ the_field('family') }}</p>
            </div>
          </div>
          <div class="right">
            <div class="list-wrapper">
              <p class="title">場所</p>
              <p class="text">{{ the_field('place') }}</p>
            </div>
            <div class="list-wrapper">
              <p class="title">築年数</p>
              <p class="text">{{ the_field('years') }}{{ !empty(get_field('years')) ? '年' : '-' }}</p>
            </div>
            {{-- <div class="list-wrapper">
              <p class="title">工事費用</p>
              <p class="text">{{ the_field('budget') }}万</p>
          </div> --}}
          <div class="list-wrapper">
            <p class="title">間取り</p>
            <p class="text">{{ the_field('structure') }}</p>
          </div>
        </div>
      </div>
    </article>

    @if( !empty(get_field('highlight_1_title')) )
    <article class="highlight">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">こだわり①</p>
        </div>
      </div>
      <div class="regular-container work-contents">
        <h3 class="title wow bit-late fadeInUp">{{ the_field('highlight_1_title') }}</h3>
        <div class="exp-container wow late fadeInUp">
          <div class="left">
            <p>{{ the_field('highlight_1_text_left') }}</p>
          </div>
          <div class="right">
            <p>{{ the_field('highlight_1_text_right') }}</p>
          </div>
        </div>
      </div>
      <div class="pics regular-container">
        <img class="wow fadeInUp" src="{{ the_field('highlight_1_img_1') }}" alt="">
        <img class="wow fadeInUp" src="{{ the_field('highlight_1_img_2') }}" alt="">
      </div>
    </article>
    @endif

    @if( !empty(get_field('highlight_2_title')) )
    <article class="highlight">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">こだわり2</p>
        </div>
      </div>
      <div class="regular-container work-contents">
        <h3 class="title wow bit-late fadeInUp">{{ the_field('highlight_2_title') }}</h3>
        <div class="exp-container wow late fadeInUp">
          <div class="left">
            <p>{{ the_field('highlight_2_text_left') }}</p>
          </div>
          <div class="right">
            <p>{{ the_field('highlight_2_text_right') }}</p>
          </div>
        </div>
      </div>
      <div class="pics regular-container">
        <img class="wow fadeInUp" src="{{ the_field('highlight_2_img_1') }}" alt="">
        <img class="wow fadeInUp" src="{{ the_field('highlight_2_img_2') }}" alt="">
      </div>
    </article>
    @endif

    <article class="pictures">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Pictures</p>
        </div>
      </div>
      <div class="regular-container pictures-wrapper">
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_1')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_1')['caption'] }}</p>
        </div>
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_2')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_2')['caption'] }}</p>
        </div>
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_3')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_3')['caption'] }}</p>
        </div>
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_4')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_4')['caption'] }}</p>
        </div>
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_5')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_5')['caption'] }}</p>
        </div>
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_6')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_6')['caption'] }}</p>
        </div>
      </div>
    </article>

    <article class="recommend">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">オススメ</p>
        </div>
      </div>
      <div class="regular-container">
        @while($works_posts_picked->have_posts()) @php($works_posts_picked->the_post())
        @component('components.work-card')
        @slot('thumb')<img src="{{ get_the_post_thumbnail_url() }}" alt="">@endslot
        @slot('link'){{ get_permalink() }}@endslot
        @slot('title'){{ get_the_title() }}@endslot
        @slot('area'){{ the_field('area') }} @endslot
        @slot('budget'){{ the_field('budget') }} @endslot
        @slot('type'){{ the_field('type') }} @endslot
        @slot('place'){{ the_field('place') }} @endslot
        @endcomponent
        @endwhile
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