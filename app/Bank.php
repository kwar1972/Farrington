<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    public function getUser(){
        return $this->hasOne('App\User', 'id', 'userid');
    }


}
