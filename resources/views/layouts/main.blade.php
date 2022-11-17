<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap|Comfortaa|Major+Mono+Display|Source+Code+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ @asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ @asset('css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ @asset('css/style.css') }}">

    <script src="{{ @asset('js/main.js') }}"></script>

    <title>@yield('title', 'Ghydeout')</title>
</head>
<body>
<div class="container-fluid p-0 m-0 wrapper">


    @include('layouts._menu')

    @yield('content')
</div>
<div class="push p-0 m-0"></div>
    <footer class="w-100 p-0 footer">Pavol Galčík || 2022-2023</footer>
</body>
{{--    <script src="//cdn.ckeditor.com/4.13.1/basic/ckeditor.js"></script> <!-- textovy editor-->--}}

{{--    <script>--}}
{{--        CKEDITOR.replace( 'editor1' );--}}
{{--    </script>--}}


    <script src="{{ @asset('js/wow.min.js') }}"></script>

    <script>
        new WOW().init();
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
