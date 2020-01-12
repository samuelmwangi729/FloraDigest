@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3 col-sm-3 col-md-3">
        <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
                <h3>
                    Browse Topics
                </h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">
                    @foreach($topics  as $topic)
                        <li>
                            <a href="{{ route('assignment.category',[$topic->name]) }}">{{ $topic->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
    <div class="col-lg-9 col-sm-9 col-md-9">
        <div class="box">
            @foreach ($available as $available)
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="text-center text-bold" style="padding-top:70px">
                        <h3>{{$available->title}}</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6" style="border:1px solid red">
                    <div class="text-center text-bold">
                    <p><img src="{{asset($available->displayImage)}}" height="200px" width="200px" style="border-radius:50px"></p>
                    </div>
                </div>
                <hr class="box">
                <div class="text-center" style="font-weight:bold;font-size:20px">
                    <i class="fa fa-book" style="color:#562fc6"></i>&nbsp;&nbsp;{{ $available->topic }}&nbsp;&nbsp;&nbsp; <sup><i class="fa fa-question" title="Discipline" style="color:#562fc6"></i></sup>
                </div>
                <hr>
                <div class="text-center" style="font-weight:bold;font-size:20px">
                    <i class="fa fa-credit-card" style="color:#562fc6"></i>&nbsp;&nbsp;${{ $available->budget }}&nbsp;&nbsp;&nbsp; <sup><i class="fa fa-question" title="The Amount you have to pay to get the Document" style="color:#562fc6"></i></sup>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 pull-left">
                    <span class="text-center text-bold"><u>Introduction</u></span>
                    {!! $available->introParagraph !!}
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 pull-left">
                    <span class="text-center text-bold"><u>Conclusion</u></span>
                    {!! $available->conclusionParagraph !!}
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <span class="text-center text-bold">Uploaded on: </span>
                    {{ $available->created_at->toFormattedDateString() }}
                </div><div class="col-lg-6 col-md-6 col-sm-6">
                    <span class="text-center text-bold">Download</span><br>
                <i class="fa fa-paperclip"></i><a href="{{route('assignment.download',[$available->slug])}}">Download</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop