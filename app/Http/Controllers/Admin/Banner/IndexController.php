<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Banner;

class IndexController extends Controller
{
    public function __invoke()
    {
        $banners = Banner::paginate(20);
        $places = Banner::getPlaces();
        return view('admin.banner.index', compact('banners', 'places'));
    }
}
