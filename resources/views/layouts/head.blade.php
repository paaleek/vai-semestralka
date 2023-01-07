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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js" integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>@yield('title', 'Ghydeout')</title>
</head>
<body>
<div class="container-fluid p-0 m-0 wrapper">
    @include('layouts.main-strip')
