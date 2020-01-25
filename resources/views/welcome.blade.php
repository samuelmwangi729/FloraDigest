@extends('layouts.app')


@section('content')
<div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                 <img src="{{asset('img/1.jpg')}}" alt="Los Angeles" style="width:100%;height:400px">
            <div class="carousel-caption d-none d-md-block">
                <h1 style="font-size:50px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Academia</h1>
                <div class="panel panel-primary" >
                <div class="panel-heading"  style="background-color:#562fc6">
                <p class="panel-heading">We are  Dedicated in provising the technical education topics and resources to our clients</p>
                </div>
                </div>
                <a href="/academia">
                  <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                </a>
            </div>
            </div>
      
            <div class="item">
                    <img src="{{asset('img/politics.jpg')}}" alt="New york"  style="width:100%;height:400px">
            <div class="carousel-caption d-none d-md-block">
                <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Politics</h1>
                <div class="panel panel-primary">
                <div class="panel-heading"  style="background-color:#562fc6">
                <p class="panel-heading">With the latest political trends both national and internationaly.</p>
                </div>
                </div>
                <a href="/Home/Politics/News" class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</a>
            </div>
            </div>
          
            <div class="item">
              <img src="{{asset('img/package.jpg')}}" alt="New york"  style="width:100%;height:400px">
              <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Shop</h1>
                    <div class="panel panel-primary">
                    <div class="panel-heading"  style="background-color:#562fc6">
                            <p class="panel-heading">With our packaging services,We guarantee you that the packages will be received on time and also on the right condition</p>
                    </div>
                    </div>
                    <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                </div>
            </div>
            <div class="item">
                    <img src="{{asset('img/new.jpg')}}" alt="New york"  style="width:100%;height:400px">
                   <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">News</h1>
                    <div class="panel panel-primary">
                    <div class="panel-heading"  style="background-color:#562fc6">
                            <p class="panel-heading">With our reliable source of news, we provide real coverage on whatever goes on.We thus provide reliable information</p>
                    </div>
                    </div>
                    <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                </div>
                  </div>
                      <div class="item">
                            <img src="{{asset('img/research.jpg')}}" alt="New york"  style="width:100%;height:400px">
                            <div class="carousel-caption d-none d-md-block">
                                    <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Research</h1>
                                    <div class="panel panel-primary">
                                    <div class="panel-heading"  style="background-color:#562fc6">
                                        <p class="panel-heading">With the growing complex fields in Science, we are excellent in research studies and we would be glad to serve you</p>
                                    </div>
                                    </div>
                                    <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                                </div>
                          </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  
      <div class="row">
        <div id="app">
                <home-component></home-component>
                <projects-component></projects-component>
                {{-- <contact-component></contact-component> --}}
                <footer-component></footer-component>
        </div>
      </div>
@endsection

@section('content')



@endsection