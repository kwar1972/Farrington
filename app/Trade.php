<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Trade extends Model
{
    public function getUsers(){
        return $this->hasOne('App\User', 'id', 'userid');
    }

    public function getAgent(){
        return $this->hasOne('App\User', 'id', 'agentid');
    }
    
    public function getTicker(){
        return $this->hasOne('App\Ticker', 'id', 'tickerid');
    }
    
}
