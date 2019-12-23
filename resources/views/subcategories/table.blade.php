<div class="table-responsive">
    <table class="table" id="subcategories-table">
        <thead>
            <tr>
                <th>Main Category</th>
                <th>Sub Category</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subcategories as $subcategories)
            <tr>
                <td>{{  App\Models\ProductsCategories::where('id',$subcategories->mainCategory)->get()->first()->name  }}</td>
                <td>{{ $subcategories->subcategoryName }}</td>
                <td>
                    {!! Form::open(['route' => ['subcategories.destroy', $subcategories->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('subcategories.show', [$subcategories->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('subcategories.edit', [$subcategories->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
