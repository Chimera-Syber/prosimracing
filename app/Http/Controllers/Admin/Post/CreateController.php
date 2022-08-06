<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        $games = Game::all();
        $categories = Category::all();
        return view('admin.post.create', compact('games', 'categories'));
    }
}
