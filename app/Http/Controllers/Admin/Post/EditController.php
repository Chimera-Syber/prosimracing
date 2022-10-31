<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Post;
use App\Models\Game;
use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $games = Game::orderBy('slug', 'ASC')->get();
        $categories = Category::all();
        $tags = Tag::orderBy('slug', 'ASC')->get();
        return view('admin.post.edit', compact('post', 'games', 'categories', 'tags'));
    }
}
