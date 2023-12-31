<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm" style="border-radius: 0 0 25px 25px !important;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color: whitesmoke; font-family: 'Playfair Display', serif;font-weight: 550;">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link"  style="color: whitesmoke; font-family: 'Playfair Display', serif;font-weight: 550;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" style="color: whitesmoke; font-family: 'Playfair Display', serif;font-weight: 550;" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item" style="font-family: 'Playfair Display', serif;font-weight: 550;">
                            <a href="{{ route('indexadmin') }}" class="nav-link" style="color: whitesmoke;border-bottom:{{ Request::routeIs('indexadmin') ? '1px solid whitesmoke' : '' }};">Home</a>
                        </li>
                        <li class="nav-item" style="font-family: 'Playfair Display', serif;font-weight: 550;">
                            <a href="{{ route('aboutadmin') }}" class="nav-link" style="color: whitesmoke;border-bottom:{{ Request::routeIs('aboutadmin') ? '1px solid whitesmoke' : '' }};">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: whitesmoke;font-family: 'Playfair Display', serif;font-weight: 550;background-color: transparent;"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>