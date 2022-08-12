<section class="coverages">
    <h2 class="coverages__title">Видео и репортажи</h2>
    <div class="coverages__posts-container">
        @foreach($specialPosts as $post)
            @if($post->category_id == Category::CAT_COVERAGE)
                <div class="coverages__post-item" data-img="{{ $post->getImage() }}">
                    <a class="coverages__post-link" href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}">
                        <div class="coverages__post-bg"></div>
                        <div class="coverages__post-info">
                            <div class="coverages__post-title">{{ $post->title }}</div>
                            <div class="coverages__post-date">{{ $post->dateAsCarbon->translatedFormat('j F Y') }}</div>
                        </div>
                        <div class="coverages__game-category">
                            <div class="coverages__game-category-img">
                                @foreach($post->games as $game)
                                    <img width="22" src="{{ $game->getImage() }}" alt="{{ $game->title }}">
                                @endforeach
                            </div>
                        </div>
                    </a>
                </div><!-- ./coverage_post -->
            @elseif($post->category_id == Category::CAT_VIDEOS)
                <div class="coverages__post-item" data-img="{{ $post->getImage() }}">
                    <a class="coverages__post-link" href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}">
                        <div class="coverages__post-bg"></div>
                        <div class="coverages__post-video">
                            <span class="material-icons-outlined coverages__icon-video-play">arrow_forward_ios</span>
                        </div>
                        <div class="coverages__post-info">
                            <div class="coverages__post-title">{{ $post->title }}</div>
                            <div class="coverages__post-date">{{ $post->dateAsCarbon->translatedFormat('j F Y') }}</div>
                        </div>
                        <div class="coverages__game-category">
                            <div class="coverages__game-category-img">
                                @foreach($post->games as $game)
                                    <img width="22" src="{{ $game->getImage() }}" alt="{{ $game->title }}">
                                @endforeach
                            </div>
                        </div>
                    </a>
                </div><!-- ./coverage_post -->
            @endif
        @endforeach
    </div>
</secton>