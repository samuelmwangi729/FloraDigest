@extends('layouts.hsidebar')
@section('content')
<div class="container-fluid">
    <div class="panel panel-primary" style="margin-top:20px">
        <div class="panel-heading text-right" style="background-color:#347ab6 important">
          @if(Auth::user()->level=='Administrator')
            
          Assignment posted by:&nbsp;<i class="fa fa-users"></i></b>
          @else
          <a href="{{ route('completed.new') }}" style="border-radius:20px;background-color:#ff4900 !important" class="btn btn-success pull-right">Post Complete Assignment</a>
         <i class="fa fa-user" title="Users"></i>&nbsp; <b>{{ Auth::user()->name}}</b> Completed Assignments
          @endif
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-condensed table-hover table-active">
                    <tr>
                        <th><i class="fa fa-user"></i>&nbsp;&nbsp;Client Name</th>
                        <th><i class="fa fa-tag"></i>&nbsp;&nbsp;Assignment Title</th>
                        <th><i class="fa fa-calendar-check"></i>  Deadline</th>
                        <th><i class="fa fa-money-bill"></i> Client Budget:</th>
                        <th><i class="fa fa-rss-square"></i> Posted At:</th>
                        <th colspan="3">Actions&nbsp;<i class="fa fa-caret-down"></i></th>
                    </tr>
                   @if( $assignments->count()==0)
                   <tr>
                       <td colspan="6">
                           <div class="alert alert-danger">
                               <a href="#" class="close" data-dismiss="alert">&times;</a>
                               <strong>Sorry!!!No Completed  Assignments Available, Please Check later </strong>
                           </div>
                       </td>
                   </tr>
                   @if(Auth::user()->level=='Administrator')
                   @foreach($assignments as $assignment)
                        <tr>
                        <td>{{ $assignment->clientName }}</td>
                        <td>{{ $assignment->clientAssignment }}</td>
                        <td>{{ $assignment->clientDate }}</td>
                        <td>{{ $assignment->clientBudget}}</td>
                        <td>{{ $assignment->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('assignment.single', [$assignment->slug]) }}" class='btn btn-primary btn-xs'><i class="fa fa-eye"></i></a>
                            @if($assignment->clientEmail == Auth::user()->email)
                            <a href="{{ route('assignment.edit', [$assignment->slug]) }}" class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a>
                            @endif
                            <a href="{{ route('assignment.complete', [$assignment->slug]) }}" class='btn btn-success btn-xs'>Check Drafted Assignment</a>
                            <a href="{{ route('assignment.delete', [$assignment->slug]) }}" class='btn btn-danger btn-xs'><i class="fa fa-check"></i></a>
                        </td>
                        </tr>
                        @endforeach
                   @endif
                   @else
                        @foreach($assignments as $assignment)
                        <tr>
                        <td>{{ $assignment->clientName }}</td>
                        <td>{{ $assignment->clientAssignment }}</td>
                        <td>{{ $assignment->clientDate }}</td>
                        <td>{{ $assignment->clientBudget}}</td>
                        <td>{{ $assignment->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('assignment.single', [$assignment->slug]) }}" class='btn btn-primary btn-xs'>View Assignments</a>
                            <a href="{{ route('assignment.complete', [$assignment->slug]) }}" class='btn btn-success btn-xs'>Check Drafted Assignment</a>
                        </td>
                        </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@stop