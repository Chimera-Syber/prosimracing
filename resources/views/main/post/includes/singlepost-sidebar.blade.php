<div class="sidebar singlepost__sidebar">
    <div class="sidebar__discord sidebar__discord_margin"><iframe src="https://discord.com/widget?id=777325043671629835&theme=dark" width="280" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe></div>
    <div class="sidebar__banner singlepost__banner" data-img="{{ $bannerSidebar->getImage() }}">
        <a href="{{ $bannerSidebar->url }}" class="sidebar__banner-link">
            <div class="sidebar__banner-bg"></div>
            <div class="sidebar__info sidebar__info_position">
                <div class="sidebar__banner-title sidebar__banner-title_position">{{ $bannerSidebar->title }}</div>
                <div class="sidebar__banner-button sidebar__banner-button_position"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее</div>
            </div>
        </a>
    </div>
</div>