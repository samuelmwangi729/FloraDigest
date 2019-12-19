<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Title
    </div>
    <input type="text" class="form-control input-md" name="title" value="{{ $post->title }}" placeholder="Enter the title here">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Text 
    </div>
    <input type="text" class="form-control input-md" name="text" value="{{ $post->text }}" placeholder="Enter the title here">
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Category
    </div>
    <select class="form-control" name="category_id">
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}"
            @if ($post->category_id ==$cat->id)
                selected                
            @endif
            
            >{{ $cat->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group col-sm-6">
    <div class="label-control text-bold">
        Tags 
    </div>
    @foreach($tags as $tag)
    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
    @foreach($post->tags as $t)
    @if($t->id ==$tag->id)
        checked
    @endif
    @endforeach
    
    >{{ $tag->tag}}
    @endforeach
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Featured Image 
    </div>
    <input type="file" class="form-control text-center"  name="image">
</div>
<!-- Title Field -->
<div class="form-group col-sm-12">
    <div class="label-control text-bold">
        Content 
    </div>
    <textarea id="summernote" name="content">{{ $post->content }}</textarea>
</div>
<div class="form-group col-sm-6">
    <button type="submit" class="btn btn-primary">Update</button>
</div>
