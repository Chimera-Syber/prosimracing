@extends('layouts.main')

@section('title'){{ $category->title }}@endsection
@section('seo_description'){{ $category->seo_description }}@endsection
@section('keywords'){{ $category->seo_keywords }}@endsection
@section('og_title'){{ $category->title }}@endsection
@section('og_description'){{ $category->description }}@endsection
@section('og_image'){{ asset('assets/img/preview.jpg') }}@endsection

@section('content')

<h1 class="main-section__title main-section__title_category-margin">Категория: {{ $category->title }}</h1>

<div class="main-section__category-container">
    @csrf
    <input type="hidden" name="slug" value="{{ $slug }}">
    <div class="main-section__category-posts">

        <script>
            $(document).ready(function(){

                var _token = $('input[name="_token"]').val();
                var slug = $('input[name="slug"]').val();

                load_data('', _token, slug);



                function load_data(id="", _token, slug)
                {
                    $.ajax({
                        url:"{{ route('main.category.posts.load_more') }}",
                        method:"POST",
                        data:{id:id, _token:_token, slug:slug},
                        success:function(data)
                        {
                            $('#load_more_button').remove();
                            $('.main-section__category-posts').append(data);
                        }
                    })
                }


                $(document).on('click', '#load_more_button', function(){
                    var id = $(this).data('id');
                    $('#load_more_button').html('Загрузка...');
                    load_data(id, _token, slug);
                });

            });
        </script>
    
    </div>
    @include('main.category.includes.singlecategory-sidebar')
</div>
<!-- End Content wrapper-->

@include('main.includes.main-banner')
@include('main.includes.coverage')
    

@endsection

   
       
        
        
       
       
       
    