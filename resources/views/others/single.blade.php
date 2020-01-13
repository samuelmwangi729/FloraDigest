@extends('layouts.app')

@section('content')
<div class="container text-center">
    @foreach($other as $others)
<h1 class="text-center">{{$others->title}}</h1>
<hr>
Posted by: {{ $others->names }}<br>
<u>Topic: {{ $others->topic }}</u>
<div class="col-sm-12">
    {!! $others->content !!}
</div>
    @endforeach
</div>
@endsection