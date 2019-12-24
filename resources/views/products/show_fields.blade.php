<div class="col-sm-6">
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('Product Name ', 'Product Name:') !!}
    <p>{{ $products->productName }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Product Label') !!}
    <p>{{ $products->label }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Display Text:') !!}
    <p>{{ $products->text }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Color:') !!}
    <p>{{ App\Models\Color::where('id',$products->color)->get()->first()->colorName }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Price') !!}
    <p>{{ $products->newPrice }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    <div class="col-sm-6">
        {!! Form::label('created_at', 'SideView Image') !!}
        <p><img src="{{ asset($products->image1) }}" width="100px" height="100px"></p>
    </div>
    <div class="col-sm-6">
         {!! Form::label('created_at', 'BackView Image') !!}
        <p><img src="{{ asset($products->image2) }}" width="100px" height="100px"></p>
    </div>
</div>
</div>
<div class="col-sm-6">
    <!-- Created At Field -->
<div class="form-group">
    <div class="col-sm-6">
        {!! Form::label('created_at', 'Display Image') !!}
        <p><img src="{{ asset($products->image3) }}" width="100px" height="100px"></p>
    </div>
    <div class="col-sm-6">
         {!! Form::label('created_at', 'Front View Image') !!}
        <p><img src="{{ asset($products->image4) }}" width="100px" height="100px"></p>
    </div>
</div>
<!-- Created At Field -->
<div class="form-group text-center">
    {!! Form::label('created_at', 'category:') !!}
    <p>{{ App\Models\ProductsCategories::where('id',$products->category_id)->get()->first()->name }}</p>
</div>
<!-- Created At Field -->
<div class="form-group text-center">
    {!! Form::label('created_at', 'Sub Category:') !!}
    <p>{{ App\Models\Subcategories::where('id',$products->subcategory_id)->get()->first()->subcategoryName}}</p>
</div>
<!-- Created At Field -->
<div class="form-group text-center">
    {!! Form::label('created_at', 'Brand:') !!}
    <p>{{ App\Models\Brand::where('id',$products->brand)->get()->first()->brandName }}</p>
</div>
<!-- Created At Field -->
<div class="form-group text-center">
    {!! Form::label('created_at', 'Status:') !!}
    <p><?php if($products->status){
        echo "Out of Stock";
    }else{
        echo "In Stock";
    }?></p>
</div>
<!-- Created At Field -->
<div class="form-group text-center">
    {!! Form::label('created_at', 'Count:') !!}
    <p>{{ $products->count }}</p>
</div>
</div>
<div>
   <?php echo $products->Description;?>
</div>