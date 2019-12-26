@extends('layouts.app')


@section('content')
<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th colspan="2" scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cart as $product)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="{{ asset(App\Models\Products::where('slug',$product->product_slug)->get()->first()->image1) }}"
                        alt="" height="50px" width="50px" style="border-radius:50px"
                      />
                    </div>
                    <div class="media-body">
                      <p>{{ App\Models\Products::where('slug',$product->product_slug)->get()->first()->productName }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <span>Ksh.{{ $product->price }}</span>
                </td>
                <td>
                  <div class="product_count">
                    <input
                      type="text"
                      name="qty"
                      id="sst"
                      maxlength="12"
                      value="{{ $product->qty  ?? ''}}"
                      title="Quantity:"
                      class="input-text qty" readonly
                    />
                    {{-- <button
                      onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                      class="increase items-count"
                      type="button"
                    >
                      <i class="fa fa-angle-up"></i>
                    </button>
                    <button
                      onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                      class="reduced items-count"
                      type="button"
                    >
                      <i class="fa fa-angle-down"></i>
                    </button> --}}
                  </div>
                </td>
                <td>
                  <h5>Ksh.{{ $product->price*$product->qty }} </h5>
                </td>
              </tr>                 
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>
                    {{ DB::table('carts')->where('user',Auth::user()->email)
                    ->sum('total') }}
                </h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td colspan="3">
                </td>
                <td>
                  <div class="shipping_box">
                    <h3 style="background-color:gray;color:white" class="text-center">shipping</h3>
                    <ul class="list">
                      {{ $labels }}
                      @foreach ($labels as $label)
                      <li>
                        <a href="#">{{ $label->labelName }}: ${{ $label->fee }}</a>
                      </li>
                      @endforeach
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                      @foreach($counties as $count)
                      <option value="{{ $count->id }}">{{ $count->county }}</option>
                      @endforeach
                    </select>
                    <select class="shipping_select">
                      @foreach($towns as $town)
                      <option value="{{ $town->id }}">{{ $town->town }}</option>
                      @endforeach
                    </select>
                    <input type="number" placeholder="Postcode/Zipcode" />
                    <a class="gray_btn" href="#">Update Details</a>
                  </div>
                </td>
              </tr>
              <tr class="out_button_area">
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="checkout_btn_inner">
                    <a class="gray_btn" href="#">Continue Shopping</a>
                    <a class="main_btn" href="#">Proceed to checkout</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--================End Cart Area =================-->

@endsection