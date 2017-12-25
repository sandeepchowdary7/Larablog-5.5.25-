@extends('master')

@section('content')

<form method="POST" action="{{ url('/login')}}">

	{{ csrf_field() }}

	<div class="form-group">

		<label for="Email">Email</label>

		<input type="email" class="form-control" placeholder="Email" name='email' required>

	</div>

	<div class="form-group">

		<label for="password">Password</label>

		<input type="password" class="form-control" placeholder="password" name='password' required>

	</div>

	<div class="form-group">

		<button type="submit" class="btn btn-primary">Sign In</button>

	</div>

	@include ('partials.errors')

</form>

@endsection
