<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App;
use App\Trade;
use App\Ticker;
use App\User;

class HoldingController extends Controller
{
    public function stockData($tickers, $tickerscount)
    {   
        $curl = curl_init();
        
        if($tickerscount !== 1){
            $tickerfinal = array();
            foreach($tickers as $tickers1){
                $ticker1 = $tickers1->ticker;
                $ticker1f = preg_replace('/:/', '', strstr($ticker1, ':'));
                array_push($tickerfinal, $ticker1f.',');
            }
            $str1 = "https://api.worldtradingdata.com/api/v1/stock?symbol=";
            $str2 = "&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4";
            
            function create_query_string($tickerfinal) {
            
                return implode($tickerfinal);
            }
            
            $url = create_query_string($tickerfinal);
            $url = substr_replace($url ,"", -1);
            $url = $str1.$url.$str2; 
           
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    'Access-Control-Allow-Origin: *',
                    'Content-Type: application/json',
                ),
            ));
        }else{
            $ticker1 = $tickers[0]->ticker;
            $ticker1f = preg_replace('/:/', '', strstr($ticker1, ':'));
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.worldtradingdata.com/api/v1/stock?symbol=".$ticker1f."&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    'Access-Control-Allow-Origin: *',
                    'Content-Type: application/json',
                ),
            ));
        }
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $array = json_decode($response, true);
            $response = $array;
            //dd($response);
            return $response;
        }
    }


    public function clientHoldings()
    {
        //$id = auth()->user()->id;
        $id = 28;
        $deposits = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->sum('total');

        if($deposits !== 0){
            $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->count();
            $ticker = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $tickers = $ticker->pluck('getTicker');
            $tickers = $tickers->unique('ticker');
            $tickerscount = $tickers->count();
            
            $tickerdata = $this->stockData($tickers,$tickerscount);
            
            $tickerdata = collect($tickerdata['data'], true);
            
            return view('client.myholdings')->with('trades', $trades)->with('tickerdata', $tickerdata);
        }else{

            $nodata = 0;

            return view('client.myholdings')->with('nodata', $nodata);
        }
    }

    public function holdingsList()
    {   
        //$id = auth()->user()->id;
        $id = 28;
        $deposits = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->sum('total');

        if($deposits !== 0){
            $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->count();
            $ticker = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $tickers = $ticker->pluck('getTicker');
            $tickers = $tickers->unique('ticker');
            $tickerscount = $tickers->count();
            
            $tickerdata = $this->stockData($tickers,$tickerscount);
            
            $tickerdata = collect($tickerdata['data'], true);
        }

        $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
        //$trades->push($tickerdata);
        //dd($trades);
        return response()->json($trades, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

}
