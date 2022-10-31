<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Post;

class RestorePostController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
