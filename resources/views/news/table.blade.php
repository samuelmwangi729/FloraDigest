<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Slug</th>
                <th>Text</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $news)
            <tr>
                <td><img src="{{ $news->image }}" style="border-radius:40px" width="75px" height="75px"></td>
                <td>{{ $news->slug }}</td>
                <td>{{ $news->text }}</td>
                <td>
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$news->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('news.edit', [$news->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
