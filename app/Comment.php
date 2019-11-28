<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'tweet_id',
        'comment',
    ];

    public function user() 
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function tweet() 
    {
        return $this->belongsTo('App\Tweet','tweet_id','id');
    }
}
