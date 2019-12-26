<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShippingRequest;
use App\Http\Requests\UpdateShippingRequest;
use App\Repositories\ShippingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;
class ShippingController extends AppBaseController
{
    /** @var  ShippingRepository */
    private $shippingRepository;

    public function __construct(ShippingRepository $shippingRepo)
    {
        $this->shippingRepository = $shippingRepo;
    }

    /**
     * Display a listing of the Shipping.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shippings = $this->shippingRepository->all();

        return view('shippings.index')
            ->with('shippings', $shippings);
    }

    /**
     * Show the form for creating a new Shipping.
     *
     * @return Response
     */
    public function create()
    {
        return view('shippings.create');
    }

    /**
     * Store a newly created Shipping in storage.
     *
     * @param CreateShippingRequest $request
     *
     * @return Response
     */
    public function store(CreateShippingRequest $request)
    {
        $input = $request->all();

        $shipping = $this->shippingRepository->create($input);

       Session::flash('success','Shipping Rate Successfully Added');

        return redirect(route('shippings.index'));
    }

    /**
     * Display the specified Shipping.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shipping = $this->shippingRepository->find($id);

        if (empty($shipping)) {
       Session::flash('error','Shipping Rate Not Found');

            return redirect(route('shippings.index'));
        }

        return view('shippings.show')->with('shipping', $shipping);
    }

    /**
     * Show the form for editing the specified Shipping.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shipping = $this->shippingRepository->find($id);

        if (empty($shipping)) {
            Session::flash('error','Shipping Rate Not Found');


            return redirect(route('shippings.index'));
        }

        return view('shippings.edit')->with('shipping', $shipping);
    }

    /**
     * Update the specified Shipping in storage.
     *
     * @param int $id
     * @param UpdateShippingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShippingRequest $request)
    {
        $shipping = $this->shippingRepository->find($id);

        if (empty($shipping)) {
            Session::flash('error','Shipping Rate Not Found');

            return redirect(route('shippings.index'));
        }

        $shipping = $this->shippingRepository->update($request->all(), $id);

       Session::flash('success','Shipping Rate Updated');

        return redirect(route('shippings.index'));
    }

    /**
     * Remove the specified Shipping from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shipping = $this->shippingRepository->find($id);

        if (empty($shipping)) {
       Session::flash('error','Shipping Rate Not Found');
            return redirect(route('shippings.index'));
        }

        $this->shippingRepository->delete($id);

        Session::flash('error','Shipping Rate Successfully Deleted');

        return redirect(route('shippings.index'));
    }
}
