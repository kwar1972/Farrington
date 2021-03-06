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
}
