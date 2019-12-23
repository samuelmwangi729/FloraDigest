<div class="form-group col-sm-6">
    {!! Form::label('content', 'Category Name') !!}
    <select class="form-control" name="mainCategory">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" 
            >{{ $category->name }}</option>
            
        @endforeach
    </select>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Subcategory Name') !!}
    {!! Form::text('subcategoryName', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subcategories.index') }}" class="btn btn-default">Cancel</a>
</div>
