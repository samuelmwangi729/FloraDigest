
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('content', 'topic') !!}
    {!! Form::text('topic', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('content', 'names') !!}
    {!! Form::text('names', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('content', 'email') !!}
<input type="email" name="email" value="{{$others->email ?? ''}}" class="form-control" required>
</div>
<div class="form-group col-sm-12">
    <textarea name="content" id="summernote"></textarea>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('others.index') }}" class="btn btn-default">Cancel</a>
</div>
