<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use Session;

class CompleteController extends Controller
{






    public function pay(){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AaIvaL5r4z3H7PBCkDNDv5T339vzrV-eGYMdXyJ2xn9J7Bhot8yFYcUKQWOHYJz40sjEBFXAT5SShrXk',     // ClientID
                'EC61YuF3CnC5zTZQckBcXqqvysNoEFoWi9jk42hvydZ0jmU4hgvKPgHKSuE9XBhLAV8sQ3ZZrMEXSiFx'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setSku("123123") // Similar to `item_number` in Classic API
                ->setPrice(7.5);
        $item2 = new Item();
        $item2->setName('Granola bars')
                ->setCurrency('USD')
                ->setQuantity(5)
                ->setSku("321321") // Similar to `item_number` in Classic API
                ->setPrice(2);

        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));


        $details = new Details();
        $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);


        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());
        
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("http://localhost:8000/Complete")
                ->setCancelUrl("http://localhost:8000/cancel");
            
        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
        $payment->create($apiContext);

        return redirect($payment->getApprovalLink());
    }
    public function record(){
       
        
        Session::flash('success','Your Order has been placed');
        return redirect('/');
    }
}
