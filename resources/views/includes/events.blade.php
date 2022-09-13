<!-- Upcoming events -->
<section class="upcoming-events">
    <div class="container upcoming-events__container">
        <div class="upcoming-events__title">Предстоящие гонки</div>
        <div class="upcoming-events__widget-arrow-left" >
            <span class="material-icons-outlined upcoming-events__material-icons-widget-arrow-left" onclick="plusWidget(-1)">arrow_back_ios</span>
        </div>
        <ul class="upcoming-events__widget-list">
            <div class="upcoming-events__widget-container">
                @foreach($events as $event)
                    <li class="upcoming-events__widget-item">
                        <div class="upcoming-events__widget-race-league">{{ $event->league }}</div>
                        <div class="upcoming-events__widget-name-race upcoming-events__widget-name-race_margin">{{ $event->title }}</div>
                        <div class="upcoming-events__widget-info upcoming-events__widget-info_margin">
                            <span class="upcoming-events__widget-date upcoming-events__widget-date_margin">{{ $event->dateAsCarbon->translatedFormat('j F Y H:m') }} МСК</span>
                            <img src="{{ $event->game->getImage() }}" height="20">
                        </div>
                    </li>
                @endforeach
            </div>
        </ul>
        <div class="upcoming-events__widget-arrow-right">
            <span class="material-icons-outlined material_icons_widget_arrow" onclick="plusWidget(1)">arrow_forward_ios</span>
        </div>
    </div>
</section>
<!-- End Upcomming evets -->