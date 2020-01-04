@extends('layouts.hsidebar')
@section('content')
<div class="container-fluid">
    <div class="panel panel-primary" style="margin-top:20px">
        <div class="panel-heading text-center">
            Assignment posted by:&nbsp;<i class="fa fa-envelope"></i>&nbsp; <b>{{ Auth::user()->email}}</b>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-condensed table-hover table-primary">
                    <tr>
                        <th><i class="fa fa-user"></i>&nbsp;&nbsp;Client Name</th>
                        <th><i class="fa fa-tag"></i>&nbsp;&nbsp;Assignment Title</th>
                        <th><i class="fa fa-calendar-check"></i>  Deadline</th>
                        <th><i class="fa fa-money-bill"></i> Client Budget:</th>
                        <th><i class="fa fa-rss-square"></i> Posted At:</th>
                        <th colspan="3">Actions&nbsp;<i class="fa fa-caret-down"></i></th>
                    </tr>
                    <tr>
                        @foreach($assignment as $assignment)
                        <td>{{ $assignment->clientName }}</td>
                        <td>{{ $assignment->clientAssignment }}</td>
                        <td>{{ $assignment->clientDate }}</td>
                        <td>{{ $assignment->clientBudget}}</td>
                        <td>{{ $assignment->created_at->toFormattedDateString() }}</td>
                        <td><a href="{{ route('Assignment.show',['slug'=>$assignment->slug]) }}" class="fa fa-eye" title="View the Assignment"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-edit" style="color:#562fc6"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" style="color:red"></a></td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop