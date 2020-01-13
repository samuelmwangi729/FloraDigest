<div class="table-responsive">
    <table class="table" id="opinions-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Topic</th>
                <th colspan="4">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($opinions as $opinion)
            <tr>
            <td>{{$opinion->title}}</td>
            <td>{{$opinion->topic}}</td>
                <td>
                    {!! Form::open(['route' => ['opinions.destroy', $opinion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('opinions.show', [$opinion->slug]) }}" class='btn btn-primary btn-xs'><i class="fa fa-eye"></i>View</a>
                        <a href="{{ route('opinions.edit', [$opinion->slug]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit"></i>Edit</a>
                       @if($opinion->status==0)
                       <a href="{{ route('opinions.approve', [$opinion->slug]) }}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-check"></i>Approve</a>
                       @endif
                        @if($opinion->status==1)
                        <a href="{{ route('opinions.disapprove', [$opinion->slug]) }}" class='btn btn-warning btn-xs'><i class="fa fa-times"></i>Disapprove</a>
                        @endif
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
