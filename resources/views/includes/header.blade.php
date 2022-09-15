<!-- Header -->
<header class="page-header lock_padding">
    <div class="container page-header__container">
        <div class="page-header__burger page-header__burder_margin">
            <svg class="popup-nav-menu-link" id="popup-nav-menu-link" width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="23" height="3" rx="1.5" fill="white"/>
                <rect y="7" width="23" height="3" rx="1.5" fill="white"/>
                <rect y="14" width="23" height="3" rx="1.5" fill="white"/>
            </svg>
        </div>
        <div class="page-header__logo page-header__logo_position">
            <a href="{{ route('main.index') }}" class="page-header__logo-link">ProSimRacing</a>
        </div>
        <nav class="page-header__nav">ы
            <a href="{{ route('main.category.singlecategory', ['catSlug' => 'news']) }}" class="page-header__nav-item">Новости</a>
            <a href="{{ route('main.category.singlecategory', ['catSlug' => 'articles']) }}" class="page-header__nav-item">Статьи</a>
            <a href="{{ route('main.staticpages.aboutus') }}" class="page-header__nav-item">О нас</a>
        </nav>
        <div class="page-header__login-menu page-header__login-menu_margin">
            <!-- Guest Code -->
            @auth()
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
            @endauth()
        </div>
    </div>
</header>
<!-- End Header -->