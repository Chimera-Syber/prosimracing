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
use App\Models\Footer;

class IndexController extends Controller
{
    public function __invoke()
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->with('games')->paginate(8);
        $bannerBetweenSections = Banner::where('place', '=', Banner::SITE_PLACE_BETWEEN_SECTION)->where('active', '=', Banner::BANNER_ACTIVE)->first();
        $specialPosts = Post::where('category_id', '=', Category::CAT_VIDEOS)->orWhere('category_id', '=', Category::CAT_COVERAGE)->orderBy('created_at', 'DESC')->with('category')->with('games')->paginate(8);
        $footers = Footer::orderBy('orders', 'ASC')->get();
        return view('main.index', compact('carousel', 'events', 'posts', 'bannerBetweenSections', 'specialPosts', 'footers'));
    }

    public function load_more(Request $request) {
        if($request->ajax())
        {
            if($request->id > 0)
            {
                $data = Post::where('id', '<', $request->id)->orderBy('id', 'DESC')->with('games')->limit(8)->get();
            }
            else
            {
                $data = Post::orderBy('id', 'DESC')->with('games')->limit(8)->get();
            }

             $output = '';
             $last_id = '';
             if(!$data->isEmpty())
             {
                foreach($data as $post)
                {
                    
                    $gamesIcon = '';

                    foreach($post->games as $game) {
                        $gamesIcon .= '<img width="22" src="'. $game->getImage() .'" alt="'. $game->title .'">';
                    }

                    $output .= '
                    <div class="main-section__post-item main-section__post-item_margin cards_animation">
                        <a href="' . route("main.post.singlepost", ["category" => $post->category, "post" => $post]) . '" class="main-section__post-preview-image" data-img="'. $post->getImage() .'">
                                <div class="main-section__post-game-category">' . $gamesIcon . '</div>
                                <div class="main-section__post_category">' . $post->category->title . '</div>
                        </a>
                        <a href="' . route("main.post.singlepost", ["category" => $post->category, "post" => $post]) . '" class="main-section__post-info-container main-section__post-info-container_margin">
                            <div class="main-section__post-item-link">
                                <div class="main-section__post-info-title main-section__post-info-title_margin">' . $post->title . '</div>
                                <div class="main-section__post-info-desc main-section__post-info-desc_margin"> ' . $post->description . '</div>
                            </div>
                            <div class="main-section__post-info-date-link-container">
                                <span class="main-section__post-date">' . $post->dateAsCarbon->translatedFormat("j F Y") . '</span>
                                <span class="main-section__post-link">Читать далее</span>
                            </div>
                        </a>
                    </div>
                    ';
                    $last_id = $post->id;
                }

                $output .= '
                    <div id="load_more" class="main-section__button-container main-section__button-container_margin">
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
