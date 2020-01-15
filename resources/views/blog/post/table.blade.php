<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Text</th>
        <th>Slug</th>
        <th>Content</th>
        <th>Category Id</th>
        <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @if(count($posts)==0)
           <tr>
               <td colspan="6">
                <div class="alert alert-danger">
                    <strong>No Posts Available</strong>
                </div>
               </td>
           </tr>
            @else
                @foreach($posts as $post)
                    <tr>
                    <td><img src="{{ asset($post->image) }}" alt="{{ $post->title }}" width="40px" height="40px" style="border-radius:50px"></td>
                    <td style="font-size:10px">{{ $post->title }}</td>
                    <td style="font-size:10px">{{ $post->slug }}</td>
                    <td style="font-size:10px">{{ $post->text }}</td>
                    <td style="font-size:10px">{{ $post->category->name }}</td>
                        <td>
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('posts.single', [$post->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
