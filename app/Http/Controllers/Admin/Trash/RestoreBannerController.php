<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Banner;

class RestoreBannerController extends Controller
{
    public function __invoke($id)
    {
        $banner = Banner::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
