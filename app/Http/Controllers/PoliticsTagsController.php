<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePoliticsTagsRequest;
use App\Http\Requests\UpdatePoliticsTagsRequest;
use App\Repositories\PoliticsTagsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
use App\Models\PoliticsTags;

class PoliticsTagsController extends AppBaseController
{
    /** @var  PoliticsTagsRepository */
    private $politicsTagsRepository;

    public function __construct(PoliticsTagsRepository $politicsTagsRepo)
    {
        $this->politicsTagsRepository = $politicsTagsRepo;
    }

    /**
     * Display a listing of the PoliticsTags.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $politicsTags = $this->politicsTagsRepository->all();

        return view('politics_tags.index')
            ->with('politicsTags', $politicsTags);
    }

    /**
     * Show the form for creating a new PoliticsTags.
     *
     * @return Response
     */
    public function create()
    {
        return view('politics_tags.create');
    }

    /**
     * Store a newly created PoliticsTags in storage.
     *
     * @param CreatePoliticsTagsRequest $request
     *
     * @return Response
     */
    public function store(CreatePoliticsTagsRequest $request)
    {
        $input = $request->all();

        $politicsTags = $this->politicsTagsRepository->create($input);
        Session::flash('success','Politics Tags Saved');

        return redirect(route('politicsTags.index'));
    }

    /**
     * Display the specified PoliticsTags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $politicsTags = $this->politicsTagsRepository->find($id);

        if (empty($politicsTags)) {
            Session::flash('error','Politics Tags Not Found');

            return redirect(route('politicsTags.index'));
        }

        return view('politics_tags.show')->with('politicsTags', $politicsTags);
    }

    /**
     * Show the form for editing the specified PoliticsTags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $politicsTags = $this->politicsTagsRepository->find($id);

        if (empty($politicsTags)) {
            Session::flash('error','Politics Tags Not Found');

            return redirect(route('politicsTags.index'));
        }

        return view('politics_tags.edit')->with('politicsTags', $politicsTags);
    }

    /**
     * Update the specified PoliticsTags in storage.
     *
     * @param int $id
     * @param UpdatePoliticsTagsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePoliticsTagsRequest $request)
    {
        $politicsTags = $this->politicsTagsRepository->find($id);

        if (empty($politicsTags)) {
            Session::flash('error','Politics Tags not found');

            return redirect(route('politicsTags.index'));
        }

        $politicsTags = $this->politicsTagsRepository->update($request->all(), $id);

        Session::flash('success','Politics Tags Updated');

        return redirect(route('politicsTags.index'));
    }

    /**
     * Remove the specified PoliticsTags from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $politicsTags = $this->politicsTagsRepository->find($id);

        if (empty($politicsTags)) {
            Session::flash('error','Politics Tags Not Found');

            return redirect(route('politicsTags.index'));
        }

        $this->politicsTagsRepository->delete($id);

        Session::flash('error','Politics Tags Deleted');

        return redirect(route('politicsTags.index'));
    }

    //find the trashed ones 

    public function trashed(){
        $trashed=PoliticsTags::onlyTrashed()->get()->all();
        return view('politics_tags.trashed')->with('trashed',$trashed);
    }
    public function recover($id){
        $politicalTag=PoliticsTags::withTrashed()->where('id',$id)->first();
        if(is_null($politicalTag)){
            Session::flash('error','No tag With Such Id Exist');
            return redirect()->back();
        }
        $politicalTag->restore();
        Session::flash('info','Tag Successfully Recovered');
        return redirect()->route('politicsTags.index');
    }
    public function delete(Request $request){
        $politicalTag=PoliticsTags::withTrashed()->where('id',$request->id)->first();
        if(is_null($politicalTag)){
            Session::flash('error','No tag With Such Id Exist');
            return redirect()->back();
        }
        $politicalTag->forceDelete();
        Session::flash('error','Permanently Deleted');
        return redirect()->route('politicsTags.index');
    }
    
}
