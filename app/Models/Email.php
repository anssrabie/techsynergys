<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'ahmed', 'anss', 'contact_id', 'ahmed_time' ,'anss_time'
    ];

    public function contact(){
        return $this->belongsTo('App\Models\Contact', 'contact_id', 'id');
    }
}
