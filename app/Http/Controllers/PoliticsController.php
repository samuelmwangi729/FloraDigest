<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePoliticsRequest;
use App\Http\Requests\UpdatePoliticsRequest;
use App\Repositories\PoliticsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\PoliticsTags;
use Auth;
use Session;
use App\Models\Politics;

class PoliticsController extends AppBaseController
{
    /** @var  PoliticsRepository */
    private $politicsRepository;

    public function __construct(PoliticsRepository $politicsRepo)
    {
        $this->politicsRepository = $politicsRepo;
    }

    /**
     * Display a listing of the Politics.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $politics = $this->politicsRepository->all();

        return view('politics.index')
            ->with('politics', $politics);
    }
    public function Home(Request $request)
    {
        $politics = Politics::all()->take(1);

        return view('politics.home')
            ->with('politics', $politics);
    }

    /**
     * Show the form for creating a new Politics.
     *
     * @return Response
     */
    public function create()
    {
        return view('politics.create')
        ->with('categories',PoliticsTags::all());
    }

    /**
     * Store a newly created Politics in storage.
     *
     * @param CreatePoliticsRequest $request
     *
     * @return Response
     */
    public function store(CreatePoliticsRequest $request)
    {



        $image=$request->image;
        $newImage=time().$image->getClientOriginalName();
        $image->move('uploads/politics',$newImage);
        // $politics->image=
        // dd(Auth::user()->name);

        $politics = $this->politicsRepository->create([
            'title'=>$request->title,
            'slug'=>str_slug($request->title),
            'text'=>$request->text,
            'content'=>$request->content,
            'tag_id'=>$request->tag_id,
            'image'=>'uploads/politics/'.$newImage,
            'published_by'=> Auth::user()->name,
        ]);

        Session::flash('success','Political News Successfully Added');

        return redirect(route('politics.index'));
    }

    /**
     * Display the specified Politics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($slug)
    {
        $politics = Politics::where('slug',$slug)->first();

        if (empty($politics)) {
            Flash::error('Politics not found');

            return redirect(route('politics.index'));
        }

        return view('politics.show')->with('politics', $politics);
    }

    /**
     * Show the form for editing the specified Politics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($slug)
    {
        $politics = Politics::where('slug',$slug)->get()->first();

        if (empty($politics)) {
            Flash::error('Politics not found');

            return redirect(route('politics.index'));
        }

        return view('politics.edit')
        ->with('politics', $politics)
        ->with('categories',PoliticsTags::all());
    }

    /**
     * Update the specified Politics in storage.
     *
     * @param int $id
     * @param UpdatePoliticsRequest $request
     *
     * @return Response
     */
    public function update($slug, UpdatePoliticsRequest $request)
    {
        $politics = Politics::where('slug',$slug)->get()->first();
        if (empty($politics)) {
            Session::flash('error','No Such News Available');

            return redirect(route('politics.index'));
        }
        if($request->hasFile('image')){
            $image=$request->image;
            $newImageName=time().$image->getClientOriginalName();
            $image->move('uploads/politics',$newImageName);
            $politics->image='uploads/politics/'.$newImageName;
        }
        $politics->title=$request->title;
        $politics->slug=str_slug($request->title);
        $politics->text=$request->text;
        $politics->tag_id=$request->tag_id;
        $politics->edited_by=Auth::user()->name;

        $politics->save();

        Session::flash('success','Political News Successfully Updated');

        return redirect(route('politics.index'));
    }

    /**
     * Remove the specified Politics from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $politics = $this->politicsRepository->find($id);

        if (empty($politics)) {
            Flash::error('Politics not found');

            return redirect(route('politics.index'));
        }

        $this->politicsRepository->delete($id);

        Session::flash('error','Political News Successfully Deleted');

        return redirect(route('politics.index'));
    }

    /*
    *This will retrieve all the deleted political news 
    */
    public function trashed(){
        $politics=Politics::onlyTrashed()->get()->all();
        if(empty($politics)){
            Session::flash('error','No Trashed News Available');
            return redirect()->back();
        }

        return view('politics.trashed')
        ->with('politics',$politics);
    }
    /*
    *This will recover all the deleted political news 
    */
    public function restore(Request $request){
        $politics=Politics::withTrashed()->where('slug',$request->slug)->get()->first();
        if(is_null($politics)){
            Session::flash('error','No such News');
            return redirect()->back();
        }

        $politics->restore();
        Session::flash('info','Political News Successfully Restored');
        return redirect()->route('politics.index');
    }
    /*
    *This will clear the trashed political news
    */
    public function Delete(Request $request){
        $politics=Politics::withTrashed()->where('slug',$request->slug)->get()->first();
        if(is_null($politics)){
            Session::flash('error','No such News');
            return redirect()->back();
        }
        $politics->forceDelete();
        Session::flash('error','News Successfully Deleted');
        return redirect()->route('politics.index');
    }

    public function TagsType(Request $request){
        $id=PoliticsTags::where('name',$request->id)->get()->first();
        if(is_null($id)){
            Session::flash('error','No Such Politics category');
            return redirect()->back();
        }
        $politics=Politics::where('tag_id',$id->id)->get()->all();
        if(count($politics)==0){
            Session::flash('error','No News With such Categories available. Please check later');
            return redirect()->back();
        }

        return view('politics.politics')->with('politics',$politics);
    }

    public function single(Request $request){
        $politics=Politics::where('slug',$request->slug)->get()->first();
        if(is_null($politics)){
            Session::flash('error','The Political News Does Not Exist');
            return redirect()->back();
        }

        return view('politics.single')->with('politics',$politics);
    }
}
