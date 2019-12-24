@extends('layouts.app')
@extends('layouts.modal')
@section('content')
<div class="row">
    <section class="home_banner_area mb-40" style="height:400px !important;background-position:cover !important">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content row">
              <div class="col-lg-12" style="padding-top:100px">
                <p class="sub text-uppercase">Shop</p>
                <h3><span>Acquire</span> Your <br />Goods <span>in Style</span></h3>
                <h4>All you need In One Place.</h4>
                <a class="main_btn mt-40" href="{{ route('site.shop') }}" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold">Visit Shop</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Bootstrap popup-->
      {{-- <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#562fc6">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white">&times;</button>
                    <h4 class="modal-title" style="color:white">Welcome to Our Site. We Provide goods at affordable Prices</h4>
                </div>
                <div class="modal-body">
                    <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" style="border-radius:20px">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" style="border-radius:20px">
                        </div>
                        <button type="submit" class="btn btn-primary"  style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-send"></i>&nbsp;&nbsp;Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
      <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="fa fa-money"></i>
              <h3>Money back gurantee</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="fa fa-truck"></i>
              <h3>Free Delivery</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="fa fa-support"></i>
              <h3>Alway support</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="fa fa-credit-card"></i>
              <h3>Secure payment</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="panel panel-primary panel-heading text-center text-bold">Featured Products</div>
      <div class="row">
        <div class="col-sm-3">
          <div class="panel panel-primary" style="border:none">
            <div class="panel-body">
              <img src="{{asset('uploads/products/suit.jpg')}}" alt="New york" style="width:100%;height:200px"><br>
              <span style="font-weight:bold" class="text-center">Men's Suit</span><br>
              <span>$5000 &nbsp; In stead of <span style="text-decoration:line-through">$6000</span></span>
            </div>
            <a href="#">
              <div class="panel-footer text-center">
                View Product
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-primary" style="border:none">
            <div class="panel-body">
              <img src="{{asset('uploads/products/phone.jpg')}}" alt="New york" style="width:100%;height:200px"><br>
              <span style="font-weight:bold" class="text-center">Iphone-X pro</span><br>
              <span>$500 &nbsp; In stead of <span style="text-decoration:line-through">$600</span></span>
            </div>
            <a href="#">
              <div class="panel-footer text-center">
                View Product
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-primary" style="border:none">
            <div class="panel-body">
              <img src="{{asset('uploads/products/shoes.jpg')}}" alt="New york" style="width:100%;height:200px"><br>
              <span style="font-weight:bold" class="text-center">Addidas Sneakers</span><br>
              <span>$50 &nbsp; In stead of <span style="text-decoration:line-through">$60</span></span>
            </div>
            <a href="#">
              <div class="panel-footer text-center">
                View Product
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-primary" style="border:none">
            <div class="panel-body">
              <img src="{{asset('uploads/products/laptop.jpg')}}" alt="New york" style="width:100%;height:200px"><br>
              <span style="font-weight:bold" class="text-center">Macbook Pro</span><br>
              $500 &nbsp; In stead of <del>$600</del></span>
            </div>
            <a href="#">
              <div class="panel-footer text-center">
                View Product
              </div>
            </a>
          </div>
        </div>
      </div>
  </section>
  <!-- End feature Area -->
  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="new_product">
            <h5 class="text-uppercase">collection of 2019</h5>
            <h3 class="text-uppercase">Men’s summer t-shirt</h3>
            <div class="product-img">
              <img src="{{asset('uploads/products/tshirt.jpg')}}" class="img-fluid" alt="New york" style="width:100%;height:350px">
            </div>
            <h4>$120.70</h4>
            <a href="#" class="main_btn">Add to cart</a>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img src="{{asset('uploads/products/shoes2.jpg')}}" alt="New york" style="width:100%;height:200px">
                  <div class="p_icon">
                    <a href="/">
                      <i class="ti-eye"></i>
                      Home
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Nike latest sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img src="{{asset('uploads/products/jeans.jpg')}}" alt="New york" style="width:100%;height:200px">
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Men’s denim jeans</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img src="{{asset('uploads/products/shoes1.jpg')}}" alt="New york" style="width:100%;height:200px">
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Addidas Sneakers</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img src="{{asset('uploads/products/watch2.jpg')}}" alt="New york" style="width:100%;height:200px">
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Quertz Wrist Watch</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End New Product Area =================-->


    <div id="app">
        <footer-component></footer-component>
    </div>
</div>
@endsection