<div class="table-responsive">
    <table class="table" id="counties-table">
        <thead>
            <tr>
                <th>County Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($counties as $county)
            <tr>
                <td>{{ $county->county }}</td>
                <td>
                    {!! Form::open(['route' => ['counties.destroy', $county->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('counties.show', [$county->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('counties.edit', [$county->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
