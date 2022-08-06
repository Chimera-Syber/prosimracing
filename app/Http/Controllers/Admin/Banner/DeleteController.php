<?php


namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Banner;

class DeleteController extends Controller
{
    public function __invoke(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index');
    }
}
