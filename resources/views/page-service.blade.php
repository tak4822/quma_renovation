@extends('layouts.app')

@section('content')
<div class="service-page pages-container">

  @component('components.breadcrums')
  @slot('page')Service @endslot
  @slot('text')どんな感じに進めるの？@endslot
  @slot('url')@endslot
  @endcomponent

  <section class="question">
    @component('components.page-section-header')
    @slot('type')@endslot
    @slot('title')リノベーションの進め方@endslot
    @slot('sub')リノベーションの始まり、物件からなのか、プランからなのか、お金からなのか、悩みはつきませんが、QUMAはどこからでもご相談させて頂きます。@endslot
    @slot('img')@endslot
    @endcomponent
  </section>
  @component('components.service-question')@endcomponent
</div>
@endsection