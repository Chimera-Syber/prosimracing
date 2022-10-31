<?php


namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Carousel;

class IndexController extends Controller
{
    public function __invoke()
    {
        $carousel = Carousel::orderBy('id', 'DESC')->get();
        return view('admin.carousel.index', compact('carousel'));
    }
}
