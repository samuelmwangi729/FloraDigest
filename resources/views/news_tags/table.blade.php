<div class="table-responsive">
    <table class="table" id="newsTags-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($newsTags as $newsTags)
            <tr>
                <td>{{ $newsTags->name }}</td>
                <td>
                    {!! Form::open(['route' => ['newsTags.destroy', $newsTags->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('newsTags.show', [$newsTags->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('newsTags.edit', [$newsTags->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
