<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class StockdataController extends Controller
{
    public function IntraDay(){
        $curl = curl_init();
        $ticker1 = "BABA";
        $ticker2 = "QCOM";
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://intraday.worldtradingdata.com/api/v1/intraday?symbol=".$ticker1.",".$ticker2."&&range=7&interval=60&api_token=rB9QJvzUdrXiIA6hWwJYAYZRkH9xPBcS31oxpqkwLahSDRXaUkut5xFXA7i4",
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
            return response()->json($response, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
}
