<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('Created_at', 'Label Name:') !!}
    <p>{{ $label->labelName }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $label->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $label->updated_at->toFormattedDateString() }}</p>
</div>

