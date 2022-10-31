<?php


namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Carousel\UpdateRequest;

// Models
use App\Models\Carousel;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Carousel $slide)
    {
        $data = $request->validated();
        $data['image'] = Carousel::uploadImage($request, $slide->image);
        $slide->update($data);
        return redirect()->route('admin.carousel.index');
    }
}
