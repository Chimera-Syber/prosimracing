<?php


namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Footer;

class IndexController extends Controller
{
    public function __invoke()
    {
        $footers = Footer::orderBy('orders', 'ASC')->get();
        return view('admin.footer.index', compact('footers'));
    }
}
