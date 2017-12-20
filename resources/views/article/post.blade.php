<div class="row">

  <div class="col-lg-4">

    <h2>{{$post->title}}</h2>

    {{ $post->created_at->toFormattedDateString() }}

    <p>{{$post->body}} </p>

    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

  </div>

  <div class="col-lg-4">

    <h2>{{$post->title}}</h2>

    {{ $post->created_at->toFormattedDateString() }}

    <p>{{$post->body}} </p>

    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

  </div>

  <div class="col-lg-4">

    <h2>{{$post->title}}</h2>

    {{ $post->created_at->toFormattedDateString() }}

    <p>{{$post->body}}</p>

    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

  </div>

</div>