<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Banner\UpdateRequest;

// Models
use App\Models\Banner;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Banner $banner)
    {
        $data = $request->validated();
        $data['image'] = Banner::uploadImage($request, $banner->image);
        $banner->update($data);
        return redirect()->route('admin.banner.index');
    }
}
