<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Title
    </div>
    <input type="text" class="form-control input-md" name="title" value="{{ $news->title }}" placeholder="Enter the title here" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Text 
    </div>
    <input type="text" class="form-control input-md" name="text" value="{{ $news->text }}" placeholder="Enter the title here" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Category
    </div>
    <select class="form-control" name="category_id">
        @foreach($tags as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Display Image 
    </div>
    <input type="file" value="{{ $news->image }}" class="form-control" name="image" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Content 
    </div>
    <textarea id="summernote" name="content">{{ $news->content }}</textarea>
</div>
<div class="form-group col-sm-6">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
