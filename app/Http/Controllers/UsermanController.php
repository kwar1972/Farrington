<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App;
use App\User;
use App\Trade;

class UsermanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return response()->json($users, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = New User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->addr = $request->addr;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->validated = '1';
        $user->isadmin = $request->isadmin;
        switch ($request->isadmin){
            case 2:
                $user->assignRole('admin');
            case 3:
                $user->assignRole('loader');
            case 4:
                $user->assignRole('agent');
            case 5:
                $user->assignRole('client');
        };
        $user->isactive = '1';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->updated_at = Carbon::now()->toDateTimeString();
        try {
            $user->save();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->with('getBank')->get();
        
        return response()->json($user, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showClient()
    {
        $id = auth()->user()->id;
        $user = User::where('id',$id)->with('getTransactions')->with('getBank')->get();
        //dd($user);
        return view('client.mydetails')->with('user', $user);
    }

    public function clientDetails($id){
        $user = User::find($id);

        return response()->json($user, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function clientTrades(){
        return view('client.mytrades');
    }

    public function mytradelist(){
        $id = auth()->user()->id;
        
        $trades = Trade::where('userid', $id)->with('getUsers')->with('getAgent')->with('getTicker')->get();
        //dd($trades);
        return response()->json($trades, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function clientHoldings(){
        return view('client.myholdings');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resendVerificationEmail($id)
    {
        $user = User::find($id);
        try {
            $user->sendEmailVerificationNotification();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        if($request->password !== null){
        $user->password = Hash::make($request->password);
        };
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->addr = $request->addr;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->country = $request->country;
        switch ($request->isadmin){
            case 2:
                $user->assignRole('admin');
            case 3:
                $user->assignRole('loader');
            case 4:
                $user->assignRole('agent');
            case 5:
                $user->assignRole('client');
        };
        $user->isactive = $request->isactive;
        $user->updated_at = Carbon::now()->toDateTimeString();
        try {
            $user->save();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function savedetails(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->addr = $request->addr;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->zip = $request->zip;
        $user->country = $request->country;
        $user->updated_at = Carbon::now()->toDateTimeString();
        try {
            $user->save();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        try {
            $user->delete();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
    }
}
