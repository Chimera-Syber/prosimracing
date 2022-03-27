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
use App\Models\Footer;

class SinglePostController extends Controller
{
    public function __invoke(Category $category, Post $post)
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();
        $post = Post::where('slug', $post->slug)->with('category')->firstOrFail();
        $content = self::render($post->content);
        $content2 = $post->content; // for test
        $post->views += 1; 
        $post->update();
        $footers = Footer::all();
        return view('main.post.singlepost', compact('post', 'content', 'content2', 'carousel', 'events', 'footers'));
    }

    /**
     * JSON to HTML parser (for EditorJS)
     * All addition function for parse are below function render
     */

    public function render($inputContent)
    {
        $blocks = json_decode($inputContent)->blocks;

        $content = '';

        foreach($blocks as $block) {

            switch($block->type) {

                // Paragraph block
                case 'paragraph':
                    $content .= '<p class="singlepost_text">' . $block->data->text . '</p>';
                    break;

                // Header block
                case 'header':
                    $level = $block->data->level + 1;
                    $content .= '<h' . $level . ' class="singlepost_header_' . $level . '">' . $block->data->text . '</h' . $level . '>';
                    break;
                
                // List block
                case 'list':
                    if ($block->data->style == 'ordered') {
                        $styleOpen = '<ol class="singlepost_list_ol">'; 
                        $styleClose = '</ol>';
                    } else {
                        $styleOpen = '<ul class="singlepost_list_ul">';
                        $styleClose = '</ul>';
                    }
                    $content .= $styleOpen;
                    foreach($block->data->items as $item) {
                        $content .= '<li class="singlepost_list_li">' . $item . '</li>';
                    }
                    $content .= $styleClose;
                    break;
                
                // Embed block (Youtube, Twitch)
                case 'embed':
                    switch($block->data->service) {
                        case 'twitch':
                            $content .= '<div class="singlepost_twitch"><iframe src="' . $block->data->embed . '&autoplay=false" frameborder="0" allowfullscreen="true" scrolling="no" height="480" width="848"></iframe></div>';
                            if ($block->data->caption != '') {
                                $content .= '<div class="singlepost_caption">' .$block->data->caption . '</div>';
                            }
                            break;
                        case 'youtube':
                            $content .= '<div class="singlepost_youtube"><iframe width="848" height="480" src="' . $block->data->embed . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
                            if ($block->data->caption != '') {
                                $content .= '<div class="singlepost_caption">' .$block->data->caption . '</div>';
                            }
                            break;
                    }
                    break;

                // Images block
                case 'image':

                    /**
                     * With additional commands we rewrite domain name for Images url
                     */

                    $url_array = parse_url($block->data->file->url);
                    $url_array['host'] = $_SERVER['SERVER_NAME'];

                    $url = self::reverseParseUrl($url_array);

                    $content .= '<div class="singlepost_image_wrp"><img class="singlepost_image" src="' . $url . '"></div>';
                    if ($block->data->caption != '') {
                        $content .= '<div class="singlepost_caption">' .$block->data->caption . '</div>';
                    }
                    break;
            }
        }

        return $content;
    }


    /**
     * Reverse parsed url for Images 
     */

     public static function reverseParseUrl($url_array)
     {
         $url = $url_array['scheme'] . '://' . $url_array['host'] . $url_array['path'];
         return $url;
     }
}
