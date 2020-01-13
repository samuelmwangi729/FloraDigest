<div class="table-responsive">
    <table class="table" id="optionsTopics-table">
        <thead>
            <tr>
                <th>Topic Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($optionsTopics as $optionsTopic)
            <tr>
                <td>{{$optionsTopic->topicName}}</td>
                <td>
                    {!! Form::open(['route' => ['optionsTopics.destroy', $optionsTopic->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('optionsTopics.show', [$optionsTopic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('optionsTopics.edit', [$optionsTopic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
