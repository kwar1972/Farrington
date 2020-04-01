<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class WebFormsController extends Controller
{
    public function contactform(Request $request)
    {
        $this->validate($request, [ 'name' => 'required','surname' => 'required', 'email' => 'required|email','phone' => 'required', 'message' => 'required' ]);
         
        
        Mail::send('email.contact',
            array(
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('webmaster@steinergreves.com');
                $message->to('admin@steinergreves.com', 'Admin')->subject('Steiner Greves Contact Form');
            });

         return back()->with('success', 'Thanks for contacting us!'); 
    
    }
    public function liveaccform(Request $request)
    {
        
        $this->validate($request, [ 'name' => 'required','surname' => 'required', 'email' => 'required|email','phone' => 'required', 'message' => 'required' ]);
         
        
        Mail::send('email.contact',
            array(
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('webmaster@steinergreves.com');
                $message->to('admin@steinergreves.com', 'Admin')->subject('Steiner Greves Contact Form');
            });

         return back()->with('success', 'Thanks for contacting us!'); 
    
    }
    public function register2(Request $request)
    {
        
        
         return view('web.register2'); 
    
    }

    public function registerFinal(Request $request)
    {
        
        $this->validate($request, [ 
            'title' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'datepickerDefault' => 'required',
            'countryc' => 'required',
            'coin' => 'required',
            'referral' => 'nullable',
            'addr1' => 'required',
            'addr2' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'agreed' => 'required'
            ]);
         
        
        Mail::send('email.register',
            array(
                'title' => $request->get('title'),
                'name' => $request->get('name'),
                'lastname' => $request->get('lastname'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'datepickerDefault' => $request->get('datepickerDefault'),
                'countryc' => $request->get('countryc'),
                'coin' => $request->get('coin'),
                'referral' => $request->get('referral'),
                'addr1' => $request->get('addr1'),
                'addr2' => $request->get('addr2'),
                'city' => $request->get('city'),
                'zip' => $request->get('zip'),
                'country' => $request->get('country')
            ), function($message)
            {
                $message->from('webmaster@steinergreves.com');
                $message->to('admin@steinergreves.com', 'Admin')->subject('Steiner Greves NEW REGISTRATION!');
            });

         return back()->with('success', 'Registration request successfully sent!'); 
    
    }
}
