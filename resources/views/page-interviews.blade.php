@extends('layouts.app')

@section('content')
<div class="interviews-page pages-container">

  @component('components.breadcrums')
  @slot('page')Interviews @endslot
  @slot('text')リノベ、どうでした？@endslot
  @endcomponent

  <section class="interviews-container">
    @component('components.page-section-header')
    @slot('title')リノベ体験インタビュー@endslot
    @slot('sub')QUMAで住まいつくりのお手伝いをさせて頂いた方々に、QUMAとのリノベーションの感想を包み隠さずお話しして頂きました。参考になる話があるかも！？@endslot
    @slot('img')
    <img class="horizontal" src="@asset('images/interview.jpg')" alt="">
    @endslot
    @endcomponent

    <div class="interviews-list regular-container">

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

      @component('components.interview-list')
      @slot('number')001 @endslot
      @slot('subtitle')アウトドア好きでアクティブな人の部屋って？@endslot
      @slot('title')ひろびろ収納と無垢フローリングの落ち着く部屋づくり@endslot
      @slot('name')F様邸 @endslot
      @slot('family')SINGLE @endslot
      @slot('address')吉祥寺 @endslot
      @slot('img')
      <img src="@asset('images/top_fake.jpg')" alt="">
      @endslot
      @endcomponent
    </div>

    @component('components.pagenation')@endcomponent
  </section>

</div>
@endsection