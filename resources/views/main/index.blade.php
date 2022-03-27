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
            <a href="{{ $bannerBetweenSections->url }}" class="main_banner_link">
                <div class="main_banner_img" data-img="{{ $bannerBetweenSections->getImage() }}"></div>
                <div class="main_banner_bg"></div>
                <h1 class="main_banner_title">{{ $bannerBetweenSections->title }}</h1>
                <div class="main_banner_desc">{{ $bannerBetweenSections->subtitle }}</div>
                <div class="main_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее
                </div>
            </a>
        </div>
    </section><!-- ./main_banner -->
    @include('main.includes.coverage')

@endsection

   
       
        
        
       
       
       
    