<!-- Image Field-->
<div class="form-group">
    <p><img src="{{ asset($topics->displayImage) }}" width="100%" height="400px"></p>
</div>
<!-- Name Field-->
<div class="form-group">
    <i class="fa fa-tags"></i>&nbsp;&nbsp;{!! Form::label('created_at', 'Name:') !!}
    <p>{{ $topics->name }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    <i class="fa fa-clock"></i>&nbsp;&nbsp; {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $topics->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <i class="fa fa-clock"></i>&nbsp;&nbsp;  {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $topics->updated_at->toFormattedDateString() }}</p>
</div>

