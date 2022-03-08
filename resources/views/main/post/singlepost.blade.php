@extends('layouts.main')

@section('content')

    <div class="section_content_title">
        <h1>{{ $post->title }}</h1>
    </div>
    <!-- Posts -->
    <div>{{ $post->content }}</div>

@endsection

   
       
        
        
       
       
       
    