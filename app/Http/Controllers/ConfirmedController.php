<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaction;
use App\Order;
use Session;
use App\Cart;
use DB;
class ConfirmedController extends Controller
{
   
    public function record(Request $request){
        $userEmail=$request->useremail;
        $carts = DB::table('carts')->where([
            ['checkedOut', '=', '0'],
            ['user', '=', $userEmail],
        ])->get();
        // $carts=Cart::where('username',$userEmail)->get();
        //d($carts->count());
        //$cart->status=1;
        $paymentId=request('paymentId');
        $payer=request('payerID');
        Transaction::create([
            'transactionId'=>$paymentId,
            'transactionAmount'=>$request->total,
            'user'=>$request->useremail,
            'orderNumber'=>$request->orderNumber,
            'source'=>'PayPal',
        ]);
        
        //update the cart set 
        $carts = DB::table('carts')->where([
            ['checkedOut', '=', '0'],
            ['user', '=', $userEmail],
        ])->update([
            'checkedOut'=> 1,
            'orderNumber'=>$request->orderNumber
        ]);

        Session::flash('success','Order'.$request->orderNumber.' Successfuly Placed');  
        return redirect()->route('thank.you',['order'=>$request->orderNumber]);
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
