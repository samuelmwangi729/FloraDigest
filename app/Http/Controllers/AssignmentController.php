<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proposal;
use Session;
use App\Dispute;
class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $assignment=Proposal::where('clientEmail',Auth::user()->email)->get();
        return view('academia.assignment')->with('assignment',$assignment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academia.new');
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
    public function show($slug)
    {   $assignment=Proposal::where('slug',$slug)->get()->first();
        return view('academia.single')->with('assignment',$assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $assignment=Proposal::where('slug',$slug)->get()->first();
        return view('academia.edit')->with('assignment',$assignment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $assignment=Proposal::where('slug',$slug)->get()->first();
        if($request->hasFile('clientAttachment')){
            $newFile=$request->clientAttachment;
            $newFileName=time().$newFile->getClientOriginalName();
            $newFile->move('uploads/Assignments',$newFileName);
            $assignment->clientAttachment ='uploads/Assignments/'.$newFileName;
            $assignment->clientEmail=$request->clientEmail;
            $assignment->clientName=$request->clientName;
            $assignment->clientAssignment=$request->clientAssignment;
            $assignment->slug=str_slug($request->clientAssignment);
            $assignment->clientDate=$request->clientDate;
            $assignment->clientDescription=$request->clientDescription;
            $assignment->clientAttachment=$assignment->clientAttachment;
            $assignment->clientBudget=$request->clientBudget;
            $assignment->save();
            Session::flash('success','The Assignment has been successfully Updated');
            return redirect()->route('assignment.view');
        }
            $assignment->clientEmail=$request->clientEmail;
            $assignment->clientName=$request->clientName;
            $assignment->clientAssignment=$request->clientAssignment;
            $assignment->slug=str_slug($request->clientAssignment);
            $assignment->clientDate=$request->clientDate;
            $assignment->clientDescription=$request->clientDescription;
            $assignment->clientAttachment=$assignment->clientAttachment;
            $assignment->clientBudget=$request->clientBudget;
            $assignment->save();
            Session::flash('success','The Assignment has been successfully Updated');
            return redirect()->route('assignment.view');
    }
    public function delete($slug){
        $assignment=Proposal::where('slug',$slug)->get()->first();
        $assignment->delete();
        Session::flash('error','Assignment Successfuly Deleted');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $assignment=Proposal::onlyTrashed()->get()->all();
        return view('academia.trashed')->with('assignment',$assignment);
    }
    public function recover($slug){
        $assignment=Proposal::withTrashed()->where('slug',$slug)->get()->first();
        $assignment->restore();
        Session::flash('info','Success,Assignment Successfully Recovered');
        return redirect()->route('assignment.view');
    }

    public function dispute(){
        $disputes=Dispute::where([
            'user'=>Auth::user()->email,
            'status'=>0
        ])->get()->take(5);
        $assignments=Proposal::where('clientEmail',Auth::user()->email)->get()->all();
        return view('academia.disputed')
        ->with('assignments',$assignments)
        ->with('disputes',$disputes);
    }
}
