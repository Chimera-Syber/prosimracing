<?php


namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Comment;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(20);
        return view('admin.comment.index', compact('posts'));
    }
}
