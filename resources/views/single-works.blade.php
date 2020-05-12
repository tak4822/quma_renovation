@extends('layouts.app')

@section('content')
<div class="works-single pages-container">
  @component('components.breadcrums')
  @slot('page')Works @endslot
  @slot('text'){{ the_title() }}@endslot
  @slot('url')/works @endslot
  @endcomponent

  <a href="/showroom" id="cafeButton" class="cafe-button">
    <p class="text">リノベカフェに遊びに行ってみる☕</p>
  </a>

  <section class="work-container single-contents">
    <div class="top wow fadeIn" data-wow-duration="2s">
      <img src="{{ the_post_thumbnail_url( 'full' ) }}" alt="">
    </div>
    <article class="outline title-container-wrapper">
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
    <article class="highlight title-container-wrapper">
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
    <article class="highlight title-container-wrapper">
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

    <article class="pictures title-container-wrapper">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Pictures</p>
        </div>
      </div>
      <div class="regular-container pictures-wrapper">
        @if(!empty( get_field('other_img_1')['url'] ))
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_1')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_1')['caption'] }}</p>
        </div>
        @endif
        @if(!empty( get_field('other_img_2')['url'] ))
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_2')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_2')['caption'] }}</p>
        </div>
        @endif
        @if(!empty( get_field('other_img_3')['url'] ))
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_3')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_3')['caption'] }}</p>
        </div>
        @endif
        @if(!empty( get_field('other_img_4')['url'] ))
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_4')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_4')['caption'] }}</p>
        </div>
        @endif
        @if(!empty( get_field('other_img_5')['url'] ))
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_5')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_5')['caption'] }}</p>
        </div>
        @endif
        @if(!empty( get_field('other_img_6')['url'] ))
        <div class="img-wrapper wow fadeInUp">
          <img src="{{ get_field('other_img_6')['url'] }}" alt="">
          <p class="caption">{{ get_field('other_img_6')['caption'] }}</p>
        </div>
        @endif
      </div>
    </article>
  </section>
  <section>
    <div class="regular-container single-cta-container">
      {{-- <div class="sigle-event">
        <div class="wrapper wow fadeInUp">
          @component('components.event-card')
          @slot('link')/showroom @endslot
          @slot('img')
          <img class="lazyload" src="@asset('images/event_card_cafe.jpg')" alt="">
          @endslot
          @slot('text')飲む@endslot
          @endcomponent
        </div>
        <div class="wrapper wow bit-late fadeInUp">
          @component('components.event-card')
          @slot('link')/online-seminar @endslot
          @slot('img')
          <img class="lazyload" src="@asset('images/event_card-online.jpg')" alt="">
          @endslot
          @slot('text')話す@endslot
          @endcomponent
        </div>
        <div class="wrapper wow late fadeInUp">
          @component('components.event-card')
          @slot('link')/offkai @endslot
          @slot('img')
          <img class="lazyload" src="@asset('images/event_card_offkai.jpg')" alt="">
          @endslot
          @slot('text')楽しむ@endslot
          @endcomponent
        </div>
      </div> --}}

      <a href="/contact-documents" class="single-cta-color-button green wow fadeInUp cv-single-page">
        <div class="header">
          <p class="head-text">資料請求</p>
        </div>
        <p class="text">リノベーション事例集やお得なキャンペーン情報を郵送します</p>
        <div class="icon-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.75 88.75">
            <defs>
              <style>
                .cls-1 {
                  fill: #fff;
                }

              </style>
            </defs>
            <title>ico_documents</title>
            <g id="Layer_2" data-name="Layer 2">
              <g id="Layer_1-2" data-name="Layer 1">
                <path class="cls-1"
                  d="M25.19.38a2,2,0,0,0-1.1.43l-23,19a2,2,0,0,0-.71,1.57v65a2.08,2.08,0,0,0,2,2h68a2.09,2.09,0,0,0,2-2v-84a2.08,2.08,0,0,0-2-2Zm2.25,4H68.38v80h-64V23.19l29.4-5.88a2,2,0,0,0,1.54-1.47,2.07,2.07,0,0,0-.66-2C29.55,9.56,27.79,6.79,27.44,4.38ZM23.81,6.25c.75,2.51,2.47,5.06,5.35,7.91L9.47,18.09Z" />
                <path class="cls-1"
                  d="M70.38,88.75h-68A2.44,2.44,0,0,1,0,86.38v-65a2.42,2.42,0,0,1,.85-1.86l23-19A2.37,2.37,0,0,1,25.16,0H70.38a2.44,2.44,0,0,1,2.37,2.38v84A2.44,2.44,0,0,1,70.38,88.75ZM25.2.75a1.66,1.66,0,0,0-.87.35l-23,19a1.67,1.67,0,0,0-.58,1.27v65A1.71,1.71,0,0,0,2.38,88h68A1.71,1.71,0,0,0,72,86.38v-84A1.71,1.71,0,0,0,70.38.75Zm43.55,84H4V22.88l29.71-5.94A1.68,1.68,0,0,0,35,15.75a1.71,1.71,0,0,0-.54-1.65c-4.75-3.95-6.94-6.84-7.35-9.67L27,4H68.75ZM4.75,84H68V4.75H27.89c.54,2.48,2.73,5.21,7,8.77a2.43,2.43,0,0,1,.78,2.41,2.4,2.4,0,0,1-1.82,1.75L4.75,23.5ZM8.08,18.75,24,5.6l.16.54c.72,2.43,2.44,5,5.25,7.75l.5.5ZM23.63,6.89,10.86,17.43l17.54-3.5A19.84,19.84,0,0,1,23.63,6.89Z" />
              </g>
            </g>
          </svg>
        </div>
        <div class="cta-wrapper">
          <div class="single-btn">
            <p class="btn-text">資料請求する</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.197 17.264" class="single-btn-arrow">
              <path id="パス_18193" data-name="パス 18193" d="M5227.041,23432.553l8.89,7.322-8.89,7.646"
                transform="translate(-5226.063 -23431.395)" stroke-width="3" />
            </svg>
          </div>
        </div>
      </a>
      {{-- <a href="tel:0368050696" class="single-cta-color-button red wow fadeInUp cv-tel cv-single-page">
        <div class="header">
          <p class="head-text">TELEPHONE</p>
        </div>
        <p class="text">『時間がない！』という方は直接お電話ください</p>
        <div class="icon-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 17.68 17.68">
            <g id="Layer_2" data-name="Layer 2">
              <g id="Layer_1-2" data-name="Layer 1">
                <g id="noun_call_1956589" data-name="noun call 1956589">
                  <g id="パス_77" data-name="パス 77">
                    <path class="cls-1"
                      d="M12.13,10.84l-1.29,2a.4.4,0,0,1-.55.14A16.37,16.37,0,0,1,4.67,7.38a.39.39,0,0,1,.13-.55l2-1.29L4.65,1.18,1.12,2.59a17.44,17.44,0,0,0,14,14L16.5,13ZM7.71,10a15.16,15.16,0,0,0,2.66,2.13l1.27-2a.41.41,0,0,1,.53-.15l5,2.52a.4.4,0,0,1,.2.51l-1.68,4.2a.4.4,0,0,1-.45.25,18.25,18.25,0,0,1-15-15A.39.39,0,0,1,.51,2L4.71.28a.4.4,0,0,1,.51.2l2.52,5A.4.4,0,0,1,7.59,6l-2,1.27A15.54,15.54,0,0,0,7.72,10Z" />
                    <path class="cls-1"
                      d="M15.34,17.68h-.11A18.5,18.5,0,0,1,0,2.45a.68.68,0,0,1,.4-.73L4.61.05a.66.66,0,0,1,.84.32L8,5.4a.64.64,0,0,1-.23.85L5.93,7.39a15.07,15.07,0,0,0,2,2.4h0a15.56,15.56,0,0,0,2.4,2L11.43,10a.64.64,0,0,1,.85-.23l5,2.51a.66.66,0,0,1,.32.84L16,17.27A.68.68,0,0,1,15.34,17.68ZM4.86.5H4.8L.6,2.19a.16.16,0,0,0-.1.17A18,18,0,0,0,15.32,17.18a.17.17,0,0,0,.17-.1l1.68-4.2a.15.15,0,0,0-.08-.2l-5-2.52a.15.15,0,0,0-.2.06l-1.41,2.22-.21-.13a16.05,16.05,0,0,1-2.7-2.17h0A14.73,14.73,0,0,1,5.38,7.44l-.14-.21,2.22-1.4a.17.17,0,0,0,.06-.21L5,.59A.15.15,0,0,0,4.86.5ZM15.24,16.84l-.2,0A17.79,17.79,0,0,1,.87,2.63l0-.2L4.77.86,7.16,5.63,4.93,7a.17.17,0,0,0,0,.22,16.29,16.29,0,0,0,5.54,5.53.16.16,0,0,0,.21,0L12,10.51l4.78,2.39ZM1.4,2.75A17.28,17.28,0,0,0,14.93,16.27l1.25-3.13-4-2L11.05,13a.66.66,0,0,1-.89.21A16.69,16.69,0,0,1,4.45,7.51a.65.65,0,0,1,.22-.89L6.51,5.45l-2-4Z" />
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <div class="cta-wrapper">
          <p class="tel-text">03-6805-0696</p>
        </div>
      </a> --}}
    </div>

    <article class="recommend title-container-wrapper">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Pick Ups</p>
        </div>
      </div>
      <div class="regular-container others-wrapper">
        <div class="picked-container">
          @while($works_posts_picked->have_posts()) @php($works_posts_picked->the_post())
          @component('components.work-card')
          @slot('thumb')<img class="lazyload" src="{{ get_the_post_thumbnail_url(get_the_ID(), $size) }}"
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
    </article>
    <div class="button-wrapper">
      @component('components.button')
      @slot('text')施工事例記事一覧に戻る@endslot
      @slot('url')works @endslot
      @endcomponent
    </div>

    <article class="recommend title-container-wrapper">
      <div class="title-container wow slideInLeft">
        <div class="title-wrapper">
          <div class="square"></div>
          <div class="circle"></div>
          <p class="text">Interviews</p>
        </div>
      </div>
      <div class="regular-container others-wrapper">
        @php($count=0)
        @while($interviews_posts->have_posts() && $count < 2) @php($interviews_posts->the_post())
          @component('components.interview-list')
          @slot('link'){{ get_permalink() }} @endslot
          @slot('number'){{ the_field('number') }} @endslot
          @slot('subtitle'){{ the_field('subtitle') }}@endslot
          @slot('title'){{ get_the_title() }}@endslot
          @slot('name'){{ the_field('place_name') }} @endslot
          @slot('family'){{ the_field('family') }} @endslot
          @slot('address'){{ the_field('place') }} @endslot
          @slot('img')
          <img class="lazyload" src="{{ get_the_post_thumbnail_url( get_the_ID(), $size ) }}" alt="">
          @endslot
          @endcomponent
          @php($count++)
          @endwhile
      </div>
  </section>
</div>
@endsection