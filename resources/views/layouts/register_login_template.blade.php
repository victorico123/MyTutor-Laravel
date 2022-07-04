<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyTutor') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body class="antialiased">

    <div class='hero-header align-items-center align-content-center justify-content-center'>

            <div class="parent-landing-card " style="height: 100vh;">
                <div class="card landing-card" style="width: 70%;">
                <h3 class="card-title"><span style="color:blue">My</span><span class="tutor-text">Tutor</span></h3>
                    <div class="card-body text-dark">
                       
                        @yield('content')
                        <hr>
                        @auth
                        <a href="{{  url('/home') }}">
                            <button class="btn btn-primary">Home</button>
                        </a>
                        @else
                        <a href="{{ route('login') }}">
                            <button class="btn btn-primary">Sign In</button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button class="btn btn-primary">Sign Up</button>
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
