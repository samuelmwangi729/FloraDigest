<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTopicsRequest;
use App\Http\Requests\UpdateTopicsRequest;
use App\Repositories\TopicsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
use App\Models\Topics;
class TopicsController extends AppBaseController
{
    /** @var  TopicsRepository */
    private $topicsRepository;

    public function __construct(TopicsRepository $topicsRepo)
    {
        $this->topicsRepository = $topicsRepo;
    }

    /**
     * Display a listing of the Topics.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $topics = $this->topicsRepository->all();

        return view('topics.index')
            ->with('topics', $topics);
    }

    /**
     * Show the form for creating a new Topics.
     *
     * @return Response
     */
    public function create()
    {
        return view('topics.create')->with('topics',Topics::all());
    }

    /**
     * Store a newly created Topics in storage.
     *
     * @param CreateTopicsRequest $request
     *
     * @return Response
     */
    public function store(CreateTopicsRequest $request)
    {
        $input = $request->all();
        $di=$request->displayImage;
        $newDisplayImageName=time().$di->getClientOriginalName();
        $di->move('uploads/Assignments',$newDisplayImageName);
        $topics = $this->topicsRepository->create([
            'name'=>$request->name,
            'slug'=>str_slug($request->name),
            'displayImage'=>'/uploads/Assignments/'.$newDisplayImageName
        ]);

        Session::flash('success','Topic Successfuly Saved');

        return redirect(route('topics.index'));
    }

    /**
     * Display the specified Topics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($slug)
    {
        $topics = Topics::where('slug',$slug)->get()->first();

        if (empty($topics)) {
           Session::flash('error','Not Found');

            return redirect(route('topics.index'));
        }

        return view('topics.show')->with('topics', $topics);
    }

    /**
     * Show the form for editing the specified Topics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($slug)
    {
        $topics = Topics::where('slug',$slug)->get()->first();

        if (empty($topics)) {
           Session::flash('error','Not Found');

            return redirect(route('topics.index'));
        }

        return view('topics.edit')->with('topics', $topics);
    }

    /**
     * Update the specified Topics in storage.
     *
     * @param int $id
     * @param UpdateTopicsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopicsRequest $request)
    {
        if($request->hasFile('displayImage')){
            $image=$request->file('displayImage');
            $newImageName=time().$image->getClientOriginalName();
            $image->move('uploads/Assignments',$newImageName);
        }
        $topics = $this->topicsRepository->find($id);

        if (empty($topics)) {
           Session::flash('error','Not Found');

            return redirect(route('topics.index'));
        }

        $topics = $this->topicsRepository->update([
            'name'=>$request->name,
            'displayImage'=>'/uploads/Assignments/'.$newImageName
        ], $id);

        Session::flash('success','Successfully Updated');

        return redirect(route('topics.index'));
    }

    /**
     * Remove the specified Topics from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topics = $this->topicsRepository->find($id);

        if (empty($topics)) {
           Session::flash('error','Not Found');

            return redirect(route('topics.index'));
        }

        $this->topicsRepository->delete($id);

       Session::flash('error','Successfully Deleted');

        return redirect(route('topics.index'));
    }
}
