<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">RecapSite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('library.index')}}">Index Libraries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('library.create')}}">Insert Library</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user() ? "Welcome " . Auth::user()->name : 'Welcome Guest'}}
            </a>
            <ul class="dropdown-menu">
              @auth
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log Out</a></li>
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
              @else
              <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Log In</a></li>
              @endauth
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>