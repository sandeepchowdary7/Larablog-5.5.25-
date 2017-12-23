@extends('master')

@section('content')
<!-- Example row of columns -->

<div class="container">
  
    @foreach ($article as $article)

      @include('article.post')

    @endforeach

</div>

@endsection