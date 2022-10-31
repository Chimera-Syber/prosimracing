<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Carousel;

class RestoreCarouselController extends Controller
{
    public function __invoke($id)
    {
        $slide = Carousel::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
