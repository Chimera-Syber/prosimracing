<!-- Slider -->
<section class="slider">
            <div class="slider_wrp">
                <ul class="slider_image_wrp">
                    @foreach($carousel as $slide)
                    <li class="slider_item">
                        <a href="{{ $slide->url }}">
                            <div data-src="{{ asset($slide->getImage()) }}" class="slider_image"></div>
                            <div class="slider_image_bg"></div>
                            <div class="slider_item_info">
                                <div class="slider_item_info_title">{{ $slide->title }}</div>
                                <div class="slider_item_info_button"><span class="material-icons-outlined icon-forward-button-slider">arrow_forward_ios</span>Подробнее</div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="slider_nav">
                    <div class="slider_nav_arrows">
                        <a class="prev" onclick="plusSlides(-1)">
                            <div class="slider_nav_arrow_left">
                                <span class="material-icons-outlined">arrow_back_ios</span>
                            </div>
                        </a>
                        <a class="next" onclick="plusSlides(1)">
                            <div class="slider_nav_arrow_right">
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
            </div>
        </section>
        <!-- End Slider -->