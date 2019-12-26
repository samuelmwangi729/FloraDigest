<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Label:') !!}
    <p>{{ $shipping->label }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fee:') !!}
    <p>{{ $shipping->fee }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shipping->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shipping->updated_at->toFormattedDateString() }}</p>
</div>

