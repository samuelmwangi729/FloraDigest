@extends('layouts.app')
@section('content')
@foreach ($politics as $new)
   <div class="jumbotron">
       <div class="row">
           <div class="col-sm-6">
            <img src="{{ asset($new->image) }}" class="img-rounded" width="200px" height="200px" style="margin:auto;border-radius:150px">
           </div>
           <div class="col-sm-6">
           <h3> {{ $new->title }}</h3><br>
           {{ $new->text }}<br><br>
           <i class="fa fa-clock"></i>{{ $new->created_at->toFormattedDateString() }}&nbsp;<i class="fa fa-user"></i> {{ $new->published_by }}<br><br>
           <a class="btn btn-primary" href="{{ route('politics.single',['slug'=>$new->slug]) }}" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;More Information</a>
           </div>
       </div>
   </div>
@endforeach
<div id="app">
    <footer-component></footer-component>
</div>
@stop
