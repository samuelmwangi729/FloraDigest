<?php

namespace App\Http\Controllers;
use App\Models\County;
use App\Models\Town;
use App\Models\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $name=$request->firstName." ".$request->secondName;
        $phone=$request->PhoneNumber;
        $post=$request->postOffice;
        $county=County::find($request->county)->get()->first()->county;
        $town=Town::find($request->town)->get()->first()->town;
        $rate=json_encode(Shipping::find($request->rate)->get());
        $method=$request->payMethod;
        return view('shop.checkout')
        ->with('name',$name)
        ->with('phone',$phone)
        ->with('post',$post)
        ->with('county',$county)
        ->with('town',$town)
        ->with('rate',$rate)
        ->with('method',$method);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
