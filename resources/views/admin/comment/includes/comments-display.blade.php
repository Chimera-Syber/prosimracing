@foreach($comments as $comment)
    <div class="display-comments" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="comment">
            <strong>{{ $comment->user->name }} <a id="comment-{{ $comment->id }}" >{{ $comment->id }}</a></strong>
            @if($comment->deleted == Comment::COMMENT_DELETED)
                <p style="color: #cdcdcd;">Комментарий удален</p>
            @else
                <p>{{ $comment->comment_body }}</p>
            @endif
            <form action="{{ route('admin.comment.restore', ['id' => $comment->id]) }}" method="post">
                @csrf
               <button type="submit" class="btn btn-link">Восстановить</button>
            </form>
            <form action="{{ route('admin.comment.delete', ['id' => $comment->id]) }}" method="post">
                @csrf
               <button type="submit" class="btn btn-link">Удалить</button>
            </form>
        </div>
        @include('admin.comment.includes.comments-display', ['comments' => $comment->replies])
    </div>
@endforeach