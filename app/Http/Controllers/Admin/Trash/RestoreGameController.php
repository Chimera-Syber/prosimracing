<?php


namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Game;

class RestoreGameController extends Controller
{
    public function __invoke($id)
    {
        $game = Game::withTrashed()->find($id)->restore();
        return redirect()->route('admin.trash.index');
    }
}
