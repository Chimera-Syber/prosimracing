<?php


namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Carousel;

class DeleteController extends Controller
{
    public function __invoke(Carousel $slide)
    {
        $slide->delete();
        return redirect()->route('admin.carousel.index');
    }
}
