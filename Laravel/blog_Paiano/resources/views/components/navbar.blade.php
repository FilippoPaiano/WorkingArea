        {{--Navbar--}}
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Hackademy61</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('homepage')) active @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('chi-siamo')) active @endif" href="{{route('chi-siamo')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('contattaci')) active @endif" href="{{ROUTE('contattaci')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Articles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>