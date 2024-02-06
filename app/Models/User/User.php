<?php

namespace App\Models\User;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    const Name = 'name';
    const Email = 'email';
    const Password = 'password';
    const RememberToken = 'remember_token';
    const EmailVerifiedAt = 'email_verified_at';
    
    protected $fillable = [
        self::Name,
        self::Email,
        self::Password,
    ];
    
    protected $hidden = [
        self::Password,
        self::RememberToken,
    ];
    
    protected $casts = [
        self::EmailVerifiedAt => 'datetime',
        self::Password        => 'hashed',
    ];
}
