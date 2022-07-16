@foreach($comments as $comment)
    <div class="singlepost_display_comments" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="singlepost_display_comment">
            <span class="singlepost_comment_author_info"><strong class="singlepost_comment_author"><a id="comment-{{ $comment->id }}" >#{{ $comment->id }}</a> {{ $comment->user->name }}</strong> | <span class="singlepost_comment_date">{{ $comment->dateAsCarbon->translatedFormat('j.m.Y H:i') }}</span></span>
            <p class="singlepost_comment_body">{{ $comment->comment_body }}</p>
            @auth()
            <span class="replybutton">Ответить</span>
            <div class="singlepost_reply reply" style="display:none">
                <form class="singlepost_form" method="post" action="{{ route('main.post.singlepost.comment.store', ['category' => $post->category, 'post' => $post]) }}">
                    @csrf
                    <div class="singlepost_comment_form_group">
                        <textarea name="comment_body" class="singlepost_comment_textarea" placeholder="Введите комментарий"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post_id }}" />
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                        @error('comment_body')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="singlepost_comment_form_group">
                        <button type="submit" class="singlepost_comment_button btn-color">Отправить</button>
                    </div>
                </form>
            </div>
            @endauth()
        </div>
        @include('main.post.includes.comments-display', ['comments' => $comment->replies])
    </div>
@endforeach