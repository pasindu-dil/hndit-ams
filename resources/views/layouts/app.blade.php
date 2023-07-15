<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js', 'resources/css/soft-ui-dashboard.min.css', 'resources/js/plugins/perfect-scrollbar.min.js', 'resources/js/soft-ui-dashboard.min.js']);
</head>

<body class="g-sidenav-show  bg-gray-100">
    <div id="app">
        <div class="container">
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        @include('layouts.navbar')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        @guest
        @else
            @include('layouts.navbar')
        @endguest

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
            @yield('content')
        </main>

        @guest
        @else
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-auto ml-lg-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <ul class="list-inline list-inline-dots mb-0">
                                        <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                                        <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source
                                        code</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                            Copyright © {{ date('Y') }} <a href=".">AMS</a>. Product by <a
                                href="https://codecalm.net" target="_blank">Dilshan Chathuranga</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
        @endguest
    </div>
</body>

</html>
