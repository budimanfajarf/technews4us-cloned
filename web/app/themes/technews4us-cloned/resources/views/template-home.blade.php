{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="container">
      @include('template-home.section-atf')
    </div>
  @endwhile
@endsection
