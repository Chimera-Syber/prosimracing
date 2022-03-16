<?php


namespace App\Http\Controllers\Admin\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Facades
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Game;

class DeleteController extends Controller
{
    public function __invoke(Game $game)
    {
        $game->delete();
        return redirect()->route('admin.game.index');
    }
}
