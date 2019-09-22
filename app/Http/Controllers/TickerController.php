<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App;
use App\Ticker;

class TickerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tickers = Ticker::all();
        
        return response()->json($tickers, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticker = New Ticker;
        $ticker->ticker = $request->ticker;
        $ticker->description = $request->description;
        $ticker->quantity = $request->quantity;
        $ticker->price = $request->price;
        $ticker->active = 1;
        $ticker->created_at = Carbon::now()->toDateTimeString();
        $ticker->updated_at = Carbon::now()->toDateTimeString();
        try {
            $ticker->save();
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
        $ticker = Ticker::find($id);
        
        return response()->json($ticker, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
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
        //
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
        //dd($request->all());
        $ticker = Ticker::find($id);
        $ticker->ticker = $request->ticker;
        $ticker->description = $request->description;
        $ticker->quantity = $request->quantity;
        $ticker->price = $request->price;
        $ticker->created_at = Carbon::now()->toDateTimeString();
        $ticker->updated_at = Carbon::now()->toDateTimeString();
        try {
            $ticker->save();
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
        $ticker = Ticker::find($id);
        try {
            $ticker->delete();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }
    }

    public function swapticker(Request $request)
    {
        $tickerId = $request->tickerId;
        $tickerState = $request->tickerVal;
        $ticker = Ticker::find($tickerId);
        $ticker->active = $tickerState;
        $ticker->save();
        if($tickerState == 1){
            $message = '1';
            return response()->json(['success' => $message], 200);
        } else {
            $message = '0';
            return response()->json(['success' => $message], 200);
        }
    }

    // public function stockPrice($id)
    //{
    //     $tickers = Ticker::all();
    //     $tickerscount = $tickers->count();
        
    //     $curl = curl_init();
        
    //     if($tickerscount !== 1){
    //         $tickerfinal = array();
    //         foreach($tickers as $tickers1){
    //             $ticker1 = $tickers1->ticker;
    //             $ticker1f = preg_replace('/:/', '', strstr($ticker1, ':'));
    //             array_push($tickerfinal, $ticker1f.',');
    //         }
    
    //         $str1 = "https://api.worldtradingdata.com/api/v1/stock?symbol=";
    //         $str2 = "&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4";
            
    //         function create_query_string($tickerfinal) {
            
    //             return implode($tickerfinal);
    //         }
            
    //         $url = create_query_string($tickerfinal);
    //         $url = substr_replace($url ,"", -1);
    //         $url = $str1.$url.$str2; 
           
    //         curl_setopt_array($curl, array(
    //             CURLOPT_URL => $url,
    //             CURLOPT_RETURNTRANSFER => true,
    //             CURLOPT_TIMEOUT => 30000,
    //             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //             CURLOPT_SSL_VERIFYHOST => false,
    //             CURLOPT_SSL_VERIFYPEER => false,
    //             CURLOPT_CUSTOMREQUEST => "GET",
    //             CURLOPT_HTTPHEADER => array(
    //                 'Access-Control-Allow-Origin: *',
    //                 'Content-Type: application/json',
    //             ),
    //         ));
    //     }else{
    //         $ticker1 = $tickers[0]->ticker;
            
    //         $ticker1f = preg_replace('/:/', '', strstr($ticker1, ':'));
    //         curl_setopt_array($curl, array(
    //             CURLOPT_URL => "https://api.worldtradingdata.com/api/v1/stock?symbol=".$ticker1f."&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4",
    //             CURLOPT_RETURNTRANSFER => true,
    //             CURLOPT_TIMEOUT => 30000,
    //             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //             CURLOPT_SSL_VERIFYHOST => false,
    //             CURLOPT_SSL_VERIFYPEER => false,
    //             CURLOPT_CUSTOMREQUEST => "GET",
    //             CURLOPT_HTTPHEADER => array(
    //                 'Access-Control-Allow-Origin: *',
    //                 'Content-Type: application/json',
    //             ),
    //         ));
    //     }
    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
    //     curl_close($curl);
        
    //     if ($err) {
    //         echo "cURL Error #:" . $err;
    //     } else {
    //         $array = json_decode($response, true);
    //         $response = $array;
    //         $ticker = Ticker::count();
    //         $symbol1 = $response['data'][0]['symbol'];
    //         dd($ticker);
            
    //         // $tick = Ticker::all();
    //         // $tick = $tick->where('ticker', $reps2);
            
    //         $array = json_decode($response, true);
    //         $response = $array;
            
    //         return response()->json($response, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    //     }
    // }
}
