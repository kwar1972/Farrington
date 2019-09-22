<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App;
use App\User;
use App\Ticker;
use App\Trade;
use App\Holding;

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
        $trades = Trade::where('userid', $id)->with('getTicker')->with('getAgent')->with('getUsers')->get();
        
        return response()->json($trades, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function getHoldings($id)
    {
        $holdings = Trade::where('userid', $id)->get();
        return response()->json($holdings, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function stockData($tickereal){
        $curl = curl_init();
        $ticker1 = $tickereal;
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.worldtradingdata.com/api/v1/stock?symbol=".$ticker1."&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Access-Control-Allow-Origin: *',
                'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $array = json_decode($response, true);
            
            $response = $array;
            return $response;
        }
    }


    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trade = New Trade;
        $trade->userid = $request->clientid;
        $trade->tickerid = $request->tickerid;
        $trade->agentid = $request->agentid;
        $trade->amount = $request->amount;
        $trade->price = $request->price;
        $trade->fee = $request->fee;
        $trade->total = $request->total;
        $trade->status = 'Pending';
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
        $trade = Trade::find($id);
        
        return response()->json($trade, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $trade->fee = $request->fee;
        $trade->total = $request->total;
        $trade->status = $request->status;
        $trade->deposit_at = $request->deposit;
        $trade->purchased_at = $request->purchased;
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
