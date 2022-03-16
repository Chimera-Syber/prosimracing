@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }} <a id="comment-{{ $comment->id }}" >{{ $comment->id }}</a></strong>
        <p>{{ $comment->comment_body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('main.post.singlepost.comment.store', ['category' => $post->category, 'post' => $post]) }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Reply" />
            </div>
            <hr />
        </form>
        @include('main.post.includes.comments-display', ['comments' => $comment->replies])
    </div>
@endforeach