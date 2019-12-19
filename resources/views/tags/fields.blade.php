
<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Tag Name') !!}
    {!! Form::text('tag', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tags.index') }}" class="btn btn-default">Cancel</a>
</div>
