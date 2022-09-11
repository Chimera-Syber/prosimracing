<?php 

namespace App\Http\Controllers\Main\StaticPages\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\Carousel;
use App\Models\Event;
use App\Models\Footer;

class ContactsController extends Controller
{
    public function index()
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::where('start_date', '>', Carbon::yesterday())->orderBy('start_date', 'ASC')->get();

        $footers = Footer::orderBy('orders', 'ASC')->get();

        return view('main.staticpages.contacts', compact('footers', 'carousel', 'events'));
    }

    
}