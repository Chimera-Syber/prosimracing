<div class="popup-nav-menu" id="popup-nav-menu">
    <div class="popup-nav-menu__main-menu">
        <div class="popup-nav-menu__logo-container">  
            <svg id="popup-nav-menu__burger-close" class="popup-nav-menu__burger popup-nav-menu__burger_margin" width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="23" height="3" rx="1.5" fill="black"/>
                <rect y="7" width="23" height="3" rx="1.5" fill="black"/>
                <rect y="14" width="23" height="3" rx="1.5" fill="black"/>
            </svg>
            <a href="{{ route('main.index') }}" class="popup-nav-menu__logo">ProSimRacing</a>
        </div>
        <nav class="popup-nav-menu__nav popup-nav-menu__nav_margin">
            <a href="{{ route('main.category.singlecategory', ['catSlug' => 'news']) }}" class="popup-nav-menu__nav-item">Новости</a>
            <a href="{{ route('main.category.singlecategory', ['catSlug' => 'articles']) }}" class="popup-nav-menu__nav-item">Статьи</a>
            <a href="/category-page.html" class="popup-nav-menu__nav-item">Календарь</a>
            <a href="/category-page.html" class="popup-nav-menu__nav-item">О нас</a>
        </nav>
        <div class="popup-nav-menu__separator"></div>
        <div class="popup-nav-menu__pages">
            <a href="#" class="popup-nav-menu__pages-item">Политики</a>
            <a href="#" class="popup-nav-menu__pages-item">Политики</a>
        </div>
        <div class="popup-nav-menu__separator"></div>
        <div class="popup-nav-menu__copyright">prosimracing &copy; {{ date('Y') }}</div>
    </div>
    <div class="popup-nav-menu__close" id="popup-nav-menu__close">
    </div>
</div>