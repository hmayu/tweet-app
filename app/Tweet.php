<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [
        'user_id',
        'text',
    ];

    public function user() 
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
