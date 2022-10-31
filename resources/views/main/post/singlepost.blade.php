@extends('layouts.singlepost')

@section('title'){{ $post->title }}@endsection
@section('seo_description'){{ $post->seo_description }}@endsection
@section('keywords'){{ $post->seo_keywords }}@endsection
@section('og_title'){{ $post->title }}@endsection
@section('og_description'){{ $post->description }}@endsection
@section('og_image'){{ $post->getImage() }}@endsection

@section('content')

    <div class="breadcrumbs">
        <p class="breadcrums__par breadcrums__par_padding">
            <a class="breadcrumbs__link" href="{{ route('main.index') }}">Главная</a> / <a class="breadcrumbs__link" href="{{ route('main.category.singlecategory', ['catSlug' => $post->category->slug]) }}">{{ $post->category->title }}</a>
        </p>
    </div>
    
    <div class="singlepost__title">
        <h1 class="singlepost__title-h1 singlepost__title-h1_margin-padding">{{ $post->title }}</h1>
    </div>
    <!-- Posts -->
    <div class="singlepost singlepost-container">
        <div class="singlepost__content singlepost__content_padding">
            <div class="singlepost__wrapper singlepost__wrapper_margin">
                <div class="singlepost__post-games">
                    <span class="singlepost__post-games-title">Игра: </span>
                    {!! $gamesIcon !!}
                </div>
                <span class="singlepost__post-date">{!! $post->dateAsCarbon->translatedFormat("j F Y") !!}</span>
            </div>
            {!! $content !!}
            <div class="singlepost__separator"></div>
            <div class="singlepost__wrapper singlepost__wrapper_source-views">
                @isset($post->source_link)
                    <div class="singlepost__source">Источник: <a class="singlepost__source-link" href="{{ $post->source_link }}">
                        @isset($post->source_name){{ $post->source_name }}@endisset
                        @empty($post->source_name){{ $post->source_link }}@endempty</a></div>
                @endisset
                <div class="singlepost__views">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.9201 7.6C18.9001 2.91 15.1001 0 11.0001 0C6.90007 0 3.10007 2.91 1.08007 7.6C1.025 7.72617 0.996582 7.86234 0.996582 8C0.996582 8.13766 1.025 8.27383 1.08007 8.4C3.10007 13.09 6.90007 16 11.0001 16C15.1001 16 18.9001 13.09 20.9201 8.4C20.9751 8.27383 21.0036 8.13766 21.0036 8C21.0036 7.86234 20.9751 7.72617 20.9201 7.6V7.6ZM11.0001 14C7.83007 14 4.83007 11.71 3.10007 8C4.83007 4.29 7.83007 2 11.0001 2C14.1701 2 17.1701 4.29 18.9001 8C17.1701 11.71 14.1701 14 11.0001 14V14ZM11.0001 4C10.2089 4 9.43558 4.2346 8.77779 4.67412C8.11999 5.11365 7.6073 5.73836 7.30455 6.46927C7.0018 7.20017 6.92258 8.00444 7.07693 8.78036C7.23127 9.55629 7.61223 10.269 8.17164 10.8284C8.73105 11.3878 9.44378 11.7688 10.2197 11.9231C10.9956 12.0775 11.7999 11.9983 12.5308 11.6955C13.2617 11.3928 13.8864 10.8801 14.3259 10.2223C14.7655 9.56448 15.0001 8.79113 15.0001 8C15.0001 6.93913 14.5786 5.92172 13.8285 5.17157C13.0783 4.42143 12.0609 4 11.0001 4V4ZM11.0001 10C10.6045 10 10.2178 9.8827 9.88893 9.66294C9.56003 9.44318 9.30368 9.13082 9.15231 8.76537C9.00093 8.39991 8.96133 7.99778 9.0385 7.60982C9.11567 7.22186 9.30615 6.86549 9.58585 6.58579C9.86556 6.30608 10.2219 6.1156 10.6099 6.03843C10.9978 5.96126 11.4 6.00087 11.7654 6.15224C12.1309 6.30362 12.4432 6.55996 12.663 6.88886C12.8828 7.21776 13.0001 7.60444 13.0001 8C13.0001 8.53043 12.7894 9.03914 12.4143 9.41421C12.0392 9.78929 11.5305 10 11.0001 10Z" fill="#817979"/>
                    </svg>

                    {{ $post->views }}
                </div>
            </div>
            @include('main.post.includes.author-display')
            <div class="singlepost__tags singlepost__tags_margin">{!! $tagsHTML !!}</div>
            <!-- Include comments-section -->
        </div>
        @include('main.post.includes.singlepost-sidebar')
    </div>
    @include('main.includes.main-banner')
@endsection

   
       
        
        
       
       
       
    