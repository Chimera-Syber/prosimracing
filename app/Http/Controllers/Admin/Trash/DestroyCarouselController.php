<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Facades
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Carousel;

class DestroyCarouselController extends Controller
{
    public function __invoke($id)
    {
        $slide = Carousel::withTrashed()->find($id);
        Storage::delete($slide->image);
        $slide->forceDelete();
        return redirect()->route('admin.trash.index');
    }
}
