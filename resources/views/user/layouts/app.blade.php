<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DF-TSP</title>

    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!--Select-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <!--Animate-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <!--Scroll Bar-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <!--Footer-->
	<link rel="stylesheet" href="css/footer-basic-centered.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <b>DF</b>-TSP
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="nav-link" href="{{ url('/') }}">{{ __('Beranda') }}</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Informasi <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('kadar-air-tanah')}}" onclick="">
                                        {{ __('Kadar Air Tanah (M)') }}
                                    </a>
                                    <a class="dropdown-item" href="{{url('kecepatan-angin')}}" onclick="">
                                        {{ __('Kecepatan Angin (V)') }}
                                    </a>
                                    <a class="dropdown-item" href="{{url('klasifikasi-tanah')}}" onclick="">
                                        {{ __('Klasifikasi Tanah') }}
                                    </a>
                                    <a class="dropdown-item" href="{{url('persamaan')}}" onclick="">
                                        {{ __('Persamaan E') }}
                                    </a>
                                    <a class="dropdown-item" href="{{url('tutupan-lahan')}}" onclick="">
                                        {{ __('Tutupan Lahan (L)') }}
                                    </a>
                                    <a class="dropdown-item" href="{{url('contoh-perhitungan')}}" onclick="">
                                        {{ __('Contoh Perhitungan') }}
                                    </a>
                                </div>
                            </li>

                            <li><a class="nav-link" href="{{url('about')}}">{{__('About')}}</a></li>
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <!-- <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            <footer class="footer-basic-centered">
                @include('user.backend.footer')
            </footer>
        </main>
    </div>
</body>
</html>
