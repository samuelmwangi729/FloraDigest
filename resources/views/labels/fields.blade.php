
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Label Name') !!}
    {!! Form::text('labelName', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('labels.index') }}" class="btn btn-default">Cancel</a>
</div>
