<?php


namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Carousel;

class EditController extends Controller
{
    public function __invoke(Carousel $slide)
    {
        return view('admin.carousel.edit', compact('slide'));
    }
}
