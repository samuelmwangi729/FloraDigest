@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
       @if(count($news)==0)
       <div class="alert alert-danger">
           <strong><i class="fa fa-exclamation-circle" style="color:yellow;font-size:20px"></i>&nbsp;No news Posted, Please Check With us later</strong>
       </div>
       @else
       @foreach($news as $postsingle)
        
       <div class="item" style="background-image:url({{ $postsingle->image }});background-size:cover;color:blue;background-position:center;height:500px">
           <u><h1 class="text-left" style="font-size:30px;"><span style="background-color:greenyellow"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp;{{  App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name}}</span></h1></u><br><br><br>
               {{-- <h3 class="text-center" style="font-size:15px;font-weight:bold;background-color:black;line-height:50px;opacity:.6">
                       {{ $first_post['title'] }}
               </h3> --}}
           <br><br><br><br><br><br><br><br>
       </div> 
       <h2 class="text-center"><a href="{{ route('news.single',['slug'=>$postsingle->slug]) }}">{{$postsingle->title }}</a></h2>
       <span class="fa fa-clock">&nbsp;&nbsp;{{ $postsingle->created_at->toFormattedDateString() }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
       <span class=" fa fa-tags text-center">{{ $postsingle->text }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
       <span class="fa fa-user">&nbsp;&nbsp;Published by:<i><b>{{ $postsingle->published_by }}</b></i>&nbsp;&nbsp;&nbsp;
           <i class="fa fa-tags">{{ App\Models\NewsTags::find($postsingle->category_id)->get()->first()->name }}</i>
   @endforeach
   @endif
        
 </div>
 <div class="col-lg-3">
     <h6 class="h1" style="font-family:courier;text-decoration:underline;background-color:green;color:white"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:red"></i>&nbsp;Categories</h6>
     <ul class="list-group">
         @if(count($tags)==0)
         <div class="alert alert-danger">
             <strong><i class="fa fa-exclamation-circle" style="color:yellow;font-size:20px"></i>&nbsp;No Categories Available</strong>
         </div>
         @else
         @foreach($tags as $tag)
         <a href="{{ route('tag.type',['name'=>$tag->name]) }}" class="text-center"><li class="list-group-item">{{ $tag->name }}</li></a>
         @endforeach
         @endif
     </ul>
 </div>
</div>
@endsection

