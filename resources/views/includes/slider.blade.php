<!-- Slider -->
<section class="slider">
    <div class="container slider__container">
        <div class="slider__list">
            @foreach($carousel as $slide)
           
                <a href="{{ $slide->url }}" class="slider__item">
                    <div class="slider__image-bg"></div>
                    <div data-src="{{ asset($slide->getImage()) }}" class="slider__image"></div>
                    <div class="slider__item_info">
                        <div class="slider__item_info_title">{{ $slide->title }}</div>
                        <div class="slider__item_info_button"><span class="material-icons-outlined icon-forward-button-slider">arrow_forward_ios</span>Подробнее</div>
                    </div>
                </a>
            
            @endforeach
        </div>
        <div class="slider__nav-arrows">
            <a class="prev" onclick="plusSlides(-1)">
                <div class="slider__nav-arrow-left">
                    <span class="material-icons-outlined">arrow_back_ios</span>
                </div>
            </a>
            <a class="next" onclick="plusSlides(1)">
                <div class="slider__nav-arrow-right">
                    <span class="material-icons-outlined">arrow_forward_ios</span>
                </div>
            </a>
        </div>
        <div class="slider_nav_dots">
            <div class="slider_nav_dot" onclick="currentSlide(1)"></div>
            <div class="slider_nav_dot" onclick="currentSlide(2)"></div>
            <div class="slider_nav_dot" onclick="currentSlide(3)"></div>
            <div class="slider_nav_dot" onclick="currentSlide(4)"></div>
        </div>
    </div>
</section>
<!-- End Slider -->