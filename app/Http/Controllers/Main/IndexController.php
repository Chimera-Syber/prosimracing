<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\Carousel;
use App\Models\Event;
use App\Models\Post;
use App\Models\Banner;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->with('games')->paginate(8);
        $bannerBetweenSections = Banner::where('place', '=', Banner::SITE_PLACE_BETWEEN_SECTION)->where('active', '=', Banner::BANNER_ACTIVE)->first();
        $specialPosts = Post::where('category_id', '=', Category::CAT_VIDEOS)->orWhere('category_id', '=', Category::CAT_COVERAGE)->orderBy('created_at', 'DESC')->with('category')->with('games')->paginate(8);
        return view('main.index', compact('carousel', 'events', 'posts', 'bannerBetweenSections', 'specialPosts'));
    }
}
