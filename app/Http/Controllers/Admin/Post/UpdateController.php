<?php


namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\Admin\Post\UpdateRequest;

// Models
use App\Models\Post;

// Facades
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
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

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $data['preview_image'] = Post::uploadImage($request, $post->preview_image);

            $post->update($data);

            if (isset($gameIds)) {
                $post->games()->sync($gameIds);
            }

            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }

            Db::commit();
        } catch (\Exception $exception) {
            Db::rollback();
           abort(500);
       }
        return redirect()->route('admin.post.index');
    }
}
