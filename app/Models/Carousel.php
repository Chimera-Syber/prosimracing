<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

// Facades
use Illuminate\Support\Facades\Storage;

class Carousel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'image', 'url'];
    protected $table = 'carousels';
    protected $guarded = false;

    /**
     * For image upload (create)
     */
    public static function uploadImage($request, $image) // $image - optional parameter
    {
        if ($request->hasFile('image')) {

            //  Delete old image if there is new

            if ($image) {
                Storage::delete($image);
            }

            return $request->file('image')->store("carousel");
        } else {
            return $image;
        }
    }

    /**
     * For get image
     */

    public function getImage()
    {
        if (!$this->image) {
            return asset("assets/img/no-image.png");
        }

        return asset("uploads/{$this->image}");
    }
}
