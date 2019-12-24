
<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Color') !!}
    {!! Form::text('colorName', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('colors.index') }}" class="btn btn-default">Cancel</a>
</div>
