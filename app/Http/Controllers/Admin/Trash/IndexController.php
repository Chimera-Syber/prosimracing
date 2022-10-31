<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Category;
use App\Models\Game;
use App\Models\Carousel;
use App\Models\Event;
use App\Models\User;
use App\Models\Post;
use App\Models\Banner;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::onlyTrashed()->orderBy('id')->paginate(10);
        $games = Game::onlyTrashed()->orderBy('id')->paginate(10);
        $carousel = Carousel::onlyTrashed()->orderBy('id')->paginate(10);
        $events = Event::onlyTrashed()->orderBy('id')->paginate(10);
        $users = User::onlyTrashed()->orderBy('id')->paginate(10);
        $posts = Post::onlyTrashed()->orderBy('id')->paginate(10);
        $banners = Banner::onlyTrashed()->orderBy('id')->paginate(10);
        return view('admin.trash.index', compact('categories', 'games', 'carousel', 'events', 'users', 'posts', 'banners'));
    }
}
