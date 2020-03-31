@extends('layouts.app')

@section('content')
<div class="container well text-center">
  <h1>{{ $post->title }}</h1>
</div>
<div class="container">
    <div class="text-center ml-auto"><img src="{{ asset($post->image) }}"  class="img-responsive"></div>
    <div class="row-fluid"><i class="fa fa-user"></i>&nbsp;&nbsp;Posted by Admin&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-clock"></i>&nbsp;&nbsp;{{  $post->created_at->toFormattedDateString() }}&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-tags"></i>&nbsp;&nbsp;{{  $post->category->name }}&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <span class="text-justify"><br><?php echo $post->content;?></span>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox text-center"></div>
            
</div>
@include('layouts.disqus')
@include('layouts.share')
@stop