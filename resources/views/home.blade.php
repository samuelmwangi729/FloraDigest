@extends('layouts.hsidebar')
@section('content')
<div class="container">
    <div class="container">
        <div class="col-sm-3" style="padding-top:30px;width:250px">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    USERS
                </div>
                <div class="panel-body">
                    <i class="fa fa-user"></i>&nbsp;
                    {{ $users }}
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding-top:30px;width:250px">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    POST
                </div>
                <div class="panel-body">
                    <i class="fa fa-clock"></i>&nbsp;
                    {{ $posts }}
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding-top:30px;width:250px">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    CATEGORIES
                </div>
                <div class="panel-body">
                    <i class="fa fa-tag"></i>&nbsp;
                    {{ $categories }}
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding-top:30px;width:250px">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    TRASHED POSTS
                </div>
                <div class="panel-body">
                    <i class="fa fa-tag"></i>&nbsp;
                    {{ $trashed }}
                </div>
            </div>
        </div>
        <div class="col-sm-3" style="padding-top:30px;width:250px">
            <div class="panel panel-warning">
                <div class="panel-heading text-center">
                    TAGS
                </div>
                <div class="panel-body">
                    <i class="fa fa-tags"></i>&nbsp;
                    {{ $tags }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
