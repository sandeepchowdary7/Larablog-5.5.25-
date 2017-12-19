@extends('master')

@section('content')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
	<textarea name="message" placeholder="Enter Content here......" class="form-control" style="height:200px;"> </textarea>
	</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection