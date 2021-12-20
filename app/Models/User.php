<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPasswordRequest;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function specialist_info(){
        return $this->hasOne(SpecialistInfo::class, 'user_id', 'id');
    }

    public function sendPasswordResetNotification($token)
    {
        $url = 'http://127.0.0.1:8000/password/reset/'.$token;
        $this->notify(new ResetPasswordRequest($url));
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
        'phone_number',
        'role_id'
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
}
