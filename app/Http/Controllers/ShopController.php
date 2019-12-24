<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsCategories;

class ShopController extends Controller
{
    public function index(){
        return view('shop.index')->with('categories',ProductsCategories::all());
    }
}
