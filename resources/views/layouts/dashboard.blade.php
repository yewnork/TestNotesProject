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
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @include('sweet::alert')

    
    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>

</head>
<body>
    <div id="dashboard">
        <div class="container">
        @yield('headerlinks')
        @yield('content')
        </div>
    </div>

</body>
</html>
