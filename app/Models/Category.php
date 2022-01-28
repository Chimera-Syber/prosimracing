<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// For slug
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'seo_description', 'keywords'];

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
}
