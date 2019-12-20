@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="item" style="background-image:url({{ $first_post['image'] }});background-size:cover;color:white;background-position:center;height:500px">
            <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;Featured Article</h1></u><br><br><br>
                {{-- <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px;opacity:.6">
                        {{ $first_post['title'] }}
                </h3> --}}
            <br><br><br><br><br><br><br><br>
        </div> 
        <h2 class="text-center"><a href="{{ $first_post['slug'] }}">{{ $first_post['title'] }}</a></h2>
        <span class="fa fa-clock">&nbsp;&nbsp;{{ $first_post['created_at'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class=" fa fa-tags text-center">{{ $first_post['text'] }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="fa fa-comment">&nbsp;&nbsp;68</span>
 </div>
 <div class="col-lg-3">
     <h3 class="h1" style="font-family:courier;text-decoration:underline;background-color:red">Top Articles</h3>
     <ul class="list-unstyled" style="font-size:13px">
        @foreach ($posts as  $post)
        <li class="well well-sm" style="height:100px">
            <a href="#" style="font-size:10px">
                <img src="{{ asset($post->image) }}" width="50px" height="50px" align="left" style="border-radius:50px">{{ $post->title }}
            </a>
            
            <br>&nbsp;&nbsp;<span class="fa fa-tags"><?php echo $post->text;?></span>
            <br>&nbsp;&nbsp;<span class="fa fa-comment">&nbsp;&nbsp;&nbsp;45</span><br>
            <span style="font-weight:bold;opacity:.4">Category:</span><i><b>{{ $post->category_id }}</b></i>
        </li>
        @endforeach
     </ul>
 </div>
</div>
@endsection

