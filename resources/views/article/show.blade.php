@extends('master')

@section('content')
<!-- Example row of columns -->

<div class="container">
  
    	<h1> {{ $posts->title }} </h1>

    	<p> {{ $posts->body }} </p>

</div>

@endsection