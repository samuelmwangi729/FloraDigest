@extends('layouts.app')
@section('content')
<div class="container">
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <Strong>Success!!!Your Order <b>{{ $order }}</b></Strong> Has been Successfully Placed
    </div>
    <div class="row">
        <h1 class="text-center"><i style="font-size:200px;color:#562fc6" class="fa fa-check-circle"></i></h1>
        <h1 class="text-center">Thank You for Shopping with Us</h1>
    </div>
</div>
@stop