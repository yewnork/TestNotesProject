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

</head>
<body>
    <div id="dashboard">
        @yield('content')
    </div>

</body>
</html>
