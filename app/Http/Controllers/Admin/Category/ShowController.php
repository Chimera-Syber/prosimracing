<?php


namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Category\StoreRequest;

// Models
use App\Models\Category;


class ShowController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('admin.category.index');
    }
}
