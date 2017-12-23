@extends('master')

@section('content')

<form method="POST" action="{{ url('article')}}">

	{{ csrf_field() }}

	<div class="form-group">

		<label for="exampleInputEmail1">Title</label>

		<input type="text" class="form-control" placeholder="Enter Title" name='title'>

	</div>

	<div class="form-group">

		<label for="exampleInputPassword1">Body</label>

		<textarea name="body" placeholder="Enter Content here......" class="form-control" style="height:200px;"> </textarea>

	</div>

	<div class="form-group">

		<button type="submit" class="btn btn-primary">Publish</button>

	</div>

	@include ('partials.errors')

</form>

@endsection
