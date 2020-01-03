<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaction;
use App\Order;
use Session;
class ConfirmedController extends Controller
{
   
    public function record(Request $request){
        $userEmail=$request->session()->get('userEmail');
        dd($request->useremail);
        $paymentId=request('paymentId');
        $payer=request('payerID');
        dd(request('paymentId'));
        // dd(request('PayId'));
        $order=Order::getOrder();
        // $cartTotal=Cart::getTotal();
        //$total=$cartTotal+$order->shipmentAmount;
         //insert into payments table and then redirect to create the order
        Transaction::create([
            'transactionId'=>$paymentId,
            'transactionAmount'=>$request->total,
            'user'=>$request->useremail,
            'orderNumber'=>$request->orderNumber,
            'source'=>'PayPal',
        ]);
        

        //update the cart set 
        Session::flash('success','Order'.$order->orderNumber.' Successfuly Placed');  
        return redirect()->route('cart.clear');    

    }
    public function updateCart(){
        
        // $user=User::getCurrentUser();
        // $updateStatus=Cart::where('user',$user,'checkedOut',0)->get();
        // $updateStatus->checkedOut=1;
        // dd($user);
        // $updateStatus=Cart::where('user',Auth::user()->email,'checkedOut',0)->get();
        // $updateStatus->checkedOut=1;
    }
}
