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
                    {{ App\Available::all()->count() ?? '0' }}
                    </div>
                </div>
            <a href="{{route('publications.all')}}">
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
    @if(Auth::user()->level=='Blogger')
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="box">
            <div class="panel-heading text-center">
                POST
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-globe" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                {{ App\Models\Post::where('published_by',Auth::user()->email)->count() }}
                </div>
            </div>
            <a href="{{route('posts.view')}}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    @endif
    @if(Auth::user()->level=='Buyer')
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="box">
            <div class="panel-heading text-center">
                Shopping Cart
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-shopping-cart" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                {{ App\Cart::where([
                    'user'=>Auth::user()->email,
                    'deleted_at'=>null
                    ])->get()->count() }}
                </div>
            </div>
            <a href="{{route('cart.index')}}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="box">
            <div class="panel-heading text-center">
               All  Orders
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-shopping-cart" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                {{ App\Order::where([
                    'username'=>Auth::user()->email,
                    ])->get()->count() }}
                </div>
            </div>
            <a href="{{route('cart.index')}}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="box">
            <div class="panel-heading text-center">
               Processed  Orders
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-shopping-cart" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                {{ App\Order::where([
                    'username'=>Auth::user()->email,
                    'status'=>'1'
                    ])->get()->count() }}
                </div>
            </div>
            <a href="{{route('cart.index')}}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3" style="padding-top:30px;width:250px">
        <div class="box">
            <div class="panel-heading text-center">
               Pending  Orders
            </div>
            <div class="panel-body" style="background-color:#562fc6;color:white">
                <i class="fa fa-shopping-cart" style="color:white;font-size:35px"></i>&nbsp;
                <div class="pull-right" style="font-size:35px">
                {{ App\Order::where([
                    'username'=>Auth::user()->email,
                    'status'=>'1'
                    ])->get()->count() }}
                </div>
            </div>
            <a href="{{route('cart.index')}}">
                <div class="panel-footer text-center" style="background-color:#fe6a00;color:white">
                    More Information
                </div>
            </a>
        </div>
    </div>
     <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Register As A Blogger</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('blogger.register') }}">
                @csrf   
                <div class="row">
                    <div class="col-xs-12">
                        <div class="checkbox icheck text-center">
                            <label class="label-control">
                                Enter Your Order Number
                            </label>
                            <input type="text" class="form-control" name="order" placeholder="ENter your order number">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-12 text-center">
                        <button type="submit" class="btn btn-primary btn-flat" style="border-radius:20px;background-color:#562fc6"><i class="fa fa-plane"></i>
                            Track Status</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <div class="modal-footer">
        <span class="text-center">&copy;{{ Carbon\Carbon::now()->year }} All Rights Reserved</span>
        </div>
      </div>
    </div>
  </div>
    @endif
    </div>
</div>
@endsection
