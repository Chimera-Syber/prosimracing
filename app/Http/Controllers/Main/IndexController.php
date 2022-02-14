<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Carousel;
use App\Models\Event;

class IndexController extends Controller
{
    public function __invoke()
    {
        $carousel = Carousel::orderBy('id', 'DESC')->paginate(4);
        $events = Event::orderBy('start_date', 'ASC')->get();
        return view('main.index', compact('carousel', 'events'));
    }
}
