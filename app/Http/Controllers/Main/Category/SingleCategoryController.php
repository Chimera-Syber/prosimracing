<?php


namespace App\Http\Controllers\Main\Category;

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
use App\Models\Footer;
use App\Models\Banner;

class SingleCategoryController extends Controller
{
    public function __invoke($catSlug)
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $slug = $catSlug;
        $category = Category::where('slug', $slug)->firstOrFail(); 
        $footers = Footer::all();
        $bannerBetweenSections = Banner::where('place', '=', Banner::SITE_PLACE_BETWEEN_SECTION)->where('active', '=', Banner::BANNER_ACTIVE)->first();
        $bannerSidebar = Banner::where('place', '=', Banner::SITE_PLACE_SIDEBAR)->where('active', '=', Banner::BANNER_ACTIVE)->first();
        $specialPosts = Post::where('category_id', '=', Category::CAT_VIDEOS)->orWhere('category_id', '=', Category::CAT_COVERAGE)->orderBy('created_at', 'DESC')->with('category')->with('games')->paginate(8);
        return view('main.category.singlecategory', compact('slug', 'category', 'carousel', 'events', 'footers', 'bannerBetweenSections', 'bannerSidebar', 'specialPosts'));
    }

    public function load_data(Request $request) {
        if($request->ajax())
        {
            if($request->id > 0)
            {
                $category = Category::where('slug', $request->slug)->firstOrFail();
                $data = $category->posts()->where('id', '<', $request->id)->orderBy('id', 'DESC')->with('games')->limit(2)->get();
            }
            else
            {
                $category = Category::where('slug', $request->slug)->firstOrFail();
                $data = $category->posts()->orderBy('id', 'DESC')->with('games')->limit(2)->get();
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

                    $output .= '

                    <div class="category_post_wrp">
                        <a href="'. route("main.post.singlepost", ["category" => $post->category, "post" => $post]) .'">
                            <img class="category_post_img" src="'.  $post->getImage()  .'">
                        </a>
                        <div class="category_post_info_wrp">
                            <div class="category_post_title"><a class="category_post_title_link" href="'. route("main.post.singlepost", ["category" => $post->category, "post" => $post]) .'">'. $post->title .'</div></a>
                            <div class="category_post_desc">'. $post->description .'</div>
                            <div class="category_post_info">
                                <div class="category_post_date">'. $post->dateAsCarbon->translatedFormat('j F Y') .'</div>
                                <div class="category_post_cat">'. $post->category->title .' | '. $gamesIcon .'</div>
                            </div>
                        </div>
                    </div>
                    ';
                    $last_id = $post->id;
                }

                $output .= '
                    <div id="load_more">
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
