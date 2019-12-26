<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountyRequest;
use App\Http\Requests\UpdateCountyRequest;
use App\Repositories\CountyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CountyController extends AppBaseController
{
    /** @var  CountyRepository */
    private $countyRepository;

    public function __construct(CountyRepository $countyRepo)
    {
        $this->countyRepository = $countyRepo;
    }

    /**
     * Display a listing of the County.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $counties = $this->countyRepository->all();

        return view('counties.index')
            ->with('counties', $counties);
    }

    /**
     * Show the form for creating a new County.
     *
     * @return Response
     */
    public function create()
    {
        return view('counties.create');
    }

    /**
     * Store a newly created County in storage.
     *
     * @param CreateCountyRequest $request
     *
     * @return Response
     */
    public function store(CreateCountyRequest $request)
    {
        $input = $request->all();

        $county = $this->countyRepository->create($input);

        Flash::success('County saved successfully.');

        return redirect(route('counties.index'));
    }

    /**
     * Display the specified County.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $county = $this->countyRepository->find($id);

        if (empty($county)) {
            Flash::error('County not found');

            return redirect(route('counties.index'));
        }

        return view('counties.show')->with('county', $county);
    }

    /**
     * Show the form for editing the specified County.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $county = $this->countyRepository->find($id);

        if (empty($county)) {
            Flash::error('County not found');

            return redirect(route('counties.index'));
        }

        return view('counties.edit')->with('county', $county);
    }

    /**
     * Update the specified County in storage.
     *
     * @param int $id
     * @param UpdateCountyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountyRequest $request)
    {
        $county = $this->countyRepository->find($id);

        if (empty($county)) {
            Flash::error('County not found');

            return redirect(route('counties.index'));
        }

        $county = $this->countyRepository->update($request->all(), $id);

        Flash::success('County updated successfully.');

        return redirect(route('counties.index'));
    }

    /**
     * Remove the specified County from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $county = $this->countyRepository->find($id);

        if (empty($county)) {
            Flash::error('County not found');

            return redirect(route('counties.index'));
        }

        $this->countyRepository->delete($id);

        Flash::success('County deleted successfully.');

        return redirect(route('counties.index'));
    }
}
