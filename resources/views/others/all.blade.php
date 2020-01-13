@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            @foreach($others as $other)
            <div class="col-md-3 text-center">
                <div class="box text-center">
                    {{ $other->title }}
                </div>
                <a href="{{route('other.single',[$other->slug])}}">
                    {{ $other->slug }}
                </a>
            </div>
            @endforeach
    </div>
<a href="{{route('others.create')}}" class="btn btn-success pull-right">Did Not Find What you were Looking for<br>Publish It Yourself</a>
</div>
@stop