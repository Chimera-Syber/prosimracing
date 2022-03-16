<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Post;
use App\Models\Game;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $games = Game::all();
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'games', 'categories'));
    }
}
