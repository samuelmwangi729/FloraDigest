<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p><img src="{{ asset($news->image) }}" width="100px" height="100px" style="border-radius:50px"></p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Title:') !!}
    <p>{{ $news->title }}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Slug:') !!}
    <p>{{ $news->slug }}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Text:') !!}
    <p>{{ $news->text }}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Content:') !!}
    <p><?php echo $news->content;?></p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Tags:') !!}
    <p>{{ App\Models\NewsTags::find($news->category_id)->get()->first()->name}}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Publisher:') !!}
    <p><?php echo $news->published_by;?></p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $news->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $news->updated_at }}</p>
</div>

