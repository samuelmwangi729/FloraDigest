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
use App\Order;
use App\Cart;
class CompleteController extends Controller
{
    public function pay(){
        $order=Order::getOrder();
        $cartTotal=Cart::getTotal();
        $total=$cartTotal+$order->shipmentAmount;
        dd($cartTotal+$order->shipmentAmount);
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AaIvaL5r4z3H7PBCkDNDv5T339vzrV-eGYMdXyJ2xn9J7Bhot8yFYcUKQWOHYJz40sjEBFXAT5SShrXk',     // ClientID
                'EC61YuF3CnC5zTZQckBcXqqvysNoEFoWi9jk42hvydZ0jmU4hgvKPgHKSuE9XBhLAV8sQ3ZZrMEXSiFx'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item2 = new Item();
        $item2->setName('Flora Digest Order Number '.$order->orderNumber)
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setSku("123123") // Similar to `item_number` in Classic API
                ->setPrice($total);
        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));


        $details = new Details();
        $details->setShipping(200)
            ->setTax(300)
            ->setSubtotal($cartTotal);


        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($total)
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
