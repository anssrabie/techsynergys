<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socials';
    protected $fillable = [
        'name', 'link', 'type', 'created_at', 'updated_at'
    ];


}
