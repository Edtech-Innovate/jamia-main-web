<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http; 

class PaymentController extends Controller
{
    public function index()
    {
        return view('web.parts.payment_form');
    }
    public function show()
    {
        $paymentshow = Payments::all();
        return view('content.payment_form', compact('paymentshow'));
    }


    public function store(Request $request)
    {
      
        $validated = Validator::make($request->all(), [
            'region' => 'required',
            'institute_name' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'purpose_of_payment' => 'required',
            'country_code' => 'required',
        ]);

        if ($validated->fails()) {
            return response()->json(['status' => false, 'msg' => $validated->errors()]);
        }

        $txnId = uniqid();
        $amount = $request->purpose_of_payment == 'Center Authorization Fee' ? ($request->region == 'India' ? 20200 : ($request->region == 'International' ? 55000 : 0)) : ($request->purpose_of_payment == 'Other Fee' ? $request->otherAmount : 0);

        if (empty($amount)) {
            return response()->json(['status' => false, 'msg' => 'Currently, we are not accepting fee for ' . $request->purpose_of_payment]);
        }

        $payment = new Payments;
        $payment->name = $request->name;
        $payment->region = $request->region;
        $payment->institute_name = $request->institute_name;
        $payment->mobile = $request->mobile;
        $payment->email = $request->email;
        $payment->purpose_of_payment = $request->purpose_of_payment;
        $payment->txn_id = $txnId;
        $payment->amount = $amount;
        $countryCode = $request->country_name . '+' . $request->country_code;
        $payment->country_code = $countryCode;
        $payment->save();

        $hash = hash('sha512', "3XDM1KLGSE|{$txnId}|{$amount}|{$request->purpose_of_payment}|{$request->name}|{$request->email}|{$request->institute_name}||||||||||5XFZ6OOLBF");
		$splitAmount = json_encode(array("Edtech Innovate Pvt Ltd."=>$amount));
 		//dd(function_exists('curl_init'));
        $response = Http::asForm()->post("https://pay.easebuzz.in/payment/initiateLink", [
                "key" => "3XDM1KLGSE",
                "txnid" => $txnId,
                "amount" => $amount,
                "productinfo" => $request->purpose_of_payment,
                "firstname" => $request->name,
                "phone" => $request->mobile,
                "email" => $request->email,
                "surl" => url('/payment_form'), // Adjusted to Laravel's URL helper
                "furl" => url('/payment_form'),
                "hash" => $hash,
                "udf1" => $request->institute_name,
                "udf2" => "",
                "udf3" => "",
                "split_payments" => $splitAmount,
            ]);
      
      
        // $curl = curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://pay.easebuzz.in/payment/initiateLink",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "key=3XDM1KLGSE&txnid=$txnId&amount=$amount&productinfo={$request->purpose_of_payment}&firstname={$request->name}&phone={$request->mobile}&email={$request->email}&surl=http://127.0.0.1:8001/payment_form&furl=http://127.0.0.1:8001/payment_form&hash={$hash}&udf1={$request->institute_name}&udf2=&udf3=&split_payments=$splitAmount",
        //     CURLOPT_HTTPHEADER => [
        //         "Accept: application/json",
        //         "Content-Type: application/x-www-form-urlencoded"
        //     ],
        // ]);
        // Handle the response
        

        if ($response->successful()) {
            return response()->json(['status' => true, "response" => json_decode($response, true), "key" => "3XDM1KLGSE"]);
        } else {
            return response()->json(['status' => true, 'message' => 'Something went wrong!']);
        }
    }

    public function update(Request $request)
    {
        // $data = $request->getContent();
        // $data = json_decode($data);
        // $response = base64_decode($data->response);
        // $jsonData = $response;
        // $response = json_decode($response);
        // if ($response->success) {
        //   $gatewayId = $response->data->transactionId;
        //   $txnId = $response->data->merchantTransactionId;
        //   $amount = $response->data->amount / 100;

        //   $update = Payments::where('txn_id', $txnId)
        //     ->update([
        //       'gateway_id' => $gatewayId,
        //       'amount' => $amount,
        //       'response' => $jsonData
        //     ]);

        //   if ($update) {
        //     return response()->json(['status' => true, 'msg' => 'Payment updated successfully!']);
        //   } else {
        //     return response()->json(['status' => false, 'msg' => 'Something went wrong!']);
        //   }
        // }
        $response = $request->response;
        if ($response['status'] === 'success') {
            $jsonData = json_encode($response);
            $gatewayId = $response['easepayid'];
            $txnId = $response['txnid'];
            $amount = $response['amount'];
            $update = Payments::where('txn_id', $txnId)
                ->update([
                    'gateway_id' => $gatewayId,
                    'amount' => $amount,
                    'response' => $jsonData
                ]);

            if ($update) {
                return response()->json(['status' => true, 'msg' => 'Payment updated successfully!']);
            } else {
                return response()->json(['status' => false, 'msg' => 'Something went wrong!']);
            }
        }
    }

    public function destroy($id)
    {
    }
}
