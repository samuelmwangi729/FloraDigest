<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Display Image:') !!}
    <p><img src="{{ asset($politics->image) }}" height="100px" width="100px" style="border-radius:120px"></p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Title:') !!}
    <p>{{ $politics->title}}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Text:') !!}
    <p>{{ $politics->text}}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Content:') !!}
    <p><?php echo $politics->content;?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $politics->updated_at->toFormattedDateString() }}</p>
</div>

