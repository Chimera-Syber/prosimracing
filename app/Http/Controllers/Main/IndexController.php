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
        $footers = Footer::all();
        return view('main.index', compact('carousel', 'events', 'posts', 'bannerBetweenSections', 'specialPosts', 'footers'));
    }

    public function load_more(Request $request) {
        if($request->ajax())
        {
            if($request->id > 0)
            {
                $data = Post::where('id', '<', $request->id)->orderBy('id', 'DESC')->with('games')->limit(4)->get();
            }
            else
            {
                $data = Post::orderBy('id', 'DESC')->with('games')->limit(4)->get();
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
                    <div class="content_post">
                        <div class="post_preview_image" data-img="'. $post->getImage() .'">
                            <div class="post_game_category_wrp">
                                <div class="post_game_category">' . $gamesIcon . '</div>
                            </div>
                            <div class="post_category_wrp">
                                <div class="post_category">
                                    <span>' . $post->category->title . '</span>
                                </div>
                            </div>
                        </div>
                        <div class="post_info_wrp">
                            <a href="' . route("main.post.singlepost", ["category" => $post->category, "post" => $post]) . '">
                                <div class="post_info_title">
                                    <span>' . $post->title . '</span>
                                </div>
                                <div class="post_info_desc">
                                    <span>' . $post->description . '</span>
                                </div>
                            </a>
                            <div class="post_info_date_and_link">
                                <span class="post_date">' . $post->dateAsCarbon->translatedFormat("j F Y") . '</span>
                                <a href="' . route("main.post.singlepost", ["category" => $post->category, "post" => $post]) . '" class="post_link">Читать далее</a>
                            </div>
                        </div>
                    </div>
                    ';
                    $last_id = $post->id;
                }

                $output .= '
                    <div id="load_more" style="width: 100%; display: flex; flex-direction: row; justify-content: center;">
                        <button type="button" class="button-load-more" name="load_more_button" data-id="'.$last_id.'" id="load_more_button">Загрузить больше</button>
                    </div>
                ';


             }
             else
             {
                $output .= '
                    <div id="load_more">
                        <button type="button" class="button-load-more" name="load_more_button">Все посты загружены</button>
                    </div>

                ';
             }
             return $output;

        }
    }
}
