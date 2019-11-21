<?php

namespace App;
use Illuminate\Support\Facades\Log;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function user() {
        Log::debug($this->get());
        return $this->hasone('App\User','id','user_id');
    }
}
