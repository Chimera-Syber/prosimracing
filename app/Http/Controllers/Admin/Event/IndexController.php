<?php


namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Event;

class IndexController extends Controller
{
    public function __invoke()
    {
        $events = Event::orderBy('start_date', 'ASC')->paginate(10);
        return view('admin.event.index', compact('events'));
    }
}
