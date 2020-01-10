
<div class="col-sm-6">
    <label class="label-control" for="title">Title</label>
    <input type="text" class="form-control input-md" name="title" value="{{ $available->title ?? '' }}" placeholder="Title">
</div>
<div class="col-sm-6">
    <label class="label-control" for="title">Topic</label>
    <select name="topic" class="form-control">
        @foreach($topics as $topic)
            <option value="{{ $topic->name }}" 
                @if($available->topic ?? '' == $topic->name)
                selected
                @endif
                >{{ $topic->name }}</option>
        @endforeach
    </select>
</div><div class="col-sm-6">
    <label class="label-control" for="title">Budget</label>
    <input type="number" class="form-control input-md" value="{{ $available->budget ?? '' }}" name="budget" placeholder="Budget">
</div><div class="col-sm-6">
    <label class="label-control" for="title">Featured Image</label>
  <input type="file" class="form-control" name="displayImage">
</div>
<div class="col-sm-6">
    <label class="label-control" for="title">Assignment File</label>
  <input type="file" class="form-control" name="AssignmentFile">
</div>

<div class="col-sm-12">
    <label class="label-control" for="title">Introduction Paragraph</label>
   <textarea id="summernote" name="introParagraph">{{ $available->introParagraph ?? '' }}</textarea>
</div>
<div class="col-sm-12">
    <label class="label-control" for="title">Introduction Paragraph</label>
   <textarea class="summernote" name="conclusionParagraph">{{ $available->conclusionParagraph  ?? ''}}</textarea>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12" style="padding-top:30px">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('availables.index') }}" class="btn btn-default">Cancel</a>
</div>
