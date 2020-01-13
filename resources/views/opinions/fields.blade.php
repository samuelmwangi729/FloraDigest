
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    <label for="category" class="label-control">Topic</label>
    <select class="form-control" name="topic">
        @foreach($optionsTopics as $option)
    <option value="{{$option->topicName}}">{{$option->topicName}}</option>
        @endforeach
    </select>
</div>
<div class="form-group col-sm-12">
    <label class="label-control" for="opinion"><i class="fa fa-comments"></i>&nbsp;Opinion</label>
<textarea id="summernote" name="opinion">{{$opinion->opinion ?? ''}}</textarea>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Post Opinion', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('opinions.index') }}" class="btn btn-default">Cancel</a>
</div>
