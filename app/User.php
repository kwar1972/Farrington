<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App;
Use App\Transaction;
Use App\Bank;
Use App\Holding;

class User extends Authenticatable
{
    use HasRoles;
   
    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password','last_login_at', 'last_login_ip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function getRole($id){
        $role = self::find($id);
        
        return $role->isadmin;
    }

    public function getTransactions(){
        return $this->hasMany('App\Trade', 'userid');
    }

    public function getBank(){
        return $this->hasMany('App\Bank', 'userid', 'id');
    }

    public function getHoldings(){
        return $this->hasMany('App\Holding', 'userid', 'id');
    }
    
    public function balance($id){
        $this->where('id', $id);
        return $this->balance;
    }

}
