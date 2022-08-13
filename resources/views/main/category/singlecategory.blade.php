@extends('layouts.main')

@section('content')

<h1 class="main-section__title">{{ $category->title }}</h1>

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
    <div class="main-section__sidebar">
            <div class="sidebar_twitch">123</div>
            <div class="sidebar_banner" data-img="{{ $bannerSidebar->getImage() }}">
                <a href="{{ $bannerSidebar->url }}">
                    <div class="sidebar_banner_bg"></div>
                    <div class="sidebar_banner_title">{{ $bannerSidebar->title }}</div>
                    <div class="sidebar_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее</div>
                </a>
            </div>
    </div>
</div>
<!-- End Content wrapper-->

@include('main.includes.main-banner')
@include('main.includes.coverage')
    

@endsection

   
       
        
        
       
       
       
    