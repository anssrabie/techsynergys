<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = 'descriptions';
    protected $fillable = [
        'text', 'id', 'created_at', 'updated_at'
    ];

    public $timestamps = false;



}
