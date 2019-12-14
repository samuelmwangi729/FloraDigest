<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    public function index(){
        return view('academia/view');
    }
}
