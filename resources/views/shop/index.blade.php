@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">    
      @foreach ($products as $product )
      <div class="item" style="background-image:url({{asset($product->image4)  }});background-size:cover;background-position:center;color:blue;height:500px">
        <u><h1 class="text-left" style="font-size:30px;"><span style="background-color:greenyellow"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp;{{ $product->label }}</span></h1></u>
            <span>At Ksh {{ $product->originalPrice }}&nbsp; Was Ksh <del>{{ $product->newPrice }}</del></span>
    </div> 
    {{ $product->productName }}
      @endforeach
        {{-- <h2 class="text-center"><a href="{{ route('news.single',['slug'=>$postsingle->slug]) }}">{{$postsingle->title }}</a></h2>
        <span class="fa fa-clock">&nbsp;&nbsp;{{ $postsingle->created_at->toFormattedDateString() }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class=" fa fa-tags text-center">{{ $postsingle->text }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="fa fa-user">&nbsp;&nbsp;Published by:<i><b>{{ $postsingle->published_by }}</b></i>&nbsp;&nbsp;&nbsp;
            <i class="fa fa-tags">{{ App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name }}</i>
    @endforeach
         --}}
 </div>
 <div class="col-lg-3">
    <aside class="left_widgets p_filter_widgets">
        <div class="l_w_title">
          <h3>Browse Categories</h3>
        </div>
        <div class="widgets_inner">
          <ul class="list">
           @foreach($categories as $category)
            <li>
              <a href="#">{{ $category->name }}</a>
            </li>
            @endforeach
          </ul>
        </div>
      </aside>
 </div>
</div>
    <!--================Category Product Area =================-->
    <section class="cat_product_area">
        <div class="row-fluid">
          <div class="row flex-row-reverse">
            <div class="col-lg-9">
              {{-- <div class="product_top_bar">
                <div class="left_dorp">
                  <select class="sorting">
                    <option value="1">Default sorting</option>
                    <option value="2">Default sorting 01</option>
                    <option value="4">Default sorting 02</option>
                  </select>
                  <select class="show">
                    <option value="1">Show 12</option>
                    <option value="2">Show 14</option>
                    <option value="4">Show 16</option>
                  </select>
                </div>
              </div> --}}
              
              <div class="latest_product_inner">
                <div class="row">
                  @foreach ($newProducts as $product )
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset($product->image4)}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="#">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-shopping-basket" style="color:red"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h6 class="text-bold">{{ $product->productName }}</h6>
                        </a>
                        <div class="mt-3">
                          <span class="mr-4"><b>Ksh&nbsp;</b>{{ $product->newPrice }}</span>
                          <del><b>Ksh&nbsp;</b>{{ $product->originalPrice }}</del>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
  
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset('uploads/products/suit.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="#">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-shopping-basket" style="color:red"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h4>Latest men’s Suit</h4>
                        </a>
                        <div class="mt-3">
                          <span class="mr-4">$25.00</span>
                          <del>$35.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset('uploads/products/phone.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="#">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-shopping-bag" style="color:red"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h4>Latest Iphone X pro</h4>
                        </a>
                        <div class="mt-3">
                          <span class="mr-4">$25.00</span>
                          <del>$35.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset('uploads/products/laptop.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="#">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-shopping-bag" style="color:red"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h4>Macboox Xiera</h4>
                        </a>
                        <div class="mt-3">
                          <span class="mr-4">$25.00</span>
                          <del>$35.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  
  
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset('uploads/products/camera3.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="#">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-shopping-bag" style="color:red"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h4>Nikon New</h4>
                        </a>
                        <div class="mt-3">
                          <span class="mr-4">$25.00</span>
                          <del>$35.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset('uploads/products/camera1.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="#">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-shopping-bag" style="color:red"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h4>Nikon Pro</h4>
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
  
            <div class="col-lg-3">
              <div class="left_sidebar_area">
  
                <aside class="left_widgets p_filter_widgets">
                  <div class="l_w_title">
                    <h3>Product Brand</h3>
                  </div>
                  <div class="widgets_inner">
                    <ul class="list">
                      @foreach($brands as $brand)
                      <li>
                        <a href="#">{{ $brand->brandName }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </aside>
  
                <aside class="left_widgets p_filter_widgets">
                  <div class="l_w_title">
                    <h3>Color Filter</h3>
                  </div>
                  <div class="widgets_inner">
                    <ul class="list">
                      @foreach($colors as $color)
                      <li>
                        <a href="#">{{ $color->colorName }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================End Category Product Area =================-->
  
@stop