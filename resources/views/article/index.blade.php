@extends('master')

@section('content')
<!-- Example row of columns -->

<div class="container">
  
    @foreach ($article as $post)

      @include('article.post')

    @endforeach

</div>

@endsection