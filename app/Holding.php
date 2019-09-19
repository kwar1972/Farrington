<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Holding extends Model
{
    public function trades(){
        return $this->hasMany('App\User', 'id', 'userid');
    }
}
