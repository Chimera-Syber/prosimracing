<?php


namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Event\StoreRequest;

use Carbon\Carbon;

// Models
use App\Models\Event;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $changeFormat = $data['start_date'];
        $data['start_date'] = Carbon::parse($changeFormat)->format('Y-m-d H:m:s');
        //dd($data['start_date']);
        Event::firstOrCreate($data);
        return redirect()->route('admin.event.index');
    }
}
