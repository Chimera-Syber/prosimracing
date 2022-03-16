<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Carbon
use Carbon\Carbon;

// For slug
use Cviebrock\EloquentSluggable\Sluggable;

// Facades
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Category;
use App\Models\Game;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = false;

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Comments relationship
     * 
     * @return string
     */

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    

    /**
     * For preview image upload (create)
     */
    public static function uploadImage($request, $image) // $image - optional parameter
    {
        if ($request->hasFile('preview_image')) {

            //  Delete old thumbnail if there is new

            if ($image) {
                Storage::delete($image);
            }

            $folder = date('Y-m-d');
            return $request->file('preview_image')->store("images/{$folder}");
        } else {
            return $image;
        }
    }

    public function getImage()
    {
        if (!$this->preview_image) {
            return asset("no-image.jpg");
        }

        return asset("uploads/{$this->preview_image}");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'post_games', 'post_id', 'game_id')->withTimestamps();
    }

    public function getDateAsCarbonAttribute() {

        return Carbon::parse($this->created_at)->locale('ru');
        
    }
}
