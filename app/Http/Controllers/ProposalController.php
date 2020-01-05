<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use Session;
class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('academia.proposal');
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
        $this->validate($request,[
            'clientEmail'=>'required',
            'clientName'=>'required',
            'clientAssignment'=>'required',
            'clientDate'=>'required',
            'clientDescription'=>'required',
            'clientAttachment'=>'required',
            'clientBudget'=>'required'
        ]);
        $clientFile=$request->clientAttachment;
            $clientFileNewName=time().$clientFile->getClientOriginalName();
            $clientFile->move('uploads/Assignments',$clientFileNewName);
        Proposal::create([
            'clientEmail'=>$request->clientEmail,
            'clientName'=>$request->clientName,
            'clientAssignment'=>$request->clientAssignment,
            'slug'=>str_slug($request->clientAssignment),
            'clientDate'=>$request->clientDate,
            'clientDescription'=>$request->clientDescription,
            'clientAttachment'=>'uploads/Assignments/'.$clientFileNewName,
            'clientBudget'=>$request->clientBudget
        ]);

        Session::flash('success','Your Assignment Was Successfully Uploaded');
        return redirect()->route('assignment.view');
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
