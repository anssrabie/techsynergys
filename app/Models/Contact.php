<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'subject', 'message' ,'seen', 'country', 'city','whats','seen_at'
    ];

    public function email(){
        return $this->hasOne('App\Models\Email', 'contact_id', 'id');
    }

}
