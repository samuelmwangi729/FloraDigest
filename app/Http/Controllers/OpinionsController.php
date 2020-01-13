<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;

class OpinionsController extends Controller
{
    public function index(){
        return view('opinions.index')->with('opinions',Opinion::all());
    }
}
