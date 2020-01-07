@extends('layouts.hsidebar')
@section('content')
<div class="container-fluid">
    <div class="panel panel-primary" style="margin-top:20px">
        <div class="panel-heading text-center">
            Disputed Assignments
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-condensed table-hover table-primary">
                    <tr>
                        <th style="font-size:10px"><i class="fa fa-user"></i>Client</th>
                        <th style="font-size:10px"><i class="fa fa-tag"></i>&nbsp;&nbsp;Assignment Title</th>
                        <th style="font-size:10px">Status</th>
                        <th style="font-size:10px"><i class="fa fa-calendar-check"></i>  Deadline</th>
                        <th style="font-size:10px"><i class="fa fa-money-bill"></i> Budget:</th>
                        <th style="font-size:10px"><i class="fa fa-rss-square"></i> Posted At:</th>
                        <th style="font-size:10px" colspan="3">Actions&nbsp;<i class="fa fa-caret-down"></i></th>
                    </tr>
                   @if( count($assignments)==0)
                   <tr>
                       <td colspan="8">
                           <div class="alert alert-danger">
                               <a href="#" class="close" data-dismiss="alert">&times;</a>
                               <strong>Sorry!!!No Disputed Assignments Available</strong>
                           </div>
                           <div class="pull-right">
                               <button class="btn btn-success" style="background-color:#562fc6;border-radius:20px"><i class="fa fa-plus-circle"></i> <a href="{{ route('dispute.post') }}" style="color:white">Open Dispute</a></button>
                           </div>
                       </td>
                   </tr>
                   @else
                        @foreach($assignments as $assignment)
                       
                        <tr>
                        <td>{{ $assignment->clientName }}</td>
                        <td>{{ $assignment->clientAssignment }}</td>
                        <td class="text-center">
                            @if($assignment->status == 2)
                                <span style="color:red">Disputed</span>
                            @endif
                            @if($assignment->status ==0)
                                <span style="color:green">In Progress</span>
                            @endif
                        </td>
                        <td>{{ $assignment->clientDate}}</td>
                        <td>{{ $assignment->clientBudget}}</td>
                        <td>{{ $assignment->created_at->toFormattedDateString()}}</td>
                        <td>
                            <a href="{{ route('assignment.dispute', [$assignment->slug]) }}" title="Open Dispute" class='btn btn-primary btn-xs'><i class="fa fa-plus"></i></a>
                            <a href="{{ route('assignment.undispute', [$assignment->slug]) }}" title="Close Dispute" class='btn btn-danger btn-xs'><i class="fa fa-minus"></i></a>
                            <a href="{{ route('dispute.single', [$assignment->slug]) }}" title="View Dispute" class='btn btn-success btn-xs'><i class="fa fa-eye"></i></a>
                        </td>
                        </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
   <span class="text-bold"><h3 class="text-center">Disputes</h3></span>
    <div class="table-responsive">
        <table class="table table-borderless table-condensed table-hover">
            <tr>
                <th>Assignment Title</th>
                <th>Dispute</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
            @foreach($disputes as $dispute)
    <tr>
        <td>{{ $dispute->title }}</td>
        <td><?php 
        echo $dispute->clientDispute;
        ?></td>
        <td>
            @if($dispute->status==0)
            <span style="color:red">Disputed</span>
            @else
            <span style="color:green">Solved</span>
            @endif
        </td>
        <td>
            <a href="{{ route('dispute.undispute', [$dispute->title]) }}" title="Close Dispute" class='btn btn-danger btn-xs'><i class="fa fa-minus"></i></a>
            <a href="{{ route('dispute.view.this', [$dispute->title]) }}" title="View Dispute" class='btn btn-success btn-xs'><i class="fa fa-eye"></i></a>
        </td>
    </tr>
@endforeach
        </table>
    </div>
    <a href="{{ route('disputes.index') }}" class="btn btn-success">View All Disputes</a>
</div>
@stop