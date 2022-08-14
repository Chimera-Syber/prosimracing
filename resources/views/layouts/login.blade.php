<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ProSimRacing Login Page</title>

   <!-- CSS -->
   <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- End Google Icons -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- End JQuery -->
</head>
<body id="body" class="body">
    <header id="app" class="page-header login__header">
        <div class="container page-header__container">
            <div class="page-header__logo page-header__logo_position">
                <a href="{{ route('main.index') }}" class="page-header__logo-link">
                    {{ config('app.name', 'ProSimRacing') }}
                </a>
            </div>
            <nav class="page-header__nav">

                @guest
                    @if (Route::has('login'))
                        
                            <a class="page-header__nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        
                    @endif

                    @if (Route::has('register'))
                        
                            <a class="page-header__nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        
                    @endif
                @else
                    <div class="page-header__login-menu-item">
                        <button class="page-header__user-name">
                            <svg class="page-header__login-icon" width="28" height="28" viewBox="0 0 28 28" fill="#828282" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 0.666687C6.64002 0.666687 0.666687 6.64002 0.666687 14C0.666687 21.36 6.64002 27.3334 14 27.3334C21.36 27.3334 27.3334 21.36 27.3334 14C27.3334 6.64002 21.36 0.666687 14 0.666687ZM14 4.66669C16.2134 4.66669 18 6.45335 18 8.66669C18 10.88 16.2134 12.6667 14 12.6667C11.7867 12.6667 10 10.88 10 8.66669C10 6.45335 11.7867 4.66669 14 4.66669ZM14 23.6C10.6667 23.6 7.72002 21.8934 6.00002 19.3067C6.04002 16.6534 11.3334 15.2 14 15.2C16.6534 15.2 21.96 16.6534 22 19.3067C20.28 21.8934 17.3334 23.6 14 23.6Z" fill="#828282"/>
                            </svg>
                            {{ auth()->user()->name }}
                        </button>
                        <div class="page-header__login-submenu">
                            <div class="page-header__login-submenu-item">
                                <form class="page-header__logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input class="page-header__logout-form-input" type="submit" value="Выйти">
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest  
            </nav>
        </div>
    </header>
    <main class="login__main-section login__main-section_padding">
        <div class="container login__container">
            @yield('content')
        </div>
    </main>
</body>
</html>
