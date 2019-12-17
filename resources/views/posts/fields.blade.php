<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Title
    </div>
    <input type="text" class="form-control input-md" name="title" placeholder="Enter the title here">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Text 
    </div>
    <input type="text" class="form-control input-md" name="text" placeholder="Enter the title here">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Content 
    </div>
    <input type="text" class="form-control input-md" name="content" placeholder="Enter the title here">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Category_Id
    </div>
    <select class="form-control" name="category_id">
        @foreach($categories as $cat)
        <option>{{ $cat->name }}</option>
        @endforeach
    </select>
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Featured Image 
    </div>
    <input type="file" class="form-control" name="image" style="border: none">
</div>

<div class="form-group col-sm-6">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
