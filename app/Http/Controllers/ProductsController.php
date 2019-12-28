<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Repositories\ProductsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Products;
use Auth;
use Session;
use App\Models\ProductsCategories;
use App\Models\Subcategories;
use App\Models\Brand;
use App\Models\Color;
use App\Models\County;
use App\Models\Town;
use App\Models\Label;
class ProductsController extends AppBaseController
{
    /** @var  ProductsRepository */
    private $productsRepository;

    public function __construct(ProductsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the Products.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productsRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Products.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create')
        ->with('categories',ProductsCategories::all())
        ->with('subcategories',Subcategories::all())
        ->with('brands',Brand::all())
        ->with('colors',Color::all())
        ->with('labels',Label::all());
    }

    /**
     * Store a newly created Products in storage.
     *
     * @param CreateProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateProductsRequest $request)
    {
        $image1=$request->image1;
        $newImage1Name=time().$image1->getClientOriginalName();
        $image1->move('uploads/products',$newImage1Name);
        //image 2
        $image2=$request->image2;
        $newImage2Name=time().$image2->getClientOriginalName();
        $image2->move('uploads/products',$newImage2Name);
        //image 3
        $image3=$request->image3;
        $newImage3Name=time().$image1->getClientOriginalName();
        $image3->move('uploads/products',$newImage3Name);
        //image 4
        $image4=$request->image4;
        $newImage4Name=time().$image4->getClientOriginalName();
        $image4->move('uploads/products',$newImage4Name);
        $products = Products::create([
        'productName'=>$request->productName,
        'label'=>$request->label,
        'slug'=>str_slug($request->productName),
        'originalPrice'=>$request->originalPrice,
        'newPrice'=>$request->newPrice,
        'image1'=>'uploads/products/'.$newImage1Name,
        'image2'=>'uploads/products/'.$newImage2Name,
        'image3'=>'uploads/products/'.$newImage3Name,
        'image4'=>'uploads/products/'.$newImage4Name,
        'text'=>$request->text,
        'category_id'=>$request->category_id,
        'Description'=>$request->Description,
        'subcategory_id'=>$request->subcategory_id,
        'color'=>$request->color,
        'brand'=>$request->brand,
        'height'=>$request->height,
        'weight'=>$request->weight,
        'width'=>$request->width,
        'depth'=>$request->depth,
        'expiry'=>$request->expiry,
        'status'=>$request->status,
        'count'=>$request->count,
        'posted_by'=>Auth::user()->name,
        ]);

        Session::flash('success','Product Successfully Added');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified Products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products)
        ->with('categories',ProductsCategories::all())
        ->with('subcategories',Subcategories::all())
        ->with('brands',Brand::all())
        ->with('colors',Color::all())
        ->with('labels',Label::all());
    }

    /**
     * Update the specified Products in storage.
     *
     * @param int $id
     * @param UpdateProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductsRequest $request)
    {
        $products = Products::find($id)->get()->first();

        
        if($request->hasFile('image1')){
        $image1=$request->image1;
        $newImage1Name=time().$image1->getClientOriginalName();
        $image1->move('uploads/products',$newImage1Name);
        //image 2
        $image2=$request->image2;
        $newImage2Name=time().$image2->getClientOriginalName();
        $image2->move('uploads/products',$newImage2Name);
        //image 3
        $image3=$request->image3;
        $newImage3Name=time().$image1->getClientOriginalName();
        $image3->move('uploads/products',$newImage3Name);
        //image 4
        $image4=$request->image4;
        $newImage4Name=time().$image4->getClientOriginalName();
        $image4->move('uploads/products',$newImage4Name);
        }
        // dd($request->all());
        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update([
        'productName'=>$request->productName,
        'label'=>$request->label,
        'slug'=>str_slug($request->productName),
        'originalPrice'=>$request->originalPrice,
        'newPrice'=>$request->newPrice,
        'image1'=>'uploads/products/'.$newImage1Name,
        'image2'=>'uploads/products/'.$newImage2Name,
        'image3'=>'uploads/products/'.$newImage3Name,
        'image4'=>'uploads/products/'.$newImage4Name,
        'text'=>$request->text,
        'category_id'=>$request->category_id,
        'Description'=>$request->Description,
        'subcategory_id'=>$request->subcategory_id,
        'color'=>$request->color,
        'brand'=>$request->brand,
        'height'=>$request->height,
        'weight'=>$request->weight,
        'width'=>$request->width,
        'depth'=>$request->depth,
        'expiry'=>$request->expiry,
        'status'=>$request->status,
        'count'=>$request->count,
        'edited_by'=>Auth::user()->name,
        ], $id);

        Session::flash('success','Product Successfully Updated');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Products from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.index'));
    }
    public function category($category){
        $id=ProductsCategories::where('name',$category)->get()->first()->id;
        $products=Products::where('category_id',$id)->orderBy('id','desc')->get();
        if($products->count()==0){
            Session::flash('error','Sorry, No Product Exists Under Such Category. Please Check Later');
            return redirect()->back();
        }
        $lastProduct=Products::where('category_id',$id)->orderBy('id','desc')->get()->take(1);
        $subcategories=Subcategories::where('mainCategory',$id)->get();
        return view('shop.category')
        ->with('categories',ProductsCategories::all())
        ->with('products',$products)
        ->with('subcategories',$subcategories)
        ->with('brands',Brand::all())
        ->with('brands',Brand::all())
        ->with('colors',Color::all())
        ->with('labels',Label::all())
        ->with('lastProduct',$lastProduct);

    }
    public function brand($brand){
        $id=Brand::where('brandName',$brand)->get()->first()->id;
        $products=Products::where('brand',$id)->orderBy('id','desc')->get();
        if($products->count()==0){
            Session::flash('error','Sorry, No Product Exists Under Such Brand. Please Check Later');
            return redirect()->back();
        }
        $lastProduct=Products::where('brand',$id)->orderBy('id','desc')->get()->take(1);
        $subcategories=Subcategories::all();
        return view('shop.brand')
        ->with('categories',ProductsCategories::all())
        ->with('products',$products)
        ->with('subcategories',$subcategories)
        ->with('brands',Brand::all())
        ->with('brands',Brand::all())
        ->with('colors',Color::all())
        ->with('labels',Label::all())
        ->with('lastProduct',$lastProduct);
    }
    public function color($color){
         $id=Color::where('colorName',$color)->get()->first();
         if(is_null($id)){
            Session::flash('error','Error');
            return redirect()->back();
         }
         $products=Products::where('color',$id->id)->orderBy('id','desc')->get();
        if($products->count()==0){
            Session::flash('error','Sorry, No Product Exists Under Such Color. Please Check Later');
            return redirect()->back();
        }
        $lastProduct=Products::where('color',$id->id)->orderBy('id','desc')->get()->take(1);
        $subcategories=Subcategories::all();
        return view('shop.color')
        ->with('categories',ProductsCategories::all())
        ->with('products',$products)
        ->with('subcategories',$subcategories)
        ->with('brands',Brand::all())
        ->with('brands',Brand::all())
        ->with('colors',Color::all())
        ->with('labels',Label::all())
        ->with('lastProduct',$lastProduct);
    }
}
