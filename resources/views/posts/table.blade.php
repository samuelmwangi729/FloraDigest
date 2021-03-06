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
        @foreach($posts as $post)
            <tr>
            <td><img src="{{ asset($post->image) }}" alt="{{ $post->title }}" width="90px" height="90px"></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->text }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->category_id }}</td>
            
            {{-- @if(Auth::check())
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            @endif --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
