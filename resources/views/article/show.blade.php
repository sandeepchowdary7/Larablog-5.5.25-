@extends('master')

@section('content')
<!-- Example row of columns -->

<div class="container">

	<h1> {{ $article->title }} </h1>

	<p> {{ $article->body }} </p>

	<hr></hr>

	<div class="comment">

		<ul class="list-group"> 

			@foreach($article->comments as $comment)

			<li class="list-group-item">

				<strong>

					{{ $comment->created_at->diffForHumans()}} : &nbsp;

				</strong>

				{{ $comment->body }}

			</li>

			@endforeach

		</ul>

	</div>
	<!-- Here is comment form -->
	<hr>

	<div class="card">

		<div class="card-block">

			<form method="POST" action="{{ url ("/article/{$article->id}/comment") }}"> 
				{{ csrf_field() }}

				<div class="form-group">

					<textarea name="body" placeholder="your comment here." class="form-control">  </textarea>

				</div>

				<div class="form-group">

					<button type="submit" class="btn btn-primary">Add Comment</button>

				</div>

			</form>

		</div>

		@include('partials.errors')

	</div>
	
</div>

@endsection