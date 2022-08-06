<?php


namespace App\Http\Controllers\Admin\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;

class IndexController extends Controller
{
    public function __invoke()
    {
        $games = Game::orderBy('id')->paginate(10);
        return view('admin.game.index', compact('games'));
    }
}
