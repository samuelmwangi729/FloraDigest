<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Repositories\BrandRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
class BrandController extends AppBaseController
{
    /** @var  BrandRepository */
    private $brandRepository;

    public function __construct(BrandRepository $brandRepo)
    {
        $this->brandRepository = $brandRepo;
    }

    /**
     * Display a listing of the Brand.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $brands = $this->brandRepository->all();

        return view('brands.index')
            ->with('brands', $brands);
    }

    /**
     * Show the form for creating a new Brand.
     *
     * @return Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created Brand in storage.
     *
     * @param CreateBrandRequest $request
     *
     * @return Response
     */
    public function store(CreateBrandRequest $request)
    {
        $input = $request->all();

        $brand = $this->brandRepository->create($input);

        Session::flash('success','Brand Successfully Saved');

        return redirect(route('brands.index'));
    }

    /**
     * Display the specified Brand.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $brand = $this->brandRepository->find($id);

        if (empty($brand)) {
            Session::flash('error','Brand Not Found');

            return redirect(route('brands.index'));
        }

        return view('brands.show')->with('brand', $brand);
    }

    /**
     * Show the form for editing the specified Brand.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brand = $this->brandRepository->find($id);

        if (empty($brand)) {
            Session::flash('error','Brand Not Found');

            return redirect(route('brands.index'));
        }

        return view('brands.edit')->with('brand', $brand);
    }

    /**
     * Update the specified Brand in storage.
     *
     * @param int $id
     * @param UpdateBrandRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBrandRequest $request)
    {
        $brand = $this->brandRepository->find($id);

        if (empty($brand)) {
            Session::flash('error','Brand Not Found');

            return redirect(route('brands.index'));
        }

        $brand = $this->brandRepository->update($request->all(), $id);

        Session::flash('success','Brand SUccessfully Updated');

        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified Brand from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $brand = $this->brandRepository->find($id);

        if (empty($brand)) {
            Session::flash('error','Brand Not Found');

            return redirect(route('brands.index'));
        }

        $this->brandRepository->delete($id);

        Session::flash('error','Brand Successfully Deleted');

        return redirect(route('brands.index'));
    }
}
