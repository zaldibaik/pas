<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zaldi') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-light shadow">
            <div class="container-fluid">
              <a class="navbar-brand">Navbar</a>
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">contact</a>
                </li>
                @guest
                            @if (Route::has('login'))
                            <button class="btn btn-info btn-sm"><li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li></button>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item my-0">
                                    <button class="btn btn-info btn-sm text-black"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
