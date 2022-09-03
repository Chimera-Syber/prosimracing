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
        <div class="singlepost-content singlepost-content_padding">
            {!! $content !!}
            @include('main.post.includes.author-display')
            @include('main.post.includes.comments-section')
        </div>
        @include('main.post.includes.singlepost-sidebar')
    </div>
    @include('main.includes.main-banner')
@endsection

   
       
        
        
       
       
       
    