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
                      @foreach ($rates as $label)
                      <li>
                        <a href="#">{{ $label->label }}: ${{ $label->fee }}</a>
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
        <div class="form-group">
          <form>
            <fieldset>
              <legend class="text-center">Fill In Your Shipping Details</legend>
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="label-control" for="First Name"><i class="fa fa-id-card" style="color:#562fc6"></i>&nbsp;&nbsp;first Name</label>
                      <input type="text" class="form-control" name="firstName" required>
                     </div>
                     <div class="col-sm-6">
                      <label class="label-control" for="Last Name"><i class="fa fa-id-card" style="color:#562fc6"></i>&nbsp;&nbsp;Last  Name</label>
                      <input type="text" class="form-control" name="secondName" required>
                     </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label for="Phone Number" class="label-control"><i class="fa fa-phone" style="color:#562fc6"></i>&nbsp;&nbsp;Phone Number</label>
                  <input type="number" class="form-control" name="PhoneNumber">
                </div>
                <div class="col-sm-4">
                  <label for="post Office" class="label-control"><i class="fa fa-user" style="color:#562fc6"></i>&nbsp;&nbsp;Post Office box</label>
                  <input type="text" class="form-control" placeholder="N/A if none">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <label for="post Office" class="label-control"><i class="fa fa-map-signs" style="color:#562fc6"></i>&nbsp;&nbsp;County</label>
                  <select class="form-control" name="county">
                    @foreach($counties as $count)
                    <option value="{{ $count->id }}">{{ $count->county }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-sm-4">
                  <label for="town" class="label-control"><i class="fa fa-building" style="color:#562fc6"></i>&nbsp;&nbsp;Town</label>
                  <select class="form-control">
                    @foreach($towns as $town)
                    <option value="{{ $town->id }}">{{ $town->town }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-sm-4">
                  <label for="payment" class="label-control"><i class="fa fa-truck" style="color:#562fc6"></i>&nbsp;&nbsp;Derivery method</label><br>
                  @foreach($rates as $rate)
                  <input type="radio" name="rate" value="{{ $rate->id }}">{{ $rate->label."".$rate->fee}}<br>
                  @endforeach
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <label for="payment" class="label-control"><i class="fa fa-truck" style="color:#562fc6"></i>&nbsp;&nbsp;Derivery method</label><br>
                    @foreach($rates as $rate)
                    <input type="radio" name="rate" value="{{ $rate->id }}">{{ $rate->label."".$rate->fee}}<br>
                    @endforeach
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>        
      </div>
    </div>
  </section>
  <!--================End Cart Area =================-->

@endsection