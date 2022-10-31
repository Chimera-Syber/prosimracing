<div class="sidebar main-section__sidebar">
        <div class="sidebar__twitch">123</div>
        <div class="sidebar__banner main-section__sidebar-banner" data-img="{{ $bannerSidebar->getImage() }}">
            <a class="sidebar__banner-link" href="{{ $bannerSidebar->url }}">
                <div class="sidebar__banner-bg"></div>
                <div class="sidebar__info sidebar__info_position">
                    <div class="sidebar__banner-title sidebar__banner-title_position">{{ $bannerSidebar->title }}</div>
                    <div class="sidebar__banner-button sidebar__banner-button_position"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее</div>
                </div>
            </a>
        </div>
</div>