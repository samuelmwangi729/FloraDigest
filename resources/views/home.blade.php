@extends('layouts.hsidebar')
@section('content')
<div class="container">
    <div class="row-fluid" style="width:100%">
        @if(Auth::user()->level=='Administrator')
        <div class="col-sm-3" style="padding-top:30px;width:260px">
            <div class="box">
                <div class="panel-heading text-center">
                    Publications
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-file" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $users }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Sold Proposals
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-credit-card" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $users }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Consultations
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-question" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $users }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Opinions
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-pie-chart" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $users }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    USERS
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-users" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $users }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    POST
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-globe" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $posts }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    CATEGORIES
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-caret-down" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $categories }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    TRASHED POSTS
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-trash" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $trashed }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    TAGS
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-tags" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $tags }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    In Progress
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-comments" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $tags }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Products
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-truck" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $tags }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Completed Orders
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-handshake" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $tags }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    News
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-newspaper" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $news }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Trashed News
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-trash" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $tnews }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Politics
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-opera" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $politics }}
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
            <div class="box">
                <div class="panel-heading text-center">
                    Bloggers
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-code" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                    {{ $blogger }}
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
                    Assignments
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-file" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                        {{ App\Proposal::all()->count() }}
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
                        'status'=>1
                    ])->get()->count() }}
                   </div>
                </div>
                <a href="{{ route('assignments.completed') }}">
                    <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                        More Information
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Disputes
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-times" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                        {{ App\Dispute::all()->count() }}
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
                    Solved Disputes
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-handshake" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                        {{ App\Dispute::where('status',1)->count() }}
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
                        {{ App\Proposal::onlyTrashed()->count() }}
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
                    Transactions
                </div>
                <div class="panel-body" style="background-color:#562fc6;color:white">
                    <i class="fa fa-money" style="color:white;font-size:35px"></i>&nbsp;
                    <div class="pull-right" style="font-size:35px">
                        {{ App\Transaction::all()->count() }}
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
                    'status'=>1
                ])->get()->count() }}
               </div>
            </div>
            <a href="{{ route('assignments.completed') }}">
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
