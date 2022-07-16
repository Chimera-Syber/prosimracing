 <!-- Header -->
 <header class="menu">
    <div class="menu_site_title"><a class="menu_site_title_link" href="{{ route('main.index') }}">ProSimRacing</a></div>
    <nav class="menu_nav">
        <a href="{{ route('main.category.singlecategory', ['catSlug' => 'news']) }}" class="menu_item">Новости</a>
        <a href="{{ route('main.category.singlecategory', ['catSlug' => 'articles']) }}" class="menu_item">Статьи</a>
        <a href="/category-page.html" class="menu_item">Календарь</a>
        <a href="/category-page.html" class="menu_item">О нас</a>
    </nav>
    <div class="menu_user_section">
        <div class="menu_search">
            <span class="material-icons-outlined search-color">search</span>
        </div>
        <div class="menu_login">
            @guest()
                <div class="menu_main_submenu">
                    <span class="material-icons-outlined login-color">account_circle</span>
                    <a href="{{ route('login') }}" class="menu_login_link">{{ __('Login') }}</a>
                </div>
            @endguest()
            @auth()
                <div class="menu_wrp">
                    <div class="menu_main_submenu">
                        <span class="material-icons-outlined login-color">account_circle</span>
                        <a href="#" class="menu_user_name">{{ auth()->user()->name }}</a>
                    </div>
                    <div class="menu_submenu">
                        <div class="menu_submenu_item">
                            <form class="menu_user_logout" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" value="Выйти">
                            </form>
                        </div>
                    </div>
                </div>
            @endauth()
        </div>
    </div>
</header>
<!-- End Header -->