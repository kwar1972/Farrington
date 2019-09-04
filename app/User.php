<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;
Use App\Transaction;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * Roles
     */
    const ROLE_SUPERADMIN     = 1;
    const ROLE_ADMIN          = 2;
    const ROLE_AGENT          = 3;
    const ROLE_LOADER         = 4;
    const ROLE_CLIENT         = 5;
    public static $rolesLabels = [
        self::ROLE_SUPERADMIN     => 'Super Admin',
        self::ROLE_ADMIN          => 'Admin',
        self::ROLE_AGENT          => 'Agent',
        self::ROLE_LOADER         => 'Loader',
        self::ROLE_CLIENT         => 'Client',
    ];

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
        'password', 'remember_token',
    ];

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail); // my notification
    }

    public function getRole($id){
        $role = self::find($id);
        
        return $role->isadmin;
    }

    public function getTransactions(){
        return $this->hasMany('App\Transaction', 'userid');
    }
}
