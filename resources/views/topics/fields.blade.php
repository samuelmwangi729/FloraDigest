

<div class="col-sm-6">
    <label class="label-control" for="topic name">Topic Name</label>
    <input type="text" class="form-control input-sm" name="name" value="{{ $topics->name ?? '' }}">
</div>
<div class="col-sm-6">
    <label class="label-control" for="topic name">Display Image</label>
    <input type="file" class="form-control" name="displayImage">
</div>
<!-- Submit Field -->
<br>
<div class="form-group col-sm-12" style="margin-top:20px">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('topics.index') }}" class="btn btn-default">Cancel</a>
</div>
