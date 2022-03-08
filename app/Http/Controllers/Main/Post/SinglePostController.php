<?php


namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\Post;
use App\Models\Category;
use App\Models\Game;
use App\Models\Carousel;
use App\Models\Event;

class SinglePostController extends Controller
{
    public function __invoke(Category $category, Post $post)
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $post = Post::where('slug', $post->slug)->with('category')->firstOrFail();
        return view('main.post.singlepost', compact('post', 'carousel', 'events'));
    }
}
