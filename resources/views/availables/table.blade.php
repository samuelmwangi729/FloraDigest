<div class="table-responsive">
    <table class="table" id="availables-table">
        <thead>
            <tr>
                
                <th>Display Icon</th>
                <th>Title</th>
                <th>Topic</th>
                <th>Budget</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($availables as $available)
            <tr>
                <td><img src="{{ asset($available->displayImage) }}"  width="50px" height="50px" style="border-radius:50px"></td>
                <td>{{ $available->title }}</td>
                <td>{{ $available->topic }}</td>
                <td>{{ $available->budget }}</td>
                <td>
                    {!! Form::open(['route' => ['availables.destroy', $available->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('availables.show', [$available->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('availables.edit', [$available->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
