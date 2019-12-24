<div class="table-responsive">
    <table class="table" id="labels-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($labels as $label)
            <tr>
                <td>{{ $label->labelName }}</td>
                <td>
                    {!! Form::open(['route' => ['labels.destroy', $label->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('labels.show', [$label->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('labels.edit', [$label->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
