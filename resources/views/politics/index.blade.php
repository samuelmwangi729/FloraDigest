@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Politics</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('politics.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        @if($politics->count()==0)
        <div class="box box-primary">
            <div class="box-body text-center">
                 <div class="alert alert-danger">
                     {{-- <a href="#" class="close" data-dismiss="alert">&times;</a> --}}
                     <strong>No News Available</strong>
                 </div>
            </div>
        </div>
        @else
        <div class="box box-primary">
            <div class="box-body">
                    @include('politics.table')
            </div>
        </div>
        @endif
        <div class="text-center">
        </div>
    </div>
@endsection

