<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGame extends Model
{
    use HasFactory;

    protected $table = 'post_games';
    protected $guarded = false;
}
