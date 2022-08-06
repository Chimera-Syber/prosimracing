@extends('layouts.main')

@section('content')

<!-- Main Content Section -->
    <section class="main_content">
        <div class="section_content_title">
            <h1>{{ $category->title }}</h1>
        </div>
        <!-- Content wrapper -->
        <div class="content_wrp">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <div class="category_posts">

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
                                        $('.category_posts').append(data);
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
            
            </div><!-- ./category_posts -->
            <div class="content_sidebar">
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
    </section><!-- ./main_content -->
    <!-- End Main Content Section -->

@endsection

   
       
        
        
       
       
       
    