@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        @if(count($first_post)==0)
        <div class="alert alert-danger">
            <strong>No Posts Available</strong>
        </div>
        @else
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                @foreach ($first_post as $postsingle)
                    <div class="item" style="background-image:url({{ $postsingle->image }});background-size:cover;color:blue;background-position:center;height:300px;;width:100%">
                        <u><h1 class="text-left" style="font-size:30px;"><span style="background-color:greenyellow"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp;
                            @if(is_null(App\Models\NewsTags::find($postsingle->category_id)))
                            Category
                        @else
                           {{ App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name }}
                        @endif
                            
    </span></h1></u><br><br><br>
                            {{-- <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px;opacity:.6">
                                    {{ $first_post['title'] }}
                            </h3> --}}
                        <br><br><br><br><br><br><br><br>
                    </div> 
                    <h2 class="text-center"><a href="{{ route('posts.single',['slug'=>$postsingle->slug]) }}">{{$postsingle->title }}</a></h2>
                    <span class="fa fa-clock">&nbsp;&nbsp;{{ $postsingle->created_at }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class=" fa fa-tags text-center">{{ $postsingle->text }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    {{-- <span class="fa fa-comment">&nbsp;&nbsp;68</span>&nbsp;&nbsp; --}}
                    <span class="fa fa-user">&nbsp;&nbsp;Published by:<i><b>{{ $postsingle->published_by }}</b></i>
                    <i class="fa fa-tags"> @if(is_null(App\Models\NewsTags::find($postsingle->category_id)))
                        Category
                    @else
                       {{ App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name }}
                    @endif }}</i>
                @endforeach
              </div>
              @foreach ($posts as $postsingle)
              {{-- {{ dd(json_encode() }} --}}
                <div class="item">
                    <div class="item" style="background-image:url({{ $postsingle->image }});background-size:cover;color:blue;background-position:center;height:300px;">
                        <u><h1 class="text-left" style="font-size:30px;"><span style="background-color:greenyellow"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp; @if(is_null(App\Models\NewsTags::find($postsingle->category_id)))
                            Category
                        @else
                           {{ App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name }}
                        @endif</span></h1></u><br><br><br>
                            {{-- <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px;opacity:.6">
                                    {{ $first_post['title'] }}
                            </h3> --}}
                        <br><br><br><br><br><br><br><br>
                    </div> 
                    <h2 class="text-center"><a href="{{ route('posts.single',['slug'=>$postsingle->slug]) }}">{{$postsingle->title }}</a></h2>
                    <span class="fa fa-clock">&nbsp;&nbsp;{{ $postsingle->created_at }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class=" fa fa-tags text-center">{{ $postsingle->text }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    {{-- <span class="fa fa-comment">&nbsp;&nbsp;68</span>&nbsp;&nbsp; --}}
                    <span class="fa fa-user">&nbsp;&nbsp;Published by:<i><b>{{ $postsingle->published_by }}</b></i>
                        <i class="fa fa-tags">
                            @if(is_null(App\Models\NewsTags::find($postsingle->category_id)))
                                Category
                            @else
                               {{ App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name }}
                            @endif
                        </i>
                </div>
              @endforeach
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
    @endif
 </div>
 <div class="col-lg-3 col-md-3 col-sm-3">
     <h3 class="h1" style="font-family:courier;text-decoration:underline;background-color:red">Top Articles</h3>
     <ul class="list-unstyled" style="font-size:13px">
        @if(count($posts)==0)
        <div class="alert alert-danger">
            <strong>No Articles Available!!</strong>Please Check Later
        </div>
        @else
        @foreach ($posts as  $post)
        <li class="well well-sm text-bold">
            {{$postsingle->title }}
            {{-- <br>&nbsp;&nbsp;<span class="fa fa-tags"></span>{{ $post->title }} --}}
        </li>
        @endforeach
        @endif
     </ul>
     <!-- Button trigger modal -->
     <div class="container pull-left" style="padding-top:50px">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color:#562fc6 !important">
            <i class="fa fa-user-plus"></i>&nbsp;Register As A Blogger
          </button>
     </div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Register As A Blogger</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('blogger.register') }}">
                @csrf
    
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
    
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="row">
                    <div class="col-xs-12">
                        <div class="checkbox icheck text-center">
                            <label>
                                <input type="checkbox" required> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="border-radius:20px;background-color:#562fc6"><i class="fa fa-sign-out"></i>
                            register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <div class="modal-footer">
        <span class="text-center">&copy;{{ Carbon\Carbon::now()->year }} All Rights Reserved</span>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
@endsection

