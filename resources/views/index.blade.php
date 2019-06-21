@extends('layouts.app')

@section('content')
@include('layouts.front-top')
@include('layouts.front-intro')
@include('layouts.front-interviews')
@include('layouts.front-works')
@include('layouts.front-about')
@include('layouts.front-service')
@include('layouts.front-events')

{{-- @if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, no results were found.', 'sage') }}
</div>
{!! get_search_form(false) !!}
@endif --}}

{{-- @while (have_posts()) @php(the_post())
@include('partials.content-'.get_post_type())
@endwhile --}}

{!! get_the_posts_navigation() !!}
@endsection