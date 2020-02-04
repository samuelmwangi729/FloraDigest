@extends('layouts.hsidebar')

@section('content')
<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Image</th>
        <th>Text</th>
        <th>Slug</th>
        <th>Content</th>
        <th>Category Id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
            <td><img src="{{ asset($post->image) }}" alt="{{ $post->title }}" width="90px" height="90px"></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->category_id }}</td>
            
            @if(Auth::check())
                <td>
                    <a href="{{ route('posts.restore',['id'=>$post->id]) }}" class="btn btn-xs btn-danger">Restore</a>
                </td>
            @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop