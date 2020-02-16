@extends('layouts.app')
@section('content')

<div class="row">
    <div class="text-center"><img src="{{ asset($new->image) }}" width="100%" height="300px">
        <br><span><i class="fa fa-user"></i>&nbsp;&nbsp;<i>Published By: </i> {{ $new->published_by }}</span>
        <i class="fa fa-clock"></i>&nbsp;&nbsp;Published: {{ $new->created_at->toFormattedDateString() }}
        <i class="fa fa-tags">{{ App\Models\NewsTags::find($new->category_id)->get()->first()->name }}</i>
        <h1>{{ $new->title }}</h1></div>
        <div class="addthis_inline_share_toolbox text-center"></div>
        <h4>{{ $new->title }}</h4>
</div>
@extends('layouts.share')
<div class="container">
    {!! $new->content !!}
    
</div>
<div class="row">
  
</div>
<div id="app">
    @include('layouts.disqus')
</div>
@stop