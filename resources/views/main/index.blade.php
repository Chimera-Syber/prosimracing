@extends('layouts.main')

@section('content')

    <div class="section_content_title">
        <h1>Новости, статьи, репортажи и видео</h1>
    </div>
    <!-- Posts -->
    <div class="content_posts">
        @foreach($posts as $post)
            <!-- Single Post -->
            <div class="content_post">
                <div class="post_preview_image" data-img="{{ $post->getImage() }}">
                    <div class="post_game_category_wrp">
                        <div class="post_game_category">       
                            @foreach($post->games as $game)
                                <img width="22" src="{{ $game->getImage() }}" alt="{{ $game->title }}">
                            @endforeach
                        </div>
                    </div>
                    <div class="post_category_wrp">
                        <div class="post_category">
                            <span>{{ $post->category->title }}</span>
                        </div>
                    </div>
                </div><!-- ./post_preview_image -->
                <div class="post_info_wrp">
                    <a href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}">
                        <div class="post_info_title">
                            <span>{{ $post->title }}</span>
                        </div>
                        <div class="post_info_desc">
                            <span>{{ $post->description }}</span>
                        </div>
                    </a>
                    <div class="post_info_date_and_link">
                        <span class="post_date">{{ $post->dateAsCarbon->translatedFormat('j F Y') }}</span>
                        <a href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}" class="post_link">Читать далее</a>
                    </div>
                </div><!-- ./post_info_wrp -->
            </div><!-- ./content_post -->
            <!-- ./ Single Post -->
        @endforeach
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

@endsection

   
       
        
        
       
       
       
    