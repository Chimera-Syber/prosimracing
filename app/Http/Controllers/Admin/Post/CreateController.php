<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $games = Game::orderBy('slug', 'ASC')->get();
        $categories = Category::all();
        $tags = Tag::orderBy('slug', 'ASC')->get();
        return view('admin.post.create', compact('games', 'categories', 'tags'));
    }
}
