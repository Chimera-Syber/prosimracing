<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Category;

class RestoreCategoryController extends Controller
{
    public function __invoke($id)
    {
        $category = Category::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
