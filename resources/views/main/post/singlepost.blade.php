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
    
    <div class="singlepost-title">
        <h1 class="singlepost-title__h1 singlepost-title__h1_margin">{{ $post->title }}</h1>
    </div>
    <!-- Posts -->
    <div class="singlepost singlepost-container">
        <div class="singlepost__content singlepost__content_padding">
            {!! $content !!}
            @include('main.post.includes.author-display')
            <div class="singlepost__tags singlepost__tags_margin">{!! $tagsHTML !!}</div>
            <!-- Include comments-section -->
        </div>
        @include('main.post.includes.singlepost-sidebar')
    </div>
    @include('main.includes.main-banner')
@endsection

   
       
        
        
       
       
       
    