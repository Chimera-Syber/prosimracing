<div class="comments_section">
    <a id="comments"></a>
    <span class="singlepost_comments_title">Комментарии ({{ $post->commentsCount() }})</span>

    @include('main.post.includes.comments-display', ['comments' => $post->comments, 'post_id' => $post->id])

    @auth()
    <span class="singlepost_comments_title">Добавить комментарий</span>
        <form class="singlepost_form" method="post" action="{{ route('main.post.singlepost.comment.store', ['category' => $post->category, 'post' => $post]) }}">
            @csrf
            <div class="singlepost_comment_form_group">
                <textarea class="singlepost_comment_textarea" name="comment_body" placeholder="Введите комментарий"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                @error('comment_body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="singlepost_comment_form_group">
                <button type="submit" class="singlepost_comment_button btn-color">Отправить</button>
            </div>
        </form>
    @endauth()
</div>