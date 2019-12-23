<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsCategoriesRequest;
use App\Http\Requests\UpdateProductsCategoriesRequest;
use App\Repositories\ProductsCategoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
use App\Models\ProductsCategories;
class ProductsCategoriesController extends AppBaseController
{
    /** @var  ProductsCategoriesRepository */
    private $productsCategoriesRepository;

    public function __construct(ProductsCategoriesRepository $productsCategoriesRepo)
    {
        $this->productsCategoriesRepository = $productsCategoriesRepo;
    }

    /**
     * Display a listing of the ProductsCategories.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productsCategories = $this->productsCategoriesRepository->all();

        return view('products_categories.index')
            ->with('productsCategories', $productsCategories);
    }

    /**
     * Show the form for creating a new ProductsCategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('products_categories.create');
    }

    /**
     * Store a newly created ProductsCategories in storage.
     *
     * @param CreateProductsCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateProductsCategoriesRequest $request)
    {
        $input = $request->all();

        $productsCategories = $this->productsCategoriesRepository->create($input);

        Session::flash('success','Product Category Added');

        return redirect(route('productsCategories.index'));
    }

    /**
     * Display the specified ProductsCategories.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($name)
    {
        $productsCategories = ProductsCategories::where('name',$name)->get()->first();

        if (empty($productsCategories)) {
            Session::flash('error','Product Category not Found');

            return redirect(route('productsCategories.index'));
        }

        return view('products_categories.show')->with('productsCategories', $productsCategories);
    }

    /**
     * Show the form for editing the specified ProductsCategories.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($name)
    {
        $productsCategories = ProductsCategories::where('name',$name)->get()->first();

        if (empty($productsCategories)) {
            Session::flash('error','Product Category Not Found');

            return redirect(route('productsCategories.index'));
        }

        return view('products_categories.edit')->with('productsCategories', $productsCategories);
    }

    /**
     * Update the specified ProductsCategories in storage.
     *
     * @param int $id
     * @param UpdateProductsCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductsCategoriesRequest $request)
    {
        $productsCategories = $this->productsCategoriesRepository->find($id);

        if (empty($productsCategories)) {
            Session::flash('error','Product Category Not Found');

            return redirect(route('productsCategories.index'));
        }

        $productsCategories = $this->productsCategoriesRepository->update($request->all(), $id);

        Session::flash('success','Product Category Updated');

        return redirect(route('productsCategories.index'));
    }

    /**
     * Remove the specified ProductsCategories from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($name)
    {
        $productsCategories = ProductsCategories::where('name',$name)->get()->first();

        if (empty($productsCategories)) {
            Session::flash('error','Product Category Not Found');
            return redirect(route('productsCategories.index'));
        }

        $productsCategories->delete();

        Session::flash('success','Product Category Deleted');

        return redirect(route('productsCategories.index'));
    }
}
