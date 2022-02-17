<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// For slug
use Cviebrock\EloquentSluggable\Sluggable;

// Models
use App\Models\Category;
use App\Models\Game;

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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function game()
    {
        return $this->belongsToMany(Game::class, 'post_games', 'post_id', 'game_id');
    }
}
