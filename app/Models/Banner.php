<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory, SoftDeletes;

    const SITE_PLACE_BETWEEN_SECTION = 0;
    const SITE_PLACE_SIDEBAR = 1;

    /**
     * Get place name for admin panel
     * 
     * @return string
     */

    public static function getPlace()
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

    protected $fillable = ['image', 'title', 'subtitle', 'url', 'place'];
}
