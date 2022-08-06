<?php


namespace App\Http\Controllers\Admin\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Game\StoreRequest;

// Models
use App\Models\Game;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['icon'] = Game::uploadImage($request, null);
        Game::firstOrCreate($data);
        return redirect()->route('admin.game.index');
    }
}
