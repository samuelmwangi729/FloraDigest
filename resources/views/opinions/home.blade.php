@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            @foreach($opinions as $opinion)
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="box">
                <h3 class="text-center">{{$opinion->title}}</h3>
                </div>
                <i class="fa fa-tags"></i>&nbsp;&nbsp; Category: {{ $opinion->topic }}<br>
                <i class="fa fa-user"></i>&nbsp;&nbsp; Published By: {{ $opinion->user}}
                <a href="{{route('opinion.singlet',[$opinion->slug])}}">
                    <div class="panel-footer text-center">
                       <i class="fa fa-send"></i>&nbsp;&nbsp;more information
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="col-lg-3">
            Categories
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