<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

use App\Models\Game;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'league', 'start_date'];
    protected $table = 'events';

    /**
     * Relation with Game ID in 'games' table
     */

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function getDateAsCarbonAttribute()
    {
        return Carbon::parse($this->start_date)->locale('ru');
    }
}
