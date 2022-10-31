<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Banner;

class CreateController extends Controller
{
    public function __invoke()
    {
        $places = Banner::getPlaces();
        return view('admin.banner.create', compact('places'));
    }
}
