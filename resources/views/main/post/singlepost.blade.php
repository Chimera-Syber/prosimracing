@extends('layouts.main')

@section('content')

    <div class="section_content_title">
        <h1>{{ $post->title }}</h1>
    </div>
    <!-- Posts -->
    <div style="width: 100%;">{!! $content !!}</div>

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

   
       
        
        
       
       
       
    