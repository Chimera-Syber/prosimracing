<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;

class IndexController extends Controller
{
    public function __invoke()
    {

        return view('admin.post.index');
    }
}
