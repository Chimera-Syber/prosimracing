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
        <div class="post_content">
            {!! $content !!}
            <section class="comments_section">
                <a id="comments"></a>
                <span class="singlepost_comments_title">Комментарии ({{ $post->commentsCount() }})</span>

                @include('main.post.includes.comments-display', ['comments' => $post->comments, 'post_id' => $post->id])

                @auth()
                <span class="singlepost_comments_title">Добавить комментарий</span>
                    <form class="singlepost_form" method="post" action="{{ route('main.post.singlepost.comment.store', ['category' => $post->category, 'post' => $post]) }}">
                        @csrf
                        <div class="singlepost_comment_form_group">
                            <textarea class="singlepost_comment_textarea" name="comment_body" placeholder="Введите комментарий"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            @error('comment_body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="singlepost_comment_form_group">
                            <button type="submit" class="singlepost_comment_button btn-color">Отправить</button>
                        </div>
                    </form>
                @endauth()
            </section>
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

   
       
        
        
       
       
       
    