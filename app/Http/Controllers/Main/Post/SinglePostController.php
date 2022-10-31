<?php


namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Handlers
use App\Handlers\Handlers;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\Post;
use App\Models\Category;
use App\Models\Game;
use App\Models\Carousel;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Banner;
use App\Models\User;

class SinglePostController extends Controller
{
    public function __invoke(Category $category, Post $post)
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $post = Post::where('slug', $post->slug)->with('category')->with('games')->firstOrFail();
        $content = Handlers::render($post->content);
        //$content2 = $post->content; // for test
        $bannerBetweenSections = Banner::where('place', '=', Banner::SITE_PLACE_BETWEEN_SECTION)->where('active', '=', Banner::BANNER_ACTIVE)->first();
        $bannerSidebar = Banner::where('place', '=', Banner::SITE_PLACE_SIDEBAR)->where('active', '=', Banner::BANNER_ACTIVE)->first();
        $post->views += 1; 
        $post->update();
        $footers = Footer::orderBy('orders', 'ASC')->get();

        $author = User::find($post->user_id);

        // Tags Render

        $tagsHTML = '';

        foreach($post->tags as $tag) {
            $route = route('main.tag.singletag', ['tagSlug' => $tag->slug]);
            $tagsHTML .= '<a href="'. $route . '" class="singlepost__tag">' . $tag->title . '</a>';
        } 

        // Games Icons

        $gamesIcon = '';

        foreach($post->games as $game) {
            $gamesIcon .= '<img width="22" src="'. $game->getImage() .'" alt="'. $game->title .'">';
        }

        return view('main.post.singlepost', compact('author', 'post', 'content', 'bannerBetweenSections', 'bannerSidebar', 'carousel', 'events', 'tagsHTML', 'gamesIcon', 'footers'));
    }

}
