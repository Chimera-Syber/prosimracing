 <!-- Footer Section -->
 <footer class="footer">
    <div class="footer_grid">
        <div class="footer_grid_header"></div>
        <div class="footer_grid_item">
            <div class="footer_gird_item_title">Главная</div>
            <ul class="footer_grid_list">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_ONE)
                        <li><a class="grid_list_item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer_grid_item">
            <div class="footer_gird_item_title">Материалы</div>
            <ul class="footer_grid_list">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_TWO)
                        <li><a class="grid_list_item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer_grid_item">
            <div class="footer_gird_item_title">Игры</div>
            <ul class="footer_grid_list">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_THREE)
                        <li><a class="grid_list_item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer_grid_item">
            <div class="footer_gird_item_title">Календарь</div>
            <ul class="footer_grid_list">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_FOUR)
                        <li><a class="grid_list_item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer_grid_item">
            <div class="footer_gird_item_title">Социальные сети</div>
            <ul class="footer_grid_list">
                @foreach($footers as $footer)
                    @if($footer->place == Footer::PLACE_FIVE)
                        <li><a class="grid_list_item" href="{{ $footer->url }}">{{ $footer->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="copyright">prosimracing &copy; 2022</div>
        <div class="footer_links">
            <a href="#">Политики</a> | <a href="#">Поддержка</a>
        </div>
    </div>
</footer>
<!-- End Footer Section -->