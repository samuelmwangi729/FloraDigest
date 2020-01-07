@extends('layouts.hsidebar')


@section('content')
<section class="content-header">
    <h1>
        Assignment
    </h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                <div class="col-sm-6">
                    <div class="form-group"><i class="fa fa-tags"></i>
                        {!! Form::label('title', 'Assignment title') !!}
                        <p>{{ $assignment->clientAssignment }}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- Created At Field -->
                <div class="form-group box"><i class="fa fa-calendar-check"></i>
                    {!! Form::label('deadline', 'Date Uploaded') !!}
                    <p>{{ $assignment->clientDate }}</p>
                </div>
                </div>
                
                <div class="col-sm-6">
                    <!-- Updated At Field -->
                <div class="form-group box"><hr><i class="fa fa-eye"></i>
                    {!! Form::label('Attachment', 'Assignment Preview') !!}
                    <p><a href="{{ asset($assignment->Attachment) }}"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</a></p>
                </div>
                </div>
               <div class="col-sm-12 text-center"><hr><i class="fa fa-paragraph"></i>
                {!! Form::label('Instructions', 'Assignment Introduction ') !!}<br><hr>
                   <?php
                    echo $assignment->AssignmentInto;
                    ?>
               </div><hr>
               <div class="col-sm-12 text-center"><hr><i class="fa fa-paragraph"></i>
                {!! Form::label('Instructions', 'Assignment Conclusion ') !!}<br><hr>
                   <?php
                    echo $assignment->AssignmentConclusion;
                    ?>
               </div>
               <hr><br>
            <div class="col-sm-5 box">
                <div class="form-group"><i class="fa fa-check-circle"></i>
                    {!! Form::label('Status', 'Assignment Status') !!}
                    <p> 
                        @if($assignment->status==0)
                            <span style="color:green"><i class="fa fa-check"></i>&nbsp;&nbsp;Completed</span>
                        @endif
                        @if($assignment->status==1)
                            <span style="color:red"><i class="fa fa-times"></i>&nbsp;&nbsp;Revision Requested</span>
                        @endif
                    
                    </p>
                </div>
            </div>
            <div class="col-sm-5">
                @if($assignment->status==0)
                <a href="{{ route('assignment.revise',[$assignment->clientAssignment]) }}" class="btn btn-danger"><i class="fa fa-recycle"></i>&nbsp;Request Revision</a>
                @else
                <a href="{{ route('assignment.markComplete',[$assignment->clientAssignment]) }}" class="btn btn-success"><i class="fa fa-recycle"></i>&nbsp;Mark As Complete</a>
                @endif               
                &nbsp; <a href="{{ route('assignment.view') }}" class="btn btn-default">Back</a>
            </div>
               
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Created At Field -->

</div>

@stop