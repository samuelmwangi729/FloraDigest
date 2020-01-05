@extends('layouts.hsidebar')
@section('content')
<div class="container">
    <div class="container">
        @if(Auth::user()->level=='Administrator')
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    Publications
                </div>
                <div class="panel-body">
                    <i class="fa fa-book"></i>&nbsp;
                    {{ $users }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    Sold Proposals
                </div>
                <div class="panel-body">
                    <i class="fa fa-dollar"></i>&nbsp;
                    {{ $users }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    Consultations
                </div>
                <div class="panel-body">
                    <i class="fa fa-phone-volume"></i>&nbsp;
                    {{ $users }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Opinions
                </div>
                <div class="panel-body">
                    <i class="fa fa-question"></i>&nbsp;
                    {{ $users }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    USERS
                </div>
                <div class="panel-body">
                    <i class="fa fa-user"></i>&nbsp;
                    {{ $users }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    POST
                </div>
                <div class="panel-body">
                    <i class="fa fa-clock"></i>&nbsp;
                    {{ $posts }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    CATEGORIES
                </div>
                <div class="panel-body">
                    <i class="fa fa-tag"></i>&nbsp;
                    {{ $categories }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    TRASHED POSTS
                </div>
                <div class="panel-body">
                    <i class="fa fa-tag"></i>&nbsp;
                    {{ $trashed }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-warning">
                <div class="panel-heading text-center">
                    TAGS
                </div>
                <div class="panel-body">
                    <i class="fa fa-tags"></i>&nbsp;
                    {{ $tags }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    In Progress
                </div>
                <div class="panel-body">
                    <i class="fa fa-money"></i>&nbsp;
                    {{ $tags }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Logistics
                </div>
                <div class="panel-body">
                    <i class="fa fa-money"></i>&nbsp;
                    {{ $tags }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    Completed Orders
                </div>
                <div class="panel-body">
                    <i class="fa fa-money"></i>&nbsp;
                    {{ $tags }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    News
                </div>
                <div class="panel-body">
                    <i class="fa fa-bell"></i>&nbsp;
                    {{ $news }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    Trashed News
                </div>
                <div class="panel-body">
                    <i class="fa fa-trash"></i>&nbsp;
                    {{ $tnews }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Politics
                </div>
                <div class="panel-body">
                    <i class="fa fa-users"></i>&nbsp;
                    {{ $politics }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Bloggers
                </div>
                <div class="panel-body">
                    <i class="fa fa-code"></i>&nbsp;
                    {{ $blogger }}
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        @endif
    @if(Auth::user()->level=='User')
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                Assignments
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-file" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                    {{ App\Proposal::where('clientEmail',Auth::user()->email)->get()->count() }}
                </div>
            </div>
            <a href="{{ route('assignment.view') }}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                Pending Assignments
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-exclamation-circle" style="color:white;font-size:35px"></i>&nbsp;
               <div class="pull-right" style="font-size:35px">
                {{ App\Proposal::where([
                    'clientEmail'=>Auth::user()->email,
                    'status'=>0
                ])->get()->count() }}
               </div>
            </div>
            <a href="{{ route('assignment.view') }}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                Completed Assignments
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-check-circle" style="color:white;font-size:35px"></i>&nbsp;
               <div class="pull-right" style="font-size:35px">
                {{ App\Proposal::where([
                    'clientEmail'=>Auth::user()->email,
                    'status'=>1,
                    'paid'=>1
                ])->get()->count() }}
               </div>
            </div>
            <a href="#">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                Disputed Assignments
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-times" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                    {{ App\Dispute::where([
                        'user'=>Auth::user()->email,
                        'status'=>0
                    ])->get()->count() }}
                </div>
            </div>
            <a href="{{ route('assignment.disputed') }}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                Deleted Assignments
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-trash" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                    {{ App\Proposal::onlyTrashed()->where([
                        'clientEmail'=>Auth::user()->email
                    ])->get()->count() }}
                    </div>
            </div>
            <a href="{{ route('assignment.trashed') }}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                Payments Made
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-money" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                    {{ App\Transaction::where([
                        'user'=>Auth::user()->email
                    ])->get()->count() }}
                    </div>
            </div>
            <a href="#">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    @endif
    </div>
</div>
@endsection
