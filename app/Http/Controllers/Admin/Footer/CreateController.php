<?php


namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Footer;

class CreateController extends Controller
{
    public function __invoke($place_id)
    {
        $places = Footer::getPlaces();
        return view('admin.footer.create', compact('places', 'place_id'));
    }
}
