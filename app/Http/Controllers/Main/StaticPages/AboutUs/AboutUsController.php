<?php 

namespace App\Http\Controllers\Main\StaticPages\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\Carousel;
use App\Models\Event;
use App\Models\Footer;

class AboutUsController extends Controller
{
    public function index()
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();

        $footers = Footer::orderBy('orders', 'ASC')->get();

        return view('main.staticpages.aboutus', compact('footers', 'carousel', 'events'));
    }

    
}