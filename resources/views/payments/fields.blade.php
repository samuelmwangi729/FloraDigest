
<div class="form-group col-sm-6">
    <label for="logo" class="label-control">Payment Industry Logo</label>
    <input type="file" class="form-control" name="logo" required>
</div>

<div class="form-group col-sm-6">
    <label for="logo" class="label-control">Payment Gateway Name</label>
    <input type="text" class="form-control" name="name" value="{{ $payment->name ?? '' }}" placeholder="Eg. M-Pesa" required>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payments.index') }}" class="btn btn-default">Cancel</a>
</div>
