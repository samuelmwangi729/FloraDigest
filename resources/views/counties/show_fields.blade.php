<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'County:') !!}
    <p>{{ $county->county }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $county->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $county->updated_at->toFormattedDateString() }}</p>
</div>

