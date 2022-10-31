<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// For slug
use Cviebrock\EloquentSluggable\Sluggable;

// Models
use App\Models\Post;

class Tag extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = ['title', 'description', 'seo_description', 'seo_keywords'];
    protected $table = 'tags';
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

    public function posts() 
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id')->withTimestamps();
    }
}
