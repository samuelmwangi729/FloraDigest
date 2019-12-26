
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Label Name') !!}
    {!! Form::text('label', null, ['class' => 'form-control','placeholder'=>'Eg. Flat Rate']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Label Name') !!}
    {!! Form::number('fee', null, ['class' => 'form-control','placeholder'=>'Eg. 200Ksh','required'=>'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shippings.index') }}" class="btn btn-default">Cancel</a>
</div>
