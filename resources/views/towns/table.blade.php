<div class="table-responsive">
    <table class="table" id="towns-table">
        <thead>
            <tr>
                <th>County</th>
                <th>Town</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($towns as $town)
            <tr>
                <td>{{ App\Models\County::find($town->county_id)->get()->first()->county }}</td>
                <td>{{ $town->town }}</td>
                <td>
                    {!! Form::open(['route' => ['towns.destroy', $town->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('towns.show', [$town->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('towns.edit', [$town->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
