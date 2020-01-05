@extends('layouts.hsidebar')


@section('content')
<section class="content-header">
    <h1>
        Assignment Dispute
    </h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                <div class="col-sm-12 text-center">
                    <div class="form-group"><i class="fa fa-tags"></i>
                        {!! Form::label('title', 'Assignment title') !!}
                        <p>{{ $dispute->title }}</p>
                    </div>
                </div>
               <div class="col-sm-12 text-center"><i class="fa fa-question"></i>
                {!! Form::label('Instructions', 'Dispute Details') !!}
                   <?php
                    echo $dispute->clientDispute;
                    ?>
               </div>
               <hr><br>
                <div class="col-sm-6 box">
                    <div class="form-group"><i class="fa fa-money"></i>
                        {!! Form::label('Status', 'Dispute Status') !!}
                        <p> 
                            @if($dispute->status==0)
                                <span style="color:red">Disputed...</span>
                            @endif
                            @if($dispute->status==1)
                                <span style="color:green">Solved</span>
                            @endif
                        
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group"><i class="fa fa-handshake"></i>
                        {!! Form::label('Status', 'Settle Dispute') !!}
                        <p> 
                            <a href="{{ route('dispute.settle',[$dispute->title]) }}" class="btn btn-default" style="background-color:#562fc6 !important;color:white;border-radius:20px"><i class="fa fa-handshake"></i>&nbsp;Settle Dispute</a>
                        
                        </p>
                    </div>
                </div>
                <a href="{{ route('assignment.view') }}" class="btn btn-default" style="background-color:#562fc6 !important;color:white;border-radius:20px;margin-top:30px"><i class="fa fa-backward"></i> Back</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Created At Field -->

</div>

@stop