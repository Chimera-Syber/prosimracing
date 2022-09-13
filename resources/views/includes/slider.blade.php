<!-- Slider -->
<section class="slider">
    <div class="container slider__container">
        <div class="slider__list">
            <div class="slider__sliders-wrp">
            @foreach($carousel as $slide)
           
                <a href="{{ $slide->url }}" class="slider__item" id="slide-{{ $loop->iteration }}">
                    <div class="slider__image-bg"></div>
                    <div data-src="{{ asset($slide->getImage()) }}" class="slider__image" id="slide-image-{{ $loop->iteration }}"></div>
                    <div class="slider__item-info">
                        <div class="slider__item-info-title">{{ $slide->title }}</div>
                        <div class="slider__item-info-button"><span class="material-icons-outlined slider__icon-forward-button-slider">arrow_forward_ios</span>Подробнее</div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
        <div class="slider__nav-arrows">
            <a class="slider__prev-link" onclick="plusSlides(-1)">
                <div class="slider__nav-arrow-left">
                    <span class="material-icons-outlined slider__nav-arrow-icon_color">arrow_back_ios</span>
                </div>
            </a>
            <a class="slider__next-link" onclick="plusSlides(1)">
                <div class="slider__nav-arrow-right">
                    <span class="material-icons-outlined slider__nav-arrow-icon_color">arrow_forward_ios</span>
                </div>
            </a>
        </div>
        <div class="slider__nav-dots">
            <div class="slider__nav-dot" onclick="currentSlide(1)"></div>
            <div class="slider__nav-dot" onclick="currentSlide(2)"></div>
            <div class="slider__nav-dot" onclick="currentSlide(3)"></div>
            <div class="slider__nav-dot" onclick="currentSlide(4)"></div>
        </div>
    </div>
</section>
<!-- End Slider -->