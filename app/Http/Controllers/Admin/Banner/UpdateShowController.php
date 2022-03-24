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
        Banner::where('place', $request['place'])->lazy()->each->update(['active' => Banner::BANNER_DEACTIVE]);
        Banner::find($request['toggle'])->update(['active' => Banner::BANNER_ACTIVE]);
        return redirect()->route('admin.banner.show');
    }
}
