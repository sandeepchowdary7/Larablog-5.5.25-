<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/sandeep.jpg">

    <title>Lara-World</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="/css/justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
</br>
      <div class="masthead">
        <h2 class="text-muted">Lara-World</h2> <hr></hr>

        @include('partials.nav')

      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Welcome to Lara-World</h1>
        <p class="lead">This blog is all about Laravel stuff. Who are Epistemophile about Laravel. Welcome for you guys! I'm just Sharing my skills here. Thanks all. Work Hard n Learn more.  </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      @yield('content')

    </div> <!-- /container -->
  </body> </br>
  <div class="container">
   @include('partials.footer')
  </div>
</html>
