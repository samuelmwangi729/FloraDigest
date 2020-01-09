<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvailableRequest;
use App\Http\Requests\UpdateAvailableRequest;
use App\Repositories\AvailableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use App\Models\Topics;
use Response;

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
           $image=$request->file('displayImage');
           $newImageName=time().$image->getClientOriginalName();
        dd($request->all());
       }

        $available = $this->availableRepository->create($input);

        Flash::success('Available saved successfully.');

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
        $available = $this->availableRepository->find($id);

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

        return view('availables.edit')->with('available', $available);
    }

    /**
     * Update the specified Available in storage.
     *
     * @param int $id
     * @param UpdateAvailableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvailableRequest $request)
    {
        $available = $this->availableRepository->find($id);

        if (empty($available)) {
            Flash::error('Available not found');

            return redirect(route('availables.index'));
        }

        $available = $this->availableRepository->update($request->all(), $id);

        Flash::success('Available updated successfully.');

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
}
