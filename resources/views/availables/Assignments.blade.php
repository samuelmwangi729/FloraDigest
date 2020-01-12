@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">    
      @foreach ($last as $lastavailable )
      <div class="item" style="background-image:url({{asset($lastavailable->displayImage)  }});background-size:cover;background-position:center;color:blue;height:500px">
        <u><h1 class="text-left" style="font-size:30px;"><span style="background-color:greenyellow"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp;{{ $lastavailable->title }}</span></h1></u>
            <span>At Ksh {{ $lastavailable->budget }}&nbsp;</span>
    </div> 
    {{ $lastavailable->topic }}
      @endforeach
 </div>
 <div class="col-lg-3">
    <aside class="left_widgets p_filter_widgets">
        <div class="l_w_title">
          <h3>Browse Topics</h3>
        </div>
        <div class="widgets_inner">
          <ul class="list">
           @foreach($topics  as $topic)
            <li>
              <a href="{{ route('assignment.category',[$topic->name]) }}">{{ $topic->name }}</a>
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
            <div class="col-lg-12">
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
                  @foreach ($availables as $available )
                  <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                      <div class="product-img">
                        <img
                          class="card-img"
                          src="{{asset($available->displayImage)}}" alt="New york" style="width:100%;height:200px"
                          alt=""
                        />
                        <div class="p_icon">
                          <a href="{{ route('Topic.single',[$available->slug]) }}">
                            <i class="fa fa-eye" style="color:red"></i>
                          </a>
                          {{-- <a href="{{ route('wishlist.add',['slug'=>$available->slug]) }}">
                            <i class="fa fa-heart" style="color:red"></i>
                          </a>
                          <a href="{{ route('single.cart',['slug'=>$available->slug]) }}">
                            <i class="fa fa-shopping-basket" style="color:red"></i>
                          </a> --}}
                        </div>
                      </div>
                      <div class="product-btm">
                        <a href="#" class="d-block">
                          <h6 class="text-bold">{{ $available->title }}</h6>
                        </a>
                        <div class="mt-3">
                          <span class="mr-4"><b></b>{{ $available->budget }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================End Category Product Area =================-->
      <div class="row">
        <div id="app">
                <footer-component></footer-component>
        </div>
      </div>
@stop