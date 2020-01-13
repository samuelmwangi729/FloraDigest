<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOtherRequest;
use App\Http\Requests\UpdateOtherRequest;
use App\Repositories\OtherRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Session;
use Response;

class OtherController extends AppBaseController
{
    /** @var  OtherRepository */
    private $otherRepository;

    public function __construct(OtherRepository $otherRepo)
    {
        $this->otherRepository = $otherRepo;
    }

    /**
     * Display a listing of the Other.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $others = $this->otherRepository->all();

        return view('others.index')
            ->with('others', $others);
    }

    /**
     * Show the form for creating a new Other.
     *
     * @return Response
     */
    public function create()
    {
        return view('others.create');
    }

    /**
     * Store a newly created Other in storage.
     *
     * @param CreateOtherRequest $request
     *
     * @return Response
     */
    public function store(CreateOtherRequest $request)
    {
    

        $other = $this->otherRepository->create([
            'title'=>$request->title,
            'slug'=>str_slug($request->title),
            'topic'=>$request->topic,
            'content'=>$request->content,
            'names'=>$request->names,
            'email'=>$request->email,
        ]);

        Session::flash('success','Your Post Have been submitted, Waiting Admins Approval');

        return redirect(route('others.all'));
    }

    /**
     * Display the specified Other.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $other = $this->otherRepository->find($id);

        if (empty($other)) {
            Flash::error('Other not found');

            return redirect(route('others.index'));
        }

        return view('others.show')->with('other', $other);
    }

    /**
     * Show the form for editing the specified Other.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $other = $this->otherRepository->find($id);

        if (empty($other)) {
            Flash::error('Other not found');

            return redirect(route('others.index'));
        }

        return view('others.edit')->with('other', $other);
    }

    /**
     * Update the specified Other in storage.
     *
     * @param int $id
     * @param UpdateOtherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOtherRequest $request)
    {
        $other = $this->otherRepository->find($id);

        if (empty($other)) {
            Flash::error('Other not found');

            return redirect(route('others.index'));
        }

        $other = $this->otherRepository->update($request->all(), $id);

        Flash::success('Other updated successfully.');

        return redirect(route('others.index'));
    }

    /**
     * Remove the specified Other from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $other = $this->otherRepository->find($id);

        if (empty($other)) {
            Flash::error('Other not found');

            return redirect(route('others.index'));
        }

        $this->otherRepository->delete($id);

        Flash::success('Other deleted successfully.');

        return redirect(route('others.index'));
    }
}
