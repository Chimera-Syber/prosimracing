<?php


namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Comment;
use App\Models\Post;

class RestoreController extends Controller
{
    public function __invoke($id)
    {
        Comment::find($id)->update(['deleted' => null]);
        return back();
    }
}
