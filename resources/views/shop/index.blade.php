@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">        
        <div class="item" style="background-image:url({{asset('uploads/products/watch.jpg')  }});background-size:cover;color:blue;background-position:center;height:500px">
            <u><h1 class="text-left" style="font-size:30px;"><span style="background-color:greenyellow"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp;The label Goes Here</span></h1></u><br><br><br>
                {{-- <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px;opacity:.6">
                        {{ $first_post['title'] }}
                </h3> --}}
            <br><br><br><br><br><br><br><br>
        </div> 
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
            <li>
              <a href="#">Frozen Fish</a>
            </li>
            <li>
              <a href="#">Dried Fish</a>
            </li>
            <li>
              <a href="#">Fresh Fish</a>
            </li>
            <li>
              <a href="#">Meat Alternatives</a>
            </li>
            <li>
                <a href="#">Fresh Fish</a>
              </li>
              <li>
                <a href="#">Meat Alternatives</a>
              </li>
              <li>
                <a href="#">Meat</a>
              </li><li>
                <a href="#">Fresh Fish</a>
              </li>
              <li>
                <a href="#">Meat Alternatives</a>
              </li>
              <li>
                <a href="#">Meat</a>
              </li>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset('uploads/products/shoes2.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
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
                          <h4>Latest men’s sneaker</h4>
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
                          src="{{asset('uploads/products/suit.jpg')}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
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
                      <li>
                        <a href="#">Apple</a>
                      </li>
                      <li>
                        <a href="#">Asus</a>
                      </li>
                      <li class="active">
                        <a href="#">Gionee</a>
                      </li>
                      <li>
                        <a href="#">Micromax</a>
                      </li>
                      <li>
                        <a href="#">Samsung</a>
                      </li>
                    </ul>
                  </div>
                </aside>
  
                <aside class="left_widgets p_filter_widgets">
                  <div class="l_w_title">
                    <h3>Color Filter</h3>
                  </div>
                  <div class="widgets_inner">
                    <ul class="list">
                      <li>
                        <a href="#">Black</a>
                      </li>
                      <li>
                        <a href="#">Black Leather</a>
                      </li>
                      <li class="active">
                        <a href="#">Black with red</a>
                      </li>
                      <li>
                        <a href="#">Gold</a>
                      </li>
                      <li>
                        <a href="#">Spacegrey</a>
                      </li>
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