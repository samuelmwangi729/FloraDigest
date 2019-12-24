<div class="table-responsive">
    <table class="table" id="brands-table">
        <thead>
            <tr>
                <th>Brand Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->brandName }}</td>
                <td>
                    {!! Form::open(['route' => ['brands.destroy', $brand->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('brands.show', [$brand->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('brands.edit', [$brand->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
