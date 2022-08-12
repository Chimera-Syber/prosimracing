@extends('layouts.main')

@section('content')

    <div class="section_content_title">
        <h1>Новости, статьи, репортажи и видео</h1>
    </div>
    <!-- Posts -->
    @csrf
    <div class="content_posts">
        
        <script>
            $(document).ready(function(){

                var _token = $('input[name="_token"]').val();

                load_data('', _token);


                function load_data(id="", _token)
                {
                    $.ajax({
                        url:"{{ route('main.index.load_more') }}",
                        method:"POST",
                        data:{id:id, _token:_token},
                        success:function(data)
                        {
                            $('#load_more_button').remove();
                            $('.content_posts').append(data);
                            showBackgrounds();
                        }
                    })
                }


                $(document).on('click', '#load_more_button', function(){
                    var id = $(this).data('id');
                    $('#load_more_button').html('Загрузка...');
                    load_data(id, _token);
                });

                

                function showBackgrounds() {
                    var postPreviewImage = document.querySelectorAll('.post_preview_image');
                    var coveragePostImage = document.querySelectorAll('.coverage_post');
                    var mainBannerImage = document.querySelector('.main_banner_img');
                    var sidebarBannerImage = document.querySelector('.sidebar_banner');

                    for (i = 0; i < postPreviewImage.length; i++) {
                        var src = postPreviewImage[i].getAttribute('data-img');
                        postPreviewImage[i].style.backgroundImage = "url('" + src + "')";
                    }

                    for (i = 0; i < coveragePostImage.length; i++) {
                        var src = coveragePostImage[i].getAttribute('data-img');
                        coveragePostImage[i].style.backgroundImage = "url('" + src + "')";
                    }

                    if (mainBannerImage != undefined) {
                        var src = mainBannerImage.getAttribute('data-img');
                        mainBannerImage.style.backgroundImage = "url('" + src + "')";
                    }

                    if (sidebarBannerImage != undefined) {
                        var src = sidebarBannerImage.getAttribute('data-img');
                        sidebarBannerImage.style.backgroundImage = "url('" + src + "')";
                    }

                }

            });
        </script>


    </div><!-- ./content_posts -->
    <!-- Banner -->
    <section class="main_banner">
        <div class="main_banner_wrp">
            <a href="{{ $bannerBetweenSections->url }}" class="main_banner_link">
                <div class="main_banner_img" data-img="{{ $bannerBetweenSections->getImage() }}"></div>
                <div class="main_banner_bg"></div>
                <h1 class="main_banner_title">{{ $bannerBetweenSections->title }}</h1>
                <div class="main_banner_desc">{{ $bannerBetweenSections->subtitle }}</div>
                <div class="main_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее
                </div>
            </a>
        </div>
    </section><!-- ./main_banner -->
    @include('main.includes.coverage')

@endsection

   
       
        
        
       
       
       
    