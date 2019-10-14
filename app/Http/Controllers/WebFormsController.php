<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class WebFormsController extends Controller
{
    public function contactform(Request $request)
    {
       // dd($request);
        $this->validate($request, 
        [ 
            'name' => 'required',
            'surname' => 'required', 
            'email' => 'required|email',
            'phone' => 'required', 
            'message' => 'required' 
        ],
        [
            'name.required' => ' The name field is required.',

            'surname.required' => ' The surname field is required.',

            'email.required' => ' The email field is required.',

            'phone.required' => ' The phone field is required.',

            'message.required' => ' The message field is required.',
        ]);
         
        
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

    public function formCall(Request $request)
    {
       // dd($request);
        $this->validate($request, 
        [ 
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required', 
            'message' => 'required' 
        ],
        [
            'name.required' => ' The name field is required.',

            'email.required' => ' The email field is required.',

            'phone.required' => ' The phone field is required.',

            'subject.required' => ' The subject field is required.',

            'message.required' => ' The message field is required.',
        ]);
         
        
        Mail::send('email.freeconsultation',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('webmaster@steinergreves.com');
                $message->to('admin@steinergreves.com', 'Admin')->subject('Steiner Greves Free consultation Form');
            });

        return back()->with('success', 'Thanks for contacting us!'); 
    
    }

    public function liveaccform(Request $request)
    {
        
        $this->validate($request, 
        [ 
            'name' => 'required',
            'surname' => 'required', 
            'email' => 'required|email',
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
         
        
        Mail::send('email.contact',
            array(
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
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
                'country' => $request->get('country'),
                'agreed' => $request->get('eagreedmail')
            ), function($message)
            {
                $message->from('sinapsys@steinergreves.com');
                $message->to('admin@steinergreves.com', 'Admin')->subject('Steiner Greves Contact Form');
            });

         return back()->with('success', 'Thanks for registering your account with us!'); 
    
    }
}
