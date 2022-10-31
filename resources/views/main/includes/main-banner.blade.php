<section class="full-width-banner main-section__full-width-banner">    
    <a href="{{ $bannerBetweenSections->url }}" class="full-width-banner__link" data-img="{{ $bannerBetweenSections->getImage() }}">
        <div class="full-width-banner__banner_bg"></div>
        <div class="full-width-banner__text-container">
            <h2 class="full-width-banner__title">{{ $bannerBetweenSections->title }}</h2>
            <div class="full-width-banner__desc full-width-banner__desc_margin">{{ $bannerBetweenSections->subtitle }}</div>
            <div class="full-width-banner__button"><span class="material-icons-outlined full-width-banner__button-icon-color">flag_circle</span>Подробнее</div>
        </div>
    </a>
</section>