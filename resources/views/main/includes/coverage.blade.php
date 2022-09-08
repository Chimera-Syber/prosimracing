<section class="coverages">
    <h2 class="coverages__title">Видео и репортажи</h2>
    <div class="coverages__posts-container">
        @foreach($specialPosts as $post)
            @if($post->category_id == Category::CAT_COVERAGE)
                <a class="coverages__post-item coverages__post-item_margin cards_animation" href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}" data-img="{{ $post->getImage() }}">
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
            @elseif($post->category_id == Category::CAT_VIDEOS)
                <a class="coverages__post-item coverages__post-item_margin cards_animation" href="{{ route('main.post.singlepost', ['category' => $post->category, 'post' => $post]) }}" data-img="{{ $post->getImage() }}">
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
            @endif
        @endforeach
    </div>
</secton>