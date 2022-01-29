<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

// Facades
use Illuminate\Support\Facades\Storage;

// Requests
use App\Http\Requests\Admin\Game\StoreRequest;

// For slug
use Cviebrock\EloquentSluggable\Sluggable;

class Game extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = ['title', 'icon', 'seo_description', 'keywords'];
    protected $table = 'games';
    protected $guarded = false;

    /**
     * For icon image upload
     */
    public static function uploadImage(StoreRequest $request, $image) // $image - optional parameter
    {
        if ($request->hasFile('icon')) {

            //  Delete old thumbnail if there is new

            if ($image) {
                Storage::delete($image);
            }

            return $request->file('icon')->store("icons");
        } else {
            return $image;
        }
    }

    /**
     * For icon get image
     */

    public function getImage()
    {
        if (!$this->icon) {
            return asset("no-image.jpg");
        }

        return asset("uploads/{$this->icon}");
    }


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
