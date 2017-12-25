 <nav class="navbar navbar-light bg-faded rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-toggleable-md" id="navbarCollapse">
            <ul class="nav navbar-nav text-md-center justify-content-md-between">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Sandeep - Author info">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Laravel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PHP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
              </li>
              <li class="nav-item">
              @if(Auth::check())
                <a class="nav-link ml-auto" href="#" style="color:red;">{{ Auth::user()->name }}</a>
                <a href="{{ url('/logout') }}" class="w3-bar-item w3-button">Logout</a>
              @else
                <a class="nav-link" href="{{ url('/login')}}">Sign-In</a>
              @endif
            </li>
            </ul>
          </div>
</nav>