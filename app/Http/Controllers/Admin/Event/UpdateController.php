<?php


namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Event\UpdateRequest;

use Carbon\Carbon;

// Models
use App\Models\Event;
use App\Models\Game;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Event $event)
    {
        $data = $request->validated();
        $changeFormat = $data['start_date'];
        $data['start_date'] = Carbon::parse($changeFormat)->format('Y-m-d H:m:s');
        $event->update($data);
        $games = Game::pluck('title', 'id')->all();
        return view('admin.event.edit', compact('event', 'games'));
    }
}
