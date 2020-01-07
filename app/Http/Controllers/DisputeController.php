<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use Session;
use Auth;
use App\Dispute;
class DisputeController extends Controller
{
    public function index(){
        $disputes=Dispute::where('user',Auth::user()->email)->get()->all();
        return view('academia.disputes')->with('disputes',$disputes);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function close($slug)
    {   
        $dispute=Dispute::where([
            'title'=>$slug,
            'status'=> 0
        ])->get()->first();
        $dispute->status=1;
        $dispute->save();
        Session::flash('error','The Dispute Resolved');
        return redirect()->back();
    }

    public function view($slug){
        $dispute=Dispute::where('title',$slug)->get()->last();
        return view('academia.disputesingle')->with('dispute',$dispute);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
    //     $check=Dispute::where([
    //     'title'=>$slug,
    //     'status'=>1
    // ])->get()->count();
    // dd($slug);
    //     if($check){
    //     Session::flash('error','Dispute already Opened');
    //     return redirect()->back();
    //     }
        return view('academia.createDispute')->with('title',$slug);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $this->validate($request,[
            '_title'=>'required',
            'clientDispute'=>'required'
        ]);
        Dispute::create([
            'title'=>$request->_title,
            'clientDispute'=>$request->clientDispute,
            'user'=>Auth::user()->email
        ]);
        $assignment=Proposal::where('slug',$request->_title)->get()->first();
        $assignment->status=2;
        $assignment->save();
        Session::flash('success','Dispute Successfully Opened');
        return redirect()->route('assignment.disputed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        $dispute=Dispute::where('title',$slug)->get()->first();
        return view('academia.disputeSingle')->with('dispute',$dispute);
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
    public function settle($slug)
    {
        $dispute=Dispute::where('title',$slug)->get()->first();
        $dispute->status=1;
        $dispute->save();
        $assignment=Proposal::where('slug',$slug)->get()->first();
        $assignment->status=0;
        $assignment->save();
        Session::flash('error','Dispute Successfully Resolved');
        return redirect()->route('assignment.disputed');
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
    public function remove($slug){
        $dispute=Dispute::where('title',$slug)->get()->first();
        $dispute->status=1;
        $dispute->save();
        $assignment=Proposal::where('slug',$slug)->get()->first();
        $assignment->status=0;
        $assignment->save();
        Session::flash('success','Dispute Successfully Resolved');
        return redirect()->route('assignment.disputed');
    }
}
