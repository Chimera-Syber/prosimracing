<?php 

namespace App\Http\Controllers\Main\Sitemap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class SitemapController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('updated_at', 'desc')->first();
	    $category = Category::orderBy('updated_at', 'desc')->first();
	    $tag = Tag::orderBy('updated_at', 'desc')->first();
        return response()->view('main.sitemap.sitemap', [
            'post' => $post,
            'category' => $category,
            'tag' => $tag,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts() 
    {
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->get();
        return response()->view('main.sitemap.posts', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');

    }

    public function categories() 
    {
        $categories = Category::orderBy('slug', 'ASC')->get();
        return response()->view('main.sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');

    }

    public function tags() 
    {
        $tags = Tag::orderBy('slug', 'ASC')->get();
        return response()->view('main.sitemap.tags', [
            'tags' => $tags,
        ])->header('Content-Type', 'text/xml');
    }
}