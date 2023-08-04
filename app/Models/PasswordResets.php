<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
    protected $table = 'password_resets';

    protected $fillable = [
        'id', 'email', 'user_id', 'token',  'created_at', 'updated_at',
    ];
}
