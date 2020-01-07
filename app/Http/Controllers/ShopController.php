<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsCategories;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Products;
use App\Cart;
use Session;
use App\Models\County;
use App\Models\Town;
use Auth;
use App\Wishlist;
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

    public function show($request){
        $product=Products::where('slug',$request)->get()->first();
        return view('shop.product_single')->with('product',$product);
    }

    public function cart(Request $request){
        if(!Auth::check()){
            Session::flash('error','Please Login or Register');
            return redirect()->back();
        }
        $product=Products::where('slug',$request->product)->get()->first();
        $exist=Cart::where([
            'product_slug'=>$request->product,
            'user'=>Auth::user()->email
        ])->get()->first();
        if(!is_null($exist)){
            if($exist->product_slug==$request->product){
                Session::flash('error','Product already In Cat');
                return redirect()->back();
            }
        }
        Cart::create([
            'product_slug'=>$product->slug,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'total'=>$request->price*$request->qty,
            'user'=>Auth::user()->email
        ]);
        Session::flash('success','Successfully Added to Cart');
        return redirect()->back();
    }

    public function addWishlist($request){
        if(!Auth::check()){
            Session::flash('error','Please Login');
            return redirect()->back();
        }
        $exist=Wishlist::where('product_slug',$request)->get()->first();
        if(!is_null($exist)){
            if($exist->product_slug==$request){
                Session::flash('error','Product already In wishlist');
                return redirect()->back();
            }
        }
        Wishlist::create([
            'product_slug'=>$request,
            'user'=>Auth::user()->email
        ]);
        Session::flash('success','The Product added to  wishlist');
        return redirect()->back();
    }
    public function singleCart($slug){
        if(!Auth::check()){
            Session::flash('error','Please Login or Register');
            return redirect()->back();
        }
        $product=Products::where('slug',$slug)->get()->first();
        //check if the product is i the cart
        $checkCart=Cart::where([
            'product_slug'=>$slug,
            'user'=>Auth::user()->email,
            'checkedOut'=>0,
            'deleted_at'=>null
            ])->get()->first();
        if(!is_null($checkCart)){
            if($checkCart->product_slug==$slug){
                Session::flash('error','The Product already In Cart');
                return redirect()->back();
            }
        }
        Cart::create([
            'product_slug'=>$slug,
            'price'=>$product->newPrice,
            'qty'=>1,
            'total'=>$product->newPrice,
            'user'=>Auth::user()->email
        ]);
        Session::flash('success','Successfully Added to Cart');
        return redirect()->back();
    }
    public function thankyou(Request $request){
        return view('shop.thankyou')->with('order',$request->order);
    }
    
}
