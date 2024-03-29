<?php


namespace App\Http\Controllers\Main\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Carbon
use Carbon\Carbon;

// Helpers
use Illuminate\Support\Str;

// Models
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Game;
use App\Models\Carousel;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Banner;

class SingleTagController extends Controller
{
    public function __invoke($tagSlug)
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $slug = $tagSlug;
        $tag = Tag::where('slug', $slug)->firstOrFail(); 

        $footers = Footer::orderBy('orders', 'ASC')->get();

        $bannerBetweenSections = Banner::where('place', '=', Banner::SITE_PLACE_BETWEEN_SECTION)->where('active', '=', Banner::BANNER_ACTIVE)->first();

        $bannerSidebar = Banner::where('place', '=', Banner::SITE_PLACE_SIDEBAR)->where('active', '=', Banner::BANNER_ACTIVE)->first();

        $specialPosts = Post::where('category_id', '=', Category::CAT_VIDEOS)->orWhere('category_id', '=', Category::CAT_COVERAGE)->orderBy('created_at', 'DESC')->with('category')->with('games')->paginate(8);

        return view('main.tag.singletag', compact('slug', 'tag', 'carousel', 'events', 'footers', 'bannerBetweenSections', 'bannerSidebar', 'specialPosts'));
    }

    public function load_data(Request $request) {
        if($request->ajax())
        {
            if($request->id > 0)
            {
                $tag = Tag::where('slug', $request->slug)->firstOrFail();
                $data = $tag->posts()->where('post_id', '<', $request->id)->orderBy('post_id', 'DESC')->with('games')->limit(8)->get();
            }
            else
            {
                $tag = Tag::where('slug', $request->slug)->firstOrFail();
                $data = $tag->posts()->orderBy('post_id', 'DESC')->with('games')->limit(8)->get();
            }

             $output = '';
             $last_id = '';
             if(!$data->isEmpty())
             {
                foreach($data as $post)
                {
                    
                    $gamesIcon = '';

                    foreach($post->games as $game) {
                        $gamesIcon .= '<img class="category_post_icon" width="22" src="'. $game->getImage() .'" alt="'. $game->title .'">';
                    }

                    $description = Str::limit($post->description, 140, '...');

                    $output .= '

                    <div class="main-section__category-post-container main-section__category-post-container-margin cards_animation">
                        <a href="'. route("main.post.singlepost", ["category" => $post->category, "post" => $post]) .'">
                            <img class="main-section__category-post-img" src="'.  $post->getImage()  .'">
                        </a>
                        <div class="main-section__category-post-info-wrp main-section__category-post-info-wrp_padding">
                            <div class="main-section__category-post-title main-section__category-post-title_margin"><a class="main-section__category-post-title-link" href="'. route("main.post.singlepost", ["category" => $post->category, "post" => $post]) .'">'. $post->title .'</div></a>
                            <div class="main-section__category-post-desc">'. $description .'</div>
                            <div class="main-section__category-post-info">
                                <div class="main-section__category-post-date">'. $post->dateAsCarbon->translatedFormat('j F Y') .'</div>
                                <div class="main-section__category-post-cat">'. $post->category->title .' | '. $gamesIcon .'</div>
                            </div>
                        </div>
                    </div>
                    ';
                    $last_id = $post->id;
                }

                $output .= '
                    <div id="load_more">
                        <button type="button" class="main-section__button-load-more" name="load_more_button" data-id="'.$last_id.'" id="load_more_button">Загрузить больше</button>
                    </div>
                ';


             }
             else
             {
                $output .= '
                    <div id="load_more">
                        <button type="button" class="main-section__button-load-more" name="load_more_button">Все посты загружены</button>
                    </div>

                ';
             }
             return $output;

        }
    }
}
