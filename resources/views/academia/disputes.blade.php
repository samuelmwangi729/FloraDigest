@extends('layouts.hsidebar')
@section('content')
<div class="container-fluid">
    <div class="panel panel-primary" style="margin-top:20px">
        <div class="panel-heading text-center">
            Disputes Made By {{ Auth::user()->name }}
        </div>
        <div class="panel-body">
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
            @if($dispute->status==0)
                <a href="{{ route('dispute.undispute', [$dispute->title]) }}" title="Close Dispute" class='btn btn-danger btn-xs'><i class="fa fa-minus"></i></a>
            @endif
            <a href="{{ route('dispute.view.this', [$dispute->title]) }}" title="View Dispute" class='btn btn-success btn-xs' style="background-color:#562fc6 !important"><i class="fa fa-eye"></i></a>
        </td>
    </tr>
@endforeach
        </table>
    </div>
        </div>
    </div>
   
</div>
@stop