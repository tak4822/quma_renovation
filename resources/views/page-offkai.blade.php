@extends('layouts.app')

@section('content')
<div class="events-inner-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')QUMAオフ会 @endslot
  @endcomponent

  <section class="events-inner">

  </section>

</div>
@endsection