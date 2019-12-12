<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticsController extends Controller
{
    public function index(){
        //this shows all the products sold
        return view('logistics');
    }
}
