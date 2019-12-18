@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="item" style="background-image:url('img/news/6.jpg');background-size:cover;color:white;background-position:center;height:500px">
            <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;Featured Article</h1></u><br><br><br>
                <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px">The work undertaken through the Code of Practice has 
                    given us a real opportunity to identify areas of excellence within the our Organization and the producers we work with. It has also highlighted opportunities 
                    for improvement and areas for greater investment 
                    to ensure that there is an increase in the wealth of voices, perspectives and stories visible on-screen, on-air and within our productions</h3>
            <br><br><br><br><br><br><br><br>
        </div> 
 </div>
 <div class="col-lg-3">
     <h3 class="h1" style="font-family:courier;text-decoration:underline;background-color:red">Top Articles</h3>
     <ul class="list-unstyled" style="font-size:13px">
        @foreach ($posts as  $post)
        <li class="well well-sm" style="height:100px">
            <a href="#">
                <img src="{{ asset($post->image) }}" width="50px" height="50px" align="left" style="border-radius:50px">Call for change in the UNEP
            </a>
            <br>
           {{ $post->content }}
            <span style="font-weight:bold;opacity:.4">Category:</span><i><b>{{ $post->category_id }}</b></i>
        </li>
        @endforeach
     </ul>
 </div>
</div>
@endsection

