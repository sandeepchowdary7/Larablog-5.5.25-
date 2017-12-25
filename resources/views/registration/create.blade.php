@extends('master')

@section('content')

<form method="POST" action="{{ url('register')}}">

	{{ csrf_field() }}

	<div class="form-group">

		<label for="name">Name</label>

		<input type="text" class="form-control" placeholder="Enter Name" name='name' required>
	</div>

	<div class="form-group">

		<label for="Email">Email</label>

		<input type="email" class="form-control" placeholder="Email" name='email' required>

	</div>

	<div class="form-group">

		<label for="password">Password</label>

		<input type="password" class="form-control" placeholder="password" name='password' required>

	</div>

	<div class="form-group">

		<label for="password_confirmation">Re-enter Password</label>

		<input type="password" class="form-control" placeholder="Re-enter Password" name='password_confirmation' required>

	</div>

	<div class="form-group">

		<button type="submit" class="btn btn-primary">Register</button>

	</div>

	@include ('partials.errors')

</form>

@endsection
