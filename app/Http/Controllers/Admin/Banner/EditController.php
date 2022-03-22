<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Banner;

class EditController extends Controller
{
    public function __invoke(Banner $banner)
    {
        $places = Banner::getPlaces();
        return view('admin.banner.edit', compact('banner', 'places'));
    }
}
