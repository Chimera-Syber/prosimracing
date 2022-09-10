 <!-- Popups -->
 @include('includes.popups')
 <!-- Footer Section -->
 <footer class="footer">
    <div class="container footer__container">
        <div class="footer__grid-header"></div>
        <div class="footer__grid-item">
            <div class="footer__gird-item-title">Главная</div>
            <ul class="footer__grid-list footer__grid-list_padding">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_ONE)
                        <li><a class="footer__grid-list-item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer__grid-item">
            <div class="footer__gird-item-title">Материалы</div>
            <ul class="footer__grid-list footer__grid-list_padding">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_TWO)
                        <li><a class="footer__grid-list-item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer__grid-item">
            <div class="footer__gird-item-title">Игры</div>
            <ul class="footer__grid-list footer__grid-list_padding">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_THREE)
                        <li><a class="footer__grid-list-item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer__grid-item">
            <div class="footer__gird-item-title">Календарь</div>
            <ul class="footer__grid-list footer__grid-list_padding">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_FOUR)
                        <li><a class="footer__grid-list-item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer__grid-item">
            <div class="footer__gird-item-title">Социальные сети</div>
            <ul class="footer__grid-list footer__grid-list_padding">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_FIVE)
                        <li><a class="footer__grid-list-item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="container footer__copyright-container">
        <div class="footer__copyright footer__copyright_margin">prosimracing &copy; {{ date('Y') }}</div>
        <div class="footer__links footer__links_margin">
            <a class="footer__link" href="#">Политики</a> | <a class="footer__link" href="#">Поддержка</a>
        </div>
    </div>
</footer>
<!-- End Footer Section -->