
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Name</label>
    <input type="text" class="form-control" name="productName" value="{{ $products->productName ?? '' }}">
</div>

<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Label</label>
    <input type="text" class="form-control" name="label" value="{{ $products->label ?? '' }}">
</div>

<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Original Price</label>
    <input type="number" class="form-control" name="originalPrice" value="{{ $products->originalPrice ?? '' }}">
</div>

<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">New Price</label>
    <input type="number" class="form-control" name="newPrice" value="{{ $products->newPrice ?? '' }}">
</div>

<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Display Image</label>
    <input type="file" class="form-control" name="image1">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Front View</label>
    <input type="file" class="form-control" name="image2">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Side View</label>
    <input type="file" class="form-control" name="image3">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product  Back View</label>
    <input type="file" class="form-control" name="image4">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Display Text</label>
    <input type="text" class="form-control" name="text" value="{{ $products->text ?? '' }}">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Category</label>
    <select class="form-control" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="col-sm-12 form-group">
    <div class="label-control text-bold text-center">
        Product Description 
    </div>
    <textarea id="summernote" name="Description">{{ $products->Description ?? '' }}</textarea>
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Sub-Category</label>
    <select class="form-control" name="subcategory_id">
        @foreach($subcategories as $subcategory)
        <option value="{{ $subcategory->id }}">{{ $subcategory->subcategoryName }}</option>
        @endforeach
    </select>
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Color</label>
    <select class="form-control" name="color">
        @foreach($colors as $color)
        <option value="{{ $color->id }}">{{ $color->colorName }}</option>
        @endforeach
    </select>
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Brand</label>
    <select class="form-control" name="brand">
        @foreach($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->brandName }}</option>
        @endforeach
    </select>
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product height</label>
    <input type="text" class="form-control" name="height" value="{{ $products->height ?? '' }}">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Weight</label>
    <input type="text" class="form-control" name="weight" value="{{ $products->weight ?? '' }}">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Width</label>
    <input type="text" class="form-control" name="width" value="{{ $products->width ?? '' }}">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Depth</label>
    <input type="text" class="form-control" name="depth"  value="{{ $products->depth ?? '' }}">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Expiry</label>
    <input type="text" class="form-control" name="expiry" value="{{ $products->expiry ?? '' }}">
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Status</label>
    <select class="form-control" name="status">
        <option value="0">Out of Stock</option>
        <option value="1">In Stock</option>
    </select>
</div>
<div class="col-sm-6 form-group">
    <label for="product name" class="label-control">Product Count</label>
    <input type="number" class="form-control" name="count" value="{{ $products->count ?? '' }}">
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
