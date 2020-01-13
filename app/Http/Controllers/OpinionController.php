<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOpinionRequest;
use App\Http\Requests\UpdateOpinionRequest;
use App\Repositories\OpinionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Auth;
use Session;
use Response;
use App\Models\Opinion;
use App\Models\OptionsTopic;

class OpinionController extends AppBaseController
{
    /** @var  OpinionRepository */
    private $opinionRepository;

    public function __construct(OpinionRepository $opinionRepo)
    {
        $this->opinionRepository = $opinionRepo;
    }

    /**
     * Display a listing of the Opinion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $opinions = Opinion::all();

        return view('opinions.index')
            ->with('opinions', $opinions);
    }

    /**
     * Show the form for creating a new Opinion.
     *
     * @return Response
     */
    public function create()
    {
        return view('opinions.create')->with('optionsTopics',OptionsTopic::all());
    }

    /**
     * Store a newly created Opinion in storage.
     *
     * @param CreateOpinionRequest $request
     *
     * @return Response
     */
    public function store(CreateOpinionRequest $request)
    {
        $input = $request->all();

        $opinion = $this->opinionRepository->create([
            'title'=>$request->title,
            'topic'=>$request->topic,
            'slug'=>str_slug($request->title),
            'opinion'=>$request->opinion,
            'user'=>Auth::user()->email
        ]);

        Session::flash('success','Opinion saved, Waiting Admin Approval');

        return redirect(route('opinions.index'));
    }

    /**
     * Display the specified Opinion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($slug)
    {
        $opinion = Opinion::where('slug',$slug)->get()->first();

        if (empty($opinion)) {
            Flash::error('Opinion not found');

            return redirect(route('opinions.index'));
        }

        return view('opinions.show')->with('opinion', $opinion);
    }

    /**
     * Show the form for editing the specified Opinion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($slug)
    {
        $opinion = Opinion::where('slug',$slug)->get()->first();

        if (empty($opinion)) {
            Flash::error('Opinion not found');

            return redirect(route('opinions.index'));
        }

        return view('opinions.edit')->with('optionsTopics',OptionsTopic::all())
        ->with('opinion', $opinion);
    }

    /**
     * Update the specified Opinion in storage.
     *
     * @param int $id
     * @param UpdateOpinionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOpinionRequest $request)
    {
        $opinion = $this->opinionRepository->find($id);

        if (empty($opinion)) {
            Flash::error('Opinion not found');

            return redirect(route('opinions.index'));
        }

        $opinion = $this->opinionRepository->update($request->all(), $id);

        Flash::success('Opinion updated successfully.');

        return redirect(route('opinions.index'));
    }

    /**
     * Remove the specified Opinion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $opinion = $this->opinionRepository->find($id);

        if (empty($opinion)) {
            Flash::error('Opinion not found');

            return redirect(route('opinions.index'));
        }

        $this->opinionRepository->delete($id);

        Flash::success('Opinion deleted successfully.');

        return redirect(route('opinions.index'));
    }
    public function approve($slug){
        $opinion = Opinion::where('slug',$slug)->get()->first();
        $opinion->status=1;
        $opinion->save();
        Session::flash('success','Opinion Approved');
        return redirect()->back();
    }
    public function disapprove($slug){
        $opinion = Opinion::where('slug',$slug)->get()->first();
        $opinion->status=0;
        $opinion->save();
        Session::flash('error','Opinion Disapproved');
        return redirect()->back();
    }

    public function Home(){
        $opinions=Opinion::all();
        return view('opinions.home')->with('categories',OptionsTopic::all())
        ->with('opinions',$opinions);
    }
    public function singlet($slug){
        $opinion=Opinion::where('slug',$slug)->get()->first();
        $categories=OptionsTopic::all();
        return view('opinions.singlet')->with('categories',$categories)
        ->with('opinion',$opinion);
    }
    public function Topic($slug){
        $opinions=Opinion::where('topic',$slug)->get();
        if(count($opinions)==0){
            Session::flash('error','Not Found');
            return redirect()->back();
        }
        $categories=OptionsTopic::all();
        return view('opinions.topic')->with('categories',$categories)
        ->with('opinions',$opinions);
    }
}
