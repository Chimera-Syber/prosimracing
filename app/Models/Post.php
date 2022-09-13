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
use App\Models\Tag;

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
     * Comments count
     * 
     * @return string
     */

     public function commentsCount() 
     {
         return Comment::where('post_id', $this->id)->count();
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

    /**
     * 
     * Get preview image
     * 
     */

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

    // Games
    
    public function games()
    {
        return $this->belongsToMany(Game::class, 'post_games', 'post_id', 'game_id')->withTimestamps();
    }

    // Tags

    public function tags() 
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id')->withTimestamps();
    }

    // Carbon Russian

    public function getDateAsCarbonAttribute() {

        return Carbon::parse($this->created_at)->locale('ru');
        
    }
}
