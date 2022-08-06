<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ProSimRacing Main Page</title>
    <!-- CSS -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- End Google Fonts -->

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- End Google Icons -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body id="body" class="body preload">
     <!-- Main Container -->
     <div class="container">

        @include('includes.header')
        @include('includes.slider')
        @include('includes.events')

        <!-- Main Content Section -->
        <section class="main_content">
            @yield('content')
        </section><!-- ./main_content -->
        <!-- End Main Content Section -->

        @include('includes.footer')
    
    </div>

    <!-- PAGE SCRIPTS -->
    <!-- Script for cancel start animation on loadin page -->
    <script>
        $(document).ready(function() {
            $("#body").removeClass("preload");
        });

        // For comments reply form
        $('.replybutton').click(function() {
            $(this).next('.reply').toggle();
        });
    </script>
    <!-- End Main Container -->
    <script src="{{ asset('assets/js/scripts.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>
</html>
