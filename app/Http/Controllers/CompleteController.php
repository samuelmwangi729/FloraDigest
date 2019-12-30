<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class CompleteController extends Controller
{
    public function record(){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AaIvaL5r4z3H7PBCkDNDv5T339vzrV-eGYMdXyJ2xn9J7Bhot8yFYcUKQWOHYJz40sjEBFXAT5SShrXk',     // ClientID
                'EC61YuF3CnC5zTZQckBcXqqvysNoEFoWi9jk42hvydZ0jmU4hgvKPgHKSuE9XBhLAV8sQ3ZZrMEXSiFx'      // ClientSecret
            )

            
    );
    $paymentId = request('paymentId');
    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId(request('PayerID'));

    $transaction = new Transaction();
    $amount = new Amount();
    $details = new Details();

    $details->setShipping(10)
        ->setTax(20)
        ->setSubtotal(470);

    

        //set the amount
    $amount->setCurrency('USD');
    $amount->setTotal(500);
    $amount->setDetails($details);
    $transaction->setAmount($amount);

    $result = $payment->execute($execution, $apiContext);

        return $result;
    }
}
