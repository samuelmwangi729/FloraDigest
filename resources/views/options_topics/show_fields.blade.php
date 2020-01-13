<!-- TOpicName Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Topic Name:') !!}
    <p>{{ $optionsTopic->topicName }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $optionsTopic->created_at->toFormattedDateString() }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $optionsTopic->updated_at->toFormattedDateString() }}</p>
</div>

