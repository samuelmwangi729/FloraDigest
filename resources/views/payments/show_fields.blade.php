<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'logo:') !!}
    <p><img src="{{ asset($payment->logo) }}" style="border-radius:20px" height="100px" width="100px"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'payment Gateway') !!}
    <p>{{ $payment->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $payment->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $payment->updated_at->toFormattedDateString() }}</p>
</div>

