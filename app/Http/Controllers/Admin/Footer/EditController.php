<?php


namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Footer;

class EditController extends Controller
{
    public function __invoke(Footer $footer)
    {
        $places = Footer::getPlaces();
        return view('admin.footer.edit', compact('places', 'footer'));
    }
}
