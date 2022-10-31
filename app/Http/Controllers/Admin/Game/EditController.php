<?php


namespace App\Http\Controllers\Admin\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;

class EditController extends Controller
{
    public function __invoke(Game $game)
    {
        return view('admin.game.edit', compact('game'));
    }
}
