<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer extends Model
{
    use HasFactory, SoftDeletes;

    // Const for places
    const PLACE_ONE = 1;
    const PLACE_TWO = 2;
    const PLACE_THREE = 3;
    const PLACE_FOUR = 4;
    const PLACE_FIVE = 5;

     /**
     * Get place name for admin panel
     * 
     * @return string
     */

    public static function getPlaces()
    {
        return [
           self::PLACE_ONE => 'Главная',
           self::PLACE_TWO => 'Материалы',
           self::PLACE_THREE => 'Игры',
           self::PLACE_FOUR => 'Календарь',
           self::PLACE_FIVE => 'Социальные сети',
        ];
    }

    protected $fillable = ['title', 'orders', 'url', 'place'];

}
