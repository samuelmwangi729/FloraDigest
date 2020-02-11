@extends('layouts.app')


@section('content')
<div class="container">
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
        @if(count($proposal)==0)
        <img src="{{asset('img/1.jpg')}}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:50px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Academia</h1>
          <div class="panel panel-primary" >
          <div class="panel-heading"  style="background-color:#222222">
          <p class="panel-heading">Academic Proposals Available</p>
          </div>
          </div>
      </div>
      </div>
        @else
      <img src="{{asset($proposal[0]['displayImage'])}}" alt="Los Angeles" style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="font-size:50px;color:red;font-weight:bold" class="text-center">Academia</h1>
        <div class="panel panel-primary" >
        <div class="panel-heading"  style="background-color:#222222">
        <p class="panel-heading text-bold" style="font-size:16px">{{$proposal[0]['title']}}</p>
        </div>
        </div>
        <a href="/Available/Assignments">
          <button class="btn btn-primary" style="border-radius:20px;font-size:20px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-eye"></i>&nbsp;&nbsp;View</button>
        </a>
    </div>
    </div>
      @endif
     

      <div class="item">
        @if(count($politics)==0)
        <img src="{{asset('img/politics.jpg')}}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:50px;color:red;font-weight:bold" class="text-center">Politics</h1>
          <div class="panel panel-primary" >
         
          </div>
         
      </div>
      </div>
        @else
              <img src="{{asset($politics[0]['image'])}}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
      <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:50px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Politics</h1>
          <div class="panel panel-primary">
          <div class="panel-heading"  style="background-color:#222222">
          <p class="panel-heading text-bold" style="font-size:16px">{{$politics[0]['title']}}</p>
          </div>
          </div>
          <a href="{{ route('politics.single',['slug'=>$politics[0]['slug']])}}" class="btn btn-primary" style="border-radius:20px;font-size:20px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</a>
      </div>
      </div>
    @endif
      <div class="item">
        <img src="{{asset('img/package.jpg')}}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
        <div class="carousel-caption d-none d-md-block">
              <h1 style="font-size:50px;color:red;font-weight:bold" class="text-center">Shop</h1>
              <div class="panel panel-primary">
              <div class="panel-heading text-bold" style="font-size:16px;background-color:#222222 !important">
                      <p>We guarantee package delivery on time and also on the right condition</p>
              </div>
              </div>
              <a href="/logistics" class="btn btn-primary" style="border-radius:20px;font-size:20px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;View Shop</a>
          </div>
      </div>
      <div class="item">
        <img src="{{asset($post[0]['image'])}}" alt="Posts"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
        <div class="carousel-caption d-none d-md-block">
              <h1 style="font-size:50px;color:red;font-weight:bold" class="text-center">Blog</h1>
              <div class="panel panel-primary">
              <div class="panel-heading text-bold" style="font-size:16px;background-color:#222222 !important">
              <p>{{$post[0]['title']}}</p>
              </div>
              </div>
              <a href="/blog" class="btn btn-primary" style="border-radius:20px;font-size:20px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-send"></i>&nbsp;&nbsp;Blog</a>
          </div>
      </div>
      <div class="item">
        @if(count($latest)==0)
        <img src="{{ asset('img/new.jpg') }}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:50px;color:red;font-weight:bold" class="text-center">News</h1>
          <div class="panel panel-primary" >
          </div>
      </div>
      </div>
        @else
              <img src="{{$latest[0]['image']}}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
             <div class="carousel-caption d-none d-md-block">
              <h3 style="font-size:30px;color:red;font-weight:bold" class="text-center">News</h3>
              <div class="panel panel-primary">
              <div class="panel-heading"  style="background-color:#222222">
              <p class="panel-heading text-bold" style="font-size:16px">{{$latest[0]['text']}}</p>
              </div>
              </div>
              <a href="{{ route('news.single',['slug'=>$latest[0]['slug']]) }}" class="btn btn-primary" style="border-radius:20px;font-size:20px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</a>
          </div>
            </div>
            @endif
                <div class="item">
                      <img src="{{asset('img/research.jpg')}}" alt="New york"  style="background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
                      <div class="carousel-caption d-none d-md-block">
                              <h1 style="font-size:30px;color:red;font-weight:bold" class="text-center">Research</h1>
                              <div class="panel panel-primary">
                              <div class="panel-heading"  style="background-color:#222222">
                                  <p class="panel-heading text-bold" style="font-size:16px">With the growing complex fields in Science,we would be glad to serve you</p>
                              </div>
                              </div>
                              <button class="btn btn-primary" style="border-radius:20px;font-size:20px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                          </div>
                    </div>
    </div>
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
                <footer-component></footer-component>
        </div>
      </div>
@endsection

@section('content')



@endsection