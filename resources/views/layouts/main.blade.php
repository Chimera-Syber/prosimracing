<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ProSimRacing Main Page</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- CSS -->
     <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body id="body" class="body">

    @include('includes.header')
    @include('includes.slider')

    <script src="{{ asset('assets/js/scripts.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>
</html>