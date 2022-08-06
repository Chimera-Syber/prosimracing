<?php


namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Carousel\StoreRequest;

// Models
use App\Models\Carousel;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Carousel::uploadImage($request, null);
        Carousel::firstOrCreate($data);
        return redirect()->route('admin.carousel.index');
    }
}
