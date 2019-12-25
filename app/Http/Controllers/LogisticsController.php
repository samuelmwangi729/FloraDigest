<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class LogisticsController extends Controller
{
    public function index(){
        //this shows all the products sold
        return view('logistics')
        ->with('products',Products::orderBy('id','asc')->take(5)->get()->skip(1))
        ->with('newproducts',Products::orderBy('id','desc')->take(5)->get()->skip(1))
        ->with('featured',Products::orderBy('id','desc')->take(1)->get());
    }
}
