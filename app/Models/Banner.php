<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Facades
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory, SoftDeletes;

    // Const for banner place
    const SITE_PLACE_BETWEEN_SECTION = 0;
    const SITE_PLACE_SIDEBAR = 1;

    // Const for banner status
    const BANNER_ACTIVE = 1;
    const BANNER_DEACTIVE = 0;

    /**
     * Get place name for admin panel
     * 
     * @return string
     */

    public static function getPlaces()
    {
        return [
           self::SITE_PLACE_BETWEEN_SECTION => 'Между секциями',
           self::SITE_PLACE_SIDEBAR => 'Сайдбар',
        ];
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = ['image', 'title', 'subtitle', 'url', 'place', 'active'];

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

            return $request->file('image')->store("bn");
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
