<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Banner\StoreRequest;

// Models
use App\Models\Banner;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Banner::uploadImage($request, null);
        Banner::firstOrCreate($data);
        return redirect()->route('admin.banner.index');
    }
}
