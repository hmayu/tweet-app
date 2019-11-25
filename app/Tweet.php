<?php

namespace App;
use Illuminate\Support\Facades\Log;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function user() {
        Log::debug($this->get());
        return $this->belongsTo('App\User','user_id','id');
    }
}
