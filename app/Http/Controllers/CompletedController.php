<?php

namespace App\Http\Controllers;
use App\Proposal;
use App\Completed;
use Session;
use Illuminate\Http\Request;
class CompletedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments=Completed::all();
        return view('academia.completedAssignments')->with('assignments',$assignments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignments=Proposal::all();
        return view('academia.completeNew')->with('assignments',$assignments);
    }
    public function completed(Request $request){
        $assignment=Completed::where('clientAssignment',$request->slug)->first();
        if(is_null($assignment)){
            Session::flash('error','Not Available');
            return redirect()->back();
        }
        if($assignment->count()==0){
            Session::flash('error','Not Available');
            return redirect()->back();
        }
        return view('academia.csingle')->with('assignment',$assignment);
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
        'clientAssignment'=>'required',
        'clientDate'=>'required',
        'AssignmentInto'=>'required',
        'AssignmentConclusion'=>'required',
        'Attachment'=>'required',
        ]);
        $upload=$request->Attachment;
        $newUploadName=time().$upload->getClientOriginalName();
        $upload->move('uploads/completed',$newUploadName);
        Completed::create([
            'clientAssignment'=>$request->clientAssignment,
            'clientDate'=>$request->clientDate,
            'AssignmentInto'=>$request->AssignmentInto,
            'AssignmentConclusion'=>$request->AssignmentConclusion,
            'Attachment'=>'/uploads/completed/'.$newUploadName,
        ]);
        Session::flash('success','The Complete Assignment Has been Uploaded');
        return redirect('/home');
        
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
    public function edit($slug)
    {
        $completed=Completed::where('clientAssignment',$slug)->get()->first();
        if(is_null($completed)){
            Session::flash('error','Not Found');
            return redirect()->back();
        }
        if(empty($completed)){
            Session::flash('error','Not Found');
            return redirect()->back();
        }
        $assignments=Proposal::where('status',1)->get();
        return view('academia.completeNew')
        ->with('completed',$completed)
        ->with('assignments',$assignments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'clientAssignment'=>'required',
            'clientDate'=>'required',
            'AssignmentInto'=>'required',
            'AssignmentConclusion'=>'required',
            'Attachment'=>'required',
            ]);
        if($request->hasFile('Attachment')){
            $completed=Completed::where('clientAssignment',$request->clientAssignment)->get()->first();
            $attachment=$request->file('Attachment');
            $newAttachmentName=time().$attachment->getClientOriginalName();
            $attachment->move('uploads/completed',$newAttachmentName);
            $completed->Attachment='/uploads/completed/'.$newAttachmentName;
        }
        $completed->clientAssignment=$request->clientAssignment;
        $completed->clientDate=$request->clientDate;
        $completed->AssignmentInto=$request->AssignmentInto;
        $completed->AssignmentConclusion=$request->AssignmentConclusion;
        $completed->status=0;
        $completed->save();
        Session::flash('success','Success, the Assignment has been updated');
        return redirect()->back();
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
    public function revise($slug){
        $assignment=Completed::where('clientAssignment',$slug)->first();
        if(is_null($assignment)){
            return redirect()->back();
        }
        if($assignment->status==1){
            //already revision requested
            Session::flash('error','Revision already Requested, Please try again later');
            return redirect()->back();
        }
        $assignment->status=1;
        $assignment->save();
        Session::flash('success','Revision  Requested,Please check later with the writer');
        return redirect()->back();
    }
    public function complete($slug){
        $assignment=Completed::where('clientAssignment',$slug)->first();
        if(is_null($assignment)){
            return redirect()->back();
        }
        if($assignment->status==0){
            //already revision requested
            Session::flash('error','Assignment already COmplete, Contact Us for any inconvenience');
            return redirect()->back();
        }
        $assignment->status=0;
        $assignment->save();
        Session::flash('success','Assignment Marked as Complete');
        return redirect()->back();
    }
}
