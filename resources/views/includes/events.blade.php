<!-- Upcoming events -->
<section class="upcoming_events">
            <div class="upcoming_events_widget">
                <!-- Title -->
                <div class="upcoming_events_title">
                    <span>Предстоящие гонки</span>
                </div>
                <!-- End Title -->
                <!-- Nav Arrow -->
                <div class="widget_arrow" >
                    <span class="material-icons-outlined material_icons_widget_arrow" onclick="plusWidget(-1)">arrow_back_ios</span>
                </div>
                <!-- End Nav Arrow -->
                <!-- List of Events -->
                <div class="widget_container">
                    <div class="widget_list">
                        @foreach($events as $event)
                            <!-- Item -->
                            <div class="widget_item">
                                <div class="widget_race_league">{{ $event->league }}</div>
                                <div class="widget_name_race">{{ $event->title }}</div>
                                <div class="widget_info">
                                    <span class="widget_date">{{ $event->dateAsCarbon->translatedFormat('j F Y H:m') }} МСК</span>
                                    <img src="{{ $event->game->getImage() }}" height="20">
                                </div>
                            </div>
                            <!-- End Item -->
                        @endforeach
                    </div><!-- ./widget_list -->
                </div><!-- ./widget_container -->
                <!-- Nav arrow -->
                <div class="widget_arrow">
                    <span class="material-icons-outlined material_icons_widget_arrow" onclick="plusWidget(1)">arrow_forward_ios</span>
                </div>
                <!-- End Nav Arrow -->
            </div><!-- ./upcoming_events_widget -->
        </section>
        <!-- End Upcomming evets -->