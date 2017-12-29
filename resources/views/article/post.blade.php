<div class="row">

  <div class="col-md-6">

    <h2>{{$article->title}}</h2>

    {{ $article->created_at->toFormattedDateString() }}

    <p>{{$article->body}} </p>

    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

  </div>

  <div class="col-md-6">

    <h2>{{$article->title}}</h2>

    {{ $article->created_at->toFormattedDateString() }}

    <p>{{$article->body}} </p>

    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

  </div>

</div>