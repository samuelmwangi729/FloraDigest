<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Hash;

class AccountController extends Controller
{
    public function index(){
        return view('Accounts.password');
    }
    public function update(Request $request){
        $this->validate($request,[
            'NewPassword'=>'required',
            'PasswordConfirmation'=>'required',
        ]);
        if($request->NewPassword != $request->PasswordConfirmation){
            Session::flash('error','Passwords Do Not Match');
            return redirect()->back();
        }else{
            $user=User::find(Auth::user()->id);
            $user->password=Hash::make($request->NewPassword);
            $user->save();
            Session::flash('success','Password Successfully Changed');
            return redirect()->back();
        }
    }
}
