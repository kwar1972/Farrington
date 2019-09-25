<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trade;

class Ticker extends Model
{
    public function getUsers(){
        return $this->hasMany('App\Trade', 'tickerid', 'id');
    }
}
