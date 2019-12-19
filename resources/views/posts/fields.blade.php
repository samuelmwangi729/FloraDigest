<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Title
    </div>
    <input type="text" class="form-control input-md" name="title" placeholder="Enter the title here" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Text 
    </div>
    <input type="text" class="form-control input-md" name="text" placeholder="Enter the title here" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Category
    </div>
    <select class="form-control" name="category_id">
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Tags
    </div>
    @foreach($tag as $tg)
    <input type="checkbox" name="tags[]" value="{{ $tg->id }}">{{ $tg->tag}}
    @endforeach
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Featured Image 
    </div>
    <input type="file" class="form-control" name="image" style="border-radius:20px">
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Content 
    </div>
    <textarea id="summernote" name="content"></textarea>
</div>
<div class="form-group col-sm-6">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
