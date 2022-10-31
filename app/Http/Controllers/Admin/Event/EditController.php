<?php


namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;
use App\Models\Event;

class EditController extends Controller
{
    public function __invoke(Event $event)
    {
        $games = Game::pluck('title', 'id')->all();
        return view('admin.event.edit', compact('event', 'games'));
    }
}
