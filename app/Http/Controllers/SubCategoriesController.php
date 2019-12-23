<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcategoriesRequest;
use App\Http\Requests\UpdateSubcategoriesRequest;
use App\Repositories\SubcategoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\ProductsCategories;
use App\Models\SubCategories;
use Session;

class SubcategoriesController extends AppBaseController
{
    /** @var  SubcategoriesRepository */
    private $subcategoriesRepository;

    public function __construct(SubcategoriesRepository $subcategoriesRepo)
    {
        $this->subcategoriesRepository = $subcategoriesRepo;
    }

    /**
     * Display a listing of the Subcategories.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subcategories = Subcategories::all();

        return view('subcategories.index')
            ->with('subcategories', $subcategories);
    }

    /**
     * Show the form for creating a new Subcategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('subcategories.create')->with('categories',ProductsCategories::all());
    }

    /**
     * Store a newly created Subcategories in storage.
     *
     * @param CreateSubcategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcategoriesRequest $request)
    {
        $input = $request->all();

        $subcategories = $this->subcategoriesRepository->create($input);

        Flash::success('Subcategories saved successfully.');

        return redirect(route('subcategories.index'));
    }

    /**
     * Display the specified Subcategories.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subcategories = $this->subcategoriesRepository->find($id);

        if (empty($subcategories)) {
            Flash::error('Subcategories not found');

            return redirect(route('subcategories.index'));
        }

        return view('subcategories.show')->with('subcategories', $subcategories);
    }

    /**
     * Show the form for editing the specified Subcategories.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subcategories = $this->subcategoriesRepository->find($id);

        if (empty($subcategories)) {
            Flash::error('Subcategories not found');

            return redirect(route('subcategories.index'));
        }

        return view('subcategories.edit')
        ->with('subcategories', $subcategories)
        ->with('categories',ProductsCategories::all());
    }

    /**
     * Update the specified Subcategories in storage.
     *
     * @param int $id
     * @param UpdateSubcategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcategoriesRequest $request)
    {
        $subcategories = SubCategories::find($id);
        if (empty($subcategories)) {
            Flash::error('Subcategories not found');

            return redirect(route('subcategories.index'));
        }

        $subcategories->mainCategory=$request->mainCategory;
        $subcategories->subcategoryName=$request->subcategoryName;
        $subcategories->save();

        Session::flash('success','Subcategory Successfully Updated');

        return redirect(route('subcategories.index'));
    }

    /**
     * Remove the specified Subcategories from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subcategories = $this->subcategoriesRepository->find($id);

        if (empty($subcategories)) {
            Flash::error('Subcategories not found');

            return redirect(route('subcategories.index'));
        }

        $this->subcategoriesRepository->delete($id);

        Flash::success('Subcategories deleted successfully.');

        return redirect(route('subcategories.index'));
    }
}
