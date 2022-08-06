<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Carbon
use Carbon\Carbon;

// Models
use App\Models\User;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;

    // Constants
    const COMMENT_DELETED = 1;

    protected $fillable = ['user_id', 'post_id', 'parent_id', 'comment_body', 'deleted'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function getDateAsCarbonAttribute() {

        return Carbon::parse($this->created_at)->locale('ru');
        
    }
}
