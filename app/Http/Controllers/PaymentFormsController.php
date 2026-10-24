<?php

namespace App\Http\Controllers;

use App\Models\payment_forms;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PaymentFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $paymentshow=payment_forms::all();
      return view('content.payment_form',compact('paymentshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'region' => 'required',           
            'purpose_payment' => 'required',
            'institute_name' => 'required',
            'person_name' => 'required',
            'mobile_number' => 'required',
            'payment_email' => 'required',
           
            
           
        ]);
        if ($validated->fails()) {
            return response()->json(['status' => 'error', 'msg' => $validated->errors()]);
        }
        $paymentSave = new payment_forms();
        $paymentSave->region = $request->region;
        $paymentSave->purpose_payment = $request->purpose_payment;
        $paymentSave->institute_name = $request->institute_name;
        $paymentSave->person_name = $request->person_name;
        $paymentSave->mobile_number = $request->mobile_number;      
        $paymentSave->payment_email = $request->payment_email;      
        $paymentSave->payment_id = $request->payment_id;    
        $paymentSave->save();
        if ($paymentSave) {
            return response()->json(['status' => 200, 'jamia_form_id' => $paymentSave->id]);
        } else {
            return response()->json(['status' => 400, 'message' => 'No Data Found']);
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
     * @param  \App\Models\payment_forms  $payment_forms
     * @return \Illuminate\Http\Response
     */
    public function show(payment_forms $payment_forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment_forms  $payment_forms
     * @return \Illuminate\Http\Response
     */
    public function edit(payment_forms $payment_forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment_forms  $payment_forms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment_forms $payment_forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment_forms  $payment_forms
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment_forms $payment_forms)
    {
        //
    }
}
