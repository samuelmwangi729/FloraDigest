<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsTagsRequest;
use App\Http\Requests\UpdateNewsTagsRequest;
use App\Repositories\NewsTagsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
use App\Models\NewsTags;

class NewsTagsController extends AppBaseController
{
    /** @var  NewsTagsRepository */
    private $newsTagsRepository;

    public function __construct(NewsTagsRepository $newsTagsRepo)
    {
        $this->newsTagsRepository = $newsTagsRepo;
    }

    /**
     * Display a listing of the NewsTags.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $newsTags = $this->newsTagsRepository->all();

        return view('news_tags.index')
            ->with('newsTags', $newsTags);
    }

    /**
     * Show the form for creating a new NewsTags.
     *
     * @return Response
     */
    public function create()
    {
        return view('news_tags.create');
    }

    /**
     * Store a newly created NewsTags in storage.
     *
     * @param CreateNewsTagsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsTagsRequest $request)
    {
        $input = $request->all();

        $newsTags = $this->newsTagsRepository->create($input);

        Session::flash('success','News Tags Successfully Added');

        return redirect(route('newsTags.index'));
    }

    /**
     * Display the specified NewsTags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $newsTags = $this->newsTagsRepository->find($id);

        if (empty($newsTags)) {
            Flash::error('News Tags not found');

            return redirect(route('newsTags.index'));
        }

        return view('news_tags.show')->with('newsTags', $newsTags);
    }

    /**
     * Show the form for editing the specified NewsTags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $newsTags = $this->newsTagsRepository->find($id);

        if (empty($newsTags)) {
            Session::flash('error','No News Tag Found');

            return redirect(route('newsTags.index'));
        }

        return view('news_tags.edit')->with('newsTags', $newsTags);
    }

    /**
     * Update the specified NewsTags in storage.
     *
     * @param int $id
     * @param UpdateNewsTagsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsTagsRequest $request)
    {
        $newsTags = $this->newsTagsRepository->find($id);

        if (empty($newsTags)) {
            Session::flash('error','News Tag Not FOund');

            return redirect(route('newsTags.index'));
        }

        $newsTags = $this->newsTagsRepository->update($request->all(), $id);

        Session::flash('success','News Tag Updated');

        return redirect(route('newsTags.index'));
    }

    /**
     * Remove the specified NewsTags from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $newsTags = $this->newsTagsRepository->find($id);

        if (empty($newsTags)) {
            Session::flash('error','No such Tag Found');

            return redirect(route('newsTags.index'));
        }

        $this->newsTagsRepository->delete($id);

        Session::flash('success','News Tag Deleted Successfully');

        return redirect(route('newsTags.index'));
    }

   public function restore(){

       return view('news_tags.trashed')->with('trashed',NewsTags::onlyTrashed()->get());
   }
   public function recover($id){
       $newsTag=NewsTags::withTrashed()->where('id',$id)->first();
       $newsTag->restore();
       Session::flash('success','NewsTag Successfully Restored');
       return redirect()->route('newsTags.index');
   }

   public function delete($id){
    $newsTag=NewsTags::withTrashed()->where('id',$id)->first()->forceDelete();
    Session::flash('success','NewsTag Permanently Deleted');
    return redirect()->route('newsTags.index');
   }
}
