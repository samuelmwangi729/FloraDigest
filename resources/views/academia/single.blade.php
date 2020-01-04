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
                    {!! Form::label('deadline', 'DeadLine') !!}
                    <p>{{ $assignment->clientDate }}</p>
                </div>
                </div>
                
                <div class="col-sm-6">
                    <!-- Updated At Field -->
                <div class="form-group box"><i class="fa fa-paperclip"></i>
                    {!! Form::label('Attachment', 'Client Attachment') !!}
                    <p><a href="{{ asset($assignment->clientAttachment) }}"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</a></p>
                </div>
                </div>
               <div class="col-sm-6">
                <div class="form-group"><i class="fa fa-money"></i>
                    {!! Form::label('Budget', 'Client Budget') !!}
                    <p>$ {{ $assignment->clientBudget}}</p>
                </div>
               </div>
               <div class="col-sm-12 text-center"><i class="fa fa-question"></i>
                {!! Form::label('Instructions', 'Client Instructions') !!}
                   <?php
                    echo $assignment->clientDescription;
                    ?>
               </div>
               <hr><br>
               <div class="col-sm-5 box">
                <div class="form-group"><i class="fa fa-money"></i>
                    {!! Form::label('Status', 'Assignment Status') !!}
                    <p> 
                        @if($assignment->status==0)
                            <span style="color:red">Pending...</span>
                        @endif
                        @if($assignment->status==1)
                            <span>Completed</span>
                        @endif
                    
                    </p>
                </div>
           </div>
                <a href="{{ route('assignment.view') }}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Created At Field -->

</div>

@stop