 <!-- Header -->
 <header class="menu">
    <div class="menu_site_title"><a class="menu_site_title_link" href="{{ route('main.index') }}">ProSimRacing</a></div>
    <nav class="menu_nav">
        <a href="{{ route('main.category.singlecategory', ['catSlug' => 'news']) }}" class="menu_item">Новости</a>
        <a href="{{ route('main.category.singlecategory', ['catSlug' => 'articles']) }}" class="menu_item">Статьи</a>
        <a href="/category-page.html" class="menu_item">Календарь</a>
        <a href="/category-page.html" class="menu_item">О нас</a>
        @guest()
            <a href="{{ route('register') }}">Регистрация</a>
            <a href="{{ route('login') }}">Войти</a>
        @endguest()
        @auth()
            <a href="#">{{ auth()->user()->name }}</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Выйти">
            </form>
        @endauth()
    </nav>
    <div class="menu_user_section">
        <div class="menu_search">
            <span class="material-icons-outlined search-color">search</span>
        </div>
        <div class="menu_login">
            <span class="material-icons-outlined login-color">account_circle</span>
        </div>
    </div>
</header>
<!-- End Header -->