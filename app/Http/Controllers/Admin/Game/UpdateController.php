<?php

namespace App\Http\Controllers\Admin\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Game\UpdateRequest;

// Models
use App\Models\Game;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Game $game)
    {
        $data = $request->validated();
        $data['icon'] = Game::uploadImage($request, $game->icon);
        $game->update($data);
        return redirect()->route('admin.game.index');
    }
}
