@include('layouts.head')

<body id="body" class="body">

    @include('includes.header')
    @include('includes.slider')
    @include('includes.events')

    <main class="main-section">
        <div class="container main-section__container">
            @yield('content')
        </div>
    </main>

    @include('layouts.scripts')

    @include('includes.footer')
</body>
</html>