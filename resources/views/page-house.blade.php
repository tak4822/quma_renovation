@extends('layouts.app')

@section('content')
<div class="about-page pages-container">

  @component('components.breadcrums')
  @slot('page')Service @endslot
  @slot('text')どんな感じに進めるの？@endslot
  @endcomponent

  <section class="vision">
    @component('components.page-section-header')
    @slot('title')街探し・物件探しからの進め方@endslot
    @slot('sub')ご予算の中で、どんな街でどんな暮らしがしたいのかを考えて、「自分と暮らす」ためのベースとなる街と物件を一緒に探しましょう！@endslot
    @slot('img')@endslot
    @endcomponent
  </section>

</div>
@endsection