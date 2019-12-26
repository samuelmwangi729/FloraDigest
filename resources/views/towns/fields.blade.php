

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'County') !!}
    <select class="form-control" name="county_id">
        @foreach($counties as $county)
        <option value="{{ $county->id }}">{{ $county->county }}</option>
        @endforeach
    </select>
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Town Name') !!}
    {!! Form::text('town', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('towns.index') }}" class="btn btn-default">Cancel</a>
</div>
