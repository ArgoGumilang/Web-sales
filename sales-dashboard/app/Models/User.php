<?php

namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable; // ✅ ganti ini
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $connection = 'mongodb';

   protected $fillable = [
    'username', 'nama', 'telegram_id', 'email', 'password', 'role'
];



    protected $hidden = ['password', 'remember_token'];
}
