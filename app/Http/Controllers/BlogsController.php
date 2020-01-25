<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class BlogsController extends Controller
{
    //add a new bloger 
    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'admin'=>'0',
            'level'=>'Blogger'
        ]);
        Session::flash('success','Account Successfully Created,You can now successfully login');
        return redirect()->back();
    }
}
