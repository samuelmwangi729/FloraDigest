<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Other;
class OthersController extends Controller
{
    public function index(){
        return view('others.all')->with('others',Other::all());
    }
    public function single($slug){
        return view('others.single')->with('other',Other::where('slug',$slug)->get());
    }
}
