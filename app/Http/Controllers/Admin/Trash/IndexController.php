<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::onlyTrashed()->orderBy('id')->paginate(10);
        return view('admin.trash.index', compact('categories'));
    }
}
