@extends('layouts.app')

@section('content')
<div class="row">
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
     @foreach($availables as $available)
     <div class="col-sm-3">
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
              {{-- <a href="{{ route('Topic.single',[$available->slug]) }}">
                <i class="fa fa-heart" style="color:red"></i>
              </a>
              <a href="{{ route('Topic.single',[$available->slug]) }}">
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
      <div class="row">
        <div id="app">
                <footer-component></footer-component>
        </div>
      </div>
@stop