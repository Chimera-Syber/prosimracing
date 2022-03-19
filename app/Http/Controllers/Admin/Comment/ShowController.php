<?php


namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Comment;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        
        return view('admin.comment.show', compact('post'));
    }
}
