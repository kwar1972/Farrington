<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Transaction extends Model
{
    const STATUS_PENDING      = 1;
    const STATUS_APPROVED     = 2;
    const STATUS_SPA          = 3;
    const STATUS_TT           = 4;
    const STATUS_LOADING      = 5;
    public static $rolesLabels = [
        self::STATUS_PENDING       => 'Pending',
        self::STATUS_APPROVED      => 'Approved',
        self::STATUS_SPA           => 'SPA',
        self::STATUS_TT            => 'TT',
        self::STATUS_LOADING       => 'With Loader',
    ];

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
