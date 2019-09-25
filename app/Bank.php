<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Bank extends Model
{

    public function getUser(){
        return $this->hasOne('App\User', 'id', 'userid');
    }

    
}
