<?php


namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Footer;

class DeleteController extends Controller
{
    public function __invoke(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('admin.footer.index');
    }
}
