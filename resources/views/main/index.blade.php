<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProSimRacing Main Page</title>
    <!-- CSS -->
    <link href="assets/css/app.css" rel="stylesheet">
    <!-- End CSS -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- End Google Fonts -->

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- End Google Icons -->
</head>
<body id="body" class="body preload">
    <!-- Main Container -->
    <div class="container">
        <!-- Header -->
        <header class="menu">
            <div class="menu_site_title">ProSimRacing</div>
            <nav class="menu_nav">
                <a href="/category-page.html" class="menu_item">Новости</a>
                <a href="/category-page.html" class="menu_item">Статьи</a>
                <a href="/category-page.html" class="menu_item">Календарь</a>
                <a href="/category-page.html" class="menu_item">О нас</a>
            </nav>
            <div class="menu_user_section">
                <div class="menu_search">
                    <span class="material-icons-outlined search-color">search</span>
                </div>
                <div class="menu_login">
                    <span class="material-icons-outlined login-color">account_circle</span>
                </div>
            </div>
        </header>
        <!-- End Header -->
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
        <!-- Main Content Section -->
        <section class="main_content">
            <div class="section_content_title">
                <h1>Новости, статьи, репортажи и видео</h1>
            </div>
            <!-- Posts -->
            <div class="content_posts">
                <!-- Post -->
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div><!-- ./post_preview_image -->
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div><!-- ./post_info_wrp -->
                </div><!-- ./content_post -->
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="content_post">
                    <div class="post_preview_image" data-img="./assets/img/posts/01.png">
                        <div class="post_game_category_wrp">
                            <div class="post_game_category">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                        <div class="post_category_wrp">
                            <div class="post_category">
                                <span>Новости</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_info_wrp">
                        <div class="post_info_title">
                            <span>Название статьи или материала</span>
                        </div>
                        <div class="post_info_desc">
                            <span>Идейные соображения высшего порядка, а также новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений.</span>
                        </div>
                        <div class="post_info_date_and_link">
                            <span class="post_date">18 Января 2022 г.</span>
                            <a href="" class="post_link">Читать далее</a>
                        </div>
                    </div>
                </div><!-- ./content_post -->
            </div><!-- ./content_posts -->
            <!-- Banner -->
            <section class="main_banner">
                <div class="main_banner_wrp">
                    <a href="#" class="main_banner_link">
                        <div class="main_banner_img" data-img="./assets/img/banners/70.jpeg"></div>
                        <div class="main_banner_bg"></div>
                        <h1 class="main_banner_title">Баннер чемпионата по виртуальному автоспорту</h1>
                        <div class="main_banner_desc">Подзаголовок</div>
                        <div class="main_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее
                        </div>
                    </a>
                </div>
            </section><!-- ./main_banner -->
            <div class="section_content_title">
                <h1>Видео и репортажи</h1>
            </div>
            <section class="coverage_posts">
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <a href="#">
                        <div class="coverage_post_bg"></div>
                        <div class="coverage_post_info">
                            <div class="coverage_title">Этап виртуальной формулы 1</div>
                            <div class="coverage_date">12 Января 2022 г.</div>
                        </div>
                        <div class="coverage_game_category">
                            <div class="coverage_game_category_img">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                    </a>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <a href="#">
                        <div class="coverage_post_bg"></div>
                        <div class="coverage_post_video">
                            <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                        </div>
                        <div class="coverage_post_info">
                            <div class="coverage_title">Этап виртуальной формулы 1</div>
                            <div class="coverage_date">12 Января 2022 г.</div>
                        </div>
                        <div class="coverage_game_category">
                            <div class="coverage_game_category_img">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                    </a>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="./assets/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_video">
                        <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                    </div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="./assets/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="./assets/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <a href="#">
                        <div class="coverage_post_bg"></div>
                        <div class="coverage_post_video">
                            <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                        </div>
                        <div class="coverage_post_info">
                            <div class="coverage_title">Этап виртуальной формулы 1</div>
                            <div class="coverage_date">12 Января 2022 г.</div>
                        </div>
                        <div class="coverage_game_category">
                            <div class="coverage_game_category_img">
                                <img src="./assets/img/game_icons/iracing.png" alt="">
                            </div>
                        </div>
                    </a>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="./assets/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </div><!-- ./coverage_post -->
                <div class="coverage_post" data-img="./assets/img/slider/img1.png">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_video">
                        <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                    </div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="./assets/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </div><!-- ./coverage_post -->
            </section>
        </section><!-- ./main_content -->
        <!-- End Main Content Section -->
        <!-- Footer Section -->
        <footer class="footer">
            <div class="footer_grid">
                <div class="footer_grid_header"></div>
                <div class="footer_grid_item">
                    <div class="footer_gird_item_title">Главная</div>
                    <ul class="footer_grid_list">
                        <li><a class="grid_list_item" href="#">О нас</a></li>
                        <li><a class="grid_list_item" href="#">Контакты</a></li>
                        <li><a class="grid_list_item" href="#">Для прессы</a></li>
                    </ul>
                </div>
                <div class="footer_grid_item">
                    <div class="footer_gird_item_title">Материалы</div>
                    <ul class="footer_grid_list">
                        <li><a class="grid_list_item" href="#">Новости</a></li>
                        <li><a class="grid_list_item" href="#">Статьи</a></li>
                        <li><a class="grid_list_item" href="#">Руководства</a></li>
                    </ul>
                </div>
                <div class="footer_grid_item">
                    <div class="footer_gird_item_title">Игры</div>
                    <ul class="footer_grid_list">
                        <li><a class="grid_list_item" href="#">iracing</a></li>
                        <li><a class="grid_list_item" href="#">acc</a></li>
                        <li><a class="grid_list_item" href="#">raceroom</a></li>
                        <li><a class="grid_list_item" href="#">f1</a></li>
                    </ul>
                </div>
                <div class="footer_grid_item">
                    <div class="footer_gird_item_title">Календарь</div>
                    <ul class="footer_grid_list">
                        <li><a class="grid_list_item" href="#">предстоящие события</a></li>
                        <li><a class="grid_list_item" href="#">текущие события</a></li>
                        <li><a class="grid_list_item" href="#">прошедшие события</a></li>
                    </ul>
                </div>
                <div class="footer_grid_item">
                    <div class="footer_gird_item_title">Социальные сети</div>
                    <ul class="footer_grid_list">
                        <li><a class="grid_list_item" href="#">Youtube</a></li>
                        <li><a class="grid_list_item" href="#">VK</a></li>
                        <li><a class="grid_list_item" href="#">Facebook</a></li>
                        <li><a class="grid_list_item" href="#">Telegram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="copyright">prosimracing &copy; 2021</div>
                <div class="footer_links">
                    <a href="#">Политики</a> | <a href="#">Поддержка</a>
                </div>
            </div>
        </footer>
        <!-- End Footer Section -->
    </div>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- PAGE SCRIPTS -->
    <!-- Script for cancel start animation on loadin page -->
    <script>
        $(document).ready(function() {
            $("#body").removeClass("preload");
        });
    </script>
    <!-- End Main Container -->
    <script src="./assets/js/scripts.js" defer></script>
    <script src="./assets/js/app.js" defer></script>
</body>
</html>
