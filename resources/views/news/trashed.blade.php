@extends('layouts.hsidebar')
@section('content')
<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Text</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tnews as $news)
            <tr>
                <td><img src="{{ $news->image }}" style="border-radius:40px" width="75px" height="75px"></td>
                <td>{{ $news->title }}</td>
                <td>{{ $news->slug }}</td>
                <td>{{ $news->text }}</td>
                <td>
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.restore', [$news->slug]) }}" title="restore" class='btn btn-success btn-xs'><i class="fa fa-recycle"></i></a>
                        <a href="{{ route('news.delete', [$news->slug]) }}" title="Permanently Delete" class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
