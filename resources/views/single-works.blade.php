@extends('layouts.app')

@section('content')
<div class="works-single pages-container">
  @component('components.breadcrums')
  @slot('page')Works @endslot
  @slot('text')住む人も来た人も楽しくなる家@endslot
  @endcomponent

  <section class="work-container">
    <div class="top">
      <img src="@asset('images/interview_fake.jpg')" alt="">
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
              <p class="text">中古マンション</p>
            </div>
            <div class="list-wrapper">
              <p class="title">広さ</p>
              <p class="text">69㎡</p>
            </div>
            <div class="list-wrapper">
              <p class="title">場所</p>
              <p class="text">港区元麻布</p>
            </div>
            <div class="list-wrapper">
              <p class="title">家族構成</p>
              <p class="text">３人家族</p>
            </div>
          </div>
          <div class="right">
            <div class="list-wrapper">
              <p class="title">築年数</p>
              <p class="text">39年</p>
            </div>
            <div class="list-wrapper">
              <p class="title">工事費用</p>
              <p class="text">940万</p>
            </div>
            <div class="list-wrapper">
              <p class="title">間取り</p>
              <p class="text">2LDK</p>
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
        <h3 class="title">扉を開けたときの驚き</h3>
        <div class="exp-container">
          <div class="left">
            <p>自分たちでも何度もショールームに足を運んだり、インターネットで情報を集めたり、細かいところまで検討して納得しながら進めたいという思いがあったアクティブなT様。<br />
              ご友人も多く、ご自宅に招いて一緒に食事することが好きという話から、来客の方にも玄関からリビングまでの道を楽しんでもらえる空間を目指すことに。既存の長い玄関をどうすれば印象的できるか、そして廊下とリビングをどうつなげれば綺麗な空間ができるかをじっくり話し合いました。
            </p>
          </div>
          <div class="right">
            <p>玄関ドアを開けた正面の壁にはタイルを貼った縦長のスリットを作り、テープライトを仕込むことで明るく訪れた人を迎えてくれます。<br />
              物を入れるには中途半端だった下足入れの下のスペースには、白い玉砂利を敷くことで、単調になりがちな玄関が表情のある空間になっています。また、玄関とリビングの間の建具をガラス扉にし、壁をリビング側に向かって末広がりにすることで、一番大きなリビングをさらに開放的に演出しました。
            </p>
          </div>
        </div>
      </div>
      <div class="pics regular-container">
        <img src="@asset('images/interview_fake.jpg')" alt="">
        <img src="@asset('images/interview_fake.jpg')" alt="">
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
        <h3 class="title">扉を開けたときの驚き</h3>
        <div class="exp-container">
          <div class="left">
            <p>自分たちでも何度もショールームに足を運んだり、インターネットで情報を集めたり、細かいところまで検討して納得しながら進めたいという思いがあったアクティブなT様。<br />
              ご友人も多く、ご自宅に招いて一緒に食事することが好きという話から、来客の方にも玄関からリビングまでの道を楽しんでもらえる空間を目指すことに。既存の長い玄関をどうすれば印象的できるか、そして廊下とリビングをどうつなげれば綺麗な空間ができるかをじっくり話し合いました。
            </p>
          </div>
          <div class="right">
            <p>玄関ドアを開けた正面の壁にはタイルを貼った縦長のスリットを作り、テープライトを仕込むことで明るく訪れた人を迎えてくれます。<br />
              物を入れるには中途半端だった下足入れの下のスペースには、白い玉砂利を敷くことで、単調になりがちな玄関が表情のある空間になっています。また、玄関とリビングの間の建具をガラス扉にし、壁をリビング側に向かって末広がりにすることで、一番大きなリビングをさらに開放的に演出しました。
            </p>
          </div>
        </div>
      </div>
      <div class="pics regular-container">
        <img src="@asset('images/interview_fake.jpg')" alt="">
        <img src="@asset('images/interview_fake.jpg')" alt="">
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
        <img src="@asset('images/interview_fake.jpg')" alt="">
        <img src="@asset('images/interview_fake.jpg')" alt="">
        <img src="@asset('images/interview_fake.jpg')" alt="">
        <img src="@asset('images/interview_fake.jpg')" alt="">
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