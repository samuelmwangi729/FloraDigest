<div class="table-responsive">
    <table class="table" id="productsCategories-table">
        <thead>
            <tr>
                <th>Category Name</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productsCategories as $productsCategories)
            <tr>
                <td>{{ $productsCategories->name }}</td>
                <td>
                    {!! Form::open(['route' => ['productsCategories.destroy', $productsCategories->name], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productsCategories.show', [$productsCategories->name]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productsCategories.edit', [$productsCategories->name]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
