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
        @foreach ($products as $product )
        <div class="col-sm-3">
          <div class="panel panel-primary" style="border:none">
            <div class="panel-body">
              <img src="{{asset($product->image1)}}" alt="New york" style="width:100%;height:200px"><br>
              <span style="font-weight:bold" class="text-center">{{ $product->productName }}</span><br>
              <span>{{ $product->newPrice }} &nbsp; In stead of <span style="text-decoration:line-through">{{ $product->originalPrice }}</span></span>
            </div>
            <a href="{{ route('product.show',['id'=>$product->slug]) }}">
              <div class="panel-footer text-center">
                <i class="fa fa-eye"></i>
                View Product
              </div>
            </a>
          </div>
        </div> 
        @endforeach
      </div>
  </section>
  <!-- End feature Area -->
  <!--================ New Product Area =================-->
  <section class="new_product_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="new_product">
            <h5 class="text-uppercase">collection of <?php echo date('Y');?></h5>
            @foreach ($featured as $featured )
            <h3 class="text-uppercase">{{ $featured->productName }}</h3>
            <div class="product-img">
              <img src="{{asset($featured->image1)}}" class="img-fluid" alt="New york" style="width:100%;height:350px">
            </div>
            <h4>${{ $featured->newPrice }}</h4>
            <a href="#" class="main_btn">Add to cart</a>
            @endforeach            
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">
            @foreach ($newproducts as $newproduct )
            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img src="{{asset($newproduct->image1)}}" alt="New york" style="width:100%;height:200px">
                  <div class="p_icon">
                    <a href="{{ route('product.show',['id'=>$newproduct->slug]) }}">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-heart"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-shopping-bag"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>{{ $newproduct->productName }}</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">${{ $newproduct->newPrice }}</span>
                    <del>${{ $newproduct->originalPrice }}</del>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
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