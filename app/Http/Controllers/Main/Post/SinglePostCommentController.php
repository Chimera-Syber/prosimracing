<?php


namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Facades
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

// Models
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

// Requests
use App\Http\Requests\Main\Post\Comment\StoreRequest;

class SinglePostCommentController extends Controller
{
    public function __invoke(StoreRequest $request, Category $category, Post $post)
    {
       $input = $request->all();
       
       $input['user_id'] = auth()->user()->id;
       $input['post_id'] = $post->id;

       $comment = Comment::create($input);
       
       return Redirect::to(URL::previous() . "#comment-" . $comment->id);
    }

}
