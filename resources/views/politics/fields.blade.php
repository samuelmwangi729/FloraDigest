
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Title
    </div>
    <input type="text" class="form-control input-md" name="title" placeholder="Enter the title here" value="{{ $politics->title ?? '' }}" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Text 
    </div>
    <input type="text" class="form-control input-md" name="text"  placeholder="Enter the title here" value="{{ $politics->text ?? '' }}" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Category
    </div>
    <select class="form-control" name="tag_id">
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Display Image 
    </div>
    <input type="file"  class="form-control" name="image" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Content 
    </div>
    <textarea id="summernote" name="content">{{ $politics->title ?? '' }}</textarea>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('politics.index') }}" class="btn btn-default">Cancel</a>
</div>
