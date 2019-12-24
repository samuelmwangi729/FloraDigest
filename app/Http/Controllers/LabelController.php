<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLabelRequest;
use App\Http\Requests\UpdateLabelRequest;
use App\Repositories\LabelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

class LabelController extends AppBaseController
{
    /** @var  LabelRepository */
    private $labelRepository;

    public function __construct(LabelRepository $labelRepo)
    {
        $this->labelRepository = $labelRepo;
    }

    /**
     * Display a listing of the Label.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $labels = $this->labelRepository->all();

        return view('labels.index')
            ->with('labels', $labels);
    }

    /**
     * Show the form for creating a new Label.
     *
     * @return Response
     */
    public function create()
    {
        return view('labels.create');
    }

    /**
     * Store a newly created Label in storage.
     *
     * @param CreateLabelRequest $request
     *
     * @return Response
     */
    public function store(CreateLabelRequest $request)
    {
        $input = $request->all();

        $label = $this->labelRepository->create($input);

        Session::flash('success','Product Label Successfully Saved');

        return redirect(route('labels.index'));
    }

    /**
     * Display the specified Label.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $label = $this->labelRepository->find($id);

        if (empty($label)) {
           Session::flash('error','Product Label not Found');

            return redirect(route('labels.index'));
        }

        return view('labels.show')->with('label', $label);
    }

    /**
     * Show the form for editing the specified Label.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $label = $this->labelRepository->find($id);

        if (empty($label)) {
           Session::flash('error','Product label Not Found');

            return redirect(route('labels.index'));
        }

        return view('labels.edit')->with('label', $label);
    }

    /**
     * Update the specified Label in storage.
     *
     * @param int $id
     * @param UpdateLabelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLabelRequest $request)
    {
        $label = $this->labelRepository->find($id);

        if (empty($label)) {
            Session::flash('error','Product label Not Found');

            return redirect(route('labels.index'));
        }

        $label = $this->labelRepository->update($request->all(), $id);

        Session::flash('success','Product label Successfully Updated');

        return redirect(route('labels.index'));
    }

    /**
     * Remove the specified Label from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $label = $this->labelRepository->find($id);

        if (empty($label)) {
            Session::flash('error','Product label Not Found');

            return redirect(route('labels.index'));
        }

        $this->labelRepository->delete($id);

        Session::flash('error','Product label Successfully Deleted');

        return redirect(route('labels.index'));
    }
}
