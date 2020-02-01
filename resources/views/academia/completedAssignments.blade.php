@extends('layouts.hsidebar')
@section('content')
<div class="container-fluid">
    <div class="panel panel-primary" style="margin-top:20px">
        <div class="panel-heading text-right" style="background-color:#347ab6 important">
          @if(Auth::user()->level=='Administrator')
          <a href="{{ route('completed.new') }}" style="border-radius:20px;background-color:#ff4900 !important" class="btn btn-success pull-right">Post Complete Assignment</a>
          Assignment posted by:&nbsp;<i class="fa fa-users"></i> {{ Auth::user()->level }}</b>
          @else
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
                        <th><i class="fa fa-exclamation"></i> Status:</th>
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
                            {{ dd($assignment) }}
                            <td>{{ App\Proposal::where('slug',$assignment->clientAssignment)->get()->first()->clientName}}</td>
                            <td>{{ App\Proposal::where('slug',$assignment->clientAssignment)->get()->first()->clientAssignment }}</td>
                        <td>{{ $assignment->clientDate }}</td>
                        <td>{{ $assignment->status}}</td>
                        <td>{{ $assignment->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('assignment.single', [$assignment->slug]) }}" class='btn btn-primary btn-xs'><i class="fa fa-eye"></i></a>
                            @if($assignment->clientEmail == Auth::user()->email)
                            <a href="{{ route('assignment.edit', [$assignment->slug]) }}" class='btn btn-info btn-xs'><i class="fa fa-edit"></i></a>
                            @endif
                            <a href="{{ route('assignment.complete', [$assignment->slug]) }}" class='btn btn-success btn-xs'>Check Drafted Assignment</a>
                            
                        </td>
                        </tr>
                        @endforeach
                   @endif
                   @else
                        @foreach($assignments as $assignment)
                        <tr>
                        <td>{{ App\Proposal::where('slug',$assignment->clientAssignment)->get()->first()->clientName}}</td>
                        <td>{{ App\Proposal::where('slug',$assignment->clientAssignment)->get()->first()->clientAssignment }}</td>
                        <td>{{ $assignment->clientDate }}</td>
                        <td>
                            @if(App\Completed::where('clientAssignment',$assignment->clientAssignment)->get()->first()->status==0)
                            <span style="color:green">Completed</span>
                            @endif
                            @if(App\Completed::where('clientAssignment',$assignment->clientAssignment)->get()->first()->status==1)
                            <span style="color:red">Under Revision</span>
                            @endif
                        </td>
                        <td>{{ $assignment->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('assignment.single', [$assignment->clientAssignment]) }}" class='btn btn-primary btn-xs'>View Assignment</a>
                            <a href="{{ route('assignment.complete', [$assignment->clientAssignment]) }}" class='btn btn-success btn-xs'>Check Drafted Assignment</a>
                            @if(Auth::user()->level == 'Administrator')
                                @if($assignment->status==1)
                                <a href="{{ route('completed.edit', [$assignment->clientAssignment]) }}" class='btn btn-danger btn-xs'><i class="fa fa-check"></i>Edit</a>
                                @endif
                            @endif
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