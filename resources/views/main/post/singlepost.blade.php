@extends('layouts.main')

@section('content')

    <div class="breadcrumbs">
        <p><a class="breadcrumbs_link" href="{{ route('main.index') }}">Главная</a> / <a class="breadcrumbs_link" href="{{ route('main.category.singlecategory', ['catSlug' => $post->category->slug]) }}">{{ $post->category->title }}</a></p>
    </div>
    
    <div class="singlepost_title">
        <h1>{{ $post->title }}</h1>
    </div>
    <!-- Posts -->
    <div class="content_wrp">
        <div class="post_content">{!! $content !!}</div>
        <div class="content_sidebar">
            <div class="sidebar_twitch">123</div>
            <div class="sidebar_banner">
                <a href="#">
                    <div class="sidebar_banner_bg"></div>
                    <div class="sidebar_banner_title">Баннер чемпионата по виртуальному автоспорту</div>
                    <div class="sidebar_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее</div>
                </a>
            </div>
        </div>
    </div>
    <div class="post_content">{!! $content2 !!}</div>
     <!-- Banner -->
     <section class="main_banner">
        <div class="main_banner_wrp">
            <a href="#" class="main_banner_link">
                <div class="main_banner_img" data-img="{{ asset('/assets/img/banners/70.jpeg') }}"></div>
                <div class="main_banner_bg"></div>
                <h1 class="main_banner_title">Баннер чемпионата по виртуальному автоспорту</h1>
                <div class="main_banner_desc">Подзаголовок</div>
                <div class="main_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее
                </div>
            </a>
        </div>
    </section><!-- ./main_banner -->
@endsection

   
       
        
        
       
       
       
    