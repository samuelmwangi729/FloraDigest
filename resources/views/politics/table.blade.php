<div class="table-responsive">
    <table class="table" id="politics-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>title</th>
                <th>Slug</th>
                <th>Text</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($politics as $politics)
            <tr>
                <td><img src="{{ asset($politics->image) }}" style="border-radius:70px" width="75px" height="75px"></td>
                <td>{{ $politics->title }}</td>
                <td>{{ $politics->slug }}</td>
                <td>{{ $politics->text }}</td>
                <td>
                    {!! Form::open(['route' => ['politics.destroy', $politics->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('politics.show', [$politics->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('politics.edit', [$politics->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
