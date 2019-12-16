<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticsController extends Controller
{
    public function index(){
        return view('politics/view');
    }
}
