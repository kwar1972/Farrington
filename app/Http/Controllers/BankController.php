<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App;
use App\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function savebank(Request $request, $id){
        $bank = Bank::find($id);
        $bank->bankname = $request->bankname;
        $bank->country = $request->country;
        $bank->accid = $request->accid;
        $bank->account = $request->account;
        $bank->accname = $request->accname;
        $bank->swift = $request->swift;
        $bank->iban = $request->iban;
        $bank->currency = $request->currency;
        $bank->updated_at = Carbon::now()->toDateTimeString();

        try {
            $bank->save();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
        }

    }

    public function savenewbank(Request $request, $id){
        $bank = New Bank;
        $bank->userid = $id;
        $bank->bankname = $request->bankname;
        $bank->country = $request->country;
        $bank->accid = $request->accid;
        $bank->account = $request->account;
        $bank->accname = $request->accname;
        $bank->swift = $request->swift;
        $bank->iban = $request->iban;
        $bank->currency = $request->currency;
        $bank->updated_at = Carbon::now()->toDateTimeString();

        try {
            $bank->save();
            $message = '1';

            return response()->json(['success' => $message], 200);

        } catch (\Exception $exception) 
        {
            $message = '0'.$exception->getCode();

            return response()->json(['success' => $message], 200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bank = Bank::where('userid', $id)->get();

        return response()->json($bank, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
