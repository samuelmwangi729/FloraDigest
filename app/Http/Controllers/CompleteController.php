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
use Auth;
use App\Cart;
class CompleteController extends Controller
{
    public function pay(Request $request){
        $order=Order::getOrder();
        $cartTotal=Cart::getTotal();
        $userEmail=Cart::getUser();
        $total=$cartTotal+$order->shipmentAmount;
        //dd($cartTotal+$order->shipmentAmount);
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AZFfuQ2-w87R9_KL_as5JgnqUCiFOAYTlufGoiae8lFP7W2pnmxgY2ApvGVoooK4k4fTQKR-EocTxV3E',     // ClientID
                'EKBf7MRhpzTb2uhy9O-G1gEFijeVE02_Dl_bvEYOHf34DW9eAICyIilBG4inUJk_JJaqPLjhGYocrx7i'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item2 = new Item();
        $item2->setName('Flora Digest Order Number '.$order->orderNumber)
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setSku("123123") // Similar to `item_number` in Classic API
                ->setPrice($cartTotal);
        $itemList = new ItemList();
        $itemList->setItems(array($item2));


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
        $redirectUrls->setReturnUrl("https://floradigest.com/Complete/".$order->orderNumber."/".$userEmail."/".$total)
                ->setCancelUrl("https://floradigest.com/cancel");
            
        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
        $payment->create($apiContext);
        //what next after paying the amount?
        $order=Order::where('username',Auth::user()->email)->get()->first();
        $order->status=1;
        $order->save();
        return redirect($payment->getApprovalLink());
    }
}
