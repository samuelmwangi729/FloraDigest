<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsCategories;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Products;
class ShopController extends Controller
{
    public function index(){
        return view('shop.index')
        ->with('categories',ProductsCategories::orderBy('id','desc')->take(10)->get())
        ->with('brands',Brand::all())
        ->with('colors',Color::orderBy('id','desc')->take(5)->get())
        ->with('products',Products::orderBy('id','desc')->take(1)->get())
        ->with('newProducts',Products::orderBy('id','desc')->get()->take(12));
    }

    public function show(Request $request){
        dd($request->all());
    }
}
