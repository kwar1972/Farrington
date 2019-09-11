<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class permController extends Controller
{
    
    public function preTorole(){
        
        $role = User::find(1);
       
        $role->hasAnyRole(Role::all());
        

        return response()->json($role, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);

        
        


    }
}
