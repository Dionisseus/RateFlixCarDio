<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RateFlix') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{!! asset('css/cascada.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/carousel.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/note.css') !!}" rel="stylesheet" type="text/css">
      <link href="{!! asset('css/review.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/carouselNetflixLike.css') !!}" rel="stylesheet" type="text/css">



    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav  class="navbar navbar-default navbar-collapse">
            <div class="container">
                <div class="navbar-header">
                  <a href="{{ url('/') }}">
                    <img src="images/rate_03.png" height="65px" alt="Responsive image" >
                  </a>



                    <!-- Branding Image -->
                    <!--
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <a class="navbar-brand text-uppercase"style="font-size:50px; color:#ff6800"  href="{{ url('/') }}" >
                        {{ config('app.name', 'RateFlix') }}
                    </a>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                              <a class="tabtab text-uppercase" href="{{ route('login') }}">
                                <strong>
                              Iniciar Sesion
                                </strong>
                              </a>
                            </li>
                            <li>
                              <a class="tabtab text-uppercase" href="{{ route('register') }}">
                              <strong>
                                Registrarse
                              </strong>
                            </a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
