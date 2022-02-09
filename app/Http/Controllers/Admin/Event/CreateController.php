<?php


namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;

class CreateController extends Controller
{
    public function __invoke()
    {
        $games = Game::pluck('title', 'id')->all();
        return view('admin.event.create', compact('games'));
    }
}
