@extends('layouts.main')

@section('content')

    <div class="breadcrumbs">
        <p class="breadcrums__par breadcrums__par_padding">
            <a class="breadcrumbs__link" href="{{ route('main.index') }}">Главная</a> / <a class="breadcrumbs__link" href="{{ route('main.category.singlecategory', ['catSlug' => $post->category->slug]) }}">{{ $post->category->title }}</a>
        </p>
    </div>
    
    <div class="singlepost-title">
        <h1 class="singlepost-title__h1 singlepost-title__h1_margin">{{ $post->title }}</h1>
    </div>
    <!-- Posts -->
    <div class="singlepost singlepost-container">
        <div class="singlepost-content">
            {!! $content !!}
            @include('main.post.includes.comments-section')
        </div>
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
    @include('main.includes.main-banner')
@endsection

   
       
        
        
       
       
       
    