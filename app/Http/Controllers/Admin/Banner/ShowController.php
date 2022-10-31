<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Banner;

class ShowController extends Controller
{
    public function __invoke()
    {
        $banners = Banner::all();
        $places = Banner::getPlaces();
        return view('admin.banner.show', compact('banners', 'places'));
    }
}
