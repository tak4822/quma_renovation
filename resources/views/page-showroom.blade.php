@extends('layouts.app')

@section('content')
<div class="events-inner-page pages-container">

  @component('components.breadcrums')
  @slot('page')Events @endslot
  @slot('text')個別相談セミナー@endslot
  @endcomponent

  <section class="events-inner">

  </section>

</div>
@endsection