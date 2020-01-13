@extends('layouts.app')


@section('content')
<div class="row-fluid">
    <div class="row">
        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
            <h1 class="text-center">{{$opinion->title}}</h1>
            <hr>
        <h3 class="text-center"><i class="fa fa-tags"></i>
            Topic : {{$opinion->topic}}</h3><span class="pull-right"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $opinion->user}}</span>
        <div class="box"></div>
        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
            {!! $opinion->opinion !!}
        </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
          <h4 class="text-center">Categories</h4>
          <ul class="list-group">
            @foreach ($categories as $category)
                <a href="{{route('opinions.topic',[$category->topicName])}}">
                    <li class="list-group-item">
                        {{$category->topicName}}
                    </li>
                </a>           
            @endforeach
        </ul>
        </div>
    </div>
</div>
@stop