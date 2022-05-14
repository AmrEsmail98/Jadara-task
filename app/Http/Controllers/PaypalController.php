<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as paypall;


class PaypalController extends Controller

{

   public function createpaypal()

   {

    return view('products.paypall');

   }

public function processPaypal(Request $request)

{

    $provider = new paypall;

        $provider->setApiCredentials(config('paypal'));

        $paypalToken = $provider->getAccessToken();



        $response = $provider->createOrder([

            "intent" => "CAPTURE",

            "application_context" => [

                "return_url" => route('processSucees'),

                "cancel_url" => route('processCancel'),

            ],

            "purchase_units" => [

                0 => [

                    "amount" => [

                        "currency_code" => "USD",

                        "value" => "{{$request->Price}}"

                    ]

                ]

            ]

        ]);



        if (isset($response['id']) && $response['id'] != null) {



            // redirect to approve href

            foreach ($response['links'] as $links) {

                if ($links['rel'] == 'approve') {

                    return redirect()->away($links['href']);

                }

            }



            return redirect()

                ->route('createpaypal')

                ->with('error', 'Something went wrong.');



        } else {

            return redirect()

                ->route('createpaypal')

                ->with('error', $response['message'] ?? 'Something went wrong.');

        }

}





public function processSuccess(Request $request)

{



        $provider = new paypall;

        $provider->setApiCredentials(config('paypal'));

        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request['token']);



        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            return redirect()

                ->route('createpaypal')

                ->with('success', 'Transaction complete.');

        } else {

            return redirect()

                ->route('createpaypal')

                ->with('error', $response['message'] ?? 'Something went wrong.');

        }



}



 public function processCancel(Request $request)

    {

        return redirect()

            ->route('createpaypal')

            ->with('error', $response['message'] ?? 'You have canceled the transaction.');

    }



}
