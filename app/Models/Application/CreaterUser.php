<?php

namespace App\Models\Application;

use Illuminate\Foundation\Auth\User as Authenticatable; // ✅ NOT Model
use Laravel\Sanctum\HasApiTokens;                        // ✅ required
use Illuminate\Notifications\Notifiable;

class CreaterUser extends Authenticatable
{
    use HasApiTokens, Notifiable; // ✅ both required

    protected $table = 'creater_users'; // ✅ match your actual table name

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
