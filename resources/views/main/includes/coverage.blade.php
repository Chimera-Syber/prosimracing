<div class="section_content_title">
    <h1>Видео и репортажи</h1>
</div>
<section class="coverage_posts">
    @foreach($specialPosts as $post)
        @if($post->category_id == Category::CAT_COVERAGE)
            <div class="coverage_post" data-img="{{ $post->getImage() }}">
                <a href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">{{ $post->title }}</div>
                        <div class="coverage_date">{{ $post->dateAsCarbon->translatedFormat('j F Y') }}</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            @foreach($post->games as $game)
                                <img width="22" src="{{ $game->getImage() }}" alt="{{ $game->title }}">
                            @endforeach
                        </div>
                    </div>
                </a>
            </div><!-- ./coverage_post -->
        @elseif($post->category_id == Category::CAT_VIDEOS)
            <div class="coverage_post" data-img="{{ $post->getImage() }}">
                <a href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}">
                    <div class="coverage_post_bg"></div>
                    <div class="coverage_post_video">
                        <span class="material-icons-outlined icon-video-play">arrow_forward_ios</span>
                    </div>
                    <div class="coverage_post_info">
                        <div class="coverage_title">{{ $post->title }}</div>
                        <div class="coverage_date">{{ $post->dateAsCarbon->translatedFormat('j F Y') }}</div>
                    </div>
                    <div class="coverage_game_category">
                        <div class="coverage_game_category_img">
                            @foreach($post->games as $game)
                                <img width="22" src="{{ $game->getImage() }}" alt="{{ $game->title }}">
                            @endforeach
                        </div>
                    </div>
                </a>
            </div><!-- ./coverage_post -->
        @endif
    @endforeach
</section>