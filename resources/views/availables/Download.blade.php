@extends('layouts.app')
@section('content')
<div class="box container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 pull-right" style="font-size:20px;padding-top:80px">
        if Your Download Does not Start Automatically, Click <a id="download" href="{{asset($link)}}">Here</a> to Manually Download your File
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 pull-left">
            <i class="fa fa-check-circle pull-right" style="font-size:150px"></i><br>
            <h1 class="text-right">Thanks for Your Support</h1>
        </div>
    </div>
</div>
@stop
<script>
setTimeout(function(){window.location=document.getElementById('download').href}, 10000);
setTimeout(function(){window.location='/Available/Assignments'}, 6000);
</script>