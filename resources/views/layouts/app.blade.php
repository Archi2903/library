<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    Icons --}}
    <script src="https://kit.fontawesome.com/c596ee7fec.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    <header>
        @include('layouts.header')
    </header>
    <main class="py-4">
        <section class="intro wrapper">
            <div class="intro-img">
                <p class="intro-text">Find Your Book <br>
                    Modern Books</p>
            </div>
            <div class="intro-contacts">
                <p><i class="fas fa-phone"></i> (000)1234</p>
                <p><i class="fas fa-map-marker-alt"></i> Voronezh, Russia</p>
            </div>
        </section>
        <section class="stats wrapper">
            <div class="stats-text">
                <h2> Our's Company'<br>Statistics</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid at commodi debitis delectus
                    deserunt dolorem dolores doloribus dolorum, ducimus expedita ipsa libero magni maiores officia quae,
                    quam quidem, rem vero voluptate?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, blanditiis debitis dolorum enim
                    facere harum id illo iusto molestiae nesciunt.</p>
            </div>
            <div class="stats-num">
                <div class="stats-line">
                    <div class="square">
                        <span class="stats-square">1233</span>
                        <span class="square-text">Books</span>
                    </div>
                    <div class="square">
                        <span class="stats-square">100</span>
                        <span class="square-text">Authors</span>
                    </div>
                </div>
                <div class="stats-line">
                    <div class="square">
                        <span class="stats-square">180</span>
                        <span class="square-text">Clients</span>
                    </div>
                    <div class="square">
                        <span class="stats-square">1</span>
                        <span class="square-text">Director</span>
                    </div>
                </div>
            </div>
        </section>
        @yield('content')
    </main>
    <footer></footer>
</div>
</body>
</html>
