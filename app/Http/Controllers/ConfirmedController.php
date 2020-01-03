<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaction;
class ConfirmedController extends Controller
{
   
    public function record(){
       
        dd(request('paymentId'));
        Transaction::create([
            'transactionId'=>'required',
            'transactionAmount'=>'required',
            'user'=>'required',
            'source'=>'required',
        ]);
        //insert into payments table and then redirect to create the order

    }
}
