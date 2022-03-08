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
                    <div class="sidebar_banner">
                        <a href="#">
                            <div class="sidebar_banner_bg"></div>
                            <div class="sidebar_banner_title">Баннер чемпионата по виртуальному автоспорту</div>
                            <div class="sidebar_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее</div>
                        </a>
                    </div>
            </div>
        </div>
        <!-- End Content wrapper-->
        <!-- Banner -->
        <section class="main_banner">
            <div class="main_banner_wrp">
                <a href="#" class="main_banner_link">
                    <div class="main_banner_img"></div>
                    <div class="main_banner_bg"></div>
                    <h1 class="main_banner_title">Баннер чемпионата по виртуальному автоспорту</h1>
                    <div class="main_banner_desc">Подзаголовок</div>
                    <div class="main_banner_button"><span class="material-icons-outlined main-banner-button-color">flag_circle</span>Подробнее
                    </div>
                </a>
            </div>
        </section><!-- ./main_banner -->
        <div class="section_content_title">
            <h1>Видео и репортажи</h1>
        </div>
        <section class="coverage_posts">
            <div class="coverage_post">
                <a href="#">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </a>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <a href="#">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_video">
                        <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                    </div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </a>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <div class="coverage_post_bg"></div>
                <div class="coverage_post_info">
                    <div class="coverage_title">Этап виртуальной формулы 1</div>
                    <div class="coverage_date">12 Января 2022 г.</div>
                </div>
                <div class="coverage_game_category">
                    <div class="coverage_game_category_img">
                        <img src="/img/game_icons/iracing.png" alt="">
                    </div>
                </div>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <div class="coverage_post_bg"></div>
                <div class="coverage_post_video">
                    <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                </div>
                <div class="coverage_post_info">
                    <div class="coverage_title">Этап виртуальной формулы 1</div>
                    <div class="coverage_date">12 Января 2022 г.</div>
                </div>
                <div class="coverage_game_category">
                    <div class="coverage_game_category_img">
                        <img src="/img/game_icons/iracing.png" alt="">
                    </div>
                </div>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <div class="coverage_post_bg"></div>
                <div class="coverage_post_info">
                    <div class="coverage_title">Этап виртуальной формулы 1</div>
                    <div class="coverage_date">12 Января 2022 г.</div>
                </div>
                <div class="coverage_game_category">
                    <div class="coverage_game_category_img">
                        <img src="/img/game_icons/iracing.png" alt="">
                    </div>
                </div>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <a href="#">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_video">
                        <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                    </div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">Этап виртуальной формулы 1</div>
                        <div class="coverage_date">12 Января 2022 г.</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            <img src="/img/game_icons/iracing.png" alt="">
                        </div>
                    </div>
                </a>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <div class="coverage_post_bg"></div>
                <div class="coverage_post_info">
                    <div class="coverage_title">Этап виртуальной формулы 1</div>
                    <div class="coverage_date">12 Января 2022 г.</div>
                </div>
                <div class="coverage_game_category">
                    <div class="coverage_game_category_img">
                        <img src="/img/game_icons/iracing.png" alt="">
                    </div>
                </div>
            </div><!-- ./coverage_post -->
            <div class="coverage_post">
                <div class="coverage_post_bg"></div>
                <div class="coverage_post_video">
                    <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                </div>
                <div class="coverage_post_info">
                    <div class="coverage_title">Этап виртуальной формулы 1</div>
                    <div class="coverage_date">12 Января 2022 г.</div>
                </div>
                <div class="coverage_game_category">
                    <div class="coverage_game_category_img">
                        <img src="/img/game_icons/iracing.png" alt="">
                    </div>
                </div>
            </div><!-- ./coverage_post -->
        </section>
    </section><!-- ./main_content -->
    <!-- End Main Content Section -->

@endsection

   
       
        
        
       
       
       
    