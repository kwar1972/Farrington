<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required', 
            'datepickerDefault' => 'required',
            'countryc' => 'required', 
            'coin' => 'required', 
            'referral' => 'nullable', 
            'addr1' => 'required', 
            'addr2' => 'nullable', 
            'city' => 'required', 
            'zip' => 'required', 
            'country' => 'required', 
            'agreed' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'datepickerDefault' => $data['datepickerDefault'],
            'countryc' => $data['countryc'],
            'coin' => $data['coin'],
            'referral' => $data['referral'],
            'addr1' => $data['addr1'],
            'addr2' => $data['addr2'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'country' => $data['country'],
        ]);
        
        Mail::send('email.contact',
            array(
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'datepickerDefault' => $data['datepickerDefault'],
                'countryc' => $data['countryc'],
                'coin' => $data['coin'],
                'referral' => $data['referral'],
                'addr1' => $data['addr1'],
                'addr2' => $data['addr2'],
                'city' => $data['city'],
                'zip' => $data['zip'],
                'country' => $data['country'],
            ), function($message)
            {
                $message->from('webmaster@steinergreves.com');
                $message->to('admin@steinergreves.com', 'Admin')->subject('Steiner Greves New Registration!');
            });
    }
}
