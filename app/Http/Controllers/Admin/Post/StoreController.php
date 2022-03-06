<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Post\StoreRequest;

// Models
use App\Models\Post;

// Facades
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        /**
         *
         * Use DB transaction because wee need to update post_games table with id -> post_id -> game_id
         *
         */

        try {
            Db::beginTransaction();

            if (isset($data['game_ids'])) {
                $gameIds = $data['game_ids'];
                unset($data['game_ids']);
            }

            $data['preview_image'] = Post::uploadImage($request, null);

            $post = Post::firstOrCreate($data);

            if (isset($gameIds)) {
                $post->games()->attach($gameIds);
            }

            Db::commit();
        } catch (\Exception $exception) {
            Db::rollback();
            abort(500);
       }
        return redirect()->route('admin.post.index');
    }
}