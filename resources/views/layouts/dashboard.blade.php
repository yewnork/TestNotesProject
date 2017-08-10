<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test Notes App</title>

    {!! MaterializeCSS::include_full() !!}
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @include('sweet::alert')


    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>

    <style type="text/css">
        body{
            /*font-size: 200%;*/
        }

    </style>

</head>
<body>
    <div id="dashboard">
        <div class="container">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Test Notes App</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                @if (Auth::check())
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                @else
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                @endif
                
            </div>
        </nav>
        @yield('content')
        </div>
    </div>

</body>
</html>
