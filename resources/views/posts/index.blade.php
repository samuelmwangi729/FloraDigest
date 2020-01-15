@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        @if(count($first_post)==0)
        <div class="alert alert-danger">
            <strong>No Posts Available</strong>
        </div>
        @else
        @foreach($first_post as $postsingle)
        <div class="item" style="background-image:url({{ $postsingle->image }});background-size:cover;color:white;background-position:center;height:500px">
            <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;Featured Article</h1></u><br><br><br>
                {{-- <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px;opacity:.6">
                        {{ $first_post['title'] }}
                </h3> --}}
            <br><br><br><br><br><br><br><br>
        </div> 
        <h2 class="text-center"><a href="{{ route('posts.single',['slug'=>$postsingle->slug]) }}">{{$postsingle->title }}</a></h2>
        <span class="fa fa-clock">&nbsp;&nbsp;{{ $postsingle->created_at }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class=" fa fa-tags text-center">{{ $postsingle->text }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="fa fa-comment">&nbsp;&nbsp;68</span>&nbsp;&nbsp;
        <span class="fa fa-user">&nbsp;&nbsp;Published by:<i><b>{{ $postsingle->published_by }}</b></i>
    @endforeach
    @endif
 </div>
 <div class="col-lg-3">
     <h3 class="h1" style="font-family:courier;text-decoration:underline;background-color:red">Top Articles</h3>
     <ul class="list-unstyled" style="font-size:13px">
        @if(count($posts)==0)
        <div class="alert alert-danger">
            <strong>No Articles Available!!</strong>Please Check Later
        </div>
        @else
        @foreach ($posts as  $post)
        <li class="well well-sm" style="height:100px">
            <a href="{{ route('posts.single',['slug'=>$post->slug]) }}"><img src="{{ asset($post->image) }}" width="50px" height="50px" align="left" style="border-radius:50px">{{$postsingle->title }}</a>
            
            <br>&nbsp;&nbsp;<span class="fa fa-tags"></span>{{ $post->title }}
            <br>&nbsp;&nbsp;<span class="fa fa-comment">&nbsp;&nbsp;&nbsp;45</span><br>
            <span style="font-weight:bold;opacity:.4">Category:</span><i><b>{{ $post->category->name }}</b></i>
        </li>
        @endforeach
        @endif
     </ul>
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color:#562fc6 !important">
    <i class="fa fa-user-plus"></i>&nbsp;Register As A Blogger
  </button>
  
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

