<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Banner\UpdateShowRequest;

// Models
use App\Models\Banner;

class UpdateShowController extends Controller
{
    public function __invoke(UpdateShowRequest $request, Banner $banner)
    {
        $banners = Banner::all();
        foreach($banners as $banner)
        {
            $banner->update(['active' => Banner::BANNER_DEACTIVE]);
        }
        $banner = Banner::find($request['toggle']);
        $banner->update(['active' => Banner::BANNER_ACTIVE]);
        return redirect()->route('admin.banner.show');
    }
}
