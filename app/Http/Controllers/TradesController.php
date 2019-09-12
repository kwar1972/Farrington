<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App;
use App\User;
use App\Ticket;
use App\Trade;

class TradesController extends Controller
{
    //Trade Status
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Trades = Trade::with('getUsers')->with('getAgent')->with('getTicker')->get();
        return response()->json($Trades, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tradeuser(){
        $users = User::where('isadmin','5')->get();
        
        return response()->json($users, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tradeagent(){
        $users = User::where('isadmin','3')->get();
       
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

    public function tradelist($id)
    {
        $trades = Trade::where('userid', $id)->get();
        
        return response()->json($trades, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function getHoldings($id)
    {
        $holdings = Trade::where('userid', $id)->get();
        return response()->json($holdings, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $trade = New Trade;
        $trade->userid = $request->clientid;
        $trade->tickerid = $request->tickerid;
        $trade->agentid = $request->agentid;
        $trade->amount = $request->amount;
        $trade->price = $request->price;
        $trade->total = $request->total;
        $trade->status = $request->status;
        $trade->created_at = Carbon::now()->toDateTimeString();
        $trade->updated_at = Carbon::now()->toDateTimeString();
        try {
            $trade->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trade = Trade::find($id);
        
        return response()->json($trade, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
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
        $trade = Trade::find($id);
        $trade->userid = $request->clientid;
        $trade->tickerid = $request->tickerid;
        $trade->agentid = $request->agentid;
        $trade->amount = $request->amount;
        $trade->price = $request->price;
        $trade->total = $request->total;
        $trade->status = $request->status;
        $trade->updated_at = Carbon::now()->toDateTimeString();
        try {
            $trade->save();
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
        $trade = Trade::find($id);
        try {
            $trade->delete();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
    }
}
