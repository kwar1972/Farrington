<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use App;
use App\Trade;
use App\Ticker;
use App\User;
use Artisan;

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
            
            function create_query_string1($tickerfinal) {
            
                return implode($tickerfinal);
            }
            
            $url = create_query_string1($tickerfinal);
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
        
            return $response;
        }
    }

    public function stockprice($id)
    {   

        $ticker1f = Ticker::find($id);
        $isipo = $ticker1f->ipo;
        $paidprice = $ticker1f->price;
        if($isipo !== 1){
            $ticker1f = $ticker1f->ticker;
            $curl = curl_init();
            $ticker1f = preg_replace('/:/', '', strstr($ticker1f, ':'));
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
        
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $array = json_decode($response, true);
                $response = $array;
                $response = $response['data'][0]['price'];
                return $response;
            }
        }else{
            $response = $paidprice;
            return $response;
        };
    }
    public function intraDay($tickers,$tickerscount)
    {
        $curl = curl_init();
        
        $str1 = "https://intraday.worldtradingdata.com/api/v1/intraday?symbol=";
        $str2 = "&range=7&interval=60&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4";
        $ticker1 = $tickers->ticker;
        $ticker1f = preg_replace('/:/', '', strstr($ticker1, ':'));
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://intraday.worldtradingdata.com/api/v1/intraday?symbol=".$ticker1f."&range=7&interval=60&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4",
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

    public function clientHoldings()
    {
        $id = auth()->user()->id;
        $deposits = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->get();
        $deposits = $deposits->wherein('ipo', 0);
        
        if($deposits->count() !== 0 ){
            $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->count();
            $trade = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $ticker = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $tickers = $ticker->pluck('getTicker');
            $tickers = $tickers->unique('ticker');
            $tickerscount = $tickers->count();
            $tickerdata = $this->stockData($tickers,$tickerscount);
            $tickerdata = collect($tickerdata['data'], true);
            $intra2 = array();
            $tickers = $tickers->where('ipo', '<>', 1);
            
            foreach($tickers as $ticker){
                $intraday = $this->intraDay($ticker,$tickerscount);
                $intra = collect($intraday['intraday'], true);
                $intra->toArray();
                array_push($intra2, $intra);
            }
            $intraday = collect($intra2, true);
                        
            
            return view('client.myholdings')->with('trade', $trade)->with('tickerdata', $tickerdata);
        }else{

            $nodata = 0;

            return view('client.myholdings')->with('nodata', $nodata);
        }
    }

    public function checkDebug($status)
    {
        Artisan::call($status);
        return "<h1>The website is..".$status."!!</h1>";
    }

    public function holdingsList()
    {   
        $id = auth()->user()->id;
        $deposits = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->get();
        $deposits = $deposits->wherein('ipo', 0);
        if($deposits->count() !== 0){
            $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->count();
            $ticker = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $tickers = $ticker->pluck('getTicker');
            $tickers = $tickers->unique('ticker');
            $tickerscount = $tickers->count();
            $tickerdata = $this->stockData($tickers,$tickerscount);
            
            $tickerdata = collect($tickerdata['data'], true);
        }
        $trades = array();
        $tradesraw1 = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
        $tradesraw1 = $tradesraw1->toArray();
        
        foreach($tradesraw1 as $tradesraw){
            $ipocheck = $tradesraw['get_ticker']['ipo'];
            if($ipocheck !== 1){
                $ticker = $tradesraw['get_ticker']['ticker'];
                $amount = $tradesraw['amount'];
                $pricepaid = $tradesraw['price'];
                $ticker1 = preg_replace('/:/', '', strstr($ticker, ':'));
                $pricesell = $tickerdata->where('symbol', $ticker1);
                $pricesell = $pricesell->pluck('price');
                $pricesell = $pricesell->toArray();
                $key = array_keys($pricesell);
                $key = $key[0];
                $pricesell = $pricesell[$key];
            }else{
                $ticker = $tradesraw['get_ticker']['ticker'];
                $amount = $tradesraw['amount'];
                $pricepaid = $tradesraw['price'];
                $pricesell = $tradesraw['price'];
            };
            $totalpaid = $tradesraw['total'];
            $totpos = $amount * $pricesell;
            $totearn = $totpos - $totalpaid;
            $totsold = 0;
            array_push($trades, array(
                'ticker' => $ticker,
                'amount' => $amount,
                'pricepaid' => $pricepaid,
                'pricesell' => $pricesell,
                'totalpaid' => $totalpaid,
                'totpos' => $totpos,
                'totearn' => $totearn,
                'totsold' => $totsold,
            ));
            
        }

        $trades = collect($trades, true);
        
        return response()->json($trades, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

}
