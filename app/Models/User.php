<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Notification
use App\Notifications\SendVerifyWithQueueNotification;
use App\Notifications\SendResetPasswordMailWithQueueNotification;

// Facades 
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const ROLE_ADMIN = 0;
    const ROLE_WRITER = 1;
    const ROLE_READER = 2;

    protected $tadle = 'users';

    public static function getRoles()
    {
        return [
            self::ROLE_ADMIN => 'Админ',
            self::ROLE_WRITER => 'Редактор',
            self::ROLE_READER => 'Читатель',
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'about_user',
        'user_avatar',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 
     * User avatar upload (create)
     * 
     */

    public static function uploadUserAvatar($request, $avatar)
    {
        if ($request->hasFile('user_avatar')) {

            // Delete old avatar if there is new

            if ($avatar) {
                Storage::delete($avatar);
            }

            return $request->file('user_avatar')->store("avatars");
        } else {
            return $avatar;
        }
    }

    /**
     * 
     * Get avatar image
     * 
     */

    public function getAvatarImage() 
    {
        if (!$this->user_avatar) {
            return asset("no-image.jpg");
        }

        return asset("uploads/{$this->user_avatar}");
    }

    /**
     * Send the verifitaction email
     *
     * @param  string  $token
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWithQueueNotification());
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new SendResetPasswordMailWithQueueNotification($token));
    }
}
