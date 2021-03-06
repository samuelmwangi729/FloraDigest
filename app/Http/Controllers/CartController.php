<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\Cart;
use App\Models\Products;
use App\Models\County;
use App\Models\Town;
use App\Models\Shipping;
use App\Models\Payment;
use Carbon\Carbon;
class CartController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cart = Cart::where([
            'checkedOut'=> 0,
            'user'=>Auth::user()->email,
            'deleted_at'=>null
        ])->get();
        if($cart->count()==0){
            Session::flash('error','The Shopping cart is currently Empty');
            return redirect()->back();
        }
        // $cart=Cart::where('user',Auth::user()->email)->get();
        // dd($cart['id']);
        // $product=Products::where('slug',$cart->product_slug)->get();
        // dd($product);
        return view('shop.cart')
        ->with('cart',$cart)
        ->with('counties',County::all())
        ->with('towns',Town::all())
        ->with('rates',Shipping::all())
        ->with('payments',Payment::all())        
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function remove($slug)
    {   
        $product=Cart::where([
            'product_slug'=>$slug,
            'user'=>Auth::user()->email
        ])->get()->first();  
        $now=Carbon::now()->toDateTimeString();
        $product->deleted_at=$now;
        $product->save();
        Session::flash('error','Product Successfully removed from Cart');
        return redirect('/logistics');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
