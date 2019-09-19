<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Holding extends Model
{

    protected $table = 'holdings';

    public function trades(){
        return $this->hasMany('App\User', 'id', 'userid');
    }
}
