<div class="table-responsive">
    <table class="table" id="topics-table">
        <thead>
            <tr>
                <th>Display Image</th>
                <th>Topic Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($topics as $topics)
            <tr>
                <td><img src="{{ $topics->displayImage }}" width="50px" height="50px" style="border-radius:30px"></td>
                <td>{{ $topics->name }}</td>
                <td>
                    {!! Form::open(['route' => ['topics.destroy', $topics->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('topics.show', [$topics->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('topics.edit', [$topics->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
