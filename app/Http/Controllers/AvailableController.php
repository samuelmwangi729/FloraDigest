<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvailableRequest;
use App\Http\Requests\UpdateAvailableRequest;
use App\Repositories\AvailableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use App\Models\Available;
use App\Models\Topics;
use Response;
use Session;
use Carbon\Carbon;
class AvailableController extends AppBaseController
{
    /** @var  AvailableRepository */
    private $availableRepository;

    public function __construct(AvailableRepository $availableRepo)
    {
        $this->availableRepository = $availableRepo;
    }

    /**
     * Display a listing of the Available.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $availables = $this->availableRepository->all();

        return view('availables.index')
            ->with('availables', $availables);
    }

    /**
     * Show the form for creating a new Available.
     *
     * @return Response
     */
    public function create()
    {
        return view('availables.create')->with('topics',Topics::all());
    }

    /**
     * Store a newly created Available in storage.
     *
     * @param CreateAvailableRequest $request
     *
     * @return Response
     */
    public function store(CreateAvailableRequest $request)
    {
        $input = $request->all();
       if($request->hasFile('displayImage')){
           //uploads the image to the specified Directory
           $image=$request->file('displayImage');
           $newImageName=time().$image->getClientOriginalName();
           $image->move('uploads/Assignments/Availables/',$newImageName);
       }
       if($request->hasFile('AssignmentFile')){
        //uploads the image to the specified Directory
        $attachment=$request->file('AssignmentFile');
        $newAttachmentFile=time().$image->getClientOriginalName();
        $attachment->move('uploads/Assignments/Availables','/uploads/Assignments/Availables/'.str_slug(Carbon::now()).$request->file('AssignmentFile')->getClientOriginalName());
    }
       //stores the value into the database
        $available = $this->availableRepository->create([
            'title'=>$request->title,
            'slug'=>str_slug($request->title),
            'topic'=>$request->topic,
            'budget'=>$request->budget,
            'displayImage'=>'/uploads/Assignments/Availables/'.$newImageName,
            'AssignmentFile'=>'/uploads/Assignments/Availables/'.str_slug(Carbon::now()).$request->file('AssignmentFile')->getClientOriginalName(),
            'introParagraph'=>$request->introParagraph,
            'conclusionParagraph'=>$request->conclusionParagraph,
        ]);

        Session::flash('success','Assignment Successfully Added');

        return redirect(route('availables.index'));
    }

    /**
     * Display the specified Available.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $available = $this->availableRepository->find($id)->first();

        if (empty($available)) {
            Flash::error('Available not found');

            return redirect(route('availables.index'));
        }

        return view('availables.show')->with('available', $available);
    }

    /**
     * Show the form for editing the specified Available.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $available = $this->availableRepository->find($id);

        if (empty($available)) {
            Flash::error('Available not found');

            return redirect(route('availables.index'));
        }

        return view('availables.edit')->with('topics',Topics::all())
        ->with('available', $available);
    }

    /**
     * Update the specified Available in storage.
     *
     * @param int $id
     * @param UpdateAvailableRequest $request
     *
     * @return Response
     */
    public function update($slug, UpdateAvailableRequest $request)
    {
        $available = Available::where('slug',$slug)->first();
        if (empty($available)) {
            Flash::error('Available not found');

            return redirect(route('availables.index'));
        }
        if($request->hasFile('displayImage')){
            $image=$request->file('displayImage');
            $newImageName=str_slug(Carbon::now()).$image->getClientOriginalName();
            $image->move('uploads/Assignments/Availables',$newImageName);
            $available->displayImage='/uploads/Assignments/Availables/'.$newImageName;
        }
        //handles the assignment file 
        if($request->hasFile('AssignmentFile')){
            $attachment=$request->file('AssignmentFile');
            $attachment->move('uploads/Assignments/Availables','/uploads/Assignments/Availables/'.str_slug(Carbon::now()).$request->file('AssignmentFile')->getClientOriginalName());
            $available->AssignmentFile ='/uploads/Assignments/Availables/'.str_slug(Carbon::now()).$request->file('AssignmentFile')->getClientOriginalName();
        }

        $available->title = $request->title;
        $available->slug = str_slug($request->title);
        $available->topic=$request->topic;
        $available->budget=$request->budget;
        //$available->displayImage='/uploads/Assignments/Availables/'.str_slug(Carbon::now()).$request->file('displayImage')->getClientOriginalName();
        $available->introParagraph=$request->introParagraph;
        $available->conclusionParagraph=$request->conclusionParagraph;
        $available->save();
        Session::flash('success','Assignment Successfully Updated');

        return redirect(route('availables.index'));
    }

    /**
     * Remove the specified Available from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $available = $this->availableRepository->find($id);

        if (empty($available)) {
            Flash::error('Available not found');

            return redirect(route('availables.index'));
        }

        $this->availableRepository->delete($id);

        Flash::success('Available deleted successfully.');

        return redirect(route('availables.index'));
    }
    public function available(){
        return view('availables.Assignments')
        ->with('last',Available::orderBy('id','desc')->take(1)->get())
        ->with('topics',Topics::all())
        ->with('availables',$this->availableRepository->all());
    }
}
