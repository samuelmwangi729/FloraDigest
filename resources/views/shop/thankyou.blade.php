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
        <h4 class="pull-right"><a href="{{ route('view.order',['order'=>$order]) }}" class="text-center"><i class="fa fa-eye"></i>&nbsp;View Order</a></h4>
    </div>
</div>
@stop