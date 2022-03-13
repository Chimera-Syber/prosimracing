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
        $content = self::render($post->content);
        $content2 = $post->content; // for test
        $post->views += 1; 
        $post->update();
        return view('main.post.singlepost', compact('post', 'content', 'content2', 'carousel', 'events'));
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

                case 'paragraph':
                    $content .= '<p class="singlepost_text">' . $block->data->text . '</p>';
                    break;
                case 'header':
                    $level = $block->data->level + 1;
                    $content .= '<h' . $level . ' class="singlepost_header_' . $level . '">' . $block->data->text . '</h' . $level . '>';
                    break;
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
            }
        }

        return $content;
    }
}
