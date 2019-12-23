<div class="table-responsive">
    <table class="table" id="politicsTags-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($politicsTags as $politicsTags)
            <tr>
                <td>
                    {{ $politicsTags->name }}
                </td>
                <td>
                    {!! Form::open(['route' => ['politicsTags.destroy', $politicsTags->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('politicsTags.show', [$politicsTags->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('politicsTags.edit', [$politicsTags->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
