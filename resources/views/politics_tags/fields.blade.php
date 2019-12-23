

<!-- Content Field -->
<div class="form-group col-sm-6">
    <label class="label-control" for="tag name">Tag Name</label>
    <input type="text" class="form-control" name="name" value="{{ $politicsTags->name ?? '' }}">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('politicsTags.index') }}" class="btn btn-default">Cancel</a>
</div>
