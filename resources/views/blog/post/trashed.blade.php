@extends('layouts.hsidebar')

@section('content')
@if($posts->count()==0)
<div class="alert alert-danger">
    <strong><i class="fa fa-exclamation-circle"></i>Error!!!</strong> No Posts Trashed
    <a href="#" class="close" data-dismiss="alert" style="color:white">&times</a>
    
</div>
@endif
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