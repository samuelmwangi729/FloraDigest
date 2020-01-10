<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Title:') !!}
    <p>{{ $available->title }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Display Image') !!}<br>
    <img src="{{ asset($available->displayImage) }}"  width="100px" height="100px" style="border-radius:50px">
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Budget') !!}
    <p>{{ $available->budget}}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Topic:') !!}
    <p>{{ $available->topic }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Introduction Paragraph:') !!}
    <p>{!! nl2br($available->introParagraph) !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Conclusion Paragraph:') !!}
    <p>{!! nl2br($available->conclusionParagraph) !!}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Assignment File:') !!}
    <p><i class="fa fa-paperclip"></i><a href="{{ asset($available->AssignmentFile ) }}">Download</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Created At:') !!}
    <p>{{ $available->created_at->toFormattedDateString() }}</p>
</div>


