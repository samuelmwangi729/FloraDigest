<!-- Name Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Category Name:') !!}
    <p>{{ $productsCategories->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productsCategories->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productsCategories->updated_at->toFormattedDateString() }}</p>
</div>

